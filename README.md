# Inventory Management System

Sistem Inventory Management berbasis **Laravel 13** yang dikembangkan sebagai Technical Test PT Asietex Sinar Indopratama.

---

# Fitur Aplikasi

## 1. Authentication

* Login
* Logout
* Register
* Forgot Password

---

## 2. Dashboard

Dashboard menampilkan informasi secara ringkas mengenai:

* Total Kategori
* Total Produk
* Total Transaksi
* Total Penjualan
* Produk dengan stok menipis
* Daftar transaksi terbaru

---

## 3. Master Data

### Kategori

* Menambah kategori
* Melihat daftar kategori
* Mengubah kategori
* Menghapus kategori
* Pencarian kategori
* Sorting data
* Pagination

### Produk

* Menambah produk
* Melihat daftar produk
* Mengubah produk
* Menghapus produk
* Pencarian produk
* Sorting data
* Pagination

Setiap produk memiliki relasi dengan kategori.

---

## 4. Transaksi Penjualan

* Menambah transaksi
* Melihat daftar transaksi
* Melihat detail transaksi
* Mengubah transaksi
* Menghapus transaksi

Fitur transaksi mendukung:

* Multi produk dalam satu transaksi
* Perhitungan subtotal otomatis
* Perhitungan total otomatis
* Pengurangan stok otomatis
* Pengembalian stok ketika transaksi dihapus
* Relasi dengan tabel produk

---

# Teknologi yang Digunakan

* Laravel 13
* PHP 8.3
* MySQL
* Laravel Breeze Authentication
* AdminLTE
* Bootstrap 5
* Blade Template
* Eloquent ORM

---

# Konsep Database

Aplikasi menggunakan konsep **Relational Database Management System (RDBMS)**.

Relasi database:

Kategori

↓

Produk

↓

Detail Penjualan

↓

Penjualan

---

# Struktur Database

## kategoris

* id
* nama_kategori
* timestamps

## produks

* id
* kategori_id
* kode_produk
* nama_produk
* harga
* stok
* timestamps

## penjualans

* id
* nomor_transaksi
* tanggal
* total
* timestamps

## detail_penjualans

* id
* penjualan_id
* produk_id
* harga
* jumlah
* subtotal
* timestamps

---

# Cara Instalasi

## 1. Clone Project

```bash
git clone <repository-url>
```

atau ekstrak file project ke dalam folder web server.

---

## 2. Masuk ke folder project

```bash
cd inventory-management
```

---

## 3. Install Dependency PHP

```bash
composer install
```

---

## 4. Install Dependency Frontend

```bash
npm install
```

---

## 5. Salin File Environment

```bash
cp .env.example .env
```

---

## 6. Generate Application Key

```bash
php artisan key:generate
```

---

## 7. Konfigurasi Database

Ubah file `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=inventory_management
DB_USERNAME=root
DB_PASSWORD=
```

Sesuaikan dengan konfigurasi MySQL yang digunakan.

---

## 8. Jalankan Migration dan Seeder

```bash
php artisan migrate:fresh --seed
```

Perintah tersebut akan membuat:

* User
* Kategori
* Produk
* Penjualan
* Detail Penjualan

beserta data dummy.

---

## 9. Build Asset

```bash
npm run build
```

atau saat development

```bash
npm run dev
```

---

## 10. Jalankan Server

```bash
php artisan serve
```

Buka browser:

```
http://127.0.0.1:8000
```

---

# Login Default

Administrator

Email

```
admin@inventory.com
```

Password

```
password
```

> Sesuaikan apabila data pada UserSeeder berbeda.

---

# Seeder

Seeder menghasilkan data contoh seperti:

* 10 Kategori
* 100 Produk
* 200 Penjualan
* Ratusan Detail Penjualan

Sehingga aplikasi siap digunakan untuk demonstrasi.

---

# Fitur RDBMS

Aplikasi menerapkan relasi:

* One to Many
* Foreign Key
* Constraint
* Cascade Update
* Restrict Delete

---

# Author

Technical Test

PT Asietex Sinar Indopratama

Developed using Laravel Framework.
# Inventory-Management-System
