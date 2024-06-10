# Aplikasi
Pelestarian bahasa daerah sumbawa (bahasa samawa) melalui pemanfaatan e-learning dalam inovasi pembelajaran bagi anak usia remaja

## NOTE
- UI/UX tidak boleh kaku pelajari psycology warna, layout dll

### APP FLOW (Gunakan chatGPT untuk ubah mermaid - masih kurang warna, ilustrasi dan variasi)
### MURID
- [ ] Kategori
- [ ] pilih kategori
- [ ] masuk ke kategori terdapat banyak kelas
- - [ ] hero section terdapat nama kategori, thumbnail, jumlah kelas, button CTA mulai belajar

- [ ] Kelas
- pilih kelas
- - [ ] bisa pilih sesi
- - [ ] terdapat persentase belajar dengan (progress)[https://www.hyperui.dev/components/application-ui/progress]
- - [ ] terdapat CTA untuk donwload sertifikat pada kelas dengan pogress 100% (ada secondary action 'lihat semua sertifikat' untuk lihat semua daftar sertifikat pada menu settings)
- - [ ] terdapat keterangan jumlah sesi, siswa, author/guru, kategori, level kelas pemula/lanjutan
- - - [ ] terdapat pre test dan post test (seperti CBT online)
- - - - [ ] terdapat countdown
- - - - [ ] terdapat daftar soal
- - - - [ ] terdapat soal dan pilihan jawaban dalam bentuk radio button dan isian/textare
- - - - [ ] terdapat tombol prev, next dan selesai jika sudah dijawab semua
- - - - [ ] setelah selesai pre/post test dialihkan ke halaman hasil ujian
- - - - - [ ] terdapat detail siswa, keterangan ujian pre/post test, keterngan ujian pada sesi ke-N, jumlah soal, score, jawaban benar dan salah 
- [ ] tambah path learning di bawah kelas yg dipilih (seperti best recommendation)

- [ ] Kelas saya (landing page user terdapat sambutan dan gambaran kelas)[https://www.canva.com/design/DAGGVLwbcVo/JTAkPvKsTwnR6OQkABQ5Rg/edit]
- [ ] sambutan
- [ ] gambaran kelas
- - [ ] form filter search
- - [ ] daftar kelas dalam bentuk 4 card dalam 1 baris memiliki thumbnail, nama kelas, CTA continue learning, jumlah siswa, join date,
- - [ ] pagination

- [ ] Setting (gunakan tabs untuk setiap menu)
- [ ] profile
- - [ ] terdapat form update profile
- [ ] sertifikat
- - [ ] form filter search
- - [ ] daftar serifkat dalam bentuk 4 card dalam 1 baris memiliki thumbnail, nama kelas, CTA download sertifikat
- - [ ] pagination

### GURU
# MVP
- view kategori
- view guru/author
- request menjadi guru dengan attachment
- approve menjadi guru
- tonjolkan penilaian sehingga hasilkan data statistik
- jumlah siswa
- jumlah kelas
- jumlah siswa yg belum selesaikan kelas
- jumlah siswa yg sudah selesaikan kelas
- terdapat 10 kelas dengan peminat terbanyak 