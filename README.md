# NeoAdzan

[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://raw.githubusercontent.com/cahyadsn/neoadzan/master/LICENSE)
[![GitHub forks](https://img.shields.io/github/forks/cahyadsn/mbti.svg)](https://github.com/cahyadsn/neoadzan/network)
[![GitHub stars](https://img.shields.io/github/stars/cahyadsn/mbti.svg)](https://github.com/cahyadsn/mbneoadzanti/stargazers)
[![GitHub issues](https://img.shields.io/github/issues/cahyadsn/mbti.svg)](https://github.com/cahyadsn/neoadzan/issues)

NeoAdzan Islamic Prayer Time Schedule in PHP language. Build on PHP language and MySQL/MariaDB database server.

> Ini adalah fork version dengan penyesuaian :
>
> 1. Penambahan `composer.json`
> 2. Penambahan classmap autoload
> 3. Penambahan package `vlucas/phpdotenv`
>
> Original source code dan bisa di akases di [https://github.com/cahyadsn/neoadzan](https://github.com/cahyadsn/neoadzan)
>

## Installation

1. Clone repositori

   ```bash
   git clone https://github.com/atInisiatifZakat/neoadzan.git
   ```

2. Jalankan composer install

   ```bash
   composer install
   ```

3. Buat new MySQL database
4. Import file `db/db_neoadzan.sql` to database
5. Buat `.env` file dengan content seperti dibawah

   ```text
   DB_HOSTNAME=
   DB_USERNAME=
   DB_PASSWORD=
   DB_NAME=
   ```

6. Buat virtual host dan arahkan root path ke `/public`
7. Untuk localhost bisa menjalankan peritah dibawah ini

   ```bash
   php -S localhost:8000 -t public
   ```

   Lalu buat dengan alamat `http://localhost:8000`

## Technology

- PHP [http://www.php.net/](http://www.php.net/)
- MySQL [http://www.mysql.com/](http://www.mysql.com/)

## Donation

- Bank Syariah Sayriah : 821 342 5550
- Paypal : [https://paypal.me/cahyadwiana](https://paypal.me/cahyadwiana)

## Contact

- facebook [https://m.facebook.com/cahya.dsn](https://m.facebook.com/cahya.dsn)
- email [cahyadsn@gmail.com](cahyadsn@gmail.com)
- demo site : [http://neoadzan.cahyadsn.com](http://neoadzan.cahyadsn.com)
- source code : [https://github.com/cahyadsn/neoadzan](https://github.com/cahyadsn/neoadzan)
