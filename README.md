<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo">
  </a>
</p>

<h1 align="center">Idealyst</h1>
<p align="center">
  A modern web-based decision support system using Laravel, Inertia.js, and Vue 3. Built for intelligent prioritization and evaluation powered by the AHP method.
</p>

<p align="center">
  <a href="https://github.com/yourusername/idealyst/actions"><img src="https://github.com/yourusername/idealyst/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/yourusername/idealyst"><img src="https://img.shields.io/packagist/v/yourusername/idealyst" alt="Latest Stable Version"></a>
  <a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/github/license/yourusername/idealyst" alt="License: MIT"></a>
</p>

---

## 🧠 About Idealyst

**Idealyst** adalah platform digital berbasis Laravel yang dirancang untuk memfasilitasi mahasiswa dalam mengembangkan ide startup, memantau perkembangan, hingga menampilkan karya mereka secara publik.

---

## ✨ Fitur Utama

-   Pengajuan ide secara terstruktur
-   Sistem milestone & progress monitoring
-   Galeri publik untuk showcase startup
-   Role-based system (Mahasiswa, Admin, Publik)
-   Event & Workshop untuk pengembangan founder

---

## 🧱 Tech Stack

| Layer        | Teknologi                      |
| ------------ | ------------------------------ |
| Backend      | Laravel 12                     |
| Frontend     | Inertia.js + Vue 3             |
| UI Framework | Tailwind CSS                   |
| Build Tool   | Vite                           |
| Database     | MySQL                          |
| Auth         | Laravel Breeze (API + Inertia) |

---

## ⚙️ Instalasi Lokal

```bash
# Clone repositori
git clone https://github.com/yourusername/idealyst.git
cd idealyst

# Install dependency Laravel
composer install

# Install dependency Frontend
npm install && npm run dev

# Copy .env dan generate key
cp .env.example .env
php artisan key:generate

# Atur koneksi database di .env lalu migrasi
php artisan migrate

# Jalankan server lokal
php artisan serve
```
