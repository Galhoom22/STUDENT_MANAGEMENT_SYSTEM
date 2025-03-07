Student Management System

🏫 Student Management Project

A simple system for managing student data using PHP and MySQL, with a simple CSS user interface.

📂 Project Structure

STUDENT_MANAGEMENT_SYSTEM/
├── css/
│   └── styles.css              # External CSS file for styling
├── database/
│   ├── connect.php            # Database connection file
│   └── student.sql            # SQL file with database structure and sample data
├── imgs/                      # Images folder for student-related images
│   └── student.png
├── screenshots/              # Screenshots of the project
│   └── the_project.png
├── index.php                 # Main entry point of the project
├── README.md                 # Project documentation


⚡ Technologies Used

Frontend: HTML, CSS

Backend: PHP

Database: MySQL

🚀 How to Run the Project

Clone the Project:

git clone https://github.com/username/students_project.git

Set Up the Database:

Open phpMyAdmin or MySQL Terminal.

Import the students.sql file:

source database/students.sql;

Run the Project:

Copy the files to your PHP project folder (e.g., htdocs in XAMPP).

Start the server (Apache + MySQL).

Open the browser and go to:

http://localhost/STUDENTS_PROJECT/index.php

🛠️ Features

Add Student: Enter student ID, name, and address.

Delete Student: Remove records based on entered data.

Display Data: A table showing all students in the database.

Sample Data: The database comes with initial records for testing.

🔒 Security

SQL Injection Protection: Using Prepared Statements.

XSS Protection: Using htmlspecialchars when displaying data.

📘 Future Enhancements

✅ Update student data.

✅ Search functionality.

✅ Export student data to CSV or Excel.

✅ More interactive UI with JavaScript (like AJAX).

📩 Contact

If you have any suggestions or improvements, I’d love to hear from you! ✌️

Email: abdulrahmangalhoom@gmail.com 😃

GitHub: Galhoom22 😄
