# Aplikasi

Pelestarian bahasa daerah sumbawa (bahasa samawa) melalui pemanfaatan e-learning dalam inovasi pembelajaran bagi anak usia remaja

## TODO

-   handle redirect saat tambah pertanyaan

## NOTE

-   UI/UX tidak boleh kaku pelajari psycology warna, layout dll
-   APP FLOW (Gunakan chatGPT untuk ubah mermaid - masih kurang warna, ilustrasi dan variasi)
    Untuk mengimplementasikan halaman dan fitur yang Anda sebutkan ke dalam aplikasi, Anda perlu merancang dan membuat beberapa menu utama serta sub-menu. Berikut adalah struktur menu yang harus Anda buat:

# Menu yang Sudah Ada:

1. Home
2. Dashboard
3. Course
4. My Course
5. Profile
6. Course Detail
7. Course Test
8. Test Result

### Menu Utama

1. **Kategori**

    - **Kategori** (Tampilkan daftar kategori)
        - Hero section: Nama kategori, thumbnail, jumlah kelas, button CTA "Mulai Belajar"
    - **Pilih Kategori** (Daftar kelas dalam kategori)
        - Kelas: Nama, thumbnail, jumlah siswa, author/guru, kategori, level kelas (pemula/lanjutan)

2. **Kelas**

    - **Pilih Kelas** (Detail kelas yang dipilih)
        - Hero section: Nama kelas, thumbnail, jumlah siswa, author/guru, kategori, level kelas (pemula/lanjutan)
        - Back to top button
        - Navbar background change on scroll
        - Accordion section untuk materi kelas pada tampilan mobile
        - Download sertifikat (jika progress 100%)
        - Progress bar untuk persentase belajar
        - Informasi jumlah sesi, siswa, author/guru, kategori, level kelas
        - Pre-test dan post-test (dengan countdown, daftar soal, soal dengan radio button dan textarea, tombol prev, next, dan selesai)
        - Halaman hasil ujian setelah pre/post test (detail siswa, keterangan ujian, jumlah soal, score, jawaban benar dan salah)
        - Path learning (best recommendation) di bawah detail kelas

3. **Kelas Saya**

    - **Landing Page User** (Sambutan dan gambaran kelas)
        - Sambutan
        - Gambaran kelas
        - Form filter search
        - Daftar kelas dalam bentuk card (4 card dalam 1 baris): thumbnail, nama kelas, CTA "Continue Learning", jumlah siswa, join date
        - Pagination

4. **Setting**
    - **Profile** (Form update profile)
    - **Sertifikat**
        - Form filter search
        - Daftar sertifikat dalam bentuk card (4 card dalam 1 baris): thumbnail, nama kelas, CTA "Download Sertifikat"
        - Pagination

-   **Auth (Authentication)**

    -   Manual login, register, reset password, panduan
    -   Google Socialite login

-   **Tonjolkan bagian penilaian siswa**
-   **Tutor dengan banyak kelas**

    -   Pendahuluan sebelum sesi (kata sambutan)
    -   Sesi 1 sampai n (setiap sesi ada thumbnail)
    -   Progress bar berdasarkan sesi
    -   Forum diskusi tiap sesi
    -   Kehadiran
    -   Quiz pre-test dan post-test
    -   Dashboard kelas: daftar siswa, hasil tes setiap siswa, final score
    -   Chat private, DM, group
    -   Dashboard super admin untuk siswa/i dan tutor/guru
    -   Right sidebar berisi sesi jika pada halaman sesi dan kelas pada halaman kelas, pengumuman bisa ambil 5 terbaru dll

-   **Teacher**

    -   Banyak kelas
    -   Akses chat (DM, Group)

-   **Classes**

    -   Thumbnail, title, content, pre-test, post-test, progress average session
    -   Dashboard: total test, progress, total siswa, leaderboard point
    -   Banyak test
    -   Banyak sesi
    -   Forum dengan notifikasi

-   **Session**
    -   Thumbnail, title, content (bisa link media library)
    -   Pre-test, post-test
    -   Banyak lampiran
    -   Forum
    -   Attendance

1. **Dashboard**

    - **Super Admin**
        - Statistik siswa/i (jumlah total siswa, kelas yang diikuti, hasil tes, dll)
        - Statistik tutor/guru (jumlah kelas yang diampu, performa pengajaran, dll)
    - **Siswa**
        - Progress belajar, total kelas, hasil tes, pengumuman terbaru
    - **Guru**
        - Daftar kelas yang diampu, statistik kelas (total test, progress, total siswa, leaderboard point)

2. **Auth (Authentication)**

    - Manual login, register, reset password, panduan
    - Google Socialite login

3. **Kelas**

    - **Manajemen Kelas**
        - Tambah, ubah, hapus kelas
        - Assign materi ke kelas
        - Tambah final test untuk kelas
        - Request atau assign siswa ke kelas
    - **Detail Kelas**
        - Thumbnail, title, content, pre-test, post-test, progress average session
        - Statistik kelas: total test, progress, total siswa, leaderboard point
        - Daftar sesi: setiap sesi ada thumbnail, forum diskusi, lampiran materi, pre-test dan post-test
        - Dashboard kelas: daftar siswa, hasil tes setiap siswa, final score
        - Chat (private, DM, group)
        - Forum dengan notifikasi

