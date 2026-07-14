# 📦 Inventory Management System

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-13-red?style=for-the-badge&logo=laravel">
  <img src="https://img.shields.io/badge/PHP-8.3-blue?style=for-the-badge&logo=php">
  <img src="https://img.shields.io/badge/MySQL-8-orange?style=for-the-badge&logo=mysql">
  <img src="https://img.shields.io/badge/AdminLTE-3-green?style=for-the-badge">
  <img src="https://img.shields.io/badge/Bootstrap-5-purple?style=for-the-badge&logo=bootstrap">
</p>

<p align="center">
A web-based Inventory Management System built using Laravel that provides inventory, category, product, and sales transaction management with the implementation of Relational Database Management System (RDBMS).
</p>

---

## 📖 Overview

Inventory Management System is a web application developed using the Laravel Framework to simplify inventory management processes. The system provides authentication, master data management, sales transaction processing, and automatic stock management through a relational database structure.

---

## ✨ Features

### 🔐 Authentication

- Login
- Register
- Forgot Password
- Logout

---

### 📂 Category Management

- Create Category
- View Category
- Update Category
- Delete Category
- Search Category
- Pagination

---

### 📦 Product Management

- Create Product
- View Product
- Update Product
- Delete Product
- Search Product
- Pagination

Each product belongs to a category.

---

### 💰 Sales Management

- Create Sales Transaction
- View Sales Transaction
- View Transaction Details
- Update Sales Transaction
- Delete Sales Transaction

Features include:

- Multiple products in one transaction
- Automatic subtotal calculation
- Automatic total calculation
- Automatic stock deduction
- Automatic stock restoration
- Transaction history

---

### 📊 Dashboard

Dashboard provides summary information including:

- Total Categories
- Total Products
- Total Transactions
- Total Sales
- Low Stock Products
- Recent Transactions

---

# 🗄 Database Design

The application implements the Relational Database Management System (RDBMS) concept.

```
Categories
      │
      │ 1
      ▼
Products
      │
      │ 1
      ▼
Sales Details
      ▲
      │
      │ n
Sales
```

---

## 📁 Database Tables

### Categories

- id
- nama_kategori
- created_at
- updated_at

### Products

- id
- kategori_id
- kode_produk
- nama_produk
- harga
- stok
- created_at
- updated_at

### Sales

- id
- nomor_transaksi
- tanggal
- total
- created_at
- updated_at

### Sales Details

- id
- penjualan_id
- produk_id
- harga
- jumlah
- subtotal
- created_at
- updated_at

---

# 🛠 Technology Stack

- Laravel 13
- PHP 8.3
- MySQL
- Bootstrap 5
- AdminLTE 3
- Laravel Breeze
- Blade Template Engine
- Eloquent ORM
- Vite

---

# 📂 Project Structure

```
app/
bootstrap/
config/
database/
public/
resources/
routes/
storage/
```

---

# 🚀 Installation

## Clone Repository

```bash
git clone https://github.com/Saepul-alam/Inventory-Management-System.git
```

---

## Go to Project

```bash
cd Inventory-Management-System
```

---

## Install Dependencies

```bash
composer install
```

```bash
npm install
```

---

## Copy Environment File

Linux / macOS

```bash
cp .env.example .env
```

Windows

```bash
copy .env.example .env
```

---

## Generate Application Key

```bash
php artisan key:generate
```

---

## Configure Database

Edit the `.env` file.

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=inventory_management
DB_USERNAME=root
DB_PASSWORD=
```

---

## Run Migration and Seeder

```bash
php artisan migrate:fresh --seed
```

---

## Build Assets

Development

```bash
npm run dev
```

Production

```bash
npm run build
```

---

## Run Application

```bash
php artisan serve
```

Open your browser:

```
http://127.0.0.1:8000
```

---

# 👤 Default Account

Email

```
admin@example,com
```

Password

```
password
```

> Adjust according to the credentials defined in `UserSeeder`.

---

# 🌱 Seeder

The application includes seeders to generate sample data for testing purposes.

Generated data includes:

- Categories
- Products
- Sales Transactions
- Sales Transaction Details

---

# 📋 Main Modules

- Authentication
- Dashboard
- Category Management
- Product Management
- Sales Management
- Sales Detail
- Inventory Control
- Search
- Pagination

---

# 🎯 Learning Objectives

This project demonstrates the implementation of:

- Laravel Framework
- Authentication
- CRUD Operations
- MVC Architecture
- Relational Database Management System (RDBMS)
- Database Relationships
- Eloquent ORM
- Transaction Management
- Stock Management
- Clean Code Principles

---

# 📄 License

This project is intended for educational purposes.

---

# 👨‍💻 Author

**Saepul Alam**

GitHub:
https://github.com/Saepul-alam