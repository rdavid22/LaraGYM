# LaraGYM
LaraGYM is a Laravel-based web application for a fictive Gym.

### Prerequisites
 - PHP 8.0
 - Composer
 - Node
 - Apache / NGINGX
 - SQL server

### Run the application
 - Set up your own .env file based on the type of SQL & SMTP provider you are using.
 - Run the database migration with the command: `php artisan migrate`.
 - Run the following commands:
  ```
    $ npm install
    $ npm run dev / build
    $ php artisan serve
  ```

### Used packages / services in development:
 - Breeze
 - Tailwind
 - TW-Elements
 - Mailtrap
 - Laravel Lang