# MediFlow - Modern Healthcare Management System

> **Developed by Team Clusters** | A comprehensive digital solution for streamlined healthcare operations

![MediFlow Banner](https://img.shields.io/badge/MediFlow-Healthcare%20Platform-00BCD4?style=for-the-badge)
![Status](https://img.shields.io/badge/Status-Active-success?style=for-the-badge)
![PHP](https://img.shields.io/badge/PHP-7.4+-blue?style=for-the-badge&logo=php)

---

## 🏥 About MediFlow

MediFlow is a next-generation healthcare management platform designed to digitize and optimize hospital operations. Built with a focus on user experience and operational efficiency, MediFlow bridges the gap between healthcare providers and patients through an intuitive, secure, and scalable web application.

### 🎯 Vision

To revolutionize healthcare delivery by providing a unified platform that empowers medical professionals, streamlines administrative workflows, and enhances patient care quality.

---

## 👥 Team Clusters

**Development Team:**
- **Manoj Kumar Naidu** - Lead Developer
- **Ram Charan** - Full Stack Developer  
- **Sohael** - Backend Engineer
- **Rajesh** - UI/UX Designer
- **Dhanush Varma** - UI/UX Designer
---

## ✨ Core Features

### For Patients
- **🔐 Secure Registration** - Quick and secure patient onboarding with encrypted data storage
- **📅 Smart Appointment Booking** - Real-time doctor availability and instant booking confirmation
- **📊 Health Dashboard** - Comprehensive view of medical history, prescriptions, and upcoming appointments
- **🔔 Automated Notifications** - SMS and email reminders for appointments and medication schedules

### For Doctors
- **👨‍⚕️ Unified Patient Portal** - Access complete patient records, medical history, and treatment plans
- **💊 Digital Prescriptions** - Create, manage, and track electronic prescriptions
- **📈 Analytics Dashboard** - Patient statistics, appointment trends, and performance metrics
- **⏰ Schedule Management** - Flexible appointment scheduling with conflict detection

### For Administrators
- **🎛️ Centralized Control Panel** - Manage doctors, patients, and appointments from a single interface
- **📋 Comprehensive Reporting** - Generate detailed reports on hospital operations and performance
- **👤 User Management** - Role-based access control for staff and healthcare providers
- **🔍 Advanced Search** - Quick lookup of patients, doctors, and appointment records

---

## 🛠️ Technology Stack

| Component | Technology |
|-----------|-----------|
| **Frontend** | HTML5, CSS3, JavaScript, Bootstrap |
| **Backend** | PHP 7.4+ |
| **Database** | MySQL 5.7+ |
| **Server** | Apache (XAMPP/WAMP recommended) |
| **Libraries** | jQuery, DataTables, Chart.js |

---

## 📦 Installation Guide

### Prerequisites

Ensure you have the following installed:
- XAMPP/WAMP/MAMP (includes Apache, PHP, MySQL)
- Web browser (Chrome, Firefox, Edge recommended)
- Text editor (VS Code, Sublime Text, etc.)

### Step-by-Step Setup

1. **Clone or Download the Repository**
   ```bash
   # Download and extract to your web server directory
   # Example: C:\xampp\htdocs\mediflow
   ```

2. **Start Your Local Server**
   - Launch XAMPP/WAMP Control Panel
   - Start Apache and MySQL services

3. **Create Database**
   - Open phpMyAdmin: `http://localhost/phpmyadmin`
   - Create a new database named `mediflow_db`
   - Import the SQL file: `myhmsdb.sql`

4. **Configure Database Connection**
   - Open `func.php` and update database credentials if needed:
   ```php
   $con = mysqli_connect("localhost", "root", "", "mediflow_db");
   ```

5. **Launch Application**
   - Navigate to: `http://localhost/mediflow/`
   - You should see the MediFlow landing page

### Default Login Credentials

**Admin Access:**
- Username: `admin`
- Password: `admin123`

**Doctor Access:**
- Username: `doctor@mediflow.com`
- Password: `doctor123`

**Patient Access:**
- Register as a new patient through the registration form

> ⚠️ **Security Note**: Change default passwords immediately in production environments

---

## 📱 User Workflows

### Patient Journey

1. **Registration** → Create account with personal and contact details
2. **Login** → Access personalized patient dashboard
3. **Book Appointment** → Select doctor, date, and time slot
4. **Receive Confirmation** → Get booking confirmation via email/SMS
5. **View Prescriptions** → Access digital prescriptions from doctors
6. **Manage Appointments** → Cancel or reschedule as needed

### Doctor Workflow

1. **Login** → Access doctor dashboard
2. **View Appointments** → See scheduled patient appointments
3. **Patient Consultation** → Review patient history and symptoms
4. **Create Prescription** → Generate digital prescriptions
5. **Update Records** → Maintain accurate patient medical records

### Admin Operations

1. **Dashboard Overview** → Monitor system-wide statistics
2. **Manage Users** → Add/edit/remove doctors and staff
3. **Appointment Oversight** → View and manage all appointments
4. **Generate Reports** → Export data for analysis and compliance

---

## 🎨 Design Philosophy

MediFlow features a **modern, clean medical UI** with:
- **Soft teal and blue color palette** for a calming, professional aesthetic
- **High readability** with optimized typography and contrast
- **Responsive design** that works seamlessly on desktop, tablet, and mobile
- **Intuitive navigation** minimizing clicks to reach key functions
- **Accessibility-first** approach following WCAG guidelines

---

## 🔒 Security Features

- **Password Encryption** - Secure hashing for all user credentials
- **SQL Injection Protection** - Prepared statements and input validation
- **Session Management** - Secure session handling with timeout
- **Role-Based Access Control** - Granular permissions for different user types
- **Data Privacy** - HIPAA-compliant data handling practices

---

## 🚀 Future Enhancements

- [ ] Mobile application (iOS & Android)
- [ ] Telemedicine integration with video consultations
- [ ] AI-powered symptom checker
- [ ] Integration with laboratory systems
- [ ] Multi-language support
- [ ] Payment gateway integration
- [ ] Advanced analytics and predictive insights

---




