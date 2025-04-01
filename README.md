# Enterprise Operations Management System

This is a PHP-based web application developed as the final project for the **Advanced Database** course. The system supports key functions for managing enterprise operations including employees, customers, orders, and customer-firm relationships.

## 🔧 Technologies Used

- **Front-end**: HTML, CSS
- **Back-end**: PHP
- **Database**: MySQL (managed via phpMyAdmin)

## 📁 Features

- 👤 Admin Login and Logout
- 🧑‍💼 Employee Management (Add, Edit, Delete, Batch Delete)
- 👥 Customer Management
- 🧾 Order and Invoice Handling
- 🔗 Firm-Customer Relationship Module
- 🧹 Batch Delete Operations
- 🏠 Admin Dashboard

## 📂 Project Structure (Partial)

```
FianceApp/
├── Home.php
├── login.php / logout.php
├── index.php
├── EmployeeAdd.php / EmployeeEdit.php / EmployeeList.php
├── CustomerAdd.php / CustomerEdit.php / CustomerList.php
├── OrderAdd.php / orderandinvoiceDel.php ...
├── config.inc.php
└── ...
```

## 🗃️ Database

- Use phpMyAdmin to import the SQL schema (not included in the upload; add `.sql` if needed)
- All database connections are handled via `config.inc.php`

## 🚀 Getting Started

1. Place the folder in your local PHP server environment (e.g., `htdocs` in XAMPP)
2. Import the database schema using phpMyAdmin
3. Modify `config.inc.php` to match your local database settings
4. Open `index.php` or `login.php` in your browser to start using the system

## 👨‍💻 Author

Developed by **Sung-Yu Liao** as a final project for the **Advanced Database** course.
