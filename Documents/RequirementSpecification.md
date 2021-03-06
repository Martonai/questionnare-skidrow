# Requirement Specification

## 1.Overview
The customer want a web applicaton, where he can make his own questions, and finally he can save and see the results in a database.
The goal of this applicaton to examine and assess people knowledge about many topics.
The application has to be connected to a realtime database, beacuse customer want to save the results to this database.
For the questions, the application has to read from an csv file, and application doesn't need an administration site where he can upload questions.
Also don't needs a user-registraion interface, where users have to add there username, a valid email address and a password.
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
The application is not provides login interface, with this too make faster the fill of the questionnaire and user can contact with admins if something went wrong.
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
Nowadays the paper-based system is obsolete and not redundant as well. Paper-based task management is obsolete in the 21st century. That's a lot printing and printing costs. In a paper based questionnaire people have to spend a lot of time to evaluate the questionnaires
and they often make a mistake which is not a good system at all. Furthermore people sometimes mess up the questionnaire by filling the test incorrectly like putting two marks at a choose one question. Or circle a text instead of putting and X in the checkbox. It is possible
prevent these mistakes with a web based solution and this is our goal. The users often don't complete the survey because they need a registration to it.

## 7.Required business process
The user don't need to register to the page so this way probably mroe people will fill the questionnaire. Furthermore they don't have to type any of their answers because there will be base answers to each question. It will be a
lot more user friendly and they can't do that much mistakes thanks to the strict rules we use. If the user didn't fill every question the system will give a Warning message. When the user did all the questions he/she can ubmit their answers which will be saved in an excel.


## 8.List of requirements
| Model  | ID | Name | Version | Explantation |
| ------------- | ------------- | ------------- | ------------- | ------------- |
| Entitlement | K01 | Start survey | 1.0 | Click on the Start survey and the page will bring up all of the questions.
| Task type | K02 | Survey | 1.0 | There are several questions and multiple answers to them where the user must choose one or more answer to each question. Based on what question says. 
| Entitlement | K03 | Submit button | 1.0 | Submit button to submit the answers. 
| Entitlement | K04 | Help button | 1.1 | Help button is where the users can inform how they will need to fill the survey.
| Task type | K05 | Test | 1.1 | There are several questions and multiple answers to them where the user must choose one or more answer to each question. Based on what question says. We are going to diced based on these answers if we accept the user Survey answers. |



## 9.Reports
This is questionnaire where users can share their opinion about the application:

1. Are you satisfied with this application?
2. Would you change something about this application?
3. How would you rate the application on a scale 1 to 5?
4. Would you recommend this application to others?

## 10.Glossary

1. Suvery: Survey is a little questionnaire, where users knowledge will be assested before they can go to the real questionnaire
2. Web application: Guests can join throught a web-browser, and run the application.
3. Integrity: The program won't be changed
4. Availability: The program will be available everytime (expect if it is under a maintanance)
5. Confidentiality: The program can be safe and trustful.