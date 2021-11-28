Создать .env файл в котором указать подключения к бд
(пример .env.example)
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=simple
DB_USERNAME=root
DB_PASSWORD=1234

В корне проекта:
 1. Запустить команду: composer install
 2. Запустить миграцию команду: php artisan migrate 
