# System plan

## 1.System purpose
The purpose of the application is to that users can easily fill a Questionnaire without the need of the registration. The interface need to be user friendly which means should be easy to use.
The user can not make big mistakes thanks to the radio buttons and checkboxes. The system operator assign an excel to the web which will include the questions and answers to the questionnaire.
When the user finish the questionnaire and click on the submit button his/her answers will be saved in another excel based on if he/her was able to properly complete the first test questionnaire.
The system runs on a web platform.


## 2.Project plan
| Function  | Task | Priority | Estimation | Elapsed time | Reamining time |
| ------------- | ------------- | ------------- | ------------- | ------------- | ------------- |
| Requirement specification | Make it done | 1 | 10 | 20 | 10 |
| Function specification | Make it done | 1  | 10 | 20	| 10 |
| System plan | Make it done | 1 | 10 | 20 | 10 |
| Data storage | Database planning | 1 | 10 | 20 | 10 |
| Source code  | Read from csv and connect to database, then show for the users | 1 | 10 | 20 | 10 |

## 3.Business process model
![Business process model](https://github.com/Martonai/questionnare-skidrow/blob/main/Pictures/BusinessPlan_model.png)

### Business users
The system can be used without registration, and sing in. So, thanks to this, every users has been handled with equals.
Every user is supposed to fill the survey, before the questionnaire.
After that, when they have filled survey already, they can fill the questionnaire.
They have to submit their answers with a submit button, after that, they will be finished.

### Business process
No registration process.
No login process.
Fill suvey.
Fill questionnaire.
Submit button after filled every answer.

### Buisness process for guest users
They are going to fill a questionnaire, where their knowledge will be assested.
So, they have to fill a little survey about the topic, and after that, they will see the questionnaire itself.
They have to answer for every question, or else they will not be able to press the submit button.
After that, the site will say thank for the filling.

### Business process for Admin/Customer
He has access to the csv file, from where the questionnaire will read the questions.
He is able to write new questions, or delete the old, useless ones.
Moreover, he has the access to the database, where the results we be saved.
Finally, he can read the results from database.


## 4.Requirements

### Non Functional Requirements:

The product requirements
Usability requirements: The created product should be easy to learn for new users and should only require minimal IT knowledge.
Reliability follow-ups: The system to be developed accesses a database through a web interface. 
Competing access to the database is ensured and it cannot be brought into an inconsistent state under normal use.
Efficiency/ Performance: The system should be capable of dealing with a maximum amount of 2000 people based on the company. 
Furthermore the product size could not reach the 1GB.
	
### Organizational requirements

Delivery requirements: The software will be delivered by the date specified in the contract, 
otherwise the customer will be entitled to the penalty in the contract.
Implementation requirements: The program is installed for web specified in the contract, 
ready for use by users, a minimum amount of data is uploaded to the database about the questions.
Standardization requirements: The relevant standardization criteria can be found in the 
section Legal requirements, standards.


### Laws, Rules:
 
Act LIV of 2018 on the protection of trade secrets
Act CCXXII of 2015 on general rules for electronic administration and trust services
Act LXVI of 1995 on public documents, public archives and the protection of private archives
73/2018 (IV. 20.) Gov. Decree on the Local Public Service Information System
187/2015 (VII.13.) Gov. Regulation is a regulation of the authorities responsible for the security oversight of electronic information systems,
and the responsibilities and powers of the Information Security Supervisor, as well as the use of closed electronic information systems fixing.
335/2005 (XII. 29.) Gov. Regulation on general requirements for the management of documents by bodies with a public service mission


## 5.Functional plan
### System characters
* System operator
* User contributor

### System usage cases and their run-offs:

SYSTEM OPERATOR:
*Have access to view the excel table.
*Can modify the excel.
*Able to assign the excel to the web.

USER CONTRIBUTOR:
*Able to open the questionnaire.
*Can change their answers via checkboxes and radio buttons.
*Can Submit their answers.

### Menu hierarchy:

*Questionnaire
*Help


## 6.Physical environment
It will be displayed on a web interface. The application use MySQL database.
Developer enviroments:

Visual Studio Code
PhPmyAdmin
dbdiagram.io

Programming languges:
PhP


The application has to support every browser (expect interntet explorer), beacuse we don't know which
browsers are used by each users.
Application doesn't need an administration interface, where the customer can upload his questions.

Develeper environments:

* Visual Studio Code
* PhPMyAdmin (later a realtime database)
* dbdiagram.io

Programming languages

* Javascript (with Vue.js framework)
* PHP (with codeigniter framework)
* SQL 

## 7.Abstract domain model

## 8.Architectural plan
Frontend:

The design of the application is developed by Visual Studio Code and written by CSS.

Backend:

The system requires a database server, in this case we use MySql.
We use php language for the development.
Codeigniter is the framework.


## 9.Database plan

![Database Plan](https://github.com/Martonai/questionnare-skidrow/blob/main/Pictures/db_v01.drawio.png)

### Questionnaire table

**Title**: The title of the questionnaire it is just a key to the questionnaire.

**NameOfSurvey**: NameOfSurvey is the header of the survey which will be seen on the webiste

**Description**: It is all about what the questionnaire is about briefly described.

**ReleaseDate**: Release date of the survey.

**Version**: Version of the survey to know if it was updated.

### Questions table

**ID**: Primary key of the questions.

**Question**: The question is a text which will be one of the question in the survey.

**Type**: Type of the question could be to possible types test or main. The test questions will give the user a score 1 or zero based on if the answer is right or not. Only the test quiestions have right answers in the TestQuestionChoice table.
The main questions do not have any right answers it is just based on the user preference.

### TestQuestionChoice table

**ID**: Primary key of the TestQuestionChoice.

**QuestionID**: It is a foreign key to connect TestQuestionChoice to Questions.

**AnswerID**: It is a foreign key to connect TestQuestionChoice to Answers which will tell us which was the right answer to the test question.

### Answers table

**ID**: Primary key for the Answers table.

**Answer**: The will be one of the answer to a question. The answers could be choosed my the user.

**QuestionID**: QuestionID is used to connect answers to a question. A question could have several answer choices.

### Submitted table

**ID**: Primary key for the submitted table.

**T_Answers**: T_Answers are the test answers the user has choosen. There will be several T_Answers based on have many questions does the questionnaire have.

**Q_Answers**: Q_Answers are the test answers the user has choosen. There will be several Q_Answers based on have many questions does the questionnaire have.

**Acceptable**: Acceptable is a value which will tell us if the user failed on teh test or not. If the test is failed there will be a 0 of the the test is succeeded then there will be a 1.

## 10.Implemenentation plan
It will be written in Visual Studio Code. 
These technologies are written in separate files as much as possible for easier transparency. 
You will be able to use the Backend section running, so you can upload data to the Database.

The Web interface will be written mainly in HTML, CSS, and Javascript.
These technologies are prepared as much as possible in separate files and
we will attach to each other better transparency, easier changeability,
and easier expansion.


Wherever possible, it is necessary to test during development to ensure that methods work properly. 
The methods are ready when the test cases run without error methods.

## 11.Test plan
### Testing procedures

### Unit test
	
Whenever possible, it is neccessary to test during development to ensured
that methods are works properly. The methods are ready when the test cases run 
without errors.
		
### Alfa test
		
The primary purpose of the alfa test is to make the existing functions different 
testing for compatibility with browsers on PCs and on Mobile phones.
The procedure is successfully if the functions works properly each browsers on each devices.
	
### Beta test
	
The beta test is not performed by developers, it's being tested by users.
Browsers, which will used during the test
		
* Opera
* Mozilla Firefox
* Google Chrome
* Safari
		
Devices, which will used during the test
		
* Personal Computer with windows
* Android devices
* iOS devices
		
The application will be responsive in each devices
		
### Functions, which has to be tested
	
Customer can upload new questions and survey questions from an csv file.
So PHP application has to read from a csv application.
Users can fill the survey and the questionnaire.
Application can connect to a database, and can save the results to this database.
## 12.Installation plan
-Admin will have the excel sheet, from where the PHP code can read the questions.
-Admin will send the link.
-Go up to the website and fill out the survey.
## 13.Maintenance plan
We has to keep up-to-date the application.
Also has to provide a full support to our customer, if he want to upgrade the application.
Somy types of maintanece

* Adaptive maintanece: Keeping the prorgam up-to-date and well-running.
* Preventive maintanece: Troubleshoot problems which may occours, and not seems to serious but causes serious problems
* Perfective maintanece: Performed long-term support like modification, new features, perfromance and operations.