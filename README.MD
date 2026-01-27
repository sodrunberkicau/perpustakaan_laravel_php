<h1 align="center">📚 Perpus Digital</h1>

<p align="center">
    E-Library modern berbasis web yang dibangun menggunakan <b>Laravel 11</b> dan <b>Bootstrap 5</b>.<br/>
    Sistem ini dirancang untuk mendigitalisasi pengelolaan perpustakaan, mulai dari manajemen buku,
    transaksi peminjaman, hingga analitik penggunaan secara real-time.
</p>

<p align="center">
    <img src="https://img.shields.io/badge/Laravel-11-red" />
    <img src="https://img.shields.io/badge/PHP-8.2+-blue" />
    <img src="https://img.shields.io/badge/MySQL-8.3+-orange" />
    <img src="https://img.shields.io/badge/Bootstrap-5-purple" />
</p>

---

## 📖 Tentang Project

**Perpus Digital** adalah aplikasi E-Library berbasis web yang bertujuan untuk:
- Mengganti sistem perpustakaan manual menjadi sistem digital
- Mempermudah pengelolaan data buku dan kategori
- Mempermudah proses peminjaman dan pengembalian buku
- Memberikan dashboard analitik untuk admin
- Memberikan pengalaman pengguna yang modern, cepat, dan responsif

Aplikasi ini cocok digunakan untuk:
- Perpustakaan sekolah
- Perpustakaan kampus
- Perpustakaan komunitas
- Perpustakaan internal perusahaan
- Project tugas akhir / portfolio developer

---

## ✨ Features

### 👤 User Features
- 📚 **Book Catalog Dashboard**  
  Melihat seluruh koleksi buku yang tersedia dalam sistem.
  
- 🔄 **Book Borrowing Transaction**  
  Melakukan peminjaman buku secara digital.
  
- 🔍 **Search & Filter System**  
  Pencarian buku berdasarkan:
  - Judul
  - Penulis
  - Kategori
  - Tahun terbit
  
- 🏷️ **Category Filtering**  
  Menampilkan buku berdasarkan kategori tertentu.

---

### 🛠️ Admin Features
- 📊 **Analytics Dashboard**  
  Statistik transaksi peminjaman buku:
  - Jumlah transaksi
  - Buku terpopuler
  - User paling aktif
  - Status peminjaman
  
- 📥 **Book Reservation Management**
  - Validasi peminjaman
  - Update status peminjaman
  - Manajemen pengembalian
  
- 🗂️ **Categories Management**
  - Tambah kategori
  - Edit kategori
  - Hapus kategori
  
- 📚 **Books Management**
  - Tambah buku
  - Edit buku
  - Upload cover buku
  - Hapus buku
  - Manajemen stok buku
  
- 👥 **User Management**
  - Manajemen user
  - Role management (admin / user)

---

## 🧱 Arsitektur Sistem

Aplikasi menggunakan konsep:

- **MVC (Model-View-Controller)**
- **RESTful API structure**
- **Relational Database Design**
- **Role Based Access Control (RBAC)**
- **Modular Laravel Structure**
- **Cloud Storage Integration (AWS S3)**

---

## 🗃️ Struktur Database (Conceptual)

Entitas utama:
- `users`
- `books`
- `categories`
- `book_category` (pivot table)
- `peminjaman`

Relasi:
- Users → Peminjaman : One to Many  
- Books → Peminjaman : One to Many  
- Books → Categories : Many to Many  
- Books → Book_Category : One to Many  
- Categories → Book_Category : One to Many  

---

## 🧰 Tech Stack

| Layer | Technology |
|------|-----------|
| Backend | Laravel 11 |
| Frontend | Bootstrap 5 |
| Language | PHP 8.2+ |
| Database | MySQL 8.3+ |
| Storage | AWS S3 |
| ORM | Eloquent |
| Auth | Laravel Auth |
| Deployment Ready | Yes |

---

## ⚙️ Prerequisite

Pastikan environment sudah terinstall:

- PHP **8.2+**
- Composer
- Laravel **11**
- MySQL **8.3+**
- Node.js (optional, jika build asset)
- AWS S3 Account (untuk storage)
- Web server (Apache / Laravel serve)

---
<h3>Diagram</h3>

<h5>Class Diagram</h5>
<p align="center">
    <img width="30%" alt="image" src="https://github.com/sodrunberkicau/perpustakaan_laravel_php/blob/main/public/diagram/ClassDiagram.png?raw=true" />
</p>

<h5>ERD</h5>
<p align="center">
    <img width="30%" alt="image" src="https://github.com/sodrunberkicau/perpustakaan_laravel_php/blob/main/public/diagram/ERDDiagram.jpeg?raw=true" />
</p>

## 🚀 How To Build & Run Project

### 1️⃣ Clone Repository
```bash
1. Git clone this repo
   
   ```$ git clone https://github.com/example/perpustakaan.git```
2. Run composer install to install dependencies
   
   ```$ composer install```
3. Run Docker Compose
   
   ```$ docker-compose up -d```
4. Run migrate
   
   ```$ php artisan migrate:fresh```
5. Generate key
   
   ```$ php artisan key:generate```
6. (Optional) run seeder
   
   ```$ php artisan db:seed```
7. Run the program

   ```$ php artisan serve```
