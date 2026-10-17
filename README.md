# Pudami Consultancy Services (India) Pvt. Ltd.

Premier Real Estate & Property Advisory Web Platform.

[![PHP Version](https://img.shields.io/badge/PHP-8.1%2B-blue.svg)](https://www.php.net/)
[![Database](https://img.shields.io/badge/Database-MySQL-orange.svg)](https://www.mysql.com/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.0-purple.svg)](https://getbootstrap.com/)
[![License](https://img.shields.io/badge/License-Proprietary-green.svg)]()

---

## 🏢 About the Project

**Pudami Consultancy Services (India) Pvt. Ltd.** is an AP RERA registered & DPIIT recognized premier real estate consultancy firm providing verified property advisory, open plot developments, luxury duplex villas, 30-year link legal title verification, and low-interest bank loan assistance (SBI, HDFC, ICICI, LIC Housing) across Andhra Pradesh, Telangana, and South India.

This repository contains the complete responsive web application, candidate portal, and database initialization files.

---

## ✨ Features

- **Dynamic Property Listings & Search**: Interactive search and filtering by property type, state, and location.
- **Our Regional Presence**: Multi-state showcase across prime investment corridors in South India.
- **Candidate Application Portal**: Job application pipeline with validation and secure document uploads (Resume & Aadhar card verification).
- **User Authentication & Dashboard**: Secure client registration, login, and dashboard session management.
- **Inquiry Management**: Direct contact and consultation lead capture connected with MySQL database.
- **Statutory Compliance & Privacy**: Dedicated Privacy Policy covering DPDP Act 2023, RERA standards, and document security.
- **Modern Responsive Design**: Premium typography (Cinzel & Outfit), dynamic micro-interactions, Bootstrap 5 grid, and mobile optimization.

---

## 🛠️ Technology Stack

- **Backend**: PHP 8.1+ / PHP 8.3
- **Database**: MySQL 5.7+ / 8.0+
- **Frontend**: HTML5, Vanilla CSS3, JavaScript (ES6+)
- **CSS Framework**: Bootstrap 5.0, Font Awesome 5 Free, Bootstrap Icons
- **Libraries**: Owl Carousel, WOW.js, Waypoints, Easing.js
- **Server Environment**: WAMP / XAMPP / Apache

---

## 🚀 Local Installation & Setup

### 1. Clone or Copy the Repository
Place the project inside your web server's root directory (e.g., `C:/wamp64/www/Pudami_Consultancy` or `/opt/lampp/htdocs/Pudami_Consultancy`):

```bash
git clone https://github.com/PreetiStart102/pudami_consultancy.git
```

### 2. Configure Database
1. Start **Apache** and **MySQL** services in WAMP/XAMPP.
2. The database connection file `db.php` automatically creates the database `pudami_consultancy` and required tables if they don't exist.
3. Alternatively, import `database.sql` into phpMyAdmin or MySQL CLI:
   ```bash
   mysql -u root -p < database.sql
   ```

### 3. Database Configuration (`db.php`)
If your local MySQL credentials differ from standard defaults, update `db.php`:
```php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'pudami_consultancy';
```

### 4. Run the Website
Open your web browser and visit:
```
http://localhost/Pudami_Consultancy/
```

---

## 📁 Key File Structure

```
Pudami_Consultancy/
├── index.php                 # Homepage with hero sliders & featured properties
├── about.php                 # About Pudami Consultancy, accreditation & vision
├── properties.php            # State-wise property catalog & filtering
├── property-list.php         # Complete property inventory
├── our-presence.php          # Regional presence across South India
├── careers.php               # Current open positions & recruitment roadmap
├── career-apply.php          # Candidate application form with file upload
├── career_process.php        # Backend handler for job applications & uploads
├── contact.php               # Contact page & consultation desk
├── contact_process.php       # Lead generation handler
├── login.php                 # Client portal login
├── register.php              # Client registration
├── dashboard.php             # Client & investor dashboard
├── privacy-policy.php        # Official DPDP & RERA compliant privacy policy
├── db.php                    # Database connection & auto-table migration
├── database.sql              # MySQL schema definition
├── css/                      # Stylesheets (style.css, bootstrap.min.css)
├── js/                       # JavaScript application logic
├── img/                      # Project assets, certificates & photography
└── uploads/                  # Secure uploads directory (resumes, aadhar)
```

---

## 🔒 Security & Privacy

- Client passwords hashed using `password_hash()` (Bcrypt).
- SQL statements prepared with parameterized queries to prevent SQL injection.
- Uploaded candidate documents sanitized and isolated with `.gitkeep` protection.
- 256-bit SSL/TLS encryption recommended in production.

---

## 📄 License & Copyright

© 2026 **Pudami Consultancy Services (India) Pvt. Ltd.** All Rights Reserved.
