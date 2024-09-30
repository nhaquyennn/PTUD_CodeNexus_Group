# Code Nexus - Online Book Rental

**Code Nexus** is a user-friendly web platform that allows book enthusiasts to rent books online with ease. Explore a vast collection of books, manage rentals, and get recommendations based on your interests. The website is built using PHP and MySQL for smooth performance and data management.

## Features

- **Book Catalog**: Browse a wide range of books categorized by language, genre, and more.
- **User Accounts**: Sign up, log in, and manage your rental history and preferences.
- **Easy Rentals**: Rent books with just a few clicks, track rental periods, and extend rentals.
- **Notifications**: Receive email reminders for upcoming due dates or overdue rentals.
- **Responsive Design**: Optimized for mobile and desktop using Bootstrap.

## Technology Stack

- **Backend**: PHP (with Composer for dependency management)
- **Database**: MySQL for secure and efficient data storage
- **Frontend**: HTML, CSS, JavaScript, and Bootstrap 4 for responsive design
- **Web Scraping**: Scrapy for collecting and updating book data
- **Version Control**: Git

## Project Structure

Here’s an overview of the project directory structure:

```bash
code-nexus/
│
├── config/                # Configuration files for the project
├── public/                # Public-facing files (CSS, JS, images, etc.)
│   ├── css/               # Stylesheets
│   │   └── main_style.css
│   ├── js/                # JavaScript files
│   ├── img/               # Images (logos, banners, etc.)
│   │   ├── logo.png
│   │   └── homepage-banner.png
│   └── index.php          # Main entry point for the web application
│
├── resources/             # Views and assets for the frontend
│   ├── views/             # HTML/PHP templates
│   │   ├── header.php
│   │   ├── footer.php
│   │   └── home.php
│   └── lang/              # Localization files
│
├── routes/                # Route definitions for the application
│   └── web.php
│
├── src/                   # Core backend logic (Models, Controllers)
│   ├── Models/            # Database models
│   │   └── Book.php
│   ├── Controllers/       # Application logic
│   │   └── BookController.php
│   └── Services/          # Business logic services
│
├── database/              # Database-related files
│   ├── migrations/        # Migration files for database schema
│   └── seeds/             # Database seed files
│
├── tests/                 # Unit and feature tests
│
├── vendor/                # Composer dependencies
│
├── .env                   # Environment variables for the project
├── composer.json          # Composer configuration file
├── README.md              # Project documentation
└── LICENSE                # License file
```
