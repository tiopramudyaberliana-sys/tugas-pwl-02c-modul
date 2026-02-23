# 📚 Quiz Evaluasi: Controller & Routing (Modul 5) 
**Mata Kuliah:** Pemrograman Web Lanjut (Laravel 12)   
**Nama:** Tio Pramudya
**NIM:** [43240444]   
**Kampus:** STMIK IKMI Cirebon 

--- 

## 🛠️ Tugas yang Dikerjakan 
Penyelesaikan kuis praktikum mandiri dengan rincian sebagai berikut: 
1. **Resource Controller:** Membuat `BukuController` untuk manajemen koleksi perpustakaan. 
2. **Resource Routing:** Mendaftarkan rute tunggal `/koleksi` yang mencakup 7 method standar CRUD. 
3. **Data Binding:** Mengirim data array judul buku dari Controller ke View menggunakan Laravel Blade. 
4. **Dynamic URL:** Mengimplementasikan parameter ID pada method `show` untuk menampilkan detail buku secara dinamis. 

--- 

## 🚀 Cara Menjalankan Proyek 
Untuk memeriksa hasil pekerjaan, silakan ikuti langkah berikut: 

1. **Halaman Daftar Buku:** Akses URL: `http://localhost:8000/koleksi`   
*Output: Menampilkan list judul buku menggunakan @foreach.* 2. **Halaman Detail Buku:** Akses URL: `http://localhost:8000/koleksi/{id}` (Contoh: `/koleksi/101`)   
*Output: Menampilkan teks detail buku sesuai ID yang dimasukkan.* 3. **Cek List Rute:** Jalankan perintah berikut di terminal: 
```bash 
php artisan route:list --path=koleksi