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
from sklearn.model_selection import train_test_split
from sklearn.model_selection import *
import copy
from sklearn.model_selection import GridSearchCV
import xgboost as xgb
from xgboost import plot_importance
from matplotlib import pyplot


import json


def confusion_matrix(rater_a, rater_b, min_rating=None, max_rating=None):
    """
    Returns the confusion matrix between rater's ratings
    """
    assert(len(rater_a) == len(rater_b))
    if min_rating is None:
        min_rating = min(rater_a + rater_b)
    if max_rating is None:
        max_rating = max(rater_a + rater_b)
    num_ratings = int(max_rating - min_rating + 1)
    conf_mat = [[0 for i in range(num_ratings)]
                for j in range(num_ratings)]
    for a, b in zip(rater_a, rater_b):
        conf_mat[a - min_rating][b - min_rating] += 1
    return conf_mat


def histogram(ratings, min_rating=None, max_rating=None):
    """
    Returns the counts of each type of rating that a rater made
    """
    if min_rating is None:
        min_rating = min(ratings)
    if max_rating is None:
        max_rating = max(ratings)
    num_ratings = int(max_rating - min_rating + 1)
    hist_ratings = [0 for x in range(num_ratings)]
    for r in ratings:
        hist_ratings[r - min_rating] += 1
    return hist_ratings


def quadratic_weighted_kappa(rater_a, rater_b, min_rating=None, max_rating=None):
    """
    Calculates the quadratic weighted kappa
    quadratic_weighted_kappa calculates the quadratic weighted kappa
    value, which is a measure of inter-rater agreement between two raters
    that provide discrete numeric ratings.  Potential values range from -1
    (representing complete disagreement) to 1 (representing complete
    agreement).  A kappa value of 0 is expected if all agreement is due to
    chance.
    quadratic_weighted_kappa(rater_a, rater_b), where rater_a and rater_b
    each correspond to a list of integer ratings.  These lists must have the
    same length.
    The ratings should be integers, and it is assumed that they contain
    the complete range of possible ratings.
    quadratic_weighted_kappa(X, min_rating, max_rating), where min_rating
    is the minimum possible rating, and max_rating is the maximum possible
    rating
    """
    rater_a = np.array(rater_a, dtype=int)
    rater_b = np.array(rater_b, dtype=int)
    assert(len(rater_a) == len(rater_b))
    if min_rating is None:
        min_rating = min(min(rater_a), min(rater_b))
    if max_rating is None:
        max_rating = max(max(rater_a), max(rater_b))
    conf_mat = confusion_matrix(rater_a, rater_b,
                                min_rating, max_rating)
    num_ratings = len(conf_mat)
    num_scored_items = float(len(rater_a))

    hist_rater_a = histogram(rater_a, min_rating, max_rating)
    hist_rater_b = histogram(rater_b, min_rating, max_rating)

    numerator = 0.0
    denominator = 0.0

    for i in range(num_ratings):
        for j in range(num_ratings):
            expected_count = (hist_rater_a[i] * hist_rater_b[j]
                              / num_scored_items)
            d = pow(i - j, 2.0) / pow(num_ratings - 1, 2.0)
            numerator += d * conf_mat[i][j] / num_scored_items
            denominator += d * expected_count / num_scored_items

    return 1.0 - numerator / denominator

# data
train = pd.read_csv('train.csv')
test = pd.read_csv('test.csv')

def breed(df):
    df.loc[df['Breed1'] == 307, 'Mixed_Breed1'] = 1
    df.loc[df['Breed1'] == 307, 'Mixed_Breed2'] = 1
    df.loc[df['Breed1'] != 307, 'Mixed_Breed1'] = 0
    df.loc[df['Breed1'] != 307, 'Mixed_Breed2'] = 0
    return df

#train=breed(train)
#test=breed(test)

# X, Y data
target = train.AdoptionSpeed
train.drop(['AdoptionSpeed'], axis=1, inplace=True)


def add_Sentiment(dataframe, path) :
    Sentiment_magitude = []
    Sentiment_score = []
    nf_count = 0

    for pet in dataframe.PetID:
        try:
            with open(path + pet + '.json', 'r',  encoding='UTF8') as f:
                sentiment = json.load(f)
                Sentiment_magitude.append(sentiment['documentSentiment']['magnitude'])
                Sentiment_score.append(sentiment['documentSentiment']['score'])

        except FileNotFoundError:
            nf_count += 1
            Sentiment_magitude.append(-1)
            Sentiment_score.append(-1)

    #print(nf_count)
            
    dataframe.loc[:, 'Sentiment_magitude'] = Sentiment_magitude
    dataframe.loc[:, 'Sentiment_score'] = Sentiment_score

    return dataframe

