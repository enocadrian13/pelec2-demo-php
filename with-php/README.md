# Jollibee Registration & Login System

A complete PHP-based authentication system with a modern, centered UI design.

## Features

- **User Registration** with validation
  - First Name, Middle Name, Last Name
  - Email and Contact Number
  - Username (min 4 characters)
  - Password (min 8 characters) with visibility toggle
  - Password confirmation
  
- **User Login** with password visibility toggle
- **Dashboard** for logged-in users
- **Session Management** with logout functionality
- **Form Validations** (client-side and server-side)
- **Error/Success Messages** for user feedback
- **Responsive Design** with box shadow and centered layout

## Setup Instructions

### 1. Database Setup

1. Start your MySQL server (XAMPP, WAMP, or standalone)
2. Open phpMyAdmin or MySQL CLI
3. Run the SQL script:
   ```bash
   mysql -u root -p < with-php/php/database.sql
   ```
   Or manually execute the SQL in `with-php/php/database.sql`

### 2. Database Configuration

Edit `with-php/php/connection.php` if your database credentials differ:
```php
$servername = "localhost";
$username = "root";
$password = "";  // Your MySQL password
$dbname = "jolibee";
```

### 3. Start PHP Server

Navigate to the project directory and run:
```bash
cd with-php
php -S localhost:8000
```

### 4. Access the Application

Open your browser and go to:
```
http://localhost:8000
```

You'll be redirected to the login page. Click "Register" to create a new account.

## File Structure

```
with-php/
├── index.php              # Entry point (redirects to login/dashboard)
├── pages/
│   ├── login.php          # Login page
│   ├── register.php       # Registration page
│   └── dashboard.php      # User dashboard (protected)
├── php/
│   ├── connection.php     # Database connection
│   ├── login.php          # Login handler
│   ├── register.php       # Registration handler
│   ├── logout.php         # Logout handler
│   ├── routes.php         # Route handler
│   └── database.sql       # Database schema
├── style/
│   └── style.css          # Styles
└── src/
    └── jollibeelogo.jpg   # Logo image
```

## Usage

1. **Register**: Fill out the registration form with all required fields
2. **Login**: Use your username and password to log in
3. **Dashboard**: View your user information after successful login
4. **Logout**: Click the logout button to end your session

## Security Features

- Password hashing using PHP's `password_hash()`
- SQL injection protection with `mysqli_real_escape_string()`
- Session-based authentication
- Client-side and server-side validation
- Protected dashboard (requires authentication)

## Validation Rules

- **Name fields**: Only letters allowed
- **Email**: Valid email format required
- **Contact**: 10-11 digits only
- **Username**: Minimum 4 characters, must be unique
- **Password**: Minimum 8 characters
- **Confirm Password**: Must match password field

## Technologies Used

- **Backend**: PHP 7.4+
- **Database**: MySQL
- **Frontend**: HTML5, CSS3, JavaScript
- **Font**: Poppins (Google Fonts)
- **Icons**: Custom SVG icons

## Troubleshooting

- **Database connection failed**: Check your MySQL service is running and credentials in `connection.php`
- **404 errors**: Make sure you're running the PHP server from the `with-php` directory
- **Session errors**: Ensure your PHP installation has session support enabled
- **Login fails**: Verify the database and users table exist with correct schema
