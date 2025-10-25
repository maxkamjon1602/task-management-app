# 📋 Simple Task Management App

A minimal **Laravel + SQLite** CRUD application for managing tasks.  
This project demonstrates **Laravel fundamentals**: routing, migrations, Eloquent ORM, Blade templating, and validation.

---

## 🚀 Features
- View a list of tasks
- Add a new task
- Edit an existing task
- Delete a task
- Mark a task as **completed** or **pending** via checkbox

---

## ⚙️ Requirements
- PHP >= 8.1  
- Composer  
- Laravel 10+  
- SQLite (no extra server required)

---

## 🛠️ Setup & Run

1. **Clone or unzip the project**
   ```bash
   git clone https://github.com/maxkamjon1602/task-management-app.git task-app
   cd task-app
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Configure environment**
   Copy `.env.example` to `.env`:
   ```bash
   cp .env.example .env
   ```
   Update `.env` to use SQLite:
   ```env
   DB_CONNECTION=sqlite
   DB_DATABASE=/absolute/path/to/project/database/database.sqlite
   ```

4. **Create SQLite file**
   ```bash
   touch database/database.sqlite
   ```

5. **Generate app key & migrate**
   ```bash
   php artisan key:generate
   php artisan migrate
   php artisan db:seed --class=TaskSeeder
   ```

6. **Run the development server**
   ```bash
   php artisan serve
   ```

7. **Open in browser**
   👉 [http://127.0.0.1:8000](http://127.0.0.1:8000)

