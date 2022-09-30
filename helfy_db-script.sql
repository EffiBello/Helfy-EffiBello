create database `helfy_db` default character set utf8mb4 collate utf8mb4_unicode_ci;
create user `helfy_user`@`localhost` identified by "helfy1234!";
grant all privileges on `helfy_db`.* TO `helfy_user`@`localhost`;
flush privileges;

ALTER USER 'helfy_user'@'localhost' IDENTIFIED WITH mysql_native_password BY 'helfy1234!';
use helfy_db;
 
CREATE TABLE `helfy_db`.`users` (
	`userID` INT NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(25) CHARACTER SET 'utf8mb4' NOT NULL,
	`password` VARCHAR(25) CHARACTER SET 'utf8mb4' NOT NULL,
	INDEX (`username`),
	PRIMARY KEY (`userID`))
CHARACTER SET = utf8mb4;

CREATE TABLE `helfy_db`.`messages` (
	`messageID` INT NOT NULL AUTO_INCREMENT,
	`message_title` VARCHAR(25) CHARACTER SET 'utf8mb4' NOT NULL,
	`message_body` VARCHAR(255) CHARACTER SET 'utf8mb4' NOT NULL,
    `message_time` VARCHAR(255) CHARACTER SET 'utf8mb4' NOT NULL,
	PRIMARY KEY (`messageID`))
CHARACTER SET = utf8mb4;

        INSERT INTO users
		(username,password)
		VALUES('effibello','123456!');
        
        INSERT INTO messages
		(message_title,message_body,message_time)
		VALUES('Monica Smith','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum','Today 5:60 pm - 12.06.2014');
        
        INSERT INTO messages
		(message_title,message_body,message_time)
		VALUES('Jogn Angel','There are many variations of passages of Lorem Ipsum available','Today 2:23 pm - 11.06.2014');

        INSERT INTO messages
		(message_title,message_body,message_time)
		VALUES('Jesica Ocean','Contrary to popular belif, Lorem Ipsum','Today 1:00 pm - 08.06.2014');
        
        INSERT INTO messages
		(message_title,message_body,message_time)
		VALUES('Monica Jackson','The generated Lorem Ipsum is therefore','Yesterday 8:48 pm - 10.06.2014');
        
        INSERT INTO messages
		(message_title,message_body,message_time)
		VALUES('Anna Legend','All the Lorem Ipsum generators on the internet tend to repeat','Yesterday 8:48 pm - 10.06.2014');
        
        INSERT INTO messages
		(message_title,message_body,message_time)
		VALUES('Damian Nowak','The standard chunk of Lorem Ipsum used','Yesterday 8:48 pm - 10.06.2014');
        
		INSERT INTO messages
		(message_title,message_body,message_time)
		VALUES('Gary Smith','200 Latin words, combined with a handful','Yesterday 8:48 pm - 10.06.2014');

