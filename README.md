# Laravel Order Management API - README

## Overview
This application is a Laravel-based API designed to manage and retrieve orders. It provides endpoints to list orders, retrieve details for specific orders, and update order statuses. Built using Laravel 11, it ensures robust performance, security, and seamless integration with third-party systems.

## Features
- **Order Management**: Retrieve, view, and update orders.
- **RESTful API**: Easy integration with other applications and services.
- **Secure Authentication**: Protect endpoints using Laravel Sanctum.
- **External API Integration**: Support for real-time updates from external sources.
- **Swagger Documentation**: Clear and accessible API documentation.

## Installation

### Prerequisites
Ensure the following are installed:
- PHP >= 8.2
- Composer
- Node.js & npm
- MySQL or another supported database

### Steps

1. **Clone the Repository**
   ```bash
   git clone https://github.com/your-repo-name.git
   cd your-repo-name
   ```

2. **Install PHP Dependencies**
   ```bash
   composer install
   ```

3. **Environment Configuration**
   Copy the `.env.example` file to `.env`:
   ```bash
   cp .env.example .env
   ```
   Update the `.env` file with your database credentials and other necessary configurations.

4. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

5. **Run Database Migrations**
   ```bash
   php artisan migrate --seed
   ```

6. **Generate API Documentation**
   ```bash
   php artisan l5-swagger:generate
   ```

7. **Start the Development Server**
   ```bash
   composer run dev
   ```

   Access the application at `http://localhost:8000`.

## API Documentation

The API documentation is automatically generated using Swagger. To view the documentation:

1. Open your browser and navigate to:
   ```
   http://localhost:8000/api/documentation
   ```

## Testing

The application uses PHPUnit for testing. Run the test suite with:
```bash
php artisan test
```

## License
This project is licensed under the [MIT License](LICENSE). Feel free to use and modify it as needed.

## Contact
For questions or support, contact Radu Soltan at radusoltan@gmail.com.

