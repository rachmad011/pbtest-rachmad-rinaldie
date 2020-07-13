# Simple RestAPI menggunaka Lumen dan Klasifikasi nama Produk

### Pertama-tama clone dulu

Lalu, setelah berhasil di clone install package di dalamnya dengan menggunakan perintah berikut :
```
composer install
```
Setelah itu install packages dari NPM menggunakan perintah berikut :
```
npm install
```
Lalu Anda download .env.example dan database nya yang sudah saya share di link berikut ini https://drive.google.com/drive/folders/10VyaobJPLglU6jKJrBeR3LgMb9fmHOaj?usp=sharing

Setelah di download, letakkan file .env.example di direktori root proyek Anda lalu ubah namanya jadi .env dan Anda bisa atur konfigurasi di dalamnya terutama bagian database. Pastikan nama database sesuai serta nama user dan password login ke MySQL sudah sesuai dengan environment yang Anda jalankan.

Jika sudah selesai dan tidak ada error, maka harusnya sudah bisa dijalankan menggunakan perintah berikut :
```
php -S localhost:3000 -t public
```
Jika sudah seperti ini harusnya sudah jalan.

Saya sudah buat route khusus ke `localhost:3000/key` yang dimana akan men-generate string acak sebanyak 32 karakter.

Setelah ada mengimpor database yang sudah di download tadi, anda bisa langsung mengakses database via api menggunakan aplikasi POSTMAN

Anda bisa langsung melihat keseluruhan produk dengan pergi ke route berikut : 
```
localhost:3000/api/v1/products
```
Jika Anda ingin memasukkan data baru via api Anda bisa ke route berikut ini : 
```
localhost:3000/api/v1/products
```
Namun pastikan format inputan Anda seperti ini : 
```
{
    "products_name_before": "iPhone 7plus 256 GB Rose Gold (September Promo)"
}
```
Di database saya menggunakan 2 kolom utama yaitu **products_name_before** dan **products_name_after**.

**products_name_before** merupakan nama produk yang akan dimasukkan oleh user yang kemudian akan diolah lagi sesuai klasifikasi sebelum dimasukkan ke database.

**products_name_after** akan menerima hasil klasifikasi dari products_name_before yang telah ditentukan agar nama produk yang tersimpan sesuai dengan yang telah ditentukan.

# Teknologi
## 1. Lumen
Lumen mengklaim sebagai salah satu microframework yang tercepat selain s*\ilex dan S*\lim 3. 
## 2. MySQL
Bukan pilihan terbaik, tapi bukan pilihan terburuk juga sih. Saya mau menggunakan MongoDB tapi ternyata gak support di WSL (Windows Subsystem for Linux) yang saya gunakan sekarang.
