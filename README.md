Laravel Student Management System (CRUD Application)

A modern and responsive CRUD (Create, Read, Update, Delete) application built with Laravel 11 and MySQL for managing student records efficiently.
This project demonstrates clean backend logic, structured Blade templates, and user-friendly modals for add, edit, and delete operations — a great example of full-stack Laravel CRUD implementation.
Installation & Setup Guide

Follow these simple steps to run the project on your local machine:

 1️⃣ Clone the Repository
git clone https://github.com/harshlala01/laravel-student-crud.git
cd laravel-student-crud

 2️⃣ Install Dependencies
composer install

 3️⃣ Configure Environment

Copy the example environment file and generate a new application key:

cp .env.example .env
php artisan key:generate

 4️⃣ Set Up the Database

Open .env file

Update your database name, username, and password

Then run migrations:

php artisan migrate

 5️⃣ Start the Development Server
php artisan serve


Now open your browser and go to 👉
http://localhost:8000
##  Screenshots


###  Add Student Popup
![Add Student](screenshot/add-student.png)
![Add Student](screenshot/student-add-popup.png)

###  Edit Student Popup
![Edit Student](screenshot/edit-student.png)

###  Update Success Message
![Update Success](screenshot/update-success.png)

###  Delete Confirmation
![Delete Confirmation](screenshot/delete-confirmation.png)
