<!-- <!-- <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development/)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). -->
 -->


<h1 align="center">GreenCart</h1>
<br>
<h3 align="center">Platform Penjualan Tanaman </h3>
<p align="center">
  <img src="https://github.com/user-attachments/assets/7bc336f0-571c-4922-91a4-474f00180862" alt="Logo unsulbar" width="200"/>
</p>

<p align="center">
  <strong>NURUL IMANIAR</strong><br/><br/>
  <strong>D002210</strong><br/><br/>
  <strong>Framework Based Web</strong><br/><br/>
  <strong>2025</strong>
</p>

<h3>Role dan Fitur</h3>

## 👥 Guest
| Fitur               | Deskripsi                                   |
|--------------------|----------------------------------------------|
| Lihat daftar tanaman | Menampilkan semua tanaman yang tersedia    |
| Detail tanaman     | Melihat informasi lengkap dari suatu tanaman |
| Registrasi & Login | Akses ke fitur khusus Customer               |

## 🛍️ Customer
| Fitur                     | Deskripsi                                             |
|---------------------------|-------------------------------------------------------|
| Login                     | Masuk ke akun                                         |
| Cari dan lihat tanaman    | Menjelajahi etalase dan mencari tanaman               |
| Tambah ke keranjang       | Memilih produk untuk dibeli                           |
| Checkout & buat pesanan   | Melakukan pembelian dan konfirmasi transaksi          |
| Riwayat transaksi         | Melihat semua pesanan sebelumnya                      |

## 🛠️ Admin
| Fitur                        | Deskripsi                                              |
|-----------------------------|---------------------------------------------------------|
| Login ke dashboard          | Akses ke backend/admin panel                            |
| CRUD produk tanaman         | Tambah, ubah, hapus tanaman                             |
| CRUD kategori tanaman       | Tambah, ubah, hapus kategori tanaman                    |
| Kelola transaksi            | Melihat dan memverifikasi pesanan dari customer         |
| Manajemen pengguna (opsional) | Mengelola data customer (edit/hapus akun)             |

---

<h3>Tabel-tabel Database dan Tipenya</h3>

<h3>Tabel users</h3>

| Kolom        | Tipe      | Keterangan                          |
|--------------|-----------|-------------------------------------|
| id           | bigint    | Primary key                         |
| name         | string    | Nama pengguna                       |
| email        | string    | Unik, untuk login                   |
| password     | string    | Password terenkripsi                |
| role         | enum      | admin / customer                    |
| created_at   | timestamp |                                     |
| updated_at   | timestamp |                                     |

<h3>Tabel products</h3>

| Kolom        | Tipe      | Keterangan                                 |
|--------------|-----------|--------------------------------------------|
| id           | bigint    | Primary key                                |
| name         | string    | Nama tanaman                               |
| category_id  | foreign   | ID dari kategori tanaman                   |
| price        | integer   | Harga satuan                               |
| stock        | integer   | Jumlah stok tersedia                       |
| image        | string    | Path ke gambar                             |
| description  | text      | Deskripsi tanaman                          |
| created_at   | timestamp |                                            |
| updated_at   | timestamp |                                            |

<h3>Tabel categories</h3>

| Kolom        | Tipe      | Keterangan             |
|--------------|-----------|------------------------|
| id           | bigint    | Primary key            |
| name         | string    | Nama kategori          |
| created_at   | timestamp |                        |
| updated_at   | timestamp |                        |

<h3>Tabel orders</h3>

| Kolom        | Tipe      | Keterangan                                    |
|--------------|-----------|-----------------------------------------------|
| id           | bigint    | Primary key                                   |
| user_id      | foreign   | ID dari pengguna (customer)                   |
| total        | integer   | Total harga pesanan                           |
| status       | enum      | pending / paid                                |
| created_at   | timestamp |                                               |
| updated_at   | timestamp |                                               |

<h3>Tabel order_items</h3>

| Kolom        | Tipe      | Keterangan                                     |
|--------------|-----------|------------------------------------------------|
| id           | bigint    | Primary key                                    |
| order_id     | foreign   | ID dari order                                  |
| product_id   | foreign   | ID dari produk yang dibeli                     |
| quantity     | integer   | Jumlah item                                    |
| price        | integer   | Harga per item saat transaksi                  |
| created_at   | timestamp |                                                |
| updated_at   | timestamp |                                                |

---
aa
<h3>Relasi Antar Tabel – Sistem GreenCart</h3>

| Tabel Asal  | Tabel Tujuan | Jenis Relasi   | Keterangan                                          |
|-------------|---------------|----------------|----------------------------------------------------|
| users       | orders        | One to Many   | Customer dapat memiliki banyak pesanan              |
| orders      | order_items   | One to Many   | Satu pesanan terdiri dari banyak produk             |
| products    | order_items   | One to Many   | Produk dapat muncul di banyak transaksi             |
| categories  | products      | One to Many   | Kategori memiliki banyak produk                     |

---

Apakah kamu ingin versi ini dijadikan README untuk GitHub atau file .docx juga?