4. **Materi**

    - **Manajemen Materi**
        - Tambah, ubah, hapus materi per sesi
        - Set pre-test dan post-test untuk setiap materi
        - Lampiran materi pada setiap sesi (media library, link bahan ajar)
    - **Detail Materi**
        - Jenis materi (teks, video, batutir, cerpen, sakeco, dll)
        - Survey kemampuan siswa (mirip pre-test)
        - Progress bar untuk persentase belajar
        - Forum diskusi dan kehadiran
        - Path learning (best recommendation)

5. **Quiz**

    - **Manajemen Quiz**
        - Tambah, ubah, hapus quiz
        - Tambah, ubah, hapus soal dan jawaban (pre-test dan post-test)
        - Soal dengan pilihan jawaban (radio button, isian/textarea)
    - **Quiz Results**
        - Hasil tes siswa: jumlah soal, score, jawaban benar dan salah

6. **Sertifikat**

    - Melihat dan mengunduh sertifikat
    - Form filter search
    - Daftar sertifikat dalam bentuk card (4 card dalam 1 baris): thumbnail, nama kelas, CTA download sertifikat
    - Pagination

7. **Profile**

    - Melihat dan mengubah profil pengguna
    - Form update profile

8. **Kamus Bahasa Sumbawa**

    - Tambah, ubah, hapus entri kamus (user_id, sumbawa, indo, english)

9. **Kalender/Statistik Akademik**

    - Statistik akses kelas, jumlah kelas, jumlah materi, dll

10. **Rating dan Review**

    - Menilai dan memberikan ulasan kelas
    - Review tugas oleh guru

11. **Chat dan Forum Diskusi**
    - Chat private, DM, group
    - Forum diskusi setiap sesi dan kelas

### Fitur Khusus dan Aksi

1. **Pre-Test dan Post-Test**

    - Survey kemampuan siswa sebelum dan sesudah mengikuti materi
    - Countdown timer, daftar soal, soal dengan radio button dan textarea, tombol navigasi (prev, next, selesai)
    - Halaman hasil ujian setelah pre/post test (detail siswa, keterangan ujian, jumlah soal, score, jawaban benar dan salah)

2. **Progress dan Grading**

    - Sistem penilaian untuk setiap siswa
    - Progress bar berdasarkan sesi dan kelas
    - Leaderboard point with student

3. **Lampiran dan Bahan Ajar**

    - Lampiran materi pada setiap sesi (media library, link bahan ajar)

4. **Attendance**
    - Kehadiran siswa pada setiap sesi

### Sub-Menu dan Detail Implementasi

2. **Kelas**

    - Menu untuk memilih dan melihat detail kelas
    - Implementasi accordion untuk sesi materi
    - Progress bar untuk menampilkan persentase belajar
    - Pre-test dan post-test fitur lengkap dengan countdown, soal, tombol navigasi (prev, next, selesai), dan halaman hasil ujian
    - Path learning sebagai rekomendasi lanjutan

3. **Kelas Saya**

    - Sambutan dan gambaran kelas yang sedang diikuti
    - Filter search untuk mencari kelas
    - Daftar kelas dengan pagination

4. **Setting**
    - Tab untuk menu profile dan sertifikat
    - Form untuk update profile
    - Form filter search untuk sertifikat
    - Daftar sertifikat dengan pagination

### Implementasi Fitur Khusus

-   **Navbar Background Change on Scroll**: Ubah background navbar ketika halaman di-scroll.
-   **Back to Top Button**: Tombol untuk kembali ke bagian atas halaman.
-   **Accordion**: Untuk menampilkan materi kelas secara collapsible.
-   **Progress Bar**: Menampilkan persentase progress belajar.
-   **Pre-test/Post-test**: Fitur untuk ujian dengan countdown, navigasi soal, dan halaman hasil ujian.
-   **Download Sertifikat**: CTA untuk mengunduh sertifikat ketika progress mencapai 100% dan link 'lihat semua sertifikat'

### GURU

#### Tambahan Menu dan Fitur yang Direkomendasikan:

-   Test review untuk periksa test result oleh guru
-   view kategori
-   view guru/author
-   request menjadi guru dengan attachment
-   approve menjadi guru
-   tonjolkan penilaian sehingga hasilkan data statistik
-   jumlah siswa
-   jumlah kelas
-   jumlah siswa yg belum selesaikan kelas
-   jumlah siswa yg sudah selesaikan kelas
-   terdapat 10 kelas dengan peminat terbanyak
    Tentu, berikut adalah rangkuman dari dua pertanyaan Anda:

1. **Test Review**:

    - Review dan penilaian tugas.
    - Umpan balik antar instruktur dan siswa untuk tugas atau proyek.

2. **Quizzes**:

    - Latihan soal dengan penilaian otomatis.

3. **Discussion Board**:

    - Forum diskusi untuk pertanyaan dan interaksi.

4. **Learning Pathways**:

    - Rekomendasi jalur belajar berdasarkan minat atau tujuan.

5. **Dictionary**:

    - Daftar istilah penting dan definisi.

6. **Announcements**:

    - Pengumuman dari instruktur.

7. **Help/Support**:

    - Pusat bantuan dan FAQ.

8. **Feedback/Review System**:

    - Umpan balik tentang kursus dan instruktur.

9. **Language Support**:

    - Opsi bahasa untuk siswa dari berbagai latar belakang.

10. **Accessibility Options**:
    - Ini bisa jadi pengembangan dengan gunakan tools dan AI
    - Fitur untuk mendukung siswa dengan kebutuhan khusus.
    - Asisten virtual AI untuk pertanyaan umum dan rekomendasi belajar.
    - Pembelajaran berbasis Virtual Reality atau Augmented Reality untuk pengalaman yang lebih interaktif.
