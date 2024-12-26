# Welcome to SSource Blog Project

Follow these steps to install and set up the Laravel project on your local environment.

## Prerequisites

Make sure you have the following installed on your system:

- PHP (>= 8.2)
- Composer
- MySQL
- Git
- A web server (Apache or Nginx)

## Installation Steps

### 1. Clone the Repository
Clone the repository from GitHub using the following command:
```bash
git clone https://github.com/rabbialrabbi/SSource.git
```

### 2. Navigate to the Project Directory
Move into the project directory:
```bash
cd SSource
```

### 3. Install Dependencies
Install all the required dependencies using Composer:
```bash
composer install
```

### 4. Set Up the Environment File
Copy the `.env.example` file to `.env`:
```bash
cp .env.example .env
```

### 5. Generate Application Key
Run the following command to generate the application key:
```bash
php artisan key:generate
```

### 6. Configure the Database
Edit the `.env` file to configure your database connection. Update the following lines with your database details:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

### 7. Migrate the Database
Run the following command to migrate the database:
```bash
php artisan migrate
```

### 8. Seed the Database (Optional)
If you want to populate the database with dummy data for testing, run:
```bash
php artisan db:seed
```

### 9. Set Permissions (Optional)
If you encounter permission issues, you may need to set the correct permissions:
```bash
sudo chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
```

### 10. Run the Application
Start the development server using the following command:
```bash
php artisan serve
```

The application will be accessible at `http://localhost:8000`.

## Notes

- Ensure your `.env` file contains the correct database configuration.
- Use `php artisan config:clear` if changes in the `.env` file are not reflected.
- Check the Laravel documentation for additional configurations or troubleshooting.

## License
This project is open-source and available under the [MIT license](LICENSE).
