<<<<<<< HEAD
# 📖 Laravel Project - Book Management System

## 🛠️ Project Overview
This is a **PHP Laravel-based** web application designed to manage books, categories, and publishers. The system provides an intuitive interface to handle core operations such as viewing, adding, and organizing books.

The application is built with **Laravel**, **Blade templates**, and follows modern MVC architecture.

---

## 🌐 Pages Included

1. 🏠 **Strona domowa (Home Page)**:
   - The main landing page providing an overview of the site.

2. 📚 **Książki (Books)**:
   - View the list of all books with details like title, author, publisher, and category.

3. 🏷️ **Kategorie (Categories)**:
   - Explore available categories of books.

4. 🏛️ **Wydawnictwa (Publishers)**:
   - View the list of publishers.

5. ➕ **Dodaj kategorię (Add Category)**:
   - Add new categories to organize books.

6. ➕ **Dodaj książkę (Add Book)**:
   - Add new books with relevant information.

7. ➕ **Dodaj wydawnictwo (Add Publisher)**:
   - Add new publishers.

8. 🔑 **Zaloguj (Login)**:
   - User authentication for secure access.

9. 📝 **Zarejestruj (Register)**:
   - New user registration form.

---

## ⚙️ Technologies Used

- **PHP** (Laravel framework)
- **Blade** (Laravel templating engine)
- **PostgreSQL** (Database)
- **HTML5 & CSS3** (Frontend)
- **JavaScript** (Interactive UI)

---

## 🚀 Getting Started

### 🖥️ Prerequisites

Ensure you have the following installed:

- **PHP 8.x**
- **Composer**
- **Laravel Installer**
- **MySQL**

### 📦 Installation Steps

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/Barbarossa01/BookAppLaravel.git
   cd BookAppLaravel
   ```

2. **Install Dependencies**:
   ```bash
   composer install
   ```

3. **Environment Configuration**:
   - Duplicate the `.env.example` file and rename it to `.env`.
   - Update database credentials:
     ```env
     DB_DATABASE=your_database_name
     DB_USERNAME=your_db_username
     DB_PASSWORD=your_db_password
     ```

4. **Run Migrations**:
   ```bash
   php artisan migrate
   ```

5. **Start the Development Server**:
   ```bash
   php artisan serve
   ```

6. **Access the Application**:
   - Open: `http://localhost:8000`

---

## 🖼️ Application Features

### 📖 Book Management
- View, add, edit, and delete books.

### 🏷️ Category Management
- Add, view, and manage categories for better organization.

### 🏛️ Publisher Management
- Add, view, and manage publishers.

### 🔐 User Authentication
- Secure access via login and registration functionality.

---

## ⚠️ Security Considerations
- Input validation on all forms.
- CSRF protection enabled by Laravel.

---

## 📚 Sample Code Snippets

### **Route Example**
```php
Route::get('/books', [BookController::class, 'index']);
Route::post('/books/add', [BookController::class, 'store']);
```

### **Controller Method**
```php
public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'publisher_id' => 'required|integer',
        'category_id' => 'required|integer',
    ]);

    Book::create($validated);
    return redirect('/books')->with('success', 'Book added successfully!');
}
```

### **Blade Template Snippet**
```html
<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Book Title" required>
    <button type="submit">Add Book</button>
</form>
```

---

## 🔍 Future Improvements

- 🔐 Implement role-based access control.
- 📊 Add analytics for book views and popular categories.
- 📱 Optimize for mobile devices.

---

**Happy Coding! 😊**

=======
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
>>>>>>> 4d3f4e0 (Initial commit: Upload Laravel Book Management App)
