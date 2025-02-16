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

