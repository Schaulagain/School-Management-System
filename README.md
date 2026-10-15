# School Management Web System

A web portal for a fictional college ("Woodland University College") with separate dashboards for **admins**, **staff** and **students**. It's written in plain PHP with no framework, using PDO and MySQL.

Built as a university group project in 2020. In 2026 I came back to it to fix password storage and remove personal data from the demo database.

## Features

**Admin**
- Manage students, staff, module leaders and modules, with archiving instead of hard deletes
- Bulk-import students from a CSV file
- Build timetables and post college-wide announcements

**Staff**
- Record attendance and grades and add assessments
- Upload module content and answer students' questions in module discussions
- Message students and post module announcements

**Student**
- View modules, timetable, grades, attendance and assignments
- Ask questions in module discussions and read announcements

## How it's built

- **Front controller:** `public_html/index.php` handles login, starts the session and routes `?page=…` to the scripts in `pages/`.
- **Data access:** a small `DatabaseTable` class (`databasetable/`) wraps PDO with `find`, `findAll`, `insert`, `update` and `save`. Every query uses **prepared statements**.
- **Views:** PHP templates per role in `templates/`, rendered through a `loadTemplate` helper, with Bootstrap for the UI.
- **Database:** MySQL schema and demo data in `project.sql` (14 tables).

## Running locally

1. Create a MySQL database called `project` and import `project.sql`.
2. Set your MySQL username and password in `functions/connect.php`.
3. Serve the `public_html` folder, for example with `php -S localhost:8000 -t public_html` (PHP 8 with `pdo_mysql`).

Demo accounts (all use the password `password`):

| Role | Email |
| --- | --- |
| Admin | `admin@example.com` |
| Staff | `maya.shrestha@example.com` |
| Student | `sita.rai@example.com` |

## 2026 updates

- **Passwords are now hashed** with `password_hash()` and checked with `password_verify()`. Previously they were stored and compared as plain text. Duplicate plain-text copies in the staff and student tables are no longer written.
- **Demo data is fictional.** All names, emails and phone numbers were replaced with made-up ones.
- Removed a website-copier cache folder and an Office lock file that had been committed by accident.

## What I'd do differently today

- Use a framework like Laravel for routing, validation, CSRF protection and migrations instead of hand-rolled equivalents.
- Give new accounts a random one-time password or an invite link. Currently their temporary password is their first name (stored hashed) until they change it in Settings.
- Load database credentials from environment variables instead of committing them in `connect.php`.
