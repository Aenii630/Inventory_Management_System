# 📦 Inventory Management System

> A professional web-based Inventory Management System built with **Laravel 12** — a powerful PHP framework. This system allows businesses to manage their stock, track items, monitor pricing, and get automatic low stock alerts.

---

## 🎬 Demo Video

▶️ **[https://drive.google.com/file/d/1v5EtZ_a_K38RpyoMy8uoKEIJ-VramjuH/view?usp=drivesdk](#)** ←
---

## 🚀 About Laravel

**Laravel** is a free, open-source PHP web framework designed for building modern web applications. It follows the **MVC (Model-View-Controller)** architecture pattern and provides tools like:

- ⚡ **Eloquent ORM** — Easy database management
- 🛣️ **Routing** — Clean and simple URL handling
- 🔒 **Validation** — Built-in form validation
- 🎨 **Blade Templating** — Dynamic HTML views
- 🗄️ **Migrations** — Database version control

Laravel makes development faster, cleaner, and more enjoyable!

---

## 📋 About This Project

This **Inventory Management System** is a full CRUD (Create, Read, Update, Delete) web application built as a university project. It helps businesses keep track of their products, stock levels, and pricing — all in one clean interface.

### ✨ Features

- ✅ Add new inventory items with full details
- ✅ View all items in a clean organized table
- ✅ Edit and update existing items anytime
- ✅ Delete items with confirmation popup
- ✅ Track Purchase Price and Selling Price separately
- ✅ Monitor stock quantity in real time
- ✅ **⚠️ Low Stock Alert** — Automatic warning when quantity is 5 or less
- ✅ In Stock / Out of Stock status badges
- ✅ Category management — Electronics, Clothing, Food, Furniture, Other
- ✅ Success messages in English after every action
- ✅ Form validation — No empty or wrong data allowed
- ✅ Fully responsive design with Bootstrap 5

---

## 🛠️ Technologies Used

| Technology | Version | Purpose |
|---|---|---|
| Laravel | 12 | PHP Web Framework |
| PHP | 8.2 | Backend Language |
| MySQL | Latest | Database |
| Bootstrap | 5.3 | Frontend Styling |
| Blade | Built-in | Templating Engine |
| Eloquent ORM | Built-in | Database Interaction |
| Composer | Latest | Dependency Manager |

---

## 🎯 CRUD Operations

| Operation | Route | Method | Description |
|---|---|---|---|
| **Read** | /items | GET | View all inventory items |
| **Create** | /items/create | GET | Show add new item form |
| **Store** | /items | POST | Save new item to database |
| **Edit** | /items/{id}/edit | GET | Show edit form with data |
| **Update** | /items/{id} | PUT | Update existing item |
| **Delete** | /items/{id} | DELETE | Permanently delete item |

---

## 📁 Project Structure
```
myshop/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── ItemController.php   ← All CRUD Logic
│   └── Models/
│       └── Item.php                 ← Database Model
├── database/
│   └── migrations/                  ← Database Table Structure
├── resources/
│   └── views/
│       └── items/
│           ├── index.blade.php      ← Items List Page
│           ├── create.blade.php     ← Add New Item Form
│           └── edit.blade.php       ← Edit Item Form
├── routes/
│   └── web.php                      ← All App Routes
└── .env                             ← Environment Configuration
```

---

## ⚙️ Installation Guide

### Requirements
- PHP 8.2+
- Composer
- MySQL
- XAMPP / Laragon

### 1. Clone the Repository
```bash
git https://github.com/Aenii630/Inventory_Management_System
cd inventory-management
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Setup Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configure Database
Open `.env` file and update:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=myshop
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Run Migrations
```bash
php artisan migrate
```

### 6. Start Server
```bash
php artisan serve
```

### 7. Open in Browser
```
http://localhost:8000/items
```

---

## 👩‍💻 Developer

**[Aena Gul]**
BS Information Technology
Inventory Management System — Laravel 12 — 2026

---

## 📄 License

This project is open source and available under the [MIT License](LICENSE).
