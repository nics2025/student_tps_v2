# 🧾 student_tps_v2
## 📘 Description / Overview
The *Student Transaction Processing System* is a simple web-based application designed to manage student-related transactions efficiently.  
It allows users (students and administrators) to record, update, and view student information and transactions such as registration, payments, or other academic processes.  
The system helps reduce manual work and errors by automating basic transaction operations.

---

## 🎯 Objectives
- To develop a functional web application that processes student transactions efficiently.  
- To apply CRUD (Create, Read, Update, Delete) operations in a real-world context.  
- To provide an easy-to-use interface for managing student records.  
- To practice using *Laravel / PHP*, *MySQL*, and *HTML/CSS/JavaScript* in building a complete system.  
- To demonstrate proper database connectivity and dynamic data manipulation.

---

## ⚙️ Features / Functionality
### ✅ User Management
- Add new student records  
- Edit and update existing student details  
- Delete unnecessary or duplicate records  
- View all student transaction data  

### ✅ Transaction Module
- Record student payments or other transactions  
- Automatically calculate total or balance (if applicable)  

### ✅ Dashboard
- Displays student transaction summaries  
- Shows quick statistics or student lists  

### ✅ Database Integration
- Uses *MySQL* for storing and retrieving records securely  

---

## 💻 Installation Instructions
1. *Install Required Software:*
   - [XAMPP](https://www.apachefriends.org/) (for PHP and MySQL)
   - [Visual Studio Code](https://code.visualstudio.com/)
   - [SQLyog](https://webyog.com/product/sqlyog/) or *phpMyAdmin* for database management

2. *Clone or Download the Project Folder:*
   - Place it in the htdocs directory of your XAMPP installation  
     
     C:\xampp\htdocs\student_tps
     

3. *Set Up the Database:*
   - Open *SQLyog* or *phpMyAdmin*
   - Create a new database named student_tps_db
   - Import the provided .sql file (if available) or manually create tables

4. *Configure the Connection:*
   - Open your project folder  
   - Edit config.php or .env file (for Laravel) to match your database credentials:
     
     DB_HOST=localhost
     DB_USER=root
     DB_PASS=
     DB_NAME=student_tps_db
     

5. *Run the Project:*
   - Start *Apache* and *MySQL* in XAMPP Control Panel  
   - Open your browser and go to:  
     
     http://localhost/student_tps/
     

---

## 🚀 Usage
1. Open the system in your browser.  
2. Navigate to the *Student Registration* page.  
3. Fill in the required fields (e.g., name, student number, course, transaction details).  
4. Click *Save* to store the data in the database.  
5. Go to the *View Records* section to see all saved transactions.  
6. Use *Edit* or *Delete* buttons to modify or remove records as needed.

---

## 🧩 Screenshots or Code Snippets

### 📝 Example HTML Form
```
