# System plan

## 1.System purpose
The purpose of the application is to that users can easily fill a Questionnaire without the need of the registration. The interface need to be user friendly which means should be easy to use.
The user can not make big mistakes thanks to the radio buttons and checkboxes. The system operator assign an excel to the web which will include the questions and answers to the questionnaire.
When the user finish the questionnaire and click on the submit button his/her answers will be saved in another excel based on if he/her was able to properly complete the first test questinnaire.
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
*Able to open the questinnaire.
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

The design of the application is developed by Visual Studio Code.

Backend:

The system requires a database server, in this case we use MySql.
We use php language for the development.
Codeigniter is the framework.


## 9.Database plan

![Database Plan](https://github.com/Martonai/questionnare-skidrow/blob/main/Pictures/db_v01.drawio.png)

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
Go up to the website and fill out the survey.
## 13.Maintenance plan
We has to keep up-to-date the application.
Also has to provide a full support to our customer, if he want to upgrade the application.
Somy types of maintanece

* Adaptive maintanece: Keeping the prorgam up-to-date and well-running.
* Preventive maintanece: Troubleshoot problems which may occours, and not seems to serious but causes serious problems
* Perfective maintanece: Performed long-term support like modification, new features, perfromance and operations.