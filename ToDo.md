- Pelestarian bahasa daerah sumbawa (bahasa samawa) melalui pemanfaatan e-learning dalam inovasi pembelajaran bagi anak usia remaja

- UI/UX tidak boleh kaku
Pelajari psycology warna

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

## NOTES
- (Referensi UI)[https://laracasts.com/series/build-advanced-components-for-filament]