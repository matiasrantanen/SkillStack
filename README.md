# SkillStack

URL: <a>https://1601551.azurewebsites.net</a>

<strong>Description</strong>

A web application for students to track their progress in learning different coding languages.



<strong>To use the application :</strong>

 1. Clone or download the repository.

 2. Create a database in MySQL using XAMPP. (More information about the database structure can be found in the Wiki)
 
   Run the following statement in MySQL:

   
   CREATE TABLE users ( <br>
   INT NOT NULL PRIMARY KEY AUTO_INCREMENT,<br>
   username VARCHAR(50) NOT NULL UNIQUE,<br>
   password VARCHAR(255) NOT NULL,<br>
   name varchar(32) NULL,<br>
   description varchar(20000) NULL,<br>
   htmlskill int(11) NULL,<br>
   cssskill int(11) NULL,<br>
   jsskill int(11) NULL,<br>
   javaskill int(11) NULL,<br>
   phpskill int(11) NULL,<br>
   cskill int(11) NULL,<br>
   cppskill int(11) NULL,<br>
   sqlskill int(11) NULL,<br>
   linkedin varchar(255) NULL,<br>
   github varchar(255) NULL,<br>
   codepen varchar(255) NULL,<br>
   picture varchar(50) NULL,<br>
   p1link varchar(255) NULL,<br>
   p2link varchar(255) NULL,<br>
   p3link varchar(255) NULL,<br>
   created_at DATETIME DEFAULT CURRENT_TIMESTAMP<br> 
   );

 3. Launch the application in your web browser through localhost.

 4. Create an account and fill in your profile information.


<img src="https://github.com/matiasrantanen/SkillStack/blob/master/github/github1.png" width="600">
<img src="https://github.com/matiasrantanen/SkillStack/blob/master/github/github2.png" width="600">
<img src="https://github.com/matiasrantanen/SkillStack/blob/master/github/github3.png" width="600">
<img src="https://github.com/matiasrantanen/SkillStack/blob/master/github/github4.png" width="600">
<img src="https://github.com/matiasrantanen/SkillStack/blob/master/github/github5.png" width="600">
<img src="https://github.com/matiasrantanen/SkillStack/blob/master/github/github6.png" width="600">




