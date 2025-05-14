<h1 align="center">GreenCart</h1>
<br>
<h3 align="center">Platform Penjualan Tanaman</h3>
<p align="center">
  <img src="https://github.com/user-attachments/assets/7bc336f0-571c-4922-91a4-474f00180862" alt="Logo unsulbar" width="200"/>
</p>

<p align="center">
  <strong>NURUL IMANIAR</strong><br/><br/>
  <strong>D0223010</strong><br/><br/>
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
| Fitur                     | Deskripsi                                          |
|---------------------------|----------------------------------------------------|
| Login                     | Masuk ke akun                                      |
| Cari dan lihat tanaman    | Menjelajahi etalase dan mencari tanaman            |
| Tambah ke keranjang       | Memilih produk untuk dibeli                        |
| Checkout & buat pesanan   | Melakukan pembelian dan konfirmasi transaksi       |
| Riwayat transaksi         | Melihat semua pesanan sebelumnya                   |

## 🛠️ Admin
| Fitur                        | Deskripsi                                              |
|-----------------------------|---------------------------------------------------------|
| Login ke dashboard          | Akses ke backend/admin panel                            |
| CRUD produk tanaman         | Tambah, edit, hapus tanaman                             |
| CRUD kategori tanaman       | Tambah, edit, hapus kategori tanaman                    |
| Kelola transaksi            | Melihat dan memverifikasi pesanan dari customer         |
| Manajemen pengguna (opsional) | Mengelola data customer (edit/hapus akun)             |

<h3>Tabel-tabel Database dan Struktur</h3>

### Tabel Users
| Kolom      | Tipe      | Keterangan                        |
|------------|-----------|-----------------------------------|
| id         | bigint    | Primary key                       |
| name       | string    | Nama pengguna                     |
| email      | string    | Email unik untuk login            |
| password   | string    | Password terenkripsi              |
| role       | enum      | admin / customer                  |
| created_at | timestamp |                                   |
| updated_at | timestamp |                                   |

### Tabel Profiles (One to One)
| Kolom      | Tipe      | Keterangan                        |
|------------|-----------|-----------------------------------|
| id         | bigint    | Primary key                       |
| user_id    | foreign   | Relasi unik ke tabel users        |
| address    | string    | Alamat lengkap pengguna           |
| phone      | string    | Nomor HP pengguna                 |
| created_at | timestamp |                                   |
| updated_at | timestamp |                                   |

### Tabel Categories
| Kolom      | Tipe      | Keterangan         |
|------------|-----------|--------------------|
| id         | bigint    | Primary key        |
| name       | string    | Nama kategori      |
| created_at | timestamp |                    |
| updated_at | timestamp |                    |

### Tabel Products
| Kolom       | Tipe      | Keterangan                         |
|-------------|-----------|------------------------------------|
| id          | bigint    | Primary key                        |
| name        | string    | Nama tanaman                       |
| category_id | foreign   | Relasi ke tabel categories         |
| price       | integer   | Harga tanaman                      |
| stock       | integer   | Jumlah stok tersedia               |
| image       | string    | Path gambar                        |
| description | text      | Deskripsi tanaman                  |
| created_at  | timestamp |                                    |
| updated_at  | timestamp |                                    |

### Tabel Tags (Many to Many)
| Kolom      | Tipe      | Keterangan                  |
|------------|-----------|-----------------------------|
| id         | bigint    | Primary key                 |
| name       | string    | Nama tag (contoh: 'indoor') |
| created_at | timestamp |                             |
| updated_at | timestamp |                             |

### Tabel Product_Tag (Pivot)
| Kolom      | Tipe      | Keterangan                                   |
|------------|-----------|----------------------------------------------|
| product_id | foreign   | Relasi ke tabel products                     |
| tag_id     | foreign   | Relasi ke tabel tags                         |

### Tabel Orders
| Kolom      | Tipe      | Keterangan                          |
|------------|-----------|-------------------------------------|
| id         | bigint    | Primary key                         |
| user_id    | foreign   | Relasi ke tabel users (customer)    |
| status     | enum      | pending / paid                      |
| created_at | timestamp |                                     |
| updated_at | timestamp |                                     |

### Tabel Order_Items
| Kolom      | Tipe      | Keterangan                                     |
|------------|-----------|------------------------------------------------|
| id         | bigint    | Primary key                                    |
| order_id   | foreign   | Relasi ke tabel orders                         |
| product_id | foreign   | Relasi ke tabel products                       |
| quantity   | integer   | Jumlah yang dibeli                             |
| price      | integer   | Harga per item saat transaksi                  |
| total      | integer   | quantity × price (total harga untuk item tsb)  |
| created_at | timestamp |                                                |
| updated_at | timestamp |                                                |

<h3>Relasi Antar Tabel – Sistem GreenCart</h3>

| Tabel Asal    | Tabel Tujuan     | Jenis Relasi    | Keterangan                                         |
|---------------|------------------|----------------|-----------------------------------------------------|
| users         | orders           | One to Many    | Customer dapat memiliki banyak pesanan              |
| users         | profiles         | One to One     | Setiap user memiliki satu profil tambahan           |
| orders        | order_items      | One to Many    | Satu pesanan terdiri dari banyak item               |
| products      | order_items      | One to Many    | Produk dapat muncul di banyak transaksi             |
| categories    | products         | One to Many    | Kategori memiliki banyak produk                     |
| products      | tags             | Many to Many   | Produk bisa memiliki banyak tag                     |
| tags          | products         | Many to Many   | Tag bisa digunakan oleh banyak produk               |
| order_items   | products         | Many to One    | Banyak item mengarah ke satu produk                 |
| order_items   | orders           | Many to One    | Banyak item dalam satu pesanan                      |
| products      | categories       | Many to One    | Produk berasal dari satu kategori                   |
| orders        | users            | Many to One    | Pesanan milik satu customer                         |
| profiles      | users            | One to One     | Profil hanya untuk satu user                        |
