# FP-PBKK-LARAVEL

|             Name             |     NRP    |   Kelas   |
| ---------------------------- | ---------- | ----------|
| Muhammad Farras Arif Fadhila | 5025221301 |  PBKK D   |
|        Billy Jonathan        | 5025221170 |  PBKK D   |

Hi 👋, welcome to our Framework Programming Laravel final project repository, We are planning to make a E-Commerce website and the goals for our final project are listed here:
> - Create (Add to Cart)  
    1. Allow user to add products to their shopping cart  
    2. Store product details in shopping cart  
> - Read (View Cart)
    1. Display the content of the cart to the user  
    2. Show product details, quantities, and total price  
> - Update (Modify Cart)
    1. Enable users to change the quantity of items in their cart  
    2. Allow users to remove some items from their cart  
> - Delete (Empty Cart)
    1. Provide an option for users to clear all items from their shopping cart  

# Installation Tutorial
```bash
git clone https://github.com/Inventiner/FP-PBKK-Laravel.git
```
```bash
composer install
```
```bash
cp .env.example .env

# then in the .env file, edit it to your preferred mysql setting. Example:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=fp_pbkk
DB_USERNAME=root
DB_PASSWORD=
```
```bash
php artisan key:generate
```
```bash
php artisan serve
```
```bash
npm install
```
```bash
# if there is an error about database.sqllite being not detected
# you can create a file in database/database.sqlite and then run:
php artisan migrate:fresh
```