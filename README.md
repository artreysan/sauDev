```
git clone https://github.com/artreysan/sauDev.git
```

```
composer i
```
```
npm i
```

Create database call sau:
```
mysql -u root -p
```
En SQL;
```
CREATE DATABASE sauDev;
```
```
exit;
```

Modificar el archivo `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sauDev
DB_USERNAME=root
DB_PASSWORD=
```

```
php artisan migrate
```