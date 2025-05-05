
<h1 align="center">GreenCart</h1>
<br>
<h3 align="center">Platform Penjualan Tanaman </h3>
<p align="center">
  <img src="https://github.com/user-attachments/assets/7bc336f0-571c-4922-91a4-474f00180862" alt="Logo unsulbar" width="200"/>
</p>

<p align="center">
  <strong>NURUL IMANIAR</strong><br/><br/>
  <strong>D00223010</strong><br/><br/>
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

<h3>Relasi Antar Tabel – Sistem GreenCart</h3>

| Tabel Asal  | Tabel Tujuan | Jenis Relasi   | Keterangan                                          |
|-------------|---------------|----------------|----------------------------------------------------|
| users       | orders        | One to Many   | Customer dapat memiliki banyak pesanan              |
| orders      | order_items   | One to Many   | Satu pesanan terdiri dari banyak produk             |
| products    | order_items   | One to Many   | Produk dapat muncul di banyak transaksi             |
| categories  | products      | One to Many   | Kategori memiliki banyak produk                     |

---
