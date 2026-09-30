# Celios CMS Starter Skeleton

A clean, lightweight Laravel application template pre-configured to build client websites powered by **Celios CMS** and **Filament v5**.

---

## What is Inside?

- **Celios Core Engine (`celios/core`)**: Multilingual CMS pages, blog, document management, newsletter, dynamic form builder, CRM contacts, and role-based access control.
- **Pluggable Payments (`celios/payment`)**: Multi-gateway payment manager (Stripe, PayPal, Mollie, Bank Wire).
- **Filament Admin Panel**: Accessible at `/admin` with unified multi-theme support (Ocean Blue, Emerald Forest, Midnight Obsidian).
- **Zero Core Clutter**: All core logic, migrations, routes, and admin resources are loaded from the package, keeping your client application codebase minimal and maintainable.

---

## Quickstart Setup

### 1. Install Dependencies
```bash
composer install
```

### 2. Configure Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 3. Run the Celios 1-Step Installer
```bash
php artisan celios:install
```
This interactive command will:
- Publish Celios configurations (`config/modules.php`, `config/locales.php`).
- Publish and verify the admin theme styling.
- Create the `storage:link` symlink.
- Run all database migrations (both Laravel and Celios CMS tables).
- Interactively create your initial **Superadmin** user.

### 4. Build Frontend Assets
```bash
npm install
npm run build
```

### 5. Start the Application
```bash
php artisan serve
```
Visit `http://localhost:8000/admin` and log in with your Superadmin credentials!

---

## Pushing to a New Git Repository

To connect this starter project to your new GitHub repository:

```bash
git remote add origin git@github.com:celiclazar/your-client-repo.git
git branch -M main
git push -u origin main
```

---

## Composer Package Configuration

By default during local development, `composer.json` uses a **path repository** to link directly to your local Celios packages:

```json
"repositories": [
    {
        "type": "path",
        "url": "../celios/packages/*",
        "options": {
            "symlink": true
        }
    }
]
```

When you publish `celios/core` to GitHub or Packagist, simply swap the repository path in `composer.json` with your VCS URL or require the published package version:

```json
"require": {
    "celios/core": "^1.0",
    "celios/payment": "^1.0"
}
```

---

## Updating Celios Core in the Future

Whenever a new version of Celios Core is released, simply run:

```bash
composer update celios/*
php artisan migrate
```
Zero merge conflicts, zero manual code updates.
