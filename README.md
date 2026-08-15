# AURA & HORLOGE — Company Profile Website

A Laravel-based company profile website developed for **ITST 302 – Client-Server Technologies, Week 3 Laboratory Activity**.

The project presents **AURA & HORLOGE**, a fictional luxury horology and leather atelier specializing in fine watches, bespoke handbags, authentication, restoration, and private collection services.

---

## 1. Project Title

**Company Profile Website — AURA & HORLOGE**

A responsive multi-page company profile website developed using the Laravel MVC framework.

---

## 2. Introduction

A Company Profile Website is a website designed to introduce an organization, its identity, products or services, history, values, and contact information to potential customers and other visitors. It serves as an organization's digital presence and provides an accessible way for people to learn about the company.

Businesses need a company profile website because it helps establish their online presence, communicate their brand identity, present their products or services, and provide customers with important contact information. A professional website can also improve credibility and make information available to visitors at any time.

For this project, **AURA & HORLOGE** was created as a fictional luxury horology and leather atelier. The website presents the company's identity, history, mission, vision, values, services, team, and contact information through a responsive multi-page interface.

The project was developed using Laravel's **Model-View-Controller (MVC)** architecture. Separate routes, a controller, Blade views, reusable layouts, reusable components, and custom CSS were implemented to demonstrate Laravel's approach to organized web application development.

The project fulfills the Week 3 activity requirement of developing a professional company profile website while demonstrating Laravel routing, controllers, Blade templating, reusable components, responsive design, and Git version control.

---

## 3. Objectives

The objectives accomplished in this project are:

- Understand the basic Model-View-Controller (MVC) architecture used by Laravel.
- Understand how Laravel processes client requests through its request lifecycle.
- Create and manage multiple application routes.
- Connect routes to controller methods.
- Develop a controller responsible for handling company profile pages.
- Build reusable Blade layouts and components.
- Use Blade directives such as `@extends`, `@section`, `@yield`, and `@include`.
- Organize pages using Laravel's standard project structure.
- Create a responsive multi-page company profile website.
- Apply custom CSS for a clean, professional, and consistent visual design.
- Use Git to track development progress through meaningful commits.
- Document the project using Markdown and GitHub.
- Demonstrate the relationship between routes, controllers, and views in a Laravel application.

---

## 4. MVC Architecture

### What is MVC?

MVC stands for **Model-View-Controller**. It is a software architectural pattern that separates an application into three major parts:

- **Model** — Handles data and the application's data-related logic.
- **View** — Handles the user interface and presentation.
- **Controller** — Handles incoming requests and determines what response should be returned.

Laravel follows the MVC architecture to help developers organize applications into separate responsibilities.

### Why Laravel Uses MVC

Laravel uses MVC because separating application responsibilities makes projects easier to develop, understand, maintain, and expand.

Instead of placing routing logic, application logic, HTML, and presentation code in one file, Laravel provides dedicated locations for each responsibility.

In this project:

- Routes are defined in `routes/web.php`.
- Request-handling logic is located in `CompanyController.php`.
- User interface pages are implemented as Blade views.
- Reusable navigation and footer elements are implemented as Blade components.

### Advantages of MVC

Using MVC provides several advantages:

1. **Separation of concerns**  
   Different parts of the application have different responsibilities.

2. **Maintainability**  
   Developers can modify one part of an application without unnecessarily affecting other parts.

3. **Reusability**  
   Components and layouts can be reused across multiple pages.

4. **Organization**  
   Files are organized according to their purpose.

5. **Scalability**  
   The structure can support larger applications with more routes, controllers, models, and views.

### Laravel Request Flow

The simplified request flow used by this project is:

```text
Client / Browser
       │
       ▼
Route (web.php)
       │
       ▼
CompanyController
       │
       ▼
Blade View
       │
       ▼
HTML Response
       │
       ▼
Browser
```

