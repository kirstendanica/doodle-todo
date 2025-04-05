CREATE DATABASE IF NOT EXISTS doodle-todo_db;
USE doodle-todo_db;

CREATE TABLE IF NOT EXISTS sessions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    session_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    total_focus_time INT,
    session_type ENUM('work', 'break', 'long_break') DEFAULT 'work'
);

CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    session_id INT,
    task_description VARCHAR(255) NOT NULL,
    duration INT NOT NULL,
    FOREIGN KEY (session_id) REFERENCES sessions(id)
);
