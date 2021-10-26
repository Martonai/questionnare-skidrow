#Requirement Specification

## 1.Overview
The customer want a web applicaton, where he can make his own questions, and finally he can save and see the results in a database.
The goal of this applicaton to examine and assess people knowledge about many topics.
The application has to be connected to a realtime database, beacuse customer want to save the results to this database.
For the questions, the application has to read from an csv file, and application doesn't need an administration site where he can upload questions.
But, needs a user-registraion interface, where users have to add there username, a valid email address and a password.
There are two type of questions.
First is a survey. This survey has a few questions, about the actual topics. The result of this survey has to save to a databse too.
Second is the topic's questions. It has more questions, and these questions has to be saved in a database.
There are no pre-defined questions, the application has to be basic, and can be used for any questions.


## 2.Current situation
From the beginning, most questionnaires in the world are boring, long, old-fashioned, they don’t get results immediately after 
filling out the questionnaire, or they don’t get it at all. Most people never fill out any questionnaires in their lifetime 
as they are not considered important enough or boring and a waste of time. Most surveys are packed with ads and inappropriate things, 
causing most people to step back from filling out at first glance or distract people from filling out the questionnaire. 
Based on personal experience, the style and appearance of most questionnaires are quite repulsive. 
They do not pay enough attention to it, although it is at least as important as the questionnaire itself.
Even in today’s world, there are a lot of questionnaires in paper form. 
Yet in today’s modern world, it is a great opportunity to have a questionnaire easily accessible and compatible with all devices.

## 3.Dream System
The aim of the project is to create a questionnaire that will attract people. 
This can be achieved both with the style of the page and with the clarity and transparency of that questionnaire. 
In addition, we design an easy-to-use system that any age group can easily use every day. 
here will be no unnecessary advertisements or any distractions in our project that could distract users from the questionnaire. 
After completing the questionnaire, users will receive some form of feedback. 
This can be the average of the aggregate responses of the other respondents, or you can review your own responses.
We want people to think that after completing the questionnaire, they think they would like to participate in completing additional questionnaires.

## 4.Functional requirements
The application provides login interface and user can contact with admins if something went wrong.
users can see the current status of each questionnaire, which can be:

1. ready to fill
2. under completion
3. completed

## 5.System laws, standards, recommendations
This application is not open source and cannot be distributed for money. 
In addition, this application exclude any other copy version. The application can be used anywhere. 
This app is built on three main pillars:

1. Integrity
2. Availability
3. Confidentiality

## 6.Current business process model

## 7.Required business process

## 8.List of requirements
| Model  | ID | Name | Version | Explantation |
| ------------- | ------------- | ------------- | ------------- | ------------- |
| Permission | K01 | Regist interface | 1.0 | The user can registration with his/her email and with his/her password. |
| Modification | K02 | Login interface | 1.0 | The user can login to the application with his/her email and with the generated password. |
| Modification | K03 | | Create user | K03 | Login interface | 1.0 | Creating user by adding text to the username field and adding password. |

## 9.Reports

## 10.Glossary
