<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 📄 Plotlist — Job Listing & Recruitment Platform

**Plotlist** is a web-based recruitment platform that helps **recruiters post listings** and **candidates apply to jobs** with a CV and motivation letter.  
Built with **Laravel**, **MySQL**, **Tailwind**, **Bootstrap**, and **Alpine.js**, the platform delivers a role-based experience and a clean, responsive UI for all users.

---

## 🚀 Features

- 📄 **Manage Job Listings** — Recruiters can create, edit, and delete job offers.
- 🧑‍💼 **Apply with CV + Motivation Letter** — Candidates can upload documents directly to listings.
- 🔍 **Advanced Filtering** — Guests and users can filter listings by keywords, categories, and roles.
- 🧑‍🔒 **Role-Based Interface** — Admins, recruiters, and candidates each get a custom dashboard.
- 👀 **Public Listings Access** — All visitors can browse listings without an account.
- 💾 **Session-Based Authentication** — Secure login & role-based access using Laravel sessions.

---

## 🛠️ Tech Stack

- **Backend**: Laravel (PHP)
- **Database**: MySQL
- **Frontend**: Tailwind CSS, Bootstrap, Alpine.js
- **Authentication**: Session-based login system

---

## 📸 Demo Screenshots

### 🏠 Homepage
![Homepage](./public/assets/images/homepage.png)

---

## ⚙️ Installation & Setup

```bash
# Clone the repository
git clone https://github.com/yourusername/plotlist.git
cd plotlist

# Install PHP dependencies
composer install

# Copy environment file
cp .env.example .env

# Configure your .env (DB credentials, app URL, etc.)

# Generate app key
php artisan key:generate

# Run database migrations
php artisan migrate

# Serve the app
php artisan serve