For example, when a visitor requests `/about`, Laravel matches the URL to the appropriate route, sends the request to the controller method, and the controller returns the About Blade view. Laravel then renders the view into an HTML response that is displayed in the browser.

### Architecture Diagram

The following diagram illustrates the Laravel MVC request flow used in this project, from the initial browser request to the final HTML response.

![Laravel MVC Architecture Diagram](documentation/architecture-diagram.png)

---


## 5. Laravel Routing

### What is Routing?

Routing determines how an application responds to a particular URL and HTTP request.

Laravel routes are commonly defined in:

```text
routes/web.php
```

For this project, routes connect the four required company profile pages to the corresponding controller methods.

### GET Requests

The website primarily uses `GET` requests because the four main pages are pages that visitors retrieve from the server.

The main routes are:

```text
GET /
GET /about
GET /services
GET /contact
```

### Route Definitions

The routes connect URLs to methods in the company profile controller.

Example:

```php
use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CompanyController::class, 'home']);
Route::get('/about', [CompanyController::class, 'about']);
Route::get('/services', [CompanyController::class, 'services']);
Route::get('/contact', [CompanyController::class, 'contact']);
```

These routes allow the browser to request the different pages while keeping the request-handling logic inside the controller.

### Named Routes

Laravel also supports named routes, which allow routes to be referenced using a name rather than directly depending on a URL.

Although this project primarily uses URL generation such as:

```blade
{{ url('/services') }}
```

named routes are useful in larger applications because URLs can be changed without requiring every link to be manually updated.

### Route Screenshot

![Route Definitions](screenshots/route-definitions.png)

---

## 6. Controllers

### Purpose of Controllers

Controllers act as an intermediary between incoming requests and the application's views or other application logic.

Instead of placing page-handling logic directly inside the route definitions, the project uses a dedicated controller:

```text
app/Http/Controllers/CompanyController.php
```

The controller handles the four major company profile pages.

### Controller Methods

The controller contains methods for:

```text
home()
about()
services()
contact()
```

Each method returns the corresponding Blade view.

Example:

```php
public function home()
{
    return view('pages.home');
}

public function about()
{
    return view('pages.about');
}

public function services()
{
    return view('pages.services');
}

public function contact()
{
    return view('pages.contact');
}
```

This keeps the route definitions simple while giving the controller responsibility for determining which view should be returned.

### Benefits of Controllers

Controllers provide:

* Cleaner route definitions
* Separation of request handling from presentation
* Better organization
* Easier maintenance
* A structure that can be expanded when application logic becomes more complex

### Controller Screenshot

![Company Controller](screenshots/company-controller.png)

---

## 7. Blade Templating Engine

Blade is Laravel's templating engine. It allows developers to create PHP-based views while providing convenient syntax for layouts, sections, components, and other template features.

The project's Blade views are located inside:

```text
resources/views/
```

### Blade Layouts

The main shared layout is:

```text
resources/views/layouts/app.blade.php
```

This layout provides the common HTML structure used across the website, including:

* Document metadata
* Page title
* Page description
* Navigation
* Main content area
* Footer
* Vite asset loading

Individual pages extend the main layout rather than duplicating the entire HTML structure.

### `@extends`

`@extends` allows a Blade page to inherit another Blade layout.

Example:

```blade
@extends('layouts.app')
```

The About, Services, and Contact pages use the shared application layout.

### `@section`

`@section` defines content that will be inserted into a section provided by the layout.

Example:

```blade
@section('title', 'About — AURA & HORLOGE')

@section('content')

    <!-- Page content -->

@endsection
```

### `@yield`

`@yield` defines a location in the main layout where content from a child view will be displayed.

For example:

```blade
<title>@yield('title', 'AURA & HORLOGE')</title>
```

The value supplied by each page's `@section('title', ...)` is displayed in this location.

### `@include`

Blade's `@include` directive allows reusable Blade files to be inserted into another view.

The project uses reusable components for the navigation bar and footer so that the same interface elements do not have to be manually duplicated on every page.

