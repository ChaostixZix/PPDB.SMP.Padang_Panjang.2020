# Pendaftaran Peserta Didik Baru App Readme

## Deskripsi Aplikasi
Aplikasi "Pendaftaran Peserta Didik Baru" ini dirancang untuk memfasilitasi proses pendaftaran peserta didik baru di Sekolah Menengah Pertama (SMP) di Padang Panjang, Indonesia. Aplikasi ini memungkinkan pengguna untuk melihat informasi terkait pengumuman, zonasi, pindah tugas, afirmasi, dan prestasi di berbagai SMP yang terdaftar.

## Controllers

### SMPController.php
- **index()**: Mengambil semua data SMP dan merender tampilan 'Pengumuman/SMP/ListSMP'.
- **pengumuman($zon_id)**: Mengambil data SMP tertentu dan merender tampilan 'Pengumuman/SMP/PengumumanSMP'.
- **zonasi($zon_id)**: Mengambil data SMP dan pendaftar tertentu dan merender tampilan 'Pengumuman/SMP/Zonasi'.
- **pindahtugas($zon_id)**: Mengambil data SMP dan pendaftar tertentu dan merender tampilan 'Pengumuman/SMP/PindahTugas'.
- **afirmasi($zon_id)**: Mengambil data SMP dan pendaftar tertentu dan merender tampilan 'Pengumuman/SMP/Afirmasi'.
- **prestasi($zon_id)**: Mengambil data SMP dan pendaftar tertentu dan merender tampilan 'Pengumuman/SMP/Prestasi'.

## Models

### Zonasi.php
- **getPendaftarBySekolah($zon_id)**: Mengambil data pendaftar berdasarkan zona sekolah dan mengembalikan array yang berisi berbagai data terkait pendaftar.

## Fitur Aplikasi
- Aplikasi ini memungkinkan pengguna untuk:
  - Melihat daftar SMP.
  - Melihat pengumuman terkait SMP.
  - Melihat data zonasi SMP dan pendaftar.
  - Melihat data pindah tugas SMP dan pendaftar.
  - Melihat data afirmasi SMP dan pendaftar.
  - Melihat data prestasi SMP dan pendaftar.

## Teknologi yang Digunakan
- Aplikasi ini menggunakan teknologi berikut:
  - Laravel Framework untuk backend.
  - Inertia.js untuk rendering tampilan.
  - MySQL sebagai basis data.