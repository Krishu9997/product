# Product Management System

## Overview
This is a simple Product Management System built with Laravel. It allows an admin user to log in and manage products efficiently. The functionalities include adding new products, listing all products, editing existing products, and viewing detailed product information.

## Features
- Admin login functionality
- Create new products with fields for name, amount, description, and optional image upload
- List all products with details
- Edit existing products
- View detailed information of a specific product

## Technologies Used
- **Laravel**: PHP framework for building the web application
- **MySQL**: Database for storing product information
- **Bootstrap**: For styling the application
- **Vite**: For asset compilation

## Prerequisites
Make sure you have the following installed on your machine:
- PHP >= 8.0
- Composer
- MySQL or another compatible database
- Node.js and npm (for compiling assets)

## Installation Instructions

### Step 1: Clone the Repository
```bash
git clone https://github.com/yourusername/product-management-system.git
cd product-management-system


Using Tinker
Laravel Tinker is a powerful REPL (Read-Eval-Print Loop) for interacting with your application. You can use it to create users, test models, and run arbitrary PHP code.

To use Tinker, run:

bash
Copy code
php artisan tinker
Within Tinker, you can create a user, for example:

php
Copy code
use App\Models\User;

User::create([
    'name' => 'Admin',
    'email' => 'admin@example.com',
    'password' => bcrypt('yourpassword'), // Make sure to use bcrypt
]);

php artisan storage:link