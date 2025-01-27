# PHP Forum Application

This is a basic PHP forum application that allows users to sign up, log in, create posts, and upload images. The application uses a MySQL database to store user information and forum posts.

## Project Structure

```
php-forum-app
├── src
│   ├── index.php          # Main entry point for the forum application
│   ├── signup.php         # User registration handling
│   ├── login.php          # User authentication
│   ├── post.php           # Creating new forum posts
│   ├── upload.php         # Image upload management
│   ├── config
│   │   └── database.php   # Database connection settings
│   ├── includes
│   │   ├── header.php     # HTML header section
│   │   ├── footer.php     # HTML footer section
│   │   └── functions.php   # Utility functions
│   └── uploads            # Directory for storing uploaded images
├── css
│   └── styles.css         # Styles for the application
├── js
│   └── scripts.js         # JavaScript functionality
├── .htaccess              # Server configurations
├── composer.json          # Composer dependencies
└── README.md              # Project documentation
```

## Setup Instructions

1. **Clone the Repository**
   ```
   git clone <repository-url>
   cd php-forum-app
   ```

2. **Install Dependencies**
   Make sure you have Composer installed, then run:
   ```
   composer install
   ```

3. **Configure Database**
   Edit the `src/config/database.php` file to set your MySQL database credentials.

4. **Run the Application**
   You can run the application using a local server setup like XAMPP or MAMP. Place the project in the server's root directory and access it via your web browser.

## Usage Guidelines

- **User Registration**: Navigate to `signup.php` to create a new account.
- **User Login**: Use `login.php` to authenticate and access the forum.
- **Create Posts**: After logging in, you can create new posts via `post.php`.
- **Upload Images**: Use `upload.php` to upload images associated with your posts.

## Contributing

Feel free to submit issues or pull requests for improvements and bug fixes.