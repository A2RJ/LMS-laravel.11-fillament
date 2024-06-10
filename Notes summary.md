





 
- jenis materi: batutir, cerpen, sakeco, dll
Ini bertujuan untuk menentukan jenis cara pengumpulan tugas ataupun quiz dan jenis penyajian materi misal text atau video bahkan lebih lengkap

- Features yang dipertmbangkan :
- Kamus
- Survey kemampuan anak didik mirip seperti pre-test, 
- Level atau Grading
- Sertifikat

- Menu
- auth manual dan google socialite
- manajemen kategori (kategori)
- manajemen user hasMany materi (fullname, birthday, email, phone number, unit/institusi asal)
-- user atau siswa dapat memilih antara kelas atau materi pilihan
-- teacher dapat membuat banyak kelas atau banyak materi

- manajemen materi per sesi hasMany quiz (user_id, kategori, title, content, pre,post)
-- saat masuk materi ada pre test (pre_test_id -> quiz_id)
-- masuk materi
-- saat selesai materi ada post test (post_test_id -> quiz_id)

- manajemen quiz hasMany quiz per sesi (user_id, title)
-- saat user submit quiz maka akan simpan ke table quiz_results (student_id, quiz_id, materi_id, answer - jsonB, quiz_type - pre or post test)
- manajemen question hasMany answer (question)
- manajemen answer (answer, is_correct, point)
- manajemen kelas hasMany materi (user_id, kelas, final_test_id)
-- mahasiswa dapat request atau assign agar masuk ke kelas
-- kelas dapat di assign banyak materi (mata kuliah)
-- saat selesai semua materi ada final test (final_test_id -> quiz_id)

- manajemen chat berdasarkan room pada masing-masing materi dan kelas
- manajemen kamus bahasa sumbawa (user_id, sumbawa, indo, english)
- manajemen kalender atau statistik akademik (mengambil dari data kelas diakses seperti statistik github, jumlah kelas, jumlah materi dll)
- rating

Notes Aplikasi LMS
- auth (login, register, reset password, panduan)
- tutor mendapat banyak kelas 
misal
- pendahuluan sebelum semua sesi, seperti kata sambutan
- sesi 1 sampai n
- setiap sesi ada thumbnail
- ada progress bar based on sesi
- ada forum bisa add topic, topic, detail
ada right side bar
- ada lampiran materi pada setiap sesi
- ada lampiran link materi bahan ajar pada setiap sesi
- ada forum diskusi pada setiap sesi
- ada kehadiran
- ada kuiz pre test dan post test sehingga dapat diketahui persentase ilmu
- ada dashboard untuk setiap kelas, daftar dan berapa siswa/i, berapa total test, berapa hasil test setiap siswa pada setiap sesi dan final score pada kelas tersebut, harus jadi focus untuk reporting hasil belajar
- ada chat private, DM, group
- pada menu super admin terdapat dashboard siswa/i dan tutor/guru
right bar berisi sesi jika pada hal. sesi dan kelas pada hal. kelas, pengumuman bisa ambil 5 terbaru dll

- teacher has many classes
- teacher have chat access (DM, Group)
- classes have attributes thumbnail, title, content, pre test, post test, proggress average session menyelsaikan sesi dibagi total siswa https://www.youtube.com/watch?v=FKqv4WJwEwU
- classes have dashboard mulai dari total test, proggress, total siswa, leaderboard point with student
- classes has many test 1 - n
- classes has many sessions 1 - n
- classes have forum with attribute title, content using notification
- session have attributes thumbnail, title, content (bisa copy paste link media library, ada default content), pres test, post test, proggress average siswa/i menyelsaikan current session
- session has many attachement (title, source tinggal pilih media library)
- session have forum
- session has many attendance
## DONE
- quiz view ubah opsi jawaban menjadi {!!  !!} dan gunakan grid untuk menjaga svg tetap di kanan 

## TODO
### Student
- [ ] Test untuk tipe soal isian
- home
- dashboard
- course
- my course
- profile
- course detail
- cource test
- course result
- my certificate

### Teacher
- [ ] tambah tabel review tugas sehingga bisa dinilai oleh guru
- [ ] tambah final test pada class

