# School Management Web System

A web portal for a made-up college called Woodland University College. Admins, staff and students each get their own dashboard. It's plain PHP with no framework, using PDO and MySQL.

This was a group project at university in 2020. In 2026 I went back to it to fix how passwords were stored and to take real-looking personal data out of the demo database.

## What it does

Admins manage students, staff, module leaders and modules. Records get archived rather than deleted. Admins can also import students from a CSV file, build timetables and post announcements to the whole college.

Staff take attendance, enter grades, add assessments and upload module content. They can message students, post module announcements and answer questions in each module's discussion.

Students can see their modules, timetable, grades, attendance and assignments, read announcements and ask questions in the discussions.

## Code layout

Everything goes through `public_html/index.php`. It handles login, starts the session and sends `?page=...` to the matching script in `pages/`. Database access goes through a small `DatabaseTable` class in `databasetable/` that wraps PDO (`find`, `findAll`, `insert`, `update`, `save`), and all queries use prepared statements. The views are PHP templates in `templates/`, one set per role, styled with Bootstrap. `project.sql` has the schema (14 tables) and demo data.

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

## Changes in 2026

- Passwords used to be stored and compared as plain text. They're now hashed with `password_hash()` and checked with `password_verify()`, and the extra plain-text copies in the staff and student tables are no longer saved.
- The names, emails and phone numbers in the demo data are all made up now.
- Deleted a website-copier cache folder and an Office lock file that had been committed by mistake.

## Known problems

New accounts get their first name as a temporary password (hashed) until they change it in Settings. A random password or an invite link would be better. The database login is also hard-coded in `connect.php` instead of coming from environment variables. If I wrote this today I'd use Laravel, which would handle routing, validation, CSRF protection and migrations.
