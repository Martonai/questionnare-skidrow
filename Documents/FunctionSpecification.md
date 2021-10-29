# Function Specification

## 1.Overview

We are building an application which provides a basic questionnaire for any topics.
Customer can type his own questions and the application will show it for the users.
Users don't need to register to this site they can reach the page rigth away. They have to fill a survey first to assess their knowledge. Then
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
The customer wants to expand the availability of their questionnaires so that as many people as possible can easily fill in their questionnaires.
Customer had ordered a well-built system, which is available throught web. 
They used a paper based solution before but they quickly realized that it is not really effective. 
So they started to search for a solution that helps them in this situation. 
They ordered the production of a new system, which via the Internet using modern solutions works.
The XXI. century requires that all this must be available on the network, accordingly the website must be available to the customer to release.

## 3.List of requirements
| Model  | ID | Name | Version | Explantation |
| ------------- | ------------- | ------------- | ------------- | ------------- |
| Modification | K02 | Survey        | 1.0 | Questiones about survey
| Modification | K03 | Questiones    | 1.0 | Questiones about the questionnaire	
| Modification | K04 | Submit button | 1.0 | Create submit button to submit the answers. |
| Modification | K05 | Dark mode | 1.1 | Changes the web theme. The background color becames dark and the texts become light |

## 4.Current buisness process model
Nowadays, questionnaires are doesn't assess people knowledge about the topics.
They just fill the questionnaire, and somebody even don't know nothing about the topic.
Also, most of questionnaires are requires some registration, but not this one!
Yes, this one is a non-register web application, where isn't required to login, just fill the survey, then fill the questionnaire.
Simple, but powerful.
Furthermore, most of questionnaires are not save the results to a database, but this one.



## 5.Required business process
Building a completely easy-to-use web application, where people can complete questionnaires about any topics which is given by the admin of the web application.
Also, the results will save in a database, beacuse the customer want to see the results of each questionnaires.
This application is universal, and a basic system, and for this reason, the customer can make his own questions.



## 6.Use cases

## 7.Correspondence, how the use cases are covered a requirements
1. The  web application is created to include the administration, which will be accessed by entering the system by entering a username / password. 
These will provide the main functions of the system.

2. On the site you will be able to choose from many questionnaires to fill out, which we will 
solve in a modern and easily transparent style.

3. Within this, users will be able to see the topic of the questionnaires, their exact address, 
and the approximate time required to complete them.

4. When building the web application, we take care to create a platform-independent, robust operation, 
so we check the correctness of our code.

5. The managed data will be stored in a database. By using the database, we ensure the extensibility of the data, 
with which we can easily add new functions to the system afterwards.

## 8.Screen plans

## 9.Scenario
There is 3 main charachter of this application
* The running web application
* The users, who can fill the survey and the questionnaire
* Database, which can store the results of the questionnaire

The first screen will be a home page where the user contributor have to click on the Quiestionnaire.
After clicking on the questionnaire, users can complete a short survey, after they can complete the questionnaire.
If users has completed the survey or the questionnaire they can submit the answers, and the PHP application will save the result to a database.

## 10.Function-requirements compilance
| ID  | Version | Requirement | Function |
| ------------- | ------------- | ------------- | ------------- |
| 01 | 1.0 | Read from csv        |  PHP application read the questions from a csv file
| 02 | 2.0 | Fill survey    |  People has to fill a quick survey	
| 03 | 3.0 | Fill questionnaire | People can fill the questionnaire |
| 04 | 4.0 | Save results to a database | Results will be saved to the database |


## 10.Glossary
