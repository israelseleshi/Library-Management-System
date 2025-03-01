Library Management System

A simple web-based application built with PHP and MySQL to manage library users, featuring basic CRUD (Create, Read, Update, Delete) operations and user authentication.

Features

User Registration: Register new users with username, email, password, and role (admin/user).
CRUD Operations: Manage user records (currently implemented for registration, with placeholders for full CRUD).
Secure Authentication: Passwords hashed using PHP’s password_hash().
Responsive Design: Built with Bootstrap 5 for a clean, mobile-friendly UI.

Technologies Used

PHP: Server-side scripting for logic and database interaction.
MySQL: Database to store user data.
Bootstrap 5: Frontend framework for styling.
Git: Version control.

Setup Instructions

1. Clone the Repository: git clone https://github.com/israelseleshi/Library-Management-System.git cd Library-Management-System

2. Database Setup:
Create a MySQL database (e.g., crud_db).
Create a users table: CREATE TABLE users ( id INT AUTO_INCREMENT PRIMARY KEY, username VARCHAR(50) NOT NULL, email VARCHAR(100) NOT NULL, password VARCHAR(255) NOT NULL, role ENUM('user', 'admin') DEFAULT 'user' );
Update db_connect.php with your database credentials (e.g., host, username, password, db_name).
3. Run Locally:
Use a local server like XAMPP or WAMP.
Place the project folder in your server’s htdocs (e.g., C:\xampp\htdocs\Library-Management-System).
Access via http://localhost/Library-Management-System/register.php.
4. Test:
Register a user via register.php and check the database.

Files

db_connect.php: Database connection class using MySQLi.
register.php: User registration form and logic.
logout.php: Placeholder for logout functionality (to be implemented).

Future Enhancements

Full CRUD for users (edit/delete).
Login system with session management.
Book management (add, borrow, return).

Contributing
Feel free to fork this repo, submit pull requests, or open issues for bugs/features.
