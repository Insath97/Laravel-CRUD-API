<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel CRUD API

## Project Description

The Laravel CRUD API project is a web application backend built using the Laravel PHP framework. It provides a robust API for performing CRUD (Create, Read, Update, Delete) operations on various resources, such as products, users, or any other customizable entities. The API supports file uploads and deletions, ensuring efficient management of associated resources. It includes features like validation and error handling to maintain data integrity and provide a smooth user experience.

## Key Features

- **CRUD Operations**: Implements complete CRUD functionality to manage resources.
- **File Handling**: Allows users to upload and delete files associated with resources.
- **User-Friendly Interface**: Designed with an intuitive API structure for easy integration and usage.
- **Validation and Error Handling**: Implements robust validation rules and error handling mechanisms to ensure data consistency.
- **Postman Collection**: Includes a Postman collection for testing API endpoints and verifying functionality.
- **MySQL Database**: Utilizes MySQL as the relational database management system for data storage.

## Technologies Used

- **Laravel**: A powerful PHP framework for building web applications and APIs.
- **PHP**: The programming language used for backend development.
- **MySQL**: A widely used relational database management system for storing application data.
- **Bootstrap**: Provides responsive design components for frontend elements.
- **JavaScript**: Used for interactive elements and client-side validation.

## Setup and Usage

### Installation Methods

1. **Clone the Repository**
    ```bash
    git clone https://github.com/yourusername/laravel-crud-api.git
    ```

2. **Composer and NPM Installation**
    ```bash
    composer install
    npm install
    ```

3. **Environment Configuration**
   - Rename `.env.example` to `.env` and configure database and other environment variables.

4. **Database Setup**
   - Run database migrations to create tables:
     ```bash
     php artisan migrate
     ```
   - Seed the database with sample data if needed:
     ```bash
     php artisan db:seed
     ```

5. **Start Laravel Server**
    ```bash
    php artisan serve
    ```

### Manual Installation

1. **Download ZIP File**
   - Download the repository ZIP file from GitHub.

2. **Setup Environment**
   - Extract the ZIP file contents to your web server directory.
   - Configure `.env` file with database credentials.

3. **Database Setup**
   - Create a MySQL database.
   - Import the included MySQL dump file (`database.sql`) to populate the database.

4. **Run Laravel**
   - Navigate to the project directory.
   - Start the Laravel server:
     ```bash
     php artisan serve
     ```

## Testing and Deployment

- **Postman Collection**: Use the provided Postman collection to test API endpoints for CRUD operations and file handling.
- **Sample Database**: Included SQL dump file (`database.sql`) can be used to populate the MySQL database with sample data for testing and development.

## Contact Information

For inquiries or assistance regarding the project, please contact Mohamed Insath at insath1997.mi@gmail.com.

## Screenshots

![1](https://github.com/user-attachments/assets/427286db-6ae3-4fd5-9d1b-3f5b4cc43c41)

![2](https://github.com/user-attachments/assets/75daa731-eb03-4837-81db-4c6e2827118d)

![3](https://github.com/user-attachments/assets/aaa401e8-4349-48db-954b-77ce6cb7f74d)

![4](https://github.com/user-attachments/assets/2c190b7d-2c99-4d02-a651-bc1567a08c02)

![5](https://github.com/user-attachments/assets/9d4fc4ee-b774-4ae2-9c4c-801212a5dffb)

![6](https://github.com/user-attachments/assets/097969c4-01f1-4fd7-8b7e-937b735a6e54)