## NOTES
- https://laracasts.com/discuss/channels/code-review/set-time-duration-for-a-quiz-app
- https://dev.to/mikevarenek/10-free-tailwind-css-templates-32f7
- https://welovedevs.com/app/tests/tailwind
- https://tailwindui.com/components/application-ui/forms/form-layouts
- https://componentland.com/component/avatars-2
- https://componentland.com/component/technique-2
- https://componentland.com/component/multivendor-webshop-homepage-2
- https://www.youtube.com/watch?v=_rQBLE4ineA
- https://filamentphp.com/docs/3.x/tables/summaries
- (DaisyUi)[https://daisyui.com/]
- (Referensi UI)[https://laracasts.com/series/build-advanced-components-for-filament]
https://freefrontend.com/tailwind-hero-sections/
https://tailwindui.com/components/marketing/sections/heroes

https://laraveldaily.com/post/filament-edit-only-single-record-custom-page
https://v2.filamentphp.com/tricks/use-custom-view-for-table-content[]
https://filamentphp.com/plugins/rupadana-announce
https://filamentphp.com/plugins/lara-zeus-accordion
https://filamentphp.com/plugins/jaocero-activity-timeline

sistem penilaian
https://quizizz.com/admin/quiz/5a898abf8b1677002295d755/web-design
https://github.com/tailwindlabs/tailwindcss-aspect-ratio
https://www.ut.ac.id/tutorial-online/
https://elearning.ut.ac.id/mod/page/view.php?id=216  

<form wire:submit.prevent="submit">
    <x-filament::button type="submit" class="mt-4">
        Save
    </x-filament::button>
</form>


# Data yang Diperlukan untuk Meningkatkan Performa E-Learning

## Data Demografis Siswa
1. **Jumlah Siswa**
   - Total jumlah siswa yang terdaftar di platform.

2. **Data Profil Siswa**
   - Informasi demografis seperti usia, jenis kelamin, lokasi geografis, dan latar belakang pendidikan.
   - Jenis langganan atau paket yang diambil (jika ada).

## Data Kelas
1. **Jumlah Kelas**
   - Total jumlah kelas yang tersedia di platform.

2. **Jumlah Siswa yang Belum Selesaikan Kelas**
   - Total jumlah siswa yang telah memulai tapi belum menyelesaikan kelas tertentu.

3. **Jumlah Siswa yang Sudah Selesaikan Kelas**
   - Total jumlah siswa yang telah menyelesaikan kelas tertentu.

4. **Top 10 Kelas dengan Peminat Terbanyak**
   - Daftar 10 kelas yang paling banyak diikuti oleh siswa.

## Data Interaksi dan Aktivitas
1. **Frekuensi Masuk**
   - Seberapa sering siswa masuk ke platform.
   - Rata-rata durasi waktu yang dihabiskan di platform setiap sesi.

2. **Aktivitas Belajar**
   - Jumlah waktu yang dihabiskan siswa dalam mengakses materi (video, teks, kuis).
   - Persentase penyelesaian materi per kelas.
   - Rata-rata skor kuis atau tes per kelas.

3. **Feedback dan Evaluasi**
   - Rating dan ulasan kelas dari siswa.
   - Feedback kualitatif dari siswa tentang materi dan pengajar.

## Data Retensi dan Penyelesaian
1. **Tingkat Penyelesaian Kelas**
   - Persentase siswa yang menyelesaikan kelas yang mereka mulai.
   - Identifikasi kelas dengan tingkat penyelesaian rendah dan analisis penyebabnya.

2. **Tingkat Retensi Siswa**
   - Persentase siswa yang kembali untuk mengikuti kelas lain setelah menyelesaikan satu kelas.
   - Identifikasi pola retensi dan drop-off.

## Data Kinerja Pengajar
1. **Evaluasi Pengajar**
   - Rating dan ulasan pengajar dari siswa.
   - Analisis kinerja pengajar berdasarkan tingkat penyelesaian dan retensi kelas yang mereka ajarkan.

## Data Teknis dan Penggunaan Platform
1. **Statistik Penggunaan Teknologi**
   - Platform apa yang paling banyak digunakan untuk mengakses (desktop, mobile, aplikasi).
   - Statistik kecepatan loading halaman dan user experience.

2. **Masalah Teknis**
   - Jumlah dan jenis masalah teknis yang dilaporkan siswa.
   - Waktu penyelesaian masalah teknis.

## Data Pemasaran dan Keuangan
1. **Sumber Trafik**
   - Dari mana siswa mengetahui platform (media sosial, iklan, rekomendasi, dll).
   - Efektivitas kampanye pemasaran yang dijalankan.

2. **Pendapatan dan Biaya**
   - Pendapatan dari pendaftaran kelas atau langganan.
   - Biaya operasional dan pengembangan platform.

Dengan menganalisis data-data di atas, Anda dapat mengidentifikasi area yang perlu diperbaiki, mengoptimalkan pengalaman belajar siswa, meningkatkan kualitas konten, serta merancang strategi pemasaran yang lebih efektif. Data statistik juga memungkinkan Anda untuk membuat keputusan berbasis data yang dapat meningkatkan performa e-learning secara keseluruhan.


# Daftar Menu dan Aksi untuk LMS

## Menu untuk Super Admin
1. **Dashboard Siswa/i**
   - Melihat statistik siswa/i: jumlah total siswa, kelas yang diikuti, hasil tes, dll.
2. **Dashboard Tutor/Guru**
   - Melihat statistik tutor/guru: jumlah kelas yang diampu, performa pengajaran, dll.
3. **Manajemen Kategori**
   - Tambah, ubah, hapus kategori.
4. **Manajemen User**
   - Tambah, ubah, hapus user (siswa, guru, admin).
   - Detail user: fullname, birthday, email, phone number, unit/institusi asal.
5. **Manajemen Materi**
   - Tambah, ubah, hapus materi per sesi.
   - Set pre-test dan post-test untuk setiap materi.
6. **Manajemen Kelas**
   - Tambah, ubah, hapus kelas.
   - Assign materi ke kelas.
   - Tambah final test untuk kelas.
7. **Manajemen Kamus Bahasa Sumbawa**
   - Tambah, ubah, hapus entri kamus (user_id, sumbawa, indo, english).
8. **Manajemen Kalender/Statistik Akademik**
   - Melihat statistik akses kelas, jumlah kelas, jumlah materi, dll.

## Menu untuk Tutor/Guru
1. **Dashboard Kelas**
   - Melihat daftar kelas yang diampu.
   - Melihat statistik kelas: total test, progress, total siswa, leaderboard point.
2. **Manajemen Kelas**
   - Tambah, ubah, hapus kelas.
   - Assign siswa ke kelas.
   - Tambah, ubah, hapus materi pada kelas.
3. **Manajemen Materi**
   - Tambah, ubah, hapus materi.
   - Tambah, ubah, hapus sesi materi.
   - Set pre-test dan post-test.
   - Tambah lampiran materi pada setiap sesi.
4. **Manajemen Quiz**
   - Tambah, ubah, hapus quiz.
   - Tambah, ubah, hapus soal.
   - Tambah, ubah, hapus jawaban.
5. **Review Tugas**
   - Menilai tugas siswa.
6. **Forum Diskusi**
   - Tambah, ubah, hapus topik diskusi.
   - Menjawab pertanyaan siswa.
7. **Chat**
   - Mengakses DM, group chat.

## Menu untuk Siswa
1. **Home**
   - Melihat pengumuman terbaru.
2. **Dashboard**
   - Melihat progress belajar, total kelas, hasil tes, dll.
3. **Course**
   - Melihat daftar kelas yang tersedia.
   - Memilih kelas yang ingin diikuti.
4. **My Course**
   - Melihat daftar kelas yang diikuti.
5. **Course Detail**
   - Melihat detail kelas: deskripsi, materi, forum, dll.
6. **Course Test**
   - Mengikuti tes yang tersedia.
   - Melakukan pre-test dan post-test.
7. **Course Result**
   - Melihat hasil tes.
8. **My Certificate**
   - Melihat dan mengunduh sertifikat yang sudah didapatkan.
9. **Profile**
   - Melihat dan mengubah profil pengguna.

## Fitur dan Aksi Tambahan
1. **Auth (Authentication)**
   - Manual login, register, reset password.
   - Google Socialite login.
2. **Pre-Test dan Post-Test**
   - Survey kemampuan anak didik sebelum dan sesudah mengikuti materi.
3. **Level atau Grading**
   - Sistem penilaian untuk setiap siswa.
4. **Kamus**
   - Fitur kamus bahasa Sumbawa, Indonesia, Inggris.
5. **Chat Private, DM, Group**
   - Sistem komunikasi antara siswa dan guru.

## TODO untuk Siswa
- Test untuk tipe soal isian.
- Dashboard.
- Home.
- Course.
- My Course.
- Profile.
- Course Detail.
- Course Test.
- Course Result.
- My Certificate.

## TODO untuk Guru
- Tambah tabel review tugas sehingga bisa dinilai oleh guru.
- Tambah final test pada class.

## Struktur Materi dan Kelas
- **Kelas**
  - Thumbnail, title, content, pre-test, post-test, progress average session.
  - Dashboard: total test, progress, total siswa, leaderboard point.
  - Banyak sesi.
  - Forum dengan notifikasi.
- **Sesi**
  - Thumbnail, title, content (bisa link media library).
  - Pre-test, post-test.
  - Banyak lampiran.
  - Forum.
  - Attendance.

## Notes Aplikasi LMS
- Auth (login, register, reset password, panduan).
- Tonjolkan bagian penilaian siswa
- Tutor dengan banyak kelas.
  - Pendahuluan sebelum sesi (kata sambutan).
  - Sesi 1 sampai n (setiap sesi ada thumbnail).
  - Progress bar berdasarkan sesi.
  - Forum diskusi tiap sesi.
  - Kehadiran.
  - Quiz pre-test dan post-test.
  - Dashboard kelas: daftar siswa, hasil tes setiap siswa, final score.
  - Chat private, DM, group.
  - Dashboard super admin untuk siswa/i dan tutor/guru.
  - Right sidebar berisi sesi jika pada halaman sesi dan kelas pada halaman kelas, pengumuman bisa ambil 5 terbaru dll.

- **Teacher**
  - Banyak kelas.
  - Akses chat (DM, Group).

- **Classes**
  - Thumbnail, title, content, pre-test, post-test, progress average session.
  - Dashboard: total test, progress, total siswa, leaderboard point.
  - Banyak test.
  - Banyak sesi.
  - Forum dengan notifikasi.

- **Session**
  - Thumbnail, title, content (bisa link media library).
  - Pre-test, post-test.
  - Banyak lampiran.
  - Forum.
  - Attendance.
