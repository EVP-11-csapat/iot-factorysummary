#  IoT Laravel Project

This project is a web application developed using the Laravel framework. The purpose of this app is to connect to a database of a factory and display the data in the browser.

## Installation

1. Clone the repository: `git clone https://github.com/EVP-11-csapat/iot_laravel_project.git`
2. Install dependencies: `composer install | npm install`
3. Create a copy of the `.env.example` file and rename it to `.env`: `cp .env.example .env`
4. Generate the application key: `php artisan key:generate`
5. Configure the database connection in the `.env` file.
6. Run the database migrations: `php artisan migrate`
7. Start the application: `npm run dev` `php artisan serve`

## Usage

1. Access the web application by visiting `http://localhost:8000` in your browser.
2. The application will display the data from the factory database.

## License

This project is licensed under the MIT License. See the `LICENSE` file for more information.
