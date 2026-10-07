# Tasks for Today Management System

A task-management web application built using CodeIgniter 4 and MySQL.

## Features

- Welcome page showing today's tasks
- Full Task List page
- Demo Profile page
- About page
- Date-based task filtering
- MySQL database
- CodeIgniter Models
- Query Builder

## Routes

- `/` - Today's Tasks
- `/tasks` - All Tasks
- `/profile` - Profile
- `/about` - About

## Database

Database name:

`tasks_today`

Tables:

- `tasks`
- `users`

The database export is included as:

`tasks_today.sql`

## Requirements

- PHP
- Composer
- MySQL or MariaDB
- XAMPP
- CodeIgniter 4

## How to Run

1. Start Apache and MySQL in XAMPP.
2. Create a database named `tasks_today`.
3. Import `tasks_today.sql`.
4. Configure `.env`:

   `database.default.hostname = localhost`

   `database.default.database = tasks_today`

   `database.default.username = root`

   `database.default.password =`

   `database.default.DBDriver = MySQLi`

   `database.default.port = 3306`

5. Start CodeIgniter:

   `php spark serve`

6. Open:

   `http://localhost:8080/`

## Data

The Welcome page retrieves only tasks matching today's date.

The Task List page retrieves all tasks ordered by date.

The Profile page retrieves the single demo user record.