## pet-adoption-center
Pet Adoption Center application built with Laravel.

### Development Setup
1. Clone this repository.

2. Open this project in your IDE (PHPStorm or VSCode).

3. Open the terminal of your IDE and execute these commands:

    a. Copy `.env.example` to `.env`
    ```
    copy .env.example .env 
    ```
   
    b. Install PHP Dependencies
    ```
    composer install
    ```
   
    c. Generate application key
    ```
    php artisan key:generate
    ```

    d. Migrate database
    ```
    php artisan migrate
    ```

    e. Start the development server
    ```
    php artisan serve
    ```
