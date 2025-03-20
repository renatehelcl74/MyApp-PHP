
# PHP Authentication Application

A modern PHP application with user authentication, dark mode support, and a clean architecture.

## Features

- User Authentication (Login/Logout)
- Dark Mode Support
- Responsive Design with Tailwind CSS
- Session Management
- Database Integration (MySQL)

## Project Structure

```
project-root/
├── docs/
│   └── mysql_schema.sql     # Database schema
├── public/
│   ├── css/
│   │   └── styles.css      # Tailwind CSS styles
│   └── js/
│       └── main.js         # Dark mode functionality
├── src/
│   ├── Config/
│   │   └── config.php      # Application configuration
│   ├── Controllers/
│   │   └── AuthController.php  # Authentication logic
│   └── Views/
│       ├── home.php        # Home page
│       ├── login.php       # Login form
│       └── users.php       # User management
└── index.php               # Application entry point
```

## Setup

1. Configure database credentials in `src/Config/config.php`
2. Import database schema from `docs/mysql_schema.sql`
3. Start the server: `php -S 0.0.0.0:8000`

## Default User

- Username: steinhaug
- Password: 123123

## Technical Stack

- PHP 8.2+
- MySQL Database
- Tailwind CSS
- Vanilla JavaScript
- Session-based Authentication

## Security Features

- HTTP-only cookies
- Session security measures
- Prepared SQL statements
- CSRF protection
