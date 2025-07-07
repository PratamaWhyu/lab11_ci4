<h1>Praktikum 1 </h1>
<h2>Instalasi Codeigniter 4</h2>
Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara manual
dan menggunakan composer. Pada praktikum ini kita menggunakan cara manual.

![image](https://github.com/user-attachments/assets/d0b1cf76-d564-4a19-ac7a-ac9aa98e962a)
  
<h2>Menjalankan CLI (Command Line Interface)</h2>
Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk mengakses
CLI buka terminal/command prompt.

![image](https://github.com/user-attachments/assets/4aa07ff5-7aa6-4350-b711-5157544c2cfd)

Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah: <br>
![image](https://github.com/user-attachments/assets/2b9b58ed-3cd2-42dd-9664-5d56c8e67c75)

Untuk memudahkan mengetahui jenis errornya,
maka perlu diaktifkan mode debugging dengan mengubah nilai konfigurasi pada environment
variable CI_ENVIRINMENT menjadi development.
![image](https://github.com/user-attachments/assets/f4e3184c-6aa7-4cdc-885e-237ebf39e8be)

Ubah nama file env menjadi .env kemudian buka file tersebut dan ubah nilai variable
CI_ENVIRINMENT menjadi development.
![image](https://github.com/user-attachments/assets/8f0eb008-dd23-4d6c-9d09-667cf7b6dab2)

<h2>Routing dan Controller</h2>
Router terletak pada file app/config/Routes.php

![image](https://github.com/user-attachments/assets/9aeb3920-ea69-4e15-b0b2-628d45c0f7cb)
<h2>Membuat Route Baru.</h2>
Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan perintah
berikut.

![image](https://github.com/user-attachments/assets/4dc72ae6-307c-46f0-ad30-247359ef0810)

<h2>Membuat Controller</h2>
Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama page.php pada
direktori Controller kemudian isi kodenya seperti berikut.

![image](https://github.com/user-attachments/assets/975b4a8d-8a21-476c-8f15-44d054ff2a04)

<h2>Membuat View</h2>
Selanjutnya membuat view untuk tampilan web agar lebih menarik. Buat file baru
dengan nama about.php pada direktori view (app/view/about.php) kemudian isi kodenya
seperti berikut.
![image](https://github.com/user-attachments/assets/671f2346-cbfc-4c66-89ce-e1a7ce97628a)
Ubah method about pada class Controller Page menjadi seperti berikut:

![image](https://github.com/user-attachments/assets/1abbda1c-dd3f-4097-9b6a-c54ff52b979e)
Kemudian lakukan refresh pada halaman tersebut.

![image](https://github.com/user-attachments/assets/a3f0fbdd-b3e3-4ce2-ba2a-57338263ef06)

<h2>Membuat Layout Web dengan CSS</h2>

Pada dasarnya layout web dengan css dapat diimplamentasikan dengan mudah pada codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset css dan javascript terletak pada direktori public.  

Buat file css pada direktori public dengan nama style.css

Kemudian buat folder template pada direktori view kemudian buat file header.php dan
footer.php

![image](https://github.com/user-attachments/assets/71426429-282f-4649-9817-625e2194f5c5)

File app/view/template/footer.php
![image](https://github.com/user-attachments/assets/b1eb3594-0a71-4ae7-8196-268048c7734e)

Kemudian ubah file app/view/about.php seperti berikut.
![image](https://github.com/user-attachments/assets/ab67bb24-1897-46d4-8577-6a8a6afe8773)

Selanjutnya refresh tampilan pada alamat http://localhost:8080/about
![image](https://github.com/user-attachments/assets/9092def0-a215-461d-a0c9-463241d081ef)

<h1>Praktikum 2</h1>


<h2>Membuat Database</h2>

![image](https://github.com/user-attachments/assets/d60c51a5-fdfc-4856-a031-72189ac64ba2)

<h2>Membuat Tabel</h2>

![image](https://github.com/user-attachments/assets/4119786e-d550-49bf-8902-2468b7bf9db1)

<h2>Konfigurasi koneksi database</h2>
Selanjutnya membuat konfigurasi untuk menghubungkan dengan database server. Konfigurasi
dapat dilakukan dengan du acara, yaitu pada file app/config/database.php atau menggunakan
file .env. Pada praktikum ini kita gunakan konfigurasi pada file .env.

![image](https://github.com/user-attachments/assets/c3da290e-ba29-41d3-aaf1-20342dc66624)

<h2>Membuat Model</h2>
Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada
direktori app/Models dengan nama ArtikelModel.php

![image](https://github.com/user-attachments/assets/73f42fc4-543e-457e-8cd1-2ad3002e0179)

<h2>Membuat Controller</h2>
Buat Controller baru dengan nama Artikel.php pada direktori app/Controllers.

![image](https://github.com/user-attachments/assets/9d5a4116-244a-42ba-a931-e47d858859a2)

<h2>Membuat View</h2>
Buat direktori baru dengan nama artikel pada direktori app/views, kemudian buat file baru
dengan nama index.php.

![image](https://github.com/user-attachments/assets/3b3c33f6-9154-4ae5-9189-dd513e8169cf)

Selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikel

![image](https://github.com/user-attachments/assets/ea50159b-412c-4fa1-8070-175de52ad843)

Belum ada data yang diampilkan. Kemudian coba tambahkan beberapa data pada database agar
dapat ditampilkan datanya.
![image](https://github.com/user-attachments/assets/a517a2ef-07f2-4488-8996-7b0724cc4621)

![image](https://github.com/user-attachments/assets/ad320465-20b3-47fa-9ed8-5e6c1923f540)

<h2>Membuat Tampilan Detail Artikel</h2>
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda.
Tambahkan fungsi baru pada Controller Artikel dengan nama view().

![image](https://github.com/user-attachments/assets/2247d161-3648-49f3-bf27-3278be2c9ee9)

<h2>Membuat View Detail</h2>
Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php.

![image](https://github.com/user-attachments/assets/5140496e-da89-4fd7-a943-828411d61b31)

<h2>Membuat Routing untuk artikel detail</h2>
Buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel detail.

![image](https://github.com/user-attachments/assets/d8e7e803-a966-45f2-8c20-7a03b0eb1d46)
![image](https://github.com/user-attachments/assets/63a4072c-0740-484b-82ff-bb46717d4af6)

<h2>Membuat Menu Admin</h2>
Menu admin adalah untuk proses CRUD data artikel. Buat method baru pada Controller
Artikel dengan nama admin_index().

![image](https://github.com/user-attachments/assets/31cf32b5-12c8-4b6e-91f9-bbd5dd0e3095)
Selanjutnya buat view untuk tampilan admin dengan nama admin_index.php

![admin_index](https://github.com/user-attachments/assets/7ecf937c-0e78-46ba-a4e7-715f30ce4021)
Tambahkan routing untuk menu admin seperti berikut:
![image](https://github.com/user-attachments/assets/be0a8287-e125-4878-82cd-274c13873f67)
Akses menu admin dengan url http://localhost:8080/admin/artikel

![image](https://github.com/user-attachments/assets/d0a04239-32c9-4e0c-a83a-52d3e5cd01f9)

<h2>Menambah Data Artikel</h2>
Tambahkan fungsi/method baru pada Controller Artikel dengan nama add().

![image](https://github.com/user-attachments/assets/4d103890-c321-4b31-9913-bda24d86f612)
Kemudian buat view untuk form tambah dengan nama form_add.php

![image](https://github.com/user-attachments/assets/5cea8670-358f-4b2a-8e54-151df33bb6c8)

![image](https://github.com/user-attachments/assets/c77367e5-1cea-4638-8b24-14a68b991675)

<h2>Mengubah Data</h2>
Tambahkan fungsi/method baru pada Controller Artikel dengan nama edit().

![image](https://github.com/user-attachments/assets/bab09b74-ae3f-497a-928e-799914faf3d0)
Kemudian buat view untuk form tambah dengan nama form_edit.php

![image](https://github.com/user-attachments/assets/d4d95818-c024-44bf-89d0-753360934cbd)

![image](https://github.com/user-attachments/assets/e92e670c-5ca8-4542-9f0a-b0d46316b0f6)


<h2>Menghapus Data</h2>

![image](https://github.com/user-attachments/assets/79d073c7-e82a-4b7f-a8ad-37f7686231ae)

<h1>Praktikum 3</h1>
<h2>Membuat Layout Utama</h2>
Buat folder layout di dalam app/Views/
Buat file main.php di dalam folder layout dengan kode berikut:

![main](https://github.com/user-attachments/assets/227410e6-d7c8-46d6-8ad6-ec3ba9e2fd67)

<h2>Modifikasi File View</h2>
Ubah app/Views/home.php agar sesuai dengan layout baru:

![image](https://github.com/user-attachments/assets/53bc1f91-af45-4043-828f-fe2fc43399b4)

<h2>Membuat Class View Cell</h2>

Buat folder Cells di dalam app/
Buat file ArtikelTerkini.php di dalam app/Cells/ dengan kode berikut:

![image](https://github.com/user-attachments/assets/3c9eaf50-ca00-4d6d-a3c7-1afcc6e01595)

<h2>Membuat View untuk View Cell</h2>
Buat folder components di dalam app/Views/
Buat file artikel_terkini.php di dalam app/Views/components/ dengan kode berikut:

![image](https://github.com/user-attachments/assets/3e716454-238a-4f62-9691-afe67600ed39)

<h2>Pertanyaan dan Tugas</h2>
Menambahkan tanggal tujuan agar mendapatkan data artikel yang baru di ubah

![image](https://github.com/user-attachments/assets/313b69f7-f993-4487-82ce-22c9817fb689)

contohnya seperti ini :

![image](https://github.com/user-attachments/assets/88d73672-4819-47fa-8d32-1c22c1b740a7)

Apa manfaat utama dari penggunaan View Layout dalam pengembangan aplikasi?
jawab : 
1. Struktur yang Terorganisir
  - Memudahkan pengaturan elemen UI dengan tata letak yang rapi dan terstruktur.

2. Responsivitas yang Lebih Baik
  - Memastikan tampilan UI menyesuaikan dengan berbagai ukuran layar dan orientasi perangkat.

3. Pemeliharaan Kode yang Lebih Mudah
  - Dengan pemisahan tata letak dan logika bisnis, perubahan UI lebih mudah dilakukan tanpa mengganggu fungsionalitas aplikasi.
    
4. Penggunaan Ulang Komponen
  - Layout dapat digunakan kembali di berbagai bagian aplikasi, mengurangi redundansi kode.

5. Kinerja yang Lebih Optimal
  - Beberapa jenis layout dioptimalkan untuk performa yang lebih baik, seperti ConstraintLayout di Android yang mengurangi jumlah view hierarchy.

Jelaskan perbedaan antara View Cell dan View biasa.
jawab : 
![image](https://github.com/user-attachments/assets/3f08a236-4d3c-4d34-ab79-991e4f154339)

<h1>Praktikum 4</h1>

<h2>Membuat Tabel: User Login</h2>
Tabel User

![image](https://github.com/user-attachments/assets/ae30a455-e465-4ad2-ae7f-a2acff72ff74)

<h2>Membuat Model User</h2>
Selanjutnya adalah membuat Model untuk memproses data Login. Buat file baru pada direktori
app/Models dengan nama UserModel.php

![image](https://github.com/user-attachments/assets/bbe1c108-5f53-415f-b132-67630bfbc444)
<h2>Membuat Controller User</h2>
Buat Controller baru dengan nama User.php pada direktori app/Controllers. Kemudian
tambahkan method index() untuk menampilkan daftar user, dan method login() untuk proses
login.

![yap](https://github.com/user-attachments/assets/fb72c817-9b87-41f9-bec8-d2ad6bcdc613)

<h2>Membuat View Login</h2>
Buat direktori baru dengan nama user pada direktori app/views, kemudian buat file baru
dengan nama login.php.

![viewlogin](https://github.com/user-attachments/assets/7bacd792-d081-4658-911c-91ff88d44b1e)

<h2>Membuat Database Seeder</h2>
Database seeder digunakan untuk membuat data dummy. Untuk keperluan ujicoba modul
login, kita perlu memasukkan data user dan password kedaalam database. Untuk itu buat
database seeder untuk tabel user. Buka CLI, kemudian tulis perintah berikut:

![image](https://github.com/user-attachments/assets/685c8490-f6da-4eac-8c63-e1432164c758)

Selanjutnya, buka file UserSeeder.php yang berada di lokasi direktori
/app/Database/Seeds/UserSeeder.php kemudian isi dengan kode berikut:

![image](https://github.com/user-attachments/assets/9c37ba37-d2af-4060-a93c-b4fcd842b00d)

Selanjutnya buka kembali CLI dan ketik perintah berikut:

![image](https://github.com/user-attachments/assets/b008ba1c-950a-4ab3-8e0a-8e65ea8d8bad)
Uji Coba Login
Selanjutnya buka url http://localhost:8080/user/login seperti berikut:

![image](https://github.com/user-attachments/assets/38860883-4ccb-4f86-84bd-8a6c312e0645)

<h2>Menambahkan Auth Filter</h2>
Selanjutnya membuat filer untuk halaman admin. Buat file baru dengan nama Auth.php pada
direktori app/Filters.

![image](https://github.com/user-attachments/assets/558296dc-0751-4003-ba79-3899a008574f)

Selanjutnya buka file app/Config/Filters.php tambahkan kode berikut:
'auth' => App\Filters\Auth::class
![image](https://github.com/user-attachments/assets/7d4eb2f6-fe80-4f00-9047-76d240b7e8d5)

Selanjutnya buka file app/Config/Routes.php dan sesuaikan kodenya.

![image](https://github.com/user-attachments/assets/7d8874ba-821c-4803-9f40-b9c7e0cb06ca)

<h2>Percobaan Akses Menu Admin</h2>
Buka url dengan alamat http://localhost:8080/admin/artikel ketika alamat tersebut diakses
maka, akan dimuculkan halaman login.

![image](https://github.com/user-attachments/assets/ab0d1daa-3b91-48dd-8078-5a6a48809e50)

<h2>Fungsi Logout</h2>
Tambahkan method logout pada Controller User seperti berikut:

![image](https://github.com/user-attachments/assets/858aa56a-345f-4806-b0e1-6d36bf2cb01b)


<h1>Praktikum 5</h1>
<h2>Membuat Pagination</h2>
Pagination merupakan proses yang digunakan untuk membatasi tampilan yang panjang 
dari data yang banyak pada sebuah website. Fungsi pagination adalah memecah tampilan 
menjadi beberapa halaman tergantung banyaknya data yang akan ditampilkan pada 
setiap halaman. 
Untuk membuat pagination dan pencarian, buka Kembali Controller Artikel, kemudian modifikasi kode
pada method admin_index seperti berikut.

![image](https://github.com/user-attachments/assets/1bf7502b-b5b5-4fee-b711-165e68bc0a17)

Kemudian buka file views/artikel/admin_index.php dan tambahkan kode berikut

![image](https://github.com/user-attachments/assets/00e28ac7-9013-428f-9e55-fac5dc78b62e)

![image](https://github.com/user-attachments/assets/a5febd03-e172-4907-94f6-4b0765e35ffa)

Selanjutnya buka kembali menu daftar artikel, tambahkan data lagi untuk melihat 
hasilnya.

![image](https://github.com/user-attachments/assets/c2fbbede-49e3-46fd-9d30-5380f8b2a935)

<h1>Praktikum 6</h1>

<h2>Upload Gambar pada Artikel </h2>
Menambahkan fungsi unggah gambar pada tambah artikel.  
Buka kembali Controller Artikel pada project sebelumnya, sesuaikan kode pada method 
add seperti berikut: 

![add](https://github.com/user-attachments/assets/7f2f80ba-cb27-4ea3-ae1b-f4817c671274)

 
Kemudian pada file views/artikel/form_add.php tambahkan field input file seperti 
berikut. 

![addpict](https://github.com/user-attachments/assets/ff502615-a95e-45ac-8448-305f045b2cfb)
Dan sesuaikan tag form dengan menambahkan ecrypt type seperti berikut.
![formaction](https://github.com/user-attachments/assets/0c7b2543-8474-4fc3-881e-d94c7c21f20e)
Ujicoba file upload dengan mengakses menu tambah artikel. 
![image](https://github.com/user-attachments/assets/0e8a7c83-ae01-4c06-a3b0-7b2b5668cc82)

<h1>Praktikum 7</h1>
1. Persiapan 
Pastikan MySQL Server sudah berjalan, dan buka database `lab_ci4

2. Membuat Tabel Kategori 
Kita akan membuat tabel baru bernama `kategori` untuk mengkategorikan artikel.
Jalankan query berikut: 

CREATE TABLE kategori ( 
id_kategori INT(11) AUTO_INCREMENT, 
nama_kategori VARCHAR(100) NOT NULL, 
slug_kategori VARCHAR(100), 
PRIMARY KEY (id_kategori) 
); 
 
3. Mengubah Tabel Artikel 
Tambahkan foreign key `id_kategori` pada tabel `artikel` untuk membuat relasi dengan tabel 
`kategori`.  
Query untuk menambahkan foreign key:
ALTER TABLE artikel 
ADD COLUMN id_kategori INT(11), 
ADD CONSTRAINT fk_kategori_artikel 
FOREIGN KEY (id_kategori) REFERENCES kategori(id_kategori);

4. Membuat Model Kategori 
Buat file model baru di `app/Models` dengan nama `KategoriModel.php`:

![kategorimod](https://github.com/user-attachments/assets/257bcb59-5fe9-4e98-91ba-f5deb6028f07)

5. Memodifikasi Model Artikel 
Modifikasi `ArtikelModel.php` untuk mendefinisikan relasi dengan `KategoriModel`:

![artic](https://github.com/user-attachments/assets/dccbc6f7-5746-4202-8b42-19d5ef7bed13)
Menambahkan method `getArtikelDenganKategori()` untuk mengambil data artikel beserta 
nama kategorinya menggunakan join.

6. Memodifikasi Controller Artikel 
Modifikasi `Artikel.php` untuk menggunakan model baru dan menampilkan data relasi:

![artikel](https://github.com/user-attachments/assets/08852d32-0820-44a2-908e-2843e241072d)

7. Memodifikasi View 
Buka folder view/artikel sesuaikan masing-masing view. 
<h3>index.php</h3>

![index](https://github.com/user-attachments/assets/8fb3d317-50b4-4593-bdc3-71f4df2ff859)
<h3>admin_index.php </h3>

![adminindex](https://github.com/user-attachments/assets/65a85009-81e4-4a49-9037-81fba837e54e)

<h3> form_add.php</h3>

![add7](https://github.com/user-attachments/assets/0c11cf38-4829-4956-9f0c-9bc42a217fea)
<h3>form_edit.php </h3>

![edit7](https://github.com/user-attachments/assets/d99b06ea-80f4-4f7a-bfd3-3c8aeacbfba8)
8. Testing 
Lakukan uji coba untuk memastikan semua fungsi berjalan dengan baik: 
• Menampilkan daftar artikel dengan nama kategori. 
• Menambah artikel baru dengan memilih kategori. 
• Mengedit artikel dan mengubah kategorinya. 
• Menghapus artikel. 

<h1>Praktikum 8</h1>

<h3>Persiapan</h3> 
Buka Kembali project sebelumnya, kemudian kita tambahkan Pustaka yang dibutuhkan 
pada project tersebut. 
<h3>Menambahkan Pustaka jQuery</h3> 
Kita akan menggunakan pustaka jQuery untuk mempermudah proses AJAX. Download 
pustaka jQuery versi terbaru dari https://jquery.com dan ekstrak filenya. 
Salin file jquery-3.6.0.min.js ke folder public/assets/js. 
<h3>Membuat Model</h3>
Pada modul sebelumnya sudah dibuat ArtikelModel, pada modul ini kita akan 
memanfaatkan model tersebut agar dapat diakses melalui AJAX. 
<h3>Membuat AJAX Controller </h3>

![ajaxcontr](https://github.com/user-attachments/assets/9101c24a-8d70-4800-8b89-3d939e19d40f)

<h3>Membuat View </h3>

![admin8](https://github.com/user-attachments/assets/ce26ab9e-0dd3-46ad-9db5-c80b1ff05044)

<h1>Praktikum 9</h1>
1. Persiapan 
* Pastikan MySQL Server sudah berjalan. 
* Buka database `lab_ci4`. 
* Pastikan tabel `artikel` dan `kategori` sudah ada dan terisi data. 
* Pastikan library jQuery sudah terpasang atau dapat diakses melalui CDN. 
 
2. Modifikasi Controller Artikel 
Ubah method `admin_index()` di `Artikel.php` untuk mengembalikan data dalam format 
JSON jika request adalah AJAX. (Sama seperti modul sebelumnya)

![admin9](https://github.com/user-attachments/assets/f04542c1-391e-491a-a496-278a90d2e174)

3. Modifikasi View (admin_index.php)
* Ubah view `admin_index.php` untuk menggunakan jQuery. 
* Hapus kode yang menampilkan tabel artikel dan pagination secara langsung. 
* Tambahkan elemen untuk menampilkan data artikel dan pagination dari AJAX. 
* Tambahkan kode jQuery untuk melakukan request AJAX.

  ![adminindex9](https://github.com/user-attachments/assets/680c4d4e-d9fa-4547-abd2-64cf2a35c422)

<h1>Praktikum 10</h1>
<h3>Persiapan</h3>
Periapan awal adalah mengunduh aplikasi REST Client, ada banyak aplikasi yang dapat digunakan untuk 
keperluan tersebut. Salah satunya adalah Postman. Postman – Merupakan aplikasi yang berfungsi 
sebagai REST Client, digunakan untuk testing REST API. Unduh apliasi Postman dari tautan berikut: 
https://www.postman.com/downloads/  
<h3>Membuat Model</h3>
Pada modul sebelumnya sudah dibuat ArtikelModel, pada modul ini kita akan memanfaatkan model 
tersebut agar dapat diakses melalui API. 
<h3>Membuat REST Controller </h3>
Pada tahap ini, kita akan membuat file REST Controller yang berisi fungsi untuk menampilkan, 
menambah, mengubah dan menghapus data. Masuklah ke direktori app\Controllers dan buatlah file 
baru bernama Post.php. Kemudian, salin kode di bawah ini ke dalam file tersebut: 

![post](https://github.com/user-attachments/assets/2d60eb74-3740-4220-9134-e5b52bcfa5f7)
Kode diatas berisi 5 method, yaitu: 
• index() – Berfungsi untuk menampilkan seluruh data pada database. 
• create() – Berfungsi untuk menambahkan data baru ke database. 
• show() – Berfungsi untuk menampilkan suatu data spesifik dari database. 
• update() – Berfungsi untuk mengubah suatu data pada database. 
• delete() – Berfungsi untuk menghapus data dari database. 

<h3>Membuat Routing REST API</h3> 
Untuk mengakses REST API CodeIgniter, kita perlu mendefinisikan route-nya terlebih dulu. 
Caranya, masuklah ke direktori app/Config dan bukalah file Routes.php. Tambahkan kode 
di bawah ini: 

![routs](https://github.com/user-attachments/assets/aa667773-e515-4f8d-a550-dcb96d12b4e6)

Selanjutnya melakukan uji coba terhadap REST API CodeIgniter. 
Testing REST API CodeIgniter 
Buka aplikasi postman dan pilih create new → HTTP Request

![image](https://github.com/user-attachments/assets/25d0957a-d22a-4be9-a2bc-0c3ce285f9a7)

<h3>Menampilkan Semua Data</h3> 
Pilih method GET dan masukkan URL berikut: 
http://localhost:8080/post  
Lalu, klik Send. Jika hasil test menampilkan semua data artikel dari database, maka pengujian 
berhasil. 

![image](https://github.com/user-attachments/assets/ebc57406-4092-457b-9693-d3b1b2e39b8a)

<h3>Menampilkan Data Spesifik</h3> 
Masih menggunakan method GET, hanya perlu menambahkan ID artikel di belakang URL 
seperti ini: 
http://localhost:8080/post/30
Selanjutnya, klik Send. Request tersebut akan menampilkan data artikel yang memiliki ID 
nomor 30 di database.

![image](https://github.com/user-attachments/assets/63b1b2cb-d0df-4d05-8eec-8be667c1a495)

<h3>Mengubah Data </h3> 
Untuk mengubah data, silakan ganti method menjadi PUT. Kemudian, masukkan URL artikel 
yang ingin diubah. Misalnya, ingin mengubah data artikel dengan ID nomor 30, maka masukkan 
URL berikut: 
http://localhost:8080/post/30  
Selanjutnya, pilih tab Body. Kemudian, pilih raw. salin data dari hasil saat GET kemudian ubah nilai yang ingin di perbarui. Kalau sudah, 
klik Send. 

![image](https://github.com/user-attachments/assets/36613562-2984-423a-bd6f-9f7c1e0a09b0)

<h3>Menambahkan Data </h3>
Anda perlu menggunakan method POST untuk menambahkan data baru ke database. 
Kemudian, masukkan URL berikut: 
http://localhost:8080/post 
Pilih tab Body, lalu pilih x-www-form-uriencoded. Masukkan atribut tabel pada kolom KEY 
dan nilai data baru di kolom VALUE. Jangan lupa, klik Send. 

![image](https://github.com/user-attachments/assets/b9e49e61-eeb5-4b36-85de-4b6fa17c7dbb)

<h3>Menghapus Data</h3> 
Pilih method DELETE untuk menghapus data. Lalu, masukkan URL spesifik data mana yang 
ingin di hapus. Misalnya, ingin menghapus data nomor 30, maka URL-nya seperti ini: 
http://localhost:8080/post/30 
Langsung saja klik Send, maka akan mendapatkan pesan bahwa data telah berhasil dihapus dari 
database. 

![image](https://github.com/user-attachments/assets/b0dde2e2-75a1-4e7a-8258-02b1c7989f75)
