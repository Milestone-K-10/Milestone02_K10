Judul Solusi : Pencegahan Penipuan Digital

Nomor-Nama Kelompok : Kelompok 10 - Biner

Nama-NIM Anggota :

    1.  Muhammad Dastin Fauzi (16521083), [Tugas - Nanti diisi aja]

    2.  Muhammad Thoriq Ramadhan (16521096), [Back-end]

    3.  Asyifa Nurul Shafira (16521132)

    4.  Karina Rahadiani (16521179)

    5.  Marvel Subekti (16521220)

    6.  Rayhan Hanif Maulana Pradana (16521234)

    7.  Samuel Eric Yonatan 16521256)

    8.  Fadhlan Nazhif Azizy (16521311)

    9.  Nathania Calista Djunaedi (16521392)

    10. Rei Arriel Clyfton (16521407), [Front-end]

    11. Maggie Zeta RS (16521475)

    12. Bagus Lathif Firmansyah (16521506)
    
    13. Muhammad Rifky Fachrizain (16521510)

Step by step how to use source-code:
1) Install PHP v.7.4 dan Database (MySQL) (disarankan install package saja seperti XAMPP v.7.4, link : https://www.apachefriends.org/download.html ) karena source coude menggunakan laravel 8.x
2) Install composer boleh pake app exe atau command-line (link : https://getcomposer.org/download/ )
3) Clone repository kedalam folder ( git clone https://github.com/Milestone-K-10/Milestone02_K10.git )
4) Jalanan XAMPP dan masuk ke phpmyadmin, ketik perintah "php artisan migrate" untuk membuat database
5) Ketik perintah "composer upgrade" untuk mengunduh vendor laravel
6) Pastikan isi file (.env) sudah benar :
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:aRajHQtdBfTMl9xmCq5E7lfq47PHGKjPJnT2FlMw4mI=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=milestone
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
7) Ketik perintah "php aritsan serve"
8) Klik link serve yang telah terbuat
9) Have a good day with our website
