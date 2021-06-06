<h1>Laporan Akhir Projek</h1>

# Tutory
	
<h1>Kelompok 1</h1>

<h2>Asisten Praktikum</h2>

1. Indah Puspita
2. Qoriatul Khairunnisa

<h2>Anggota Kelompok</h2>

1. Tio Ramadhan (G64190045) sebagai Backend developer
2. Alfariz Gilang Septian (G64190066) sebagai Frontend developer
3. Ismail Rizqy Al Faruq (G64190077) sebagai UI designer
4. Khristofer (G64190089) sebagai UX researcher

<h2>Deskripsi Singkat:</h2>
Aplikasi yang ingin kami kembangkan adalah aplikasi tutor berbasis web yang dapat mempertemukan para tutor dan pelajar yang sesuai dengan mudah. Para pengguna, baik tutor maupun pelajar, dapat memilih metode pembelajaran yang dianggap sesuai dengan yang dibutuhkan atau diinginkan masing-masing pihak di dalam data profil. Aplikasi kemudian mencocokan data-data tersebut untuk mencari tutor yang sesuai dengan yang dibutuhkan pengguna, dalam hal ini pelajar. Metode pembayaran juga disediakan bervariasi sehingga pengguna dapat bebas memilih metode pembayaran yang diinginkan sesuai kesepakatan tutor dan pembelajar. Dengan cara ini, baik tutor maupun pelajar dimudahkan proses belajar-mengajar

<h2>User Story:</h2>

1. Sebagai pengguna, agar saya dapat menggunakan tutory sesuai kebutuhan, saya dapat mendaftar sebagai pelajar atau tutor
2. Sebagai pelajar yang terdaftar, agar dapat melihat daftar tutor, saya dapat mencari pengguna yang terdaftar sebagai tutor
3. Sebagai tutor yang terdaftar, agar dapat mendapatkan pelajar yang tertarik, saya dapat mengubah deskripsi saya sesuai keinginan saya
4. Sebagai pelajar yang terdaftar, agar dapat mengapresiasi kinerja tutor, saya dapat memberikan donasi kepada tutor
5. Sebagai pelajar yang terdaftar, agar dapat menemukan tutor mata kuliah yang sesuai, saya dapat melakukan pencarian dengan fitur cari
6. Sebagai pelajar yang terdaftar,  agar meningkatkan kualitas pembelajarannya, saya dapat memberikan testimonial /review
7. Sebagai tutor yang terdaftar, agar kelas pembelajaran dapat dilihat pelajar, saya dapat membuat postingan tentang kelas tutor saya
8. Sebagai pelajar yang terdaftar, agar kegiatan pembelajaran sesuai dengan keinginan, saya dapat request ingin belajar secara private atau bareng-bareng.
9. Sebagai tutor yang terdaftar, agar pembelajaran sesuai dengan keinginan saya, saya dapat mencantumkan metode pembelajaran saya di deskripsi kelas saya
10. Sebagai tutor yang terdaftar, agar pelajar mengetahui ketersediaan saya, saya dapat mencantumkan ketersediaan saya pada profil

<h2>Spesifikasi Teknis Lingkungan:</h2>

Perangkat Keras

  * Processor : Intel Core I5 8300H CPU @ 2.30Ghz
  * Memory : 16 GB DDR4
  * Graphics Card : NVIDIA GeForce GTX 1050
  * Storage : 1 TB HDD & 256 GB SSD

Perangkat Lunak

  * Operating System : Windows 10
  * Text Editor : Sublime / Visual Studio Code
  * Framework : CodeIgniter
  * Database : MySQL
  * Server : Apache

Lainnya

  * Photoshop
  * Illustrator
  * Figma
  * Jquery

<h2>Hasil dan Pembahasan:</h2>

