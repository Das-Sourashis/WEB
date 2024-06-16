-- Create the database if it doesn't exist
CREATE DATABASE dictionary;


-- Create the 'words' table
CREATE TABLE words (
    word_id INT AUTO_INCREMENT PRIMARY KEY,
    word VARCHAR(13) NOT NULL
);

