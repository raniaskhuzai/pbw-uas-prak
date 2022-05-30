
pre-requisite
Install aplikasi XAMPP untuk menghidupkan web server dan db server
Install Composer terlebih dahulu
Berikut cara menjalankannya:
1. Clone repositori ini terlebih dahulu di dalam folder htdocs
gh repo clone raniaskhuzai/pbw-uas-prak
2. Masuk ke dalam folder project melalui CMD atau Command Prompt
cd Restorant 
3. Lakukan Composer Install
composer install
4. Copy isi file .env.example lalu buat file baru .env
cp .env.example .env
5. Aktifkan key access menggunakan command artisan seperti berikut:
php artisan key:generate
6. Di dalam file .env ubahlah nama database yang ada di .env menjadi restorant
DB_DATABASE=crud_pbw
8. Setelah itu buatlah database dengan menggunakan aplikasi RDBMS yang anda punya
 create database notelib
 create database notesynopsis
9. Setelah itu hidupkan server web dengan cara sebagai berikut:
php artisan serve
