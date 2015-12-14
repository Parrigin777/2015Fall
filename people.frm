create database people;
CREATE TABLE people (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
firstNameSHOW VARCHAR(20),
lastName VARCHAR(30),
email VARCHAR(30), 
password VARCHAR(50));

insert into people (First Name, Last Name, EMail, Password)    
    VALUES (
    "Brandon",
    "Parrigin",
    "fake@email",
    "no?",
    ) ;
    
    
    mysql-ctl cli 