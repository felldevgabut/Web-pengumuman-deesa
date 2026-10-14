# PRODUCT REQUIREMENTS DOCUMENT (PRD)
## Website Pengumuman Lingkungan IV

---

**Nama Proyek :** Website Pengumuman & Galeri Lingkungan IV
**Dibuat Oleh  :** Rafel Aldino
**Tanggal      :** 10-10-2026

---

## A. Latar Belakang

Website ini dibuat sebagai media informasi digital bagi warga
Lingkungan IV. Website menampilkan pengumuman resmi dalam
bentuk dokumen dan foto-foto produk UMKM warga
secara dinamis dari database.

---

## B. Tujuan Proyek

1. Menampilkan daftar dokumen pengumuman kepada warga.
2. Menampilkan galeri foto kegiatan dan UMKM warga.
3. Data yang tampil diambil secara otomatis dari database MySQL.

---

## C. Teknologi yang Digunakan

| Komponen       | Teknologi           |
|----------------|---------------------|
| Bahasa Backend | PHP Native          |
| Database       | MySQL (phpMyAdmin)  |
| Bahasa Frontend| HTML & CSS          |
| Server Lokal   | XAMPP (Apache)      |

---

## D. Pengguna Sistem

**1. Pengunjung (Warga)**
- Hanya dapat melihat konten website.
- Dapat mengklik dokumen untuk membuka atau mengunduh file.

**2. Admin (Petugas)**
- Mengelola data dokumen dan foto melalui phpMyAdmin secara manual.

---

## E. Struktur Folder Project

```
Web pengumuman deesa/
 ├── admin/ (Ga di pakai dulu)
 ├── identifikasi/
 |    |── admin.jpg  ← logo admin
 |    |── identifikasi.css 
 |    |── identifikasi.html ← halaman login identifikasi user / admin
 |    |── user.jpg ← logo pengguna
 |
 ├── user/
 │    ├── userlogin.html  ← halaman login warga
 │    ├── userlog.css     ← style login warga
 │    ├── passworduser.js ← validasi login warga
 │    ├── index.php       ← halaman utama warga
 │    └── index.css
 ├── uploads/
 │    ├── dokumen/    ← file PDF, Word, Excel, PPT
 │    └── galeri/     ← file foto JPG, PNG
 └── koneksi.php
```

---

## F. Struktur Database

**Nama Database:** `web_desa`

### Tabel 1 — dokumen_pengumuman

| No | Nama Kolom     | Tipe Data    | Keterangan              |
|----|----------------|--------------|-------------------------|
| 1  | id             | INT          | Primary Key, Auto Inc.  |
| 2  | Nama_Dokumen   | VARCHAR(90)  | Judul dokumen           |
| 3  | Jenis_Dokumen  | VARCHAR(90)  | pdf / docx / xlsx / ppt |
| 4  | Tanggal_Upload | DATE         | Tanggal upload          |
| 5  | file_dokumen   | VARCHAR(255) | Nama file fisik         |

### Tabel 2 — gallery_umkm

| No | Nama Kolom     | Tipe Data   | Keterangan             |
|----|----------------|-------------|------------------------|
| 1  | id             | INT         | Primary Key, Auto Inc. |
| 2  | Judul_Foto     | VARCHAR(90) | Nama / keterangan foto |
| 3  | Tanggal_Upload | DATE        | Tanggal upload         |
| 4  | file_foto      | VARCHAR(90) | Nama file fisik        |

---

## G. Fitur Website

### 1. Halaman Login Warga (user/userlogin.html)
- Form login autentikasi pengguna warga sebelum masuk ke beranda.
- Input form: Username & Password.
- Kredensial Pengguna:
    - **Username :** `user`
    - **Password :** `iv`
- Validasi: Berhasil → diarahkan ke `index.php`; Gagal → alert peringatan.
- Navigasi: Terdapat tombol kembali ke halaman pilihan peran (`identifikasi.html`).

### 2. Halaman Utama (user/index.php)

**Section 1 — Beranda**
- Menampilkan judul dan deskripsi singkat website.
- Terdapat tombol menuju bagian Pengumuman dan Galeri.
- Tampilan memenuhi satu layar penuh.

Section 2 — Pengumuman Dokumen
- Menampilkan daftar dokumen dari database.
- Setiap item menampilkan ikon tipe file, nama dokumen,
  dan tombol "Buka".
- Klik item → file terbuka di tab baru.
- Ikon menyesuaikan jenis file:
    - PDF    → 📕
    - Word   → 📘
    - Excel  → 📗
    - PPT    → 📙
    - Lainnya→ 📄

Section 3 — Galeri Foto
- Menampilkan foto dari database dalam format grid.
- Setiap kartu foto menampilkan gambar dan judul di bawahnya.

---

## H. Alur Kerja Input Data (Manual)

```
1. Siapkan file dokumen / foto di komputer.
         ↓
2. Copy file ke folder uploads/dokumen/ atau uploads/galeri/
         ↓
3. Buka phpMyAdmin → tabel yang sesuai → klik "Tambahkan"
         ↓
4. Isi kolom: nama, jenis, tanggal, dan nama file fisik
         ↓
5. Simpan → data langsung tampil di website ✓
```

---

## I. Desain & Tampilan

| Elemen         | Keterangan                              |
|----------------|-----------------------------------------|
| Font           | Segoe UI / Tahoma / Verdana             |
| Warna Utama    | Biru (#0f78ce)                          |
| Warna Gelap    | Biru Tua (#064b8a) untuk gradient       |
| Background     | Abu-abu sangat terang (#f0f4f8)         |
| Layout Section | Setiap section memenuhi 1 layar (100vh) |
| Animasi        | Minimal (hanya efek hover halus)        |

---

## J. Kriteria Selesai (Definition of Done)

Proyek dinyatakan selesai apabila:

- [ ] Halaman dapat dibuka di localhost tanpa error.
- [ ] Section Beranda tampil fullscreen dengan background biru.
- [ ] List dokumen muncul secara otomatis dari database.
- [ ] Klik dokumen berhasil membuka/mengunduh file.
- [ ] Foto galeri tampil secara otomatis dari database.
- [ ] Tampilan CSS rapi dan tidak ada error visual.

---

*— Akhir Dokumen PRD —*