Example:

```blade
@include('components.navbar')
```

and:

```blade
@include('components.footer')
```

### Reusable Navbar

The navigation component is located at:

```text
resources/views/components/navbar.blade.php
```

It contains:

* AURA & HORLOGE branding
* Home navigation
* About navigation
* Services navigation
* Contact navigation
* Active navigation state

### Reusable Footer

The footer component is located at:

```text
resources/views/components/footer.blade.php
```

It provides shared closing content and company information throughout the website.

### Blade Layout Screenshot

![Blade Layout](screenshots/blade-layout.png)

---

## 8. Laravel Folder Structure

The project follows Laravel's standard application structure.

```text
week03-company-profile/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   ├── Models/
│   └── Providers/
│
├── bootstrap/
│
├── config/
│
├── public/
│   └── images/
│
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── components/
│       ├── layouts/
│       └── pages/
│
├── routes/
│   └── web.php
│
├── screenshots/
│
├── documentation/
│
├── storage/
│
├── tests/
│
├── .env.example
├── artisan
├── composer.json
├── package.json
├── README.md
└── vite.config.js
```

### `app/`

The `app/` directory contains the main application code.

The controller used by this project is located inside:

```text
app/Http/Controllers/
```

The project also contains the standard `Models` and `Providers` directories provided by Laravel.

### `routes/`

The `routes/` directory contains the application's route definitions.

This project primarily uses:

```text
routes/web.php
```

for browser-accessible web routes.

### `resources/`

The `resources/` directory contains frontend resources such as CSS, JavaScript, and Blade views.

This project uses:

```text
resources/css/
resources/js/
resources/views/
```

### `public/`

The `public/` directory contains files that can be directly accessed by the browser.

The project stores its website images in:

```text
public/images/
```

Current assets include:

```text
public/images/
├── aura-horloge-logo.png
└── hero-watch.png
```

### `bootstrap/`

The `bootstrap/` directory contains Laravel's framework bootstrapping files and cached framework-related files.

It helps initialize the application before requests are processed.

### `config/`

The `config/` directory contains the application's configuration files, including settings related to the application, database, filesystem, mail, services, and other Laravel features.

### Project Structure Screenshot

![VS Code Project](screenshots/vscode-project.png)

![Laravel Folder Structure](screenshots/laravel-folder-structure.png)

---

## 9. Screenshots

Screenshots documenting the development process and final website are shown below.

### Laravel Development

#### Route Definitions

![Route Definitions](screenshots/route-definitions.png)

#### Company Controller

![Company Controller](screenshots/company-controller.png)

#### Node, NPM, and Vite

![Node NPM Vite](screenshots/node-npm-vite.png)

### Project Structure

#### VS Code Project

![VS Code Project](screenshots/vscode-project.png)

#### Laravel Folder Structure

![Laravel Folder Structure](screenshots/laravel-folder-structure.png)

#### Blade Layout

![Blade Layout](screenshots/blade-layout.png)

### Website Pages

#### Home

![Home Page - 1](screenshots/home-page1.png)

![Home Page - 2](screenshots/home-page2.png)

![Home Page - 3](screenshots/home-page3.png)

![Home Page - 4](screenshots/home-page4.png)

![Home Page - 5](screenshots/home-page-5.png)

#### About

![About Page - 1](screenshots/about-page1.png)

![About Page - 2](screenshots/about-page2.png)

![About Page - 3](screenshots/about-page3.png)

![About Page - 4](screenshots/about-page4.png)

![About Page - 5](screenshots/about-page5.png)

#### Services

![Services Page - 1](screenshots/services-page1.png)

![Services Page - 2](screenshots/services-page2.png)

![Services Page - 3](screenshots/services-page3.png)

![Services Page - 4](screenshots/services-page4.png)

![Services Page - 5](screenshots/services-page5.png)

#### Contact

![Contact Page - 1](screenshots/contact-page1.png)

