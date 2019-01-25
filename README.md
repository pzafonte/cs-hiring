# cs-hiring
This is a job application management website written in PHP using MySQL that managed the Computer Science Department job applications.

Job applicants can input their information, upload various documents about themselves and provides them a hashed link to send to references so they can provide a reference.

Admin features exist for faculty include searching applicants by type of application, sending mass e-mail to applicants, exporting applicant data in CSV file and making comments on particular applicants.

## Technologies
- PHP 5.6
- MySQL 5.7

## Database
````
CREATE TABLE users (id_user INT AUTO_INCREMENT PRIMARY KEY NOT NULL, name VARCHAR(30) NOT NULL, surname VARCHAR(30) NOT NULL, phone VARCHAR(15) NOT NULL, email VARCHAR(50) UNIQUE NOT NULL, pass CHAR(41) NOT NULL, address TEXT NOT NULL, level CHAR(1) DEFAULT '0' NOT NULL, ss CHAR(1) DEFAULT '0' NOT NULL, vg CHAR(1) DEFAULT '0' NOT NULL, ml CHAR(1) DEFAULT '0' NOT NULL, cv VARCHAR(50), ts VARCHAR(50), rs VARCHAR(50), affil VARCHAR(64) DEFAULT 'Not Updated', recommendations VARCHAR(255), link VARCHAR(100), date VARCHAR(20), schedule TEXT, status VARCHAR(100), ese CHAR(1), net CHAR(1), oth CHAR(1), gender CHAR(1), ethnicity CHAR(1), hash CHAR(41) NOT NULL, type CHAR(1) DEFAULT ‘R’, cl VARCHAR(50) );

CREATE TABLE comments (id_comment INT AUTO_INCREMENT PRIMARY KEY NOT NULL, from_id INT NOT NULL, to_id INT NOT NULL, comment_time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,comment TEXT NOT NULL);
````

### Program Flow / Screenshots

Create an applicant account. The type of application happens to be a research application.
![alt text](https://github.com/pzafonte/cs-hiring/blob/master/1.png "Screenshot 1")

Registration is completed and you are given a link with a hash that you can send to get recommendations.
![alt text](https://github.com/pzafonte/cs-hiring/blob/master/2.png "Screenshot 2")

The link where one can leave a recommendation.
![alt text](https://github.com/pzafonte/cs-hiring/blob/master/3.png "Screenshot 3")

#### Admin/Super-Admin Features
![alt text](https://github.com/pzafonte/cs-hiring/blob/master/4.png "Screenshot 4")

I can view all applicants.
![alt text](https://github.com/pzafonte/cs-hiring/blob/master/5.png "Screenshot 5")

If I choose an applicant...
![alt text](https://github.com/pzafonte/cs-hiring/blob/master/6.png "Screenshot 6")

view/modify their information...
![alt text](https://github.com/pzafonte/cs-hiring/blob/master/7.png "Screenshot 7")

And invite them as a potential candidate...
![alt text](https://github.com/pzafonte/cs-hiring/blob/master/8.png "Screenshot 8")

I can view invited candidates.
![alt text](https://github.com/pzafonte/cs-hiring/blob/master/9.png "Screenshot 9")

I can then leave comments about them for other faculty members to read.
![alt text](https://github.com/pzafonte/cs-hiring/blob/master/10.png "Screenshot 10")

I can also send mass e-mail particular pools of candidates
![alt text](https://github.com/pzafonte/cs-hiring/blob/master/11.png "Screenshot 11")
