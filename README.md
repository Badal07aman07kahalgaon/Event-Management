# 🎉 Event Management System (Laravel)

A simple event management web application built with **Laravel 12.x**. Easily create, update, and manage events through a clean and functional interface.

---

## 🚀 Setup Instructions

### 1. Clone the Repository
```bash
git clone https://github.com/your-username/event-management.git
cd event-management
```

### 2. Install Dependencies
```bash
composer install
npm install && npm run dev
```

### 3. Configure Environment File
```bash
cp .env.example .env
```

Then open `.env` and update the following based on your preference:

#### 🔹 MySQL Configuration
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=event_management
DB_USERNAME=root
DB_PASSWORD=
```

#### 🔹 OR SQLite Configuration (optional)
```env
DB_CONNECTION=sqlite
DB_DATABASE=${PWD}/database/database.sqlite
```
> Tip: Create the SQLite file manually:
```bash
touch database/database.sqlite
```

### 4. Generate Application Key
```bash
php artisan key:generate
```

### 5. Run Migrations
```bash
php artisan migrate
```

### 6. Start Development Server
```bash
php artisan serve
```

Visit the app at:  
👉 [http://localhost:8000](http://localhost:8000)

---

## 📁 Project Structure

| Path                        | Description                 |
|-----------------------------|-----------------------------|
| `app/Models/Event.php`      | Eloquent model for events   |
| `app/Http/Controllers/`     | Event logic (CRUD)          |
| `resources/views/`          | Blade templates              |
| `routes/web.php`            | Web routes definition       |
| `database/migrations/`      | Schema definitions          |

---

## 🧪 Event Fields

- `title` (string, required)
- `description` (text, optional)
- `date` (date, required)

---

## ✅ Requirements

- PHP 8.1+
- Composer
- Node.js (for frontend assets)
- MySQL or SQLite
- Laravel 12.x

---

## ⚙️ Optional Artisan Commands

```bash
php artisan migrate:fresh     # Reset and re-run migrations
php artisan make:model Event -mcr   # Create model + migration + controller + resource
php artisan route:list        # Show all routes
```

---

## 📄 License

Licensed under the [MIT License](LICENSE).

---

## 🙋‍♀️ Contribution

Feel free to fork the repo, submit issues, or create PRs!

