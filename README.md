# MVC Blog — A Blog Platform Built with Laravel

A full-stack blog application built with **Laravel** and **Bootstrap**, developed as part of a full-stack web development program. The project focuses on backend architecture and covers the complete lifecycle of a web application: database design, server-side routing, MVC pattern, and a clean responsive UI.

---

## What This Project Does

MVC Blog allows users to create, read, edit, and delete blog articles through a clean web interface. Every article is stored in a MySQL database and served dynamically via Laravel's templating engine.

**Core features:**
- Browse all published articles on a dedicated index page
- Read each article on its own detail page
- Write new articles through a validated form — authenticated users only
- Edit existing articles with pre-filled fields — authenticated users only
- Delete articles with a confirmation prompt — authenticated users only
- User registration and login powered by Laravel Fortify
- Flash notifications on every user action (create, update, delete)
- Responsive layout powered by Bootstrap, bundled with Vite

---

## Tech Stack

| Layer | Technology |
|---|---|
| Backend | PHP 8 / Laravel 11 |
| Frontend | Blade Templates, Bootstrap 5 |
| Build Tool | Vite |
| Database | MySQL |
| Architecture | MVC (Model–View–Controller) |
| Authentication | Laravel Fortify |

---

## Project Structure

The application follows Laravel's standard MVC pattern:

- **Model** (`Article`) — represents the article data and handles database interaction
- **Controller** (`PublicController`) — contains all the logic for each page and action
- **Views** — Blade templates that render the HTML, using a shared layout with reusable components (navbar, footer)
- **Routes** — map URLs to controller methods using Laravel's RESTful resource conventions

---

## Authentication & Middleware

User authentication is handled by **Laravel Fortify**, which provides the backend logic for registration, login, and session management without imposing a fixed UI — the views are custom-built with Blade and Bootstrap.

Write, edit, and delete actions are protected by Laravel's built-in `auth` middleware. Unauthenticated users attempting to access those routes are automatically redirected to the login page.

| Action | Protected |
|---|---|
| Browse & read articles | Public |
| Create a new article | ✅ Auth required |
| Edit an article | ✅ Auth required |
| Delete an article | ✅ Auth required |


---

## Pages & Routes

| Page | URL | Description |
|---|---|---|
| Homepage | `/` | Landing page with latest articles |
| All Articles | `/articles/index` | Lists every article in the database |
| New Article | `/articles/create` | Form to write and publish a new article |
| Article Detail | `/articles/{article}` | Full content of a single article |
| Edit Article | `/articles/{article}/edit` | Pre-filled form to update an article |

---

## What I Practiced

- Designing a relational database schema and writing Laravel migrations
- Implementing full **CRUD** logic following REST conventions
- Using **Route Model Binding** to simplify controller code
- Handling **form validation** server-side with error feedback in the UI
- Structuring reusable UI with Blade **components** and a shared layout
- Managing frontend assets with **Vite** and integrating Bootstrap via npm
- Protecting forms with **CSRF tokens** and spoofing HTTP verbs (PUT, DELETE)
- Implementing user authentication with **Laravel Fortify**
- Restricting routes with **middleware** to separate public and protected areas

---

## How to Run Locally

```bash
# Clone the repository
git clone https://github.com/your-username/mvc-blog.git
cd mvc-blog

# Install PHP dependencies
composer install

# Install JS dependencies
npm install

# Copy environment config and generate app key
cp .env.example .env
php artisan key:generate

# Set up your database credentials in .env, then run migrations
php artisan migrate

# Start the development servers
php artisan serve
npm run dev
```

Visit `http://localhost:8000` in your browser.

---




## About

Open to junior frontend and full-stack opportunities — feel free to reach out.