![Contact Page - 2](screenshots/contact-page2.png)

### Interface Components

#### Navigation Bar

![Navigation Bar](screenshots/navbar.png)

#### Footer

![Footer](screenshots/footer.png)

### Browser Output

![Browser Output](screenshots/browser-output.png)

### GitHub Repository

![GitHub Repository](screenshots/github-repository.png)

---

## 10. Problems Encountered

Several challenges were encountered while developing the project.

### Problem 1 — Character Encoding Display in the Terminal

One issue encountered during development was the display of special characters such as the em dash (`—`) when viewing Blade files through the Windows PowerShell terminal.

In some terminal output, the em dash appeared as corrupted characters such as:

```text
â€”
```

However, the actual Blade files contained the intended character, and the rendered website displayed the em dash correctly.

This indicated that the issue was related to how the terminal displayed the file contents rather than an actual problem with the website.

### Problem 2 — Managing Large CSS Changes

The original Laravel project contained the default styling. The company profile required a completely different visual identity based on a dark luxury aesthetic with gold accents and custom typography.

The project therefore required substantial changes to:

```text
resources/css/app.css
```

The stylesheet became significantly larger as custom layouts, responsive behavior, typography, buttons, cards, sections, navigation, footer styling, and CSS-based service icons were added.

### Problem 3 — Managing Multiple Git Changes

As the website developed, several files were modified or newly created at the same time. This included Blade pages, the main CSS file, navigation components, images, screenshots, and the README.

Git repeatedly showed modified and untracked files that had to be reviewed and staged correctly before committing.

This required checking:

```bash
git status
```

and reviewing changes with commands such as:

```bash
git diff
```

before creating commits.

---

## 11. Solutions

### Solution 1 — Verifying the Character Encoding Issue

Instead of changing the actual website content unnecessarily, the file contents and browser output were checked.

The website itself displayed the em dash correctly, confirming that the problem was limited to terminal character rendering.

The actual source files were therefore left unchanged.

### Solution 2 — Organizing the CSS Development

The stylesheet was organized into logical sections covering:

* Global styling
* Typography
* Containers
* Navigation
* Hero sections
* Buttons
* Page sections
* Service cards
* Contact forms
* Footer
* Responsive layouts
* CSS-based icons

Custom CSS was used instead of relying on external icon libraries for the service icons.

This allowed the website to maintain a consistent visual identity.

### Solution 3 — Using Git Status, Diff, and Meaningful Commits

Git commands were used to review and organize changes before committing them.

Examples included:

```bash
git status
git diff
git add
git commit
git log --oneline
git push origin main
```

Major features were committed separately, including the About page, Services and Contact pages, visual refinement, and documentation.

The final repository was pushed successfully to GitHub, and the local `main` branch was synchronized with `origin/main`.

---

## 12. Reflection

Developing the AURA & HORLOGE company profile website helped me understand how Laravel's MVC architecture organizes a web application into separate responsibilities. Before working with Laravel, it was easy to think of a website mainly as HTML, CSS, and links between pages. Through this project, I learned that Laravel provides a structured way to handle a browser request, determine which route should respond, pass the request to a controller, and return a Blade view that becomes the final HTML displayed by the browser.

The most important concept I learned was separation of concerns. Routes should primarily determine where a request should go, controllers should handle request-related logic, and views should focus on presentation. Keeping these responsibilities separate makes the application easier to understand and maintain. For example, the project uses `web.php` for the four main routes, `CompanyController` for the page-handling methods, and separate Blade files for the Home, About, Services, and Contact pages. This organization is much cleaner than placing all of the page content and request logic in a single file.

I also gained a better understanding of how reusable Blade layouts and components reduce duplication. Instead of writing the navigation bar and footer separately on every page, the project uses reusable components and a shared application layout. The individual pages extend the layout using `@extends`, define their content using `@section`, and receive the content through `@yield`. This made it possible to maintain a consistent navigation, footer, metadata structure, and overall page design across the entire website.

