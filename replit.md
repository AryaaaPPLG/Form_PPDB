# Laravel School Data Form Application

## Overview
A Laravel 12 application for collecting school/student data with user authentication. Built with Laravel Breeze for authentication, Tailwind CSS for styling, and Vite for asset bundling.

## Project Structure
- `app/` - Application logic (Controllers, Models, Providers)
- `bootstrap/` - Application bootstrapping
- `config/` - Configuration files
- `database/` - Migrations, factories, seeders
- `public/` - Publicly accessible files
- `resources/` - Views, CSS, JavaScript
- `routes/` - Application routes (web.php, auth.php)
- `storage/` - Logs, cache, compiled views
- `tests/` - Test files

## Tech Stack
- **Backend**: PHP 8.4, Laravel 12
- **Frontend**: Vite 7, Tailwind CSS, Alpine.js
- **Database**: SQLite (development)
- **Authentication**: Laravel Breeze

## Development
The development server runs on port 5000 (Laravel) with Vite HMR on port 5173.

### Running the Application
The workflow automatically runs:
```bash
php artisan serve --host=0.0.0.0 --port=5000 & npm run dev
```

### Database
SQLite database located at `database/database.sqlite`. Migrations are auto-applied.

### Key Routes
- `/` - Home/Welcome page
- `/form` - Data submission form
- `/login` - User login
- `/register` - User registration
- `/dashboard` - User dashboard (authenticated)
- `/admin/dashboard` - Admin dashboard

## Deployment
Configured for autoscale deployment with:
- Build: `npm run build`
- Run: `php artisan serve --host=0.0.0.0 --port=5000`

## Recent Changes
- 2026-01-07: Initial setup for Replit environment
  - Installed PHP 8.4 and dependencies
  - Configured Vite for Replit proxy support
  - Added trusted proxies and hosts for Laravel
  - Set up development workflow