add_Sentiment(train, '/train_sentiment/')
add_Sentiment(test, '/test_sentiment/')

def add_meta(dataframe, path):
    
    meta_labelscore=[]
    meta_domcolor=[]
    meta_vertexconf=[]

    nf_count = 0
    for pet in dataframe.PetID:
        path2=path+pet+'-1.json'
        try:
            with open(path2, 'r',  encoding='UTF8') as f:
                metadata = json.load(f)
                try :
                    meta_labelscore.append(metadata['labelAnnotations'][0]['score'])
                    meta_domcolor.append(metadata['imagePropertiesAnnotation']['dominantColors']['colors'][0]['score'])
                    meta_vertexconf.append(metadata['cropHintsAnnotation']['cropHints'][0]['confidence'])
                except:
                    meta_labelscore.append(-1)
                    meta_domcolor.append(-1)
                    meta_vertexconf.append(-1)

        except FileNotFoundError:
            #print("cannot found"+path2+"\n")
            nf_count += 1
            meta_labelscore.append(-1)
            meta_domcolor.append(-1)
            meta_vertexconf.append(-1)

    #print(nf_count)
            
    dataframe.loc[:, 'meta_labelscore'] = meta_labelscore
    dataframe.loc[:, 'meta_domcolor'] = meta_domcolor
    dataframe.loc[:, 'meta_vertexconf'] = meta_vertexconf

    return dataframe

add_meta(train, 'train_metadata/')
add_meta(test, 'test_metadata/')


# droping feature(9개)
#drop_feature = ['Name', 'Color1', 'Color2', 'Color3', 'RescuerID', 'Description', 'PetID']
drop_feature = ['Name', 'RescuerID', 'Description', 'PetID']

 

for feature in drop_feature :
    train.drop([feature], axis=1, inplace=True)

for feature in drop_feature :
    test.drop([feature], axis=1, inplace=True)

# one-hot-encoding feature(12개)
one_hot_encoding_feature = []


con = pd.concat([train, test], keys=['train', 'test',])

for feature in one_hot_encoding_feature :
    con = pd.get_dummies(con, columns = [feature], prefix=feature)


#print("train : ",con.loc[['train']])


train = pd.DataFrame()
test = pd.DataFrame()
train = con.loc[['train']]
test = con.loc[['test']]

#normalize
mean = train.mean(axis=0)
train -= mean
test -= mean

std = train.std(axis=0)
std[std==0]=1
train /= std
test /= std

print(train.head(0))
print(test.head(0))

#print(train["meta_vertexconf"],train["meta_labelscore"],train["meta_domcolor"])
#print(test)

#train/test data split
(x_train, x_test, y_train, y_test) = train_test_split(train, target, test_size=0.2, random_state=1)
print("data loaded")
#print(train.head(0))
#print(test.head(0))

#print(train.join(target).corr()["AdoptionSpeed"].sort_values(ascending=False))

for i in range(100,131):
    clf = xgb.XGBClassifier(max_depth=6, learning_rate=0.1, n_estimators=i,
                          silent=True, objective='binary:logistic',
                          booster='gbtree',
                          n_jobs=4, nthread=None, gamma=0, min_child_weight=11,
                          max_delta_step=0, subsample=0.8, colsample_bytree=1,
                          colsample_bylevel=1, reg_alpha=0, reg_lambda=1,
                          scale_pos_weight=1, base_score=0.5, random_state=0,
                          seed=None, missing=None)


    clf.fit(x_train,y_train)

    #print(clf.best_params_)    
    #print(clf.score(x_train, y_train))      
    #print(clf.feature_importances_)
    # plot
    #plot_importance(clf)
    #pyplot.show()

    print("XGBoost",i)
    print("train : ", clf.score(x_train, y_train))

    print("test : ", clf.score(x_test, y_test))
    y_pred = clf.predict(x_test)

    y_out=clf.predict(test)

    print("cohen kappa score :", cohen_kappa_score(y_pred, y_test, weights='quadratic'))
        #print()

    print(quadratic_weighted_kappa(y_pred,y_test))

df=pd.DataFrame(y_out)
sub=pd.read_csv('sample_submission.csv')
sub["AdoptionSpeed"]=df
#print(sub)
sub.to_csv('submission.csv',index=False)