Another important lesson was that the architecture is useful beyond a small company profile website. In a larger enterprise system, there may be many different pages, user roles, forms, database operations, and business rules. A structured MVC architecture allows these responsibilities to remain organized as the application grows. Models can handle database-related operations, controllers can coordinate application logic, and views can present the results to users.

Overall, this project gave me practical experience with Laravel routing, controllers, Blade templates, reusable components, project organization, responsive frontend development, and Git version control. More importantly, it helped me understand why frameworks such as Laravel use structured architectures instead of treating every webpage as an independent collection of HTML files. The project showed me how these concepts work together to create a maintainable foundation for larger web applications.

---

## 13. References

Laravel. (n.d.). *Laravel documentation*. [https://laravel.com/docs](https://laravel.com/docs)

MDN Web Docs. (n.d.). *HTML: HyperText Markup Language*. Mozilla. [https://developer.mozilla.org/en-US/docs/Web/HTML](https://developer.mozilla.org/en-US/docs/Web/HTML)

MDN Web Docs. (n.d.). *CSS: Cascading Style Sheets*. Mozilla. [https://developer.mozilla.org/en-US/docs/Web/CSS](https://developer.mozilla.org/en-US/docs/Web/CSS)

PHP Documentation Group. (n.d.). *PHP manual*. [https://www.php.net/docs.php](https://www.php.net/docs.php)

Vite. (n.d.). *Vite documentation*. [https://vite.dev/guide/](https://vite.dev/guide/)

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
9. Project documentation and screenshots
```

Git was used throughout development to track changes and maintain meaningful commits for major features and improvements.

---

## Git Commit History

The project contains the following major commits:

```text
docs: add project documentation and screenshots
style: refine company profile design
feat: add services and contact pages
feat: add about page
fix: update company profile footer
feat: add company profile home page
feat: add reusable layout and navigation components
feat: add company profile controller and routes
feat: create Laravel project
```

The project satisfies the Week 3 requirement of maintaining at least eight meaningful Git commits. The GitHub repository was also updated through the `main` branch.

---

## Technologies Used

* **Laravel**
* **PHP**
* **Blade Templates**
* **CSS**
* **Vite**
* **Node.js**
* **NPM**
* **Git**
* **GitHub**

### Frontend

The website uses custom CSS for its visual design.

Typography includes:

* Cormorant Garamond
* Inter

The design uses a dark luxury color palette with:

* Black
* Charcoal
* Ivory
* Gold accents

Custom CSS was also used to create the service icons without requiring a separate icon library.

---

## Features

### Home Page

* Luxury hero section
* Company introduction
* Featured services
* Call-to-action sections
* Responsive layout
* Custom visual design

### About Page

* Company history
* Mission and vision
* Core values
* Team section
* Closing call-to-action

### Services Page

The website presents six services:

1. Private Watch Brokerage
2. Bespoke Handbag Tailoring
3. Forensic Authentication
4. Watch Movement Servicing
5. Handbag Restoration Spa
6. Consignment & Liquidity

Each service contains an icon, title, description, and visual styling.

### Contact Page

* Atelier address
* Email information
* Phone number
* Social media information
* Private inquiry form
* Inquiry category selection

The contact form is implemented as a **UI-only form**, as required by the activity.

---

## Project Purpose

This project was created as part of **ITST 302 – Client-Server Technologies, Week 3** to demonstrate the development of a Laravel-based company profile website.

The project demonstrates:

* Laravel project structure
* MVC architecture
* Routing
* Controllers
* Blade templating
* Reusable layouts
* Reusable components
* Responsive navigation and footer
* Custom CSS styling
* Vite and NPM
* Git version control
* GitHub documentation

---

## Author

**Christian Joseph Aquino**

**BSIT — 3A**

**ITST 302 – Client-Server Technologies**

---

## License

This project was created for academic purposes.

