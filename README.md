## About Task Manager

Task manager is an open source web application that aims to solve problem with managing task. These are the basic features:
1. Task Management: Users can add, edit, delete, and mark tasks as completed.
2. Categories: Tasks can be organized into categories.
3. Due Dates: Add due dates to tasks.
4. Priority Levels: Assign priority levels (e.g., High, Medium, Low) to tasks.
5. Search and Filter: Implement search and filter functionalities to easily find tasks.

## Installation
Before run this in your local, make sure you have PHP 8, Composer and Node.js (for NPM) installed in your local machine. You may also consider using [Laravel Herd](https://herd.laravel.com). Once you have that ready, you can follow this steps:
1. Execute `composer install` to install all of the PHP packages.
2. Copy the `.env` file from `.env.example` using this command `cp .env.example .env`.
3. Generate the key `php artisan key:generate`.
4. Run the migration `php artisan migrate`. It will ask to configure SQLite database and answer `Y` (or enter) to create it.
5. Install JavaScript packages using `npm install`.
6. Finally, you can build the frontend using `npm run build`.

## Fake data
You may use database seeder to generate fake data. Simply execute this.
```
php artisan db:seed
```

## Contribution
Feel free to submit a PR to improve this and let me know if you have better idea for this repo. Thanks!
