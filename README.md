<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About My  Laravel  10.14.x Excel Data Import Export 

Step 1: Installing fresh new Laravel 10.14.x Application


composer global require laravel/installer 


laravel new example-app


Step 2: Creating Database and .env Configuration
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=example-app
DB_USERNAME=root
DB_PASSWORD=

Step 3: Installing maatwebsite/excel Package

composer require psr/simple-cache:^1.0 maatwebsite/excel

Step 4: Creating Dummy Records

-----> run this first  

       php artisan migrate

       
       php artisan tinker 

       
       User::factory()->count(10)->create()

Step 5: Creating Import Class

       php artisan make:import UsersImport --model=User

Step 6: Creating Export Class
      
      php artisan make:export UsersExport --model=User
    
Step 7: Creating Controller
      
      php artisan make:controller UserController

Step 8: Creating Routes

Step 9: Creating Blade File

  users.blade.php

Step 10: Testing

       php artisan serve

Step 11: Conclusion
     
     http://127.0.0.1:8000/users
Happy Coding , Have Fun !
