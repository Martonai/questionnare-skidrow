# Function Specification

## 1.Overview

We are building an application which provides a basic questionnaire for any topics.
Customer can type his own questions and the application will show it for the users.
Users can register to this site, and they have to fill a survey first to assess their knowledge. Then
they can fill the actual questionnaire about any topics.
This application will be a web application with a realtime database, and it's written on PHP langugage.
This PHP application read the questions from an CSV file.
There are two types of questions.
1. Survey questions
2. Topic questions

Survey questions are about the topic questions, but these questions more like an exam, users has to fill it, before they
can fill the real questionnaire.
This survey has less questions then the real questionnaire.
Topic questions are about the actual topic questions.

So, there is no pre-defined questions, the customer will add questions or delete them.

There is no need an administrative interface for upload questions, and uneccessary to save questions in database, even so the results of questionnaire.
Results are for users personally.
## 2.Current situation

## 3.List of requirements

## 4.Current buisness process model

## 5.Required business process

## 6.Use cases

## 7.Correspondence, how the use cases are covered a requirements

## 8.Screen plans

## 9.Scenario
There is 3 main charachter of this application
* The running web application
* The users, who can fill the survey and the questionnaire
* Database, which can store the results of the questionnaire

The first screen will be a registration interface, where users can register.
After a succesfull registration, users has to login.
After succesfull login, users can complete a short survey, after they can complete the questionnaire.
If users has completed the survey or the questionnaire they can submit the answers, and the PHP application will save the result to a database.


## 10.Function-requirements compilance

## 10.Glossary
