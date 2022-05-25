# Proposal

### Setup Aplikasi

Jalankan perintah

```bash
composer install
```

Mengganti file env.example menjadi env.

```bash
cp .env.example .env
```

konfigurasi database di file env

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama database anda
DB_USERNAME=root
DB_PASSWORD=
```

Generate key

```bash
php artisan key:generate
```

Migrate database

```bash
php artisan migrate
```

Menjalankan aplikasi

```bash
php artisan serve
```