* <h3>Use Case Diagram</h3>
  
  ![usecase](https://user-images.githubusercontent.com/66354722/120913503-d0436e80-c6c1-11eb-855b-095775e7c5c2.png)

* <h3>Activity diagram diagram</h3>
  
  ![flowchart](https://user-images.githubusercontent.com/66354722/120913520-e05b4e00-c6c1-11eb-9936-656003ccb571.png)
 
* <h3>Class Diagram</h3>
  
  ![class](https://user-images.githubusercontent.com/66354722/120913528-e81af280-c6c1-11eb-892f-2db6b76bace5.png)
 
* <h3>Entity Relationship Diagram</h3>
  
  ![erd](https://user-images.githubusercontent.com/66354722/120913538-f23cf100-c6c1-11eb-920a-5c7d6c895959.png)
  
* <h3>Arsitektur Sistem</h3>
Web Apps tutory pastinya menggunakan teknologi basic dari HTML, CSS, Javascript, jquery dan PHP, untuk mempermudah styling web apps kami menggunakan bantuan BOOTSRAP pada sisi framework untuk frontendnya dan pada sisi backend kami menggunakan bantuan framework CODEIGNITER.

![Arsitektur Diagram](https://user-images.githubusercontent.com/66354722/120925338-613a3a00-c702-11eb-8d72-6e84e50d1f97.jpg)

	
* <h3>Fungsi utama yang dikembangkan</h3>
Web Apps-Tutory ini memiliki sebuah fitur utama, dimana tutory membantu para pelajar menemukan tutor atau kelas yang sesuai  serta membantu pelajar mendapatkan pengalaman pembelajaran yang lebih baik.
	
* <h3>Fungsi CRUD</h3>
CRUD
CRUD | Pelajar | Tutor
------ | ----------------- | ---------
Create | Pelajar dapat membuat akun sebagai pelajar | Tutor dapat membuat akun sebagai tutor
_ | _ | Tutor dapat membuat kelas tutor
Read   | Pelajar dapat melihat semua kelas yang tersedia yang telah dibuat oleh tutor | Tutor dapat melihat semua kelas yang telah dibuat olehnya
_ | Pelajar dapat melihat semua tutor yang terdaftar | _  
Update | Pelajar dapat mengedit profil nya sendiri | Tutor dapat mengedit profilnya sendiri
_ | _ | Tutor dapat mengedit kelas yang telah dibuatnya
Delete | _ | Tutor dapat menghapus kelas yang telah dibuat

<h2>Hasil Implementasi</h2>

* Screenshot Sistem
  
  ![ss](https://user-images.githubusercontent.com/66354722/120913550-01bc3a00-c6c2-11eb-9d77-29f2ad832ac5.png)


* Link Aplikasi

  http://tutory.epizy.com/

<h2>Testing</h2>

Case | Positive Case | Negative Case
------ | ----------------- | -------
Registration Page | User memasukkan data dengan lengkap dan form validation bernilai true, lalu user ditujukan ke halaman login | Jika form validation bernilai false, maka akan muncul pesan kesalahan pada form registrasi
Login Page | Jika data yang dimasukkan user ada dan sesuai dengan data pada database, maka user akan diarahkan ke halaman tutor atau pelajar (secara default sesi session user akan aktif) | Jika data yang dimasukkan user tidak ada atau tidak sesuai dengan data pada database, maka akan muncul pesan kesalahan 
Create Tutor Class Page | Jika data yang dimasukkan tutor lengkap, maka class akan dibuat dan ditambahkan pada database | Jika data yang dimasukkan tutor tidak lengkap, maka class tidak akan dibuat dan ditambahkan pada databse, lalu pesan kesalahan akan muncul. Kemudian tutor akan dikembalikan ke page pembuatan kelas

<h2>Saran untuk Pengembangan Selanjutnya</h2>
  
  * Kedepannya mungkin bisa ditambahkan sistem pembayaran yang jadi satu dengan webnya, agar user lebih mudah dalam transaksi dengan user lain
  * Kedepannya terdapat API login dengan Google, sehingga memudahkan dalam daftar dan login.
  * Kedepanya Tutory memiliki fitur live chat dengan sesama user, sehingga memudahkan komunikasi user
  * Kedepannya terdapat fitur filter, agar memudahkan dalam mencari kelas atau tutor
