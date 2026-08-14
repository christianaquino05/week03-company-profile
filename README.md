# AURA & HORLOGE — Company Profile Website

A Laravel-based company profile website developed for ITST 302.  
The project presents **AURA & HORLOGE**, a fictional luxury horology and leather atelier specializing in fine watches, bespoke handbags, authentication, restoration, and private collection services.

---

## Project Overview

**AURA & HORLOGE** is designed as a premium company profile website with a dark luxury aesthetic, gold accents, elegant typography, and responsive layouts.

The website provides visitors with information about the company, its services, history, values, team, and contact information.

### Main Pages

- **Home** — Introduction to AURA & HORLOGE and its luxury offerings
- **About** — Company history, philosophy, values, and team
- **Services** — Overview of the company's six major services
- **Contact** — Company information and private inquiry form

---

## Features

### Home Page

- Luxury hero section
- Company introduction
- Featured offerings
- Call-to-action sections
- Responsive layout
- Custom visual design

### About Page

- Company history
- Mission and vision
- Core values
- Team section
- Closing call-to-action

### Services Page

The website presents six services:

1. Private Watch Brokerage
2. Bespoke Handbag Tailoring
3. Forensic Authentication
4. Watch Movement Servicing
5. Handbag Restoration Spa
6. Consignment & Liquidity

### Contact Page

- Atelier address
- Email information
- Phone number
- Social media information
- Private inquiry form
- Inquiry category selection

---

## Technologies Used

- **Laravel**
- **PHP**
- **Blade Templates**
- **CSS**
- **Vite**
- **Node.js**
- **NPM**
- **Git**
- **GitHub**

### Frontend

The website uses custom CSS for the overall visual design.

Typography is provided through:

- Cormorant Garamond
- Inter

The design uses a dark luxury color palette with ivory, charcoal, and gold accents.

---

## Laravel Architecture

The project follows Laravel's standard structure.

### Important Directories

```text
app/
├── Http/
├── Models/
└── Providers/

resources/
├── css/
├── js/
└── views/
    ├── components/
    ├── layouts/
    └── pages/

routes/
└── web.php

public/
└── images/

screenshots/
````

### Blade Views

The website uses Blade templates to organize reusable layouts and individual pages.

```text
resources/views/
├── components/
│   ├── footer.blade.php
│   └── navbar.blade.php
│
├── layouts/
│   └── app.blade.php
│
└── pages/
    ├── home.blade.php
    ├── about.blade.php
    ├── services.blade.php
    └── contact.blade.php
```

---

## Reusable Blade Components

The project uses reusable Blade components to avoid duplicating common website elements.

### Navbar

```text
resources/views/components/navbar.blade.php
```

The navigation component contains:

* AURA & HORLOGE branding
* Home navigation
* About navigation
* Services navigation
* Contact navigation
* Active navigation state

### Footer

```text
resources/views/components/footer.blade.php
```

The footer contains the site's closing branding and company information and is reused throughout the pages.

---

## Main Layout

The main application layout is located at:

```text
resources/views/layouts/app.blade.php
```

The layout provides the shared HTML structure for the website and includes:

* Document metadata
* Page title
* Page description
* Navigation
* Main content area
* Footer
* Vite asset loading

Individual pages extend this layout using Blade's `@extends` and `@section` directives.

Example:

```blade
@extends('layouts.app')

@section('title', 'About — AURA & HORLOGE')

@section('content')

    <!-- Page content -->

@endsection
```

---

## Routing

The website routes are defined in:

```text
routes/web.php
```

The routes connect the website URLs to the company profile controller and corresponding Blade views.

Main routes include:

```text
/
 /about
 /services
 /contact
```

---

## Controller

The company profile controller is located in:

```text
app/Http/Controllers/CompanyProfileController.php
```

The controller handles the main company profile pages and returns the appropriate Blade views.

---

## Frontend Assets

The main stylesheet is located at:

```text
resources/css/app.css
```

The project uses Vite for frontend asset development and compilation.

The project configuration is defined in:

```text
vite.config.js
```

Node and NPM dependencies are managed through:

```text
package.json
package-lock.json
```

---

## Images

Website images are stored in:

```text
public/images/
```

Current project assets include:

```text
public/images/
├── aura-horloge-logo.png
└── hero-watch.png
```

These assets are used by the website's visual sections.

---

## Screenshots

Screenshots documenting the development and final website are stored inside:

```text
screenshots/
```

### Laravel Development

* `route-definitions.png`
* `company-controller.png`
* `node-npm-vite.png`

### Project Structure

* `vscode-project.png`
* `laravel-folder-structure.png`
* `blade-layout.png`

### Website Pages

#### Home

* `home-page1.png`
* `home-page2.png`
* `home-page3.png`
* `home-page4.png`
* `home-page-5.png`

#### About

* `about-page1.png`
* `about-page2.png`
* `about-page3.png`
* `about-page4.png`
* `about-page5.png`

#### Services

* `services-page1.png`
* `services-page2.png`
* `services-page3.png`
* `services-page4.png`
* `services-page5.png`

#### Contact

* `contact-page1.png`
* `contact-page2.png`

---

## Installation

### 1. Clone the Repository

```bash
git clone <repository-url>
```

### 2. Navigate to the Project

```bash
cd week03-company-profile
```

### 3. Install PHP Dependencies

```bash
composer install
```

### 4. Install Node Dependencies

```bash
npm install
```

### 5. Configure Environment

Create the `.env` file from the example:

```bash
copy .env.example .env
```

Generate the Laravel application key:

```bash
php artisan key:generate
```

### 6. Run the Development Server

Start Laravel:

```bash
php artisan serve
```

The application will be available at:

```text
http://127.0.0.1:8000
```

### 7. Run Vite

In another terminal:

```bash
npm run dev
```

---

## Development Workflow

The project was developed incrementally using Git.

Major development milestones include:

```text
1. Laravel project initialization
2. Company profile controller and routes
3. Reusable layout and navigation components
4. Home page
5. Footer refinement
6. About page
7. Services and Contact pages
8. Final visual and CSS refinement
```

Git was used throughout development to track changes and maintain separate commits for major features and improvements.

---

## Git Commit History

The project currently contains the following major commits:

```text
style: refine company profile design
feat: add services and contact pages
feat: add about page
fix: update company profile footer
feat: add company profile home page
feat: add reusable layout and navigation components
feat: add company profile controller and routes
feat: create Laravel project
```

---

## Project Purpose

This project was created as part of **ITST 302** to demonstrate the development of a Laravel-based company profile website.

It demonstrates the use of:

* Laravel project structure
* Routing
* Controllers
* Blade templates
* Reusable components
* Layout inheritance
* CSS styling
* Vite and NPM
* Git version control

---

## Author

**Christian Joseph Aquino**

BSIT — 3A
ITST 302

---

## License

This project was created for academic purposes.
