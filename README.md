# WEB Project

## 1. Quiz Application

### Files

- `create_db.sql`: SQL script to create the database for the quiz.
- `get_questions.php`: PHP script to fetch quiz questions.
- `quiz.html`: HTML file for the quiz interface.
- `quiz.xml`: XML file containing quiz questions.
- `save_quiz_result.php`: PHP script to save quiz results.

### Setup

1. **Database Setup**:
   - Execute `create_db.sql` to create the necessary database and tables.
2. **Configuration**:
   - Ensure the database connection settings in `get_questions.php` and `save_quiz_result.php` match your database setup.
3. **Run**:
   - Open `quiz.html` in a web browser to start the quiz.

## 2. Session Storage

### Files

- `destoy_sesion.php`
- `i1.php`
- `index.php`

This component demonstrates the implementation of session storage in PHP. It includes scripts for starting a session, managing session variables, and destroying the session.

## 3. Word Game

### Files

- `create_dictionary.php`: PHP script to create a dictionary for the word game.
- `dict.txt`: Text file containing the dictionary words.
- `fetch.php`: PHP script to fetch words for the game.
- `index.html`: HTML file for the word game interface.
- `word_database.sql`: SQL script to create the database for the word game.

### Setup

1. **Database Setup**:
   - Execute `word_database.sql` to create the necessary database and tables.
2. **Configuration**:
   - Ensure the database connection settings in `create_dictionary.php` and `fetch.php` match your database setup.
3. **Run**:
   - Open `index.html` in a web browser to start the word game.

## Requirements

- Web server with PHP support (e.g., Apache )
- MySQL database system
