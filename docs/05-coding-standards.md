# Coding Standards

## Project Information

| Item | Description |
|------|-------------|
| Project | EduProfile |
| Institution | UPTD SDN 7 WAY LIMA |
| Framework | Laravel 12 |
| PHP Version | 8.3+ |
| Database | MySQL 8 |
| Frontend | Blade + Bootstrap 5.3 |

---

# Coding Principles

Every code generated for this project must follow these principles.

- Clean Code
- Readable Code
- Maintainable Code
- Reusable Code
- Scalable Architecture
- Laravel Best Practices
- PSR-12 Coding Standard
- SOLID Principles (where applicable)
- DRY (Don't Repeat Yourself)
- KISS (Keep It Simple)

---

# Laravel Architecture

The application must follow Laravel MVC Architecture.

```text
Request

↓

Route

↓

Controller

↓

Form Request Validation

↓

Model (Eloquent)

↓

Database

↓

Blade View

↓

Response
```

Controllers should only coordinate the request and response.

Business logic should remain inside Models or dedicated Service Classes when necessary.

---

# Folder Structure

```text
app/

├── Http/
│   ├── Controllers/
│   ├── Requests/
│   └── Middleware/
│
├── Models/
│
├── Services/
│
├── Providers/
│
resources/

├── views/
│   ├── layouts/
│   ├── components/
│   ├── admin/
│   └── frontend/
│
routes/

database/

public/

storage/
```

---

# Naming Convention

## Controllers

Singular + Controller

Example

```text
TeacherController

PostController

GalleryController

SettingController
```

---

## Models

Singular

```text
Teacher

Gallery

Post

Category

Menu
```

---

## Migration

Plural

```text
create_teachers_table

create_posts_table

create_categories_table
```

---

## Seeder

```text
TeacherSeeder

CategorySeeder

MenuSeeder
```

---

## Factory

```text
TeacherFactory

PostFactory
```

---

## Policy

```text
TeacherPolicy

PostPolicy
```

---

## Middleware

```text
CheckAdmin

Authenticate
```

---

## Blade Files

Use lowercase.

```text
index.blade.php

create.blade.php

edit.blade.php

show.blade.php

form.blade.php
```

---

# Route Naming

Always use named routes.

Example

```php
Route::resource('teachers', TeacherController::class);
```

Generated routes

```text
teachers.index

teachers.create

teachers.store

teachers.show

teachers.edit

teachers.update

teachers.destroy
```

---

# URL Convention

Always use slug.

Correct

```text
/posts/penerimaan-siswa-baru
```

Avoid

```text
/posts/10
```

---

# Database Rules

Always use

Migration

Seeder

Factory

Foreign Keys

Indexes

Soft Delete when appropriate

Example

```php
$table->foreignId('category_id')->constrained()->cascadeOnDelete();
```

---

# Model Rules

Use

Fillable

Relationship

Accessor

Mutator (only if needed)

Casting

Example

```php
protected $fillable = [
    'title',
    'slug',
    'content'
];
```

---

# Controller Rules

Controllers should be thin.

Allowed

Validation

Calling Service

Returning View

Redirect

Avoid

Business Logic

SQL Query

Large Calculations

Long Methods

---

# Validation

Always use Form Request Validation.

Never validate directly inside controllers unless the validation is very small.

Example

```php
StoreTeacherRequest

UpdateTeacherRequest
```

---

# Blade Rules

Use Blade Components whenever possible.

Example

```blade
<x-card>

<x-alert>

<x-button>

<x-modal>

<x-input>
```

Avoid duplicated HTML.

---

# Bootstrap Rules

Use Bootstrap 5 Utility Classes.

Prefer

```text
mb-3

d-flex

justify-content-between

align-items-center
```

Avoid unnecessary custom CSS.

---

# CSS Rules

Store custom CSS in

```text
resources/css/app.css
```

Avoid inline CSS.

---

# JavaScript Rules

Store scripts in

```text
resources/js/
```

Avoid inline JavaScript.

Use SweetAlert2 for confirmation.

---

# CRUD Structure

Every CRUD module must contain:

Migration

Model

Form Request

Controller

Views

Routes

Validation

Search

Pagination

Flash Message

Image Upload (if needed)

---

# View Structure

Example

```text
resources/views/admin/teachers/

index.blade.php

create.blade.php

edit.blade.php

show.blade.php

form.blade.php
```

---

# Upload Rules

Use Laravel Storage.

Never store uploaded files directly inside public/.

Directory

```text
storage/app/public/

teachers/

posts/

gallery/

slider/

settings/

downloads/
```

Access using

```php
Storage::url($teacher->photo)
```

---

# Pagination

Default

10 records per page

Use

```php
paginate(10)
```

---

# Search

Use Request parameters.

Example

```php
?search=teacher
```

---

# Flash Message

Use SweetAlert2.

Success

Error

Warning

Info

---

# Delete Confirmation

Always show confirmation dialog before deleting data.

---

# Security

Always use

CSRF Protection

Route Middleware

Form Request Validation

Mass Assignment Protection

Password Hashing

Escape Output

Authorization when needed

Never trust user input.

---

# Performance

Always

Use Eloquent Relationship

Use eager loading

Example

```php
Post::with('category')->paginate(10);
```

Avoid N+1 Query.

---

# Error Handling

Use

try-catch

only when needed.

Use Laravel Exception Handler.

Never display raw exception messages in production.

---

# Logging

Use Laravel Log.

Example

```php
Log::error($exception);
```

Never use

```php
dd()
```

or

```php
dump()
```

in production code.

---

# Git Commit Convention

Use meaningful commit messages.

Examples

```text
feat: add teacher module

feat: create news management

fix: resolve image upload bug

fix: correct validation rule

refactor: simplify dashboard controller

style: improve sidebar layout

docs: update database documentation
```

---

# Code Review Checklist

Before completing any module, ensure:

- Code follows PSR-12.
- Validation is implemented.
- Routes use named routes.
- Blade components are reused.
- No duplicate logic.
- Relationships use Eloquent.
- No N+1 queries.
- Images use Laravel Storage.
- Flash messages use SweetAlert2.
- Layout is responsive.
- Security checks are applied.

---

# AI Development Rules

Before generating code, AI must:

1. Read every file inside the docs folder.
2. Analyze the current project structure.
3. Reuse existing code whenever possible.
4. Never overwrite unrelated files.
5. Explain the implementation plan.
6. Generate complete code for one module only.
7. Summarize all created and modified files.
8. Wait for approval before continuing.

---

# Version

Version : 1.0.0

Status : Approved