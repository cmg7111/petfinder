# This Python 3 environment comes with many helpful analytics libraries installed
# It is defined by the kaggle/python docker image: https://github.com/kaggle/docker-python
# For example, here's several helpful packages to load in 

# Input data files are available in the "../input/" directory.
# For example, running this (by clicking run or pressing Shift+Enter) will list the files in the input directory



# Any results you write to the current directory are saved as output.

import numpy as np
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn import tree
from sklearn.ensemble import RandomForestClassifier
from sklearn.ensemble import GradientBoostingClassifier
from sklearn.neighbors import KNeighborsClassifier
from sklearn.svm import LinearSVC
from sklearn.linear_model import LogisticRegression
from sklearn.metrics import cohen_kappa_score
from sklearn.preprocessing import OneHotEncoder
import copy


import json


# data
data = pd.read_csv('train.csv')
input = pd.read_csv('test.csv')


# X, Y data
x_data = data.drop(columns = ['AdoptionSpeed'])
y_data = data.AdoptionSpeed

x_input = input


# add 'Sentiment'
Sentiment_magitude = []
Sentiment_score = []
nf_count = 0

for pet in x_data.PetID:
    try:
        with open('train_sentiment/' + pet + '.json', 'r',  encoding='UTF8') as f:
            sentiment = json.load(f)
        Sentiment_magitude.append(sentiment['documentSentiment']['magnitude'])
        Sentiment_score.append(sentiment['documentSentiment']['score'])

    except FileNotFoundError:
        nf_count += 1
        Sentiment_magitude.append(-1)
        Sentiment_score.append(-1)
        
x_data.loc[:, 'Sentiment_magitude'] = Sentiment_magitude
x_data.loc[:, 'Sentiment_score'] = Sentiment_score


# droping feature(9개)
drop_feature = ['Name', 'Color1', 'Color2', 'Color3',
                'RescuerID', 'Description', 'PetID']

for feature in drop_feature :
    x_data.drop([feature], axis=1, inplace=True)


# one-hot-encoding feature(12개)
one_hot_encoding_feature = [ 'Type', 'Breed1', 'Breed2', 'Gender', 'MaturitySize', 'FurLength',
                             'Vaccinated', 'Dewormed', 'Sterilized', 'Quantity', 'Health', 'State']

for feature in one_hot_encoding_feature :
    x_data = pd.get_dummies(x_data, columns = [feature], prefix=feature)


#normalize
mean = x_data.mean(axis=0)
x_data -= mean

std = x_data.std(axis=0)
x_data /= std

#----------------------------
Sentiment_magitude = []
Sentiment_score = []
nf_count = 0
for pet in x_input.PetID:
    try:
        with open('test_sentiment/' + pet + '.json', 'r',  encoding='UTF8') as f:
            sentiment = json.load(f)
        Sentiment_magitude.append(sentiment['documentSentiment']['magnitude'])
        Sentiment_score.append(sentiment['documentSentiment']['score'])

    except FileNotFoundError:
        nf_count += 1
        Sentiment_magitude.append(-1)
        Sentiment_score.append(-1)
        
x_input.loc[:, 'Sentiment_magitude'] = Sentiment_magitude
x_input.loc[:, 'Sentiment_score'] = Sentiment_score


# droping feature(9개)
drop_feature = ['Name', 'Color1', 'Color2', 'Color3',
                'RescuerID', 'Description', 'PetID']

for feature in drop_feature :
    x_input.drop([feature], axis=1, inplace=True)


# one-hot-encoding feature(12개)
one_hot_encoding_feature = [ 'Type', 'Breed1', 'Breed2', 'Gender', 'MaturitySize', 'FurLength',
                             'Vaccinated', 'Dewormed', 'Sterilized', 'Quantity', 'Health', 'State']

for feature in one_hot_encoding_feature :
    x_input = pd.get_dummies(x_input, columns = [feature], prefix=feature)



#normalize
mean = x_input.mean(axis=0)
x_input -= mean

std = x_input.std(axis=0)
x_input /= std



missing_cols = set( x_data.columns ) - set( x_input.columns )

for c in missing_cols:
    x_input[c] = 0
x_input = x_input[x_data.columns]
#train/test data split
(x_train, x_test, y_train, y_test) = train_test_split(x_data, y_data, test_size=0.2, random_state=1)


rnd=0
train_objs_num = len(x_train)
dataset = pd.concat(objs=[x_train, x_input], axis=0)
dataset = pd.get_dummies(dataset)
x_train = copy.copy(dataset[:train_objs_num])
x_input = copy.copy(dataset[train_objs_num:])
print(x_train.head(0))
print(x_input.head(0))

clf = GradientBoostingClassifier(loss='deviance', learning_rate=0.1, n_estimators=1, subsample=0.8, 
    criterion='friedman_mse', min_samples_split=10, min_samples_leaf=1, min_weight_fraction_leaf=0.0, max_depth=10, 
    min_impurity_decrease=0.0, min_impurity_split=None, init=None, random_state=True, max_features=None, verbose=1, 
    max_leaf_nodes=None, warm_start=False, presort='auto', validation_fraction=0.1, n_iter_no_change=None, tol=0.0001)
clf.fit(x_train, y_train)

#print("GBM")
#print("train : ", clf.score(x_train, y_train))

#print("test : ", clf.score(x_test, y_test))
y_pred = clf.predict(x_test)
x_input=x_input.fillna(x_input.mean())
y_out=clf.predict(x_input)

df=pd.DataFrame(y_out)
#print(df)
#print("cohen kappa score :", cohen_kappa_score(y_pred, y_test, weights='quadratic'))
#print()

sub=pd.read_csv('sample_submission.csv')
sub["AdoptionSpeed"]=df
#print(sub)
sub.to_csv('submission.csv',index=False)
