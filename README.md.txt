Name : Henok Hailekiros
ID   : UGR/188267/16


# 🏥 Healthcare Management System

A modern Healthcare Management System developed using:

- HTML
- CSS
- JavaScript
- PHP
- MySQL
- XAMPP

The system allows patients to book appointments, contact healthcare services, and enables administrators to manage appointments efficiently.

---

# 🚀 Features

## 👨‍⚕️ Patient Features
- Responsive modern homepage
- About page
- Services page
- Contact form
- Appointment booking system
- Interactive user interface
- Modern healthcare design

## 🛠 Admin Features
- Admin dashboard
- View appointments
- Update appointment status
- Delete appointments
- Appointment management

---

# 🏗 System Architecture

The project follows:

## ✅ Layered Architecture Pattern

### 1. Presentation Layer
Handles:
- HTML pages
- CSS styling
- JavaScript interactions

### 2. Business Logic Layer
Handles:
- Appointment processing
- Validation
- Status updates
- Form handling using PHP

### 3. Data Access Layer
Handles:
- Database queries
- CRUD operations

### 4. Database Layer
Uses:
- MySQL database

---

# 🧰 Technologies Used

| Technology | Purpose |
|---|---|
| HTML | Structure |
| CSS | Styling |
| JavaScript | Frontend Interactivity |
| PHP | Backend Logic |
| MySQL | Database |
| XAMPP | Local Server Environment |

---

# 📂 Project Structure

```plaintext
healthcare-system/
│
├── index.html
├── about.html
├── services.html
├── appointment.html
├── contact.html
├── admin.php
│
├── css/
│   └── style.css
│
├── js/
│   └── script.js
│
├── images/
│
├── db.php
├── save_appointment.php
├── fetch_appointments.php
├── update_status.php
└── delete_appointment.php
```

---

# ⚙️ Installation Guide

## 1️⃣ Install XAMPP

Download and install XAMPP:

https://www.apachefriends.org/index.html

---

## 2️⃣ Start Apache and MySQL

Open XAMPP Control Panel and start:
- Apache
- MySQL

---

## 3️⃣ Move Project Folder

Place the project folder inside:

```plaintext
htdocs/
```

Example:

```plaintext
C:/xampp/htdocs/healthcare-system
```

---

## 4️⃣ Create Database

Open:

```plaintext
http://localhost/phpmyadmin
```

Create database:

```sql
healthcare_db
```

---

## 5️⃣ Create Appointment Table

```sql
CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    appointment_date DATE,
    service VARCHAR(100),
    status VARCHAR(50) DEFAULT 'Pending'
);
```

---

# ▶ Running the Project

Open browser:

```plaintext
http://localhost/healthcare-system
```

---

# 📱 Responsive Design

The system is fully responsive and works on:
- Desktop
- Tablet
- Mobile devices

---

# 🎨 UI Features

- Modern gradient design
- Interactive hover effects
- Responsive navigation
- Professional footer
- Attractive forms
- Service cards
- Animated buttons

---

# 🔐 Future Improvements

- Login system
- Doctor dashboard
- Online payments
- Email notifications
- Real-time chat
- AI healthcare assistant
- Dark mode

---

# 👨‍💻 Author

Developed as a Healthcare Management System project.

---

# 📄 License

This project is for educational purposes.