# 🏫 Pertemuan 9 - Aplikasi Manajemen Buku

## 🧑‍💻 Identitas

-   _Nama_: Andra Teguh Ramadhan
-   _NPM_: 4523210017
-   _Mata Kuliah_: Prak. Pemrograman Berbasis Web

# 📖 Deskripsi Aplikasi

Pada praktikum ini, mahasiswa akan membangun Sistem Manajemen Buku menggunakan Laravel dan Filament 3.x. Aplikasi menyediakan fitur lengkap:

-   CRUD Buku & Penulis
-   Upload cover buku
-   Pencarian & Filtering
-   Tabel Interaktif
-   Dashboard admin berbasis filament

## 🎯 Tentang Aplikasi

Tujuan dari Praktikum hari ini adalah:

-   Menerapkan konsep MVC menggunakan Laravel
-   Menghubungkan model dengan relasi One-to-Many
-   Mengelola data dinamis di Blade Template
-   Membuat form input dan menyimpan data komentar ke database
-   Memahami cara kerja routing, controller, dan view secara terintegrasi

## 🚀 Langkah-Langkah Praktikum (Versi Singkat & Inti Penting)

1. Setup Project dan instalasi
2. Membuat Model dan Migration
3. Factory & Seeder
4. Membuat Filament Resource
5. Testing Fitur

## 📝 Tugas 3

### 1. Penjelasan Arsitektur

#### 📌 ERD

![![ERD Diagram][public\image\ERD.png]](public/image/ERD.png)

#### 🔗 Penjelasan Relasi Antar Tabel

-   **Author → Book (One-to-Many)**
    -   Satu Author dapat memiliki banyak Book
    -   Foreign key: `books.author_id → authors.id`
-   **Book → Category (Many-to-Many)**
    -   Buku bisa memiliki banyak kategori dan sebaliknya
    -   Tabel pivot: `book_category`
-   Tabel sistem Laravel seperti `users`, `jobs`, `sessions`, dsb. tidak berhubungan langsung dengan domain utama (Books), namun mendukung sistem aplikasi.

#### 🔄 Penjelasan Flow Aplikasi

1. **Login** melalui `/admin/login`
2. **Dashboard** menampilkan statistik (Total Books, Total Authors, Status Chart)
3. **Books Management**
    - CRUD
    - Upload cover image
    - Assign author & multiple categories
4. **Authors Management**
    - CRUD + relasi buku
5. **Categories Management**
    - CRUD + many-to-many ke buku
6. **Authorization**
    - Admin: full akses
    - Staff: create, read, update
    - Viewer: hanya read

---

### 2. Perbandingan Pendekatan Tradisional

#### ⚖️ Filament vs Manual CRUD

| Aspek                        | Filament         | Manual Laravel MVC  |
| ---------------------------- | ---------------- | ------------------- |
| Waktu Development            | Sangat cepat     | Lebih lama          |
| UI                           | Sudah disediakan | Build dari awal     |
| Validasi Form                | Otomatis         | Manual              |
| Relasi + Search + Pagination | Built-in         | Implementasi manual |
| Cocok untuk admin panel?     | ✔                | ✔                   |

#### ⭐ Kelebihan & Kekurangan

**Kelebihan Filament**

-   CRUD cepat, hampir tanpa boilerplate
-   UI responsif & modern
-   Authorization & upload otomatis
-   Banyak komponen siap pakai (tables, forms, widgets)

**Kekurangan Filament**

-   Tidak ideal untuk UI publik
-   Kustomisasi UI terbatas
-   Bergantung pada Livewire + Filament ecosystem

#### 🎯 Kapan Sebaiknya Digunakan?

Gunakan **Filament** jika:

-   Admin panel internal
-   Data management yang heavy CRUD
-   Butuh build cepat (MVP / prototype)

Gunakan **Manual** jika:

-   UI publik dengan branding khusus
-   SPA atau mobile-first

---

### 3. Refleksi Pembelajaran

#### 📚 Apa yang Dipelajari

-   Penerapan Laravel Filament
-   Membuat CRUD yang lebih efisien
-   Relasi One-to-Many & Many-to-Many
-   Upload file, storage, factory & seeder
-   Implementasi Role-Based Access Control
-   Dashboard statistik dengan widget Filament

#### ⚠️ Kesulitan & Cara Mengatasinya

| Kendala                         | Solusi                                                                                                            |
| ------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| Widget layout tidak pas         | Menggabungkan statistik Total Books & Total Authors dalam satu widget `BookStatsWidget` agar alignment lebih rapi |
| Relasi kategori tidak tersimpan | Memahami pivot table + `sync()`                                                                                   |
| Policy tidak berjalan           | Recheck definisi role & binding policy                                                                            |

#### 🚀 Rencana Pengembangan Selanjutnya

-   Sistem peminjaman & pengembalian buku
-   Fitur katalog publik untuk pengunjung
-   Log aktivitas pengguna

[def]: public/images/ERD.png
