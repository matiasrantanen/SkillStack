# SkillStack

URL: <a>https://1601551.azurewebsites.net</a>

<strong>Description</strong>

A web application for students to track their progress in learning different coding languages.



<strong>To use the application :</strong>

 1. Clone or download the repository.

 2. Create a database in MySQL using XAMPP. (More information about the database structure can be found in the Wiki)
 
   Run the following statement in MySQL:


   <li>CREATE TABLE users ( </li>
   <li> id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,</li>
   <li>  username VARCHAR(50) NOT NULL UNIQUE,</li>
   <li> password VARCHAR(255) NOT NULL,</li>
   <li> name varchar(32) NULL,</li>
   <li> description varchar(20000) NULL,</li>
   <li>  htmlskill int(11) NULL,</li>
   <li> cssskill int(11) NULL,</li>
   <li> jsskill int(11) NULL,</li>
   <li> javaskill int(11) NULL,</li>
   <li>  phpskill int(11) NULL,</li>
   <li> cskill int(11) NULL,</li>
   <li> cppskill int(11) NULL,</li>
   <li>  sqlskill int(11) NULL,</li>
   <li> linkedin varchar(255) NULL,</li>
   <li> github varchar(255) NULL,</li>
   <li>  codepen varchar(255) NULL,</li>
   <li>  picture varchar(50) NULL,</li>
   <li>  p1link varchar(255) NULL,</li>
   <li>  p2link varchar(255) NULL,</li>
   <li>  p3link varchar(255) NULL,</li>
   <li> created_at DATETIME DEFAULT CURRENT_TIMESTAMP</li> 
   <li>);</li>


 3. Launch the application in your web browser through localhost.

 4. Create an account and fill in your profile information.


<img src="https://github.com/matiasrantanen/SkillStack/blob/master/github/github1.png" width="600">
<img src="https://github.com/matiasrantanen/SkillStack/blob/master/github/github2.png" width="600">
<img src="https://github.com/matiasrantanen/SkillStack/blob/master/github/github3.png" width="600">
<img src="https://github.com/matiasrantanen/SkillStack/blob/master/github/github4.png" width="600">
<img src="https://github.com/matiasrantanen/SkillStack/blob/master/github/github5.png" width="600">
<img src="https://github.com/matiasrantanen/SkillStack/blob/master/github/github6.png" width="600">




