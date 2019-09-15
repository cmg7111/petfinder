# 보호소 반려견 입양시기 예측 （2018.12.31~2019.02.21）
* * *
#### Co-op Project (Winter 2018 - 2019) / 산학협력 프로젝트 with GIT(Goodmorning Information Technology Co. Ltd.)

### Petfinder  
보호소 애완동물의 입양시기 예측  
애완동물의 신상정보를 기반으로 다양한 기계학습 모델(Logistic Regression, SVM, K-neighbors, Random Forest, XGBoost)을 이용하여 입양 시기를 예측합니다.  

#### 역할
1） 데이터 전처리 （Python Pandas）  
2） 백엔드 서버 구성（AWS EC2, MySQL, Apache）  
3） 프론트엔드 제작 （HTML5, PHP, JS）  

### System Architecture
![](https://github.com/cmg7111/cmg7111.github.io/blob/master/petfinder_architecture.png?raw=true)

* * *
### 기능
#### 데이터 전처리(Pandas/Numpy 패키지)
1) Categorical Data의 경우 One-Hot Vector로 전처리  
2) Quantitative Data의 경우 (Data-평균)/표준편차  

#### 예측(Scikit-learn)
1) Linear SVM 이용  
2) K-neighbors 이용  
3) Logistic Regression 이용  
4) Random Forest 이용  
5) XGBoost 이용  

![](https://github.com/cmg7111/cmg7111.github.io/blob/master/petfinder_result.png?raw=true)

#### 최종 예측
1) 각 모델 별 예측결과 출력
2) 가장 많은 예측결과 이용 것으로 다수결 결정

![](https://github.com/cmg7111/cmg7111.github.io/blob/master/petfinder_web.png?raw=true)


