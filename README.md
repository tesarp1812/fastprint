<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Langkah-langkah Menjalankan Proyek Laravel/Lumen</title>
</head>
<body>
    <h1>Langkah-langkah Menjalankan Proyek Laravel/Lumen</h1>

    <ol>
        <li>Setelah melakukan cloning proyek, pastikan untuk menjalankan perintah berikut untuk mengupdate Composer:</li>
    </ol>
    <pre>composer update</pre>

    <ol start="2">
        <li>Jalankan proyek menggunakan perintah:</li>
    </ol>
    <pre>php artisan serve</pre>

    <ol start="3">
        <li>Lakukan migrasi database dengan menjalankan perintah:</li>
    </ol>
    <pre>php artisan migrate</pre>

    <ol start="4">
        <li>Jalankan seeder untuk mengisi data ke dalam database:</li>
    </ol>
    <pre>php artisan db:seed</pre>

    <p>
        Pastikan bahwa Anda memiliki MySQL server berjalan dan dapat diakses dari proyek Laravel/Lumen Anda.
    </p>

    <p>
        Sekarang proyek Anda harus siap untuk digunakan dengan data yang telah di-migrate dan di-seed ke dalam database.
    </p>
</body>
</html>
