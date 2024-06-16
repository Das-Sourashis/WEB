-- create database to store result
CREATE DATABASE quiz_result

CREATE TABLE quiz (
    id INT AUTO_INCREMENT PRIMARY KEY,
    rollno VARCHAR(20) NOT NULL,
    correct INT NOT NULL,
    wrong INT NOT NULL,
    response TEXT
);
