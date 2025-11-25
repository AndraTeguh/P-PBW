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

## 📝 Tugas

### Tugas 1 : Implementasi Dasar

#### 1. Tampilan Panel Admin

<img width="1920" height="1020" alt="Image" src="https://github.com/user-attachments/assets/ea63aba9-bf23-4072-911f-e1ce3934a152" />

#### 2. Tampilan List Books dengan data terseed

<img width="1920" height="1020" alt="Image" src="https://github.com/user-attachments/assets/4bbd18f8-841e-4c3b-ab89-81c2e3d87c54" />

#### 3. Tampilan Form Create Book

<img width="1920" height="1020" alt="Image" src="https://github.com/user-attachments/assets/b04b13f6-5e08-4c76-82b2-6c0f04e3681a" />

#### 4. Tampilan Hasil Pencarian

<img width="1920" height="1020" alt="Image" src="https://github.com/user-attachments/assets/99641bc9-c0fb-4112-a2b2-dc801bb266c7" />

#### 5. Tampilan Filter Aktif

<img width="1920" height="1020" alt="Image" src="https://github.com/user-attachments/assets/aa2ac4e3-fb6b-4c91-9c13-f592ff1edd50" />

### Tugas 2 : Kustomisasi dan Pengembangan

#### 1. Tambah Field Description

##### - Tampilan Deskripsi di Tabel

<img width="1920" height="1020" alt="Cuplikan layar 2025-11-21 104747" src="https://github.com/user-attachments/assets/f27a392e-e2ef-445a-827e-b46c21399a97" />

##### - Tampilan Deskripsi di Form Edit

<img width="1920" height="1020" alt="Cuplikan layar 2025-11-21 104712" src="https://github.com/user-attachments/assets/964f904b-a724-471e-a5ea-df1a990b31ba" />

##### - Tampilan Deskripsi di View Book

<img width="1920" height="1020" alt="Cuplikan layar 2025-11-21 104646" src="https://github.com/user-attachments/assets/f4c18f7e-3db0-453c-af05-4d099ccb444b" />

#### 2. Implementasi Role-Based Access

##### - Tampilan Admin

a. Tampilan Dashboard
<img width="1920" height="1020" alt="image" src="https://github.com/user-attachments/assets/6ac99a76-d725-4b85-be19-2c5c11ab6d87" />

b. Tampilan List Book
<img width="1920" height="1020" alt="image" src="https://github.com/user-attachments/assets/89bdd846-faba-45c9-8b0b-d5914eaee3af" />

2. Tampilan Staff

a. Tampilan Dashboard
<img width="1920" height="1020" alt="image" src="https://github.com/user-attachments/assets/5c433bef-06bf-4b82-9f3d-c04097bbc898" />

b. Tampilan List Book
<img width="1920" height="1020" alt="image" src="https://github.com/user-attachments/assets/3251df08-b40d-40c0-9460-fdf4ee0ff396" />

##### - Tampilan Viewer

a. Tampilan Dashboard
<img width="1920" height="1020" alt="image" src="https://github.com/user-attachments/assets/c96081fc-da1a-4a15-ba70-49e7d70989eb" />

b. Tampilan List Book
<img width="1920" height="1020" alt="image" src="https://github.com/user-attachments/assets/c03caa0a-a485-4012-91dc-2a6aceef069f" />

#### 3. Implementasi Role-Based Access

1. Tampilan Widget

<img width="1920" height="1020" alt="image" src="https://github.com/user-attachments/assets/6ac99a76-d725-4b85-be19-2c5c11ab6d87" />

#### 4. Tambah Kategori Buku

1. Tampilan Kategori di Tabel

<img width="1920" height="1020" alt="Cuplikan layar 2025-11-21 104747" src="https://github.com/user-attachments/assets/f27a392e-e2ef-445a-827e-b46c21399a97" />

2. Tampilan Kategori di Form Edit

<img width="1920" height="1020" alt="Cuplikan layar 2025-11-21 104712" src="https://github.com/user-attachments/assets/964f904b-a724-471e-a5ea-df1a990b31ba" />

3. Tampilan Kategori di View Book

<img width="1920" height="1020" alt="Cuplikan layar 2025-11-21 104646" src="https://github.com/user-attachments/assets/f4c18f7e-3db0-453c-af05-4d099ccb444b" />

### Tugas 3 : Analisis dan Dokumentasi

#### 1. Penjelasan Arsitektur

##### 📌 ERD

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
