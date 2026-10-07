# Tasks for Today Management System

A task-management web application built using CodeIgniter 4 and MySQL.

## Features

- Welcome page showing today's tasks
- Full Task List page
- Demo Profile page
- About page
- Create new tasks
- Edit and update tasks
- Soft delete tasks
- Form validation
- Login and logout
- Hashed password verification
- Session-based authentication
- Protected task management actions
- Public read-only pages
- MySQL database
- CodeIgniter Models and Query Builder

## Routes

### Public

- `/` - Today's Tasks
- `/tasks` - All Tasks
- `/profile` - Profile
- `/about` - About
- `/login` - Login

### Protected

- `/tasks/new` - New Task
- `/tasks/edit/{id}` - Edit Task
- Task create, update, and delete actions

## Database

Database name:

`tasks_today`

Tables:

- `tasks`
- `users`

The tasks table includes an `is_archived` field for soft deletion.

The users table includes a hashed `password` field for authentication.

The database export is included as:

`tasks_today.sql`

## Requirements

- PHP
- Composer
- CodeIgniter 4
- MySQL or MariaDB
- XAMPP

## How to Run

1. Start Apache and MySQL in XAMPP.
2. Create a database named `tasks_today`.
3. Import `tasks_today.sql`.
4. Configure `.env` with the local database settings.
5. Run:

   `php spark serve`

6. Open:

   `http://localhost:8080/`

## Authentication

The Welcome, Task List, Profile, and About pages are public.

Creating, editing, updating, and deleting tasks requires authentication.

Passwords are stored as hashes and verified during login.

CodeIgniter sessions maintain the login state, and an authentication Filter protects management routes.

## Soft Delete

Deleting a task does not permanently remove it from the database.

The task's `is_archived` value is changed to `1`, and archived tasks are excluded from the Welcome and Task List pages.

## Data

The Welcome page retrieves only today's non-archived tasks.

The Task List page retrieves all non-archived tasks ordered by date.

The Profile page retrieves the single demo user.