# Routing Plan

## Project Information

| Item | Description |
|------|-------------|
| Project | EduProfile |
| Institution | UPTD SDN 7 WAY LIMA |
| Framework | Laravel 12 |
| Routing Type | Web Routes |
| Middleware | web, auth |

---

# Routing Principles

All routes must follow Laravel best practices.

Rules:

- Use Route::resource() whenever possible.
- Use named routes.
- Protect admin routes using auth middleware.
- Use route model binding.
- Group routes by prefix.
- Keep URLs clean and SEO-friendly.

---

# Route Structure

```text
/

├── Frontend

└── Admin
```

---

# Frontend Routes

Base URL

```text
/
```

| URL | Route Name | Controller | Method |
|------|------------|------------|--------|
| / | home | HomeController@index | GET |
| /profil | profile | ProfileController@index | GET |
| /kepala-sekolah | principal | PrincipalController@index | GET |
| /guru | teachers | TeacherController@index | GET |
| /guru/{slug} | teachers.show | TeacherController@show | GET |
| /fasilitas | facilities | FacilityController@index | GET |
| /fasilitas/{slug} | facilities.show | FacilityController@show | GET |
| /berita | news | PostController@index | GET |
| /berita/{slug} | news.show | PostController@show | GET |
| /pengumuman | announcements | AnnouncementController@index | GET |
| /pengumuman/{slug} | announcements.show | AnnouncementController@show | GET |
| /galeri | gallery | GalleryController@index | GET |
| /album/{slug} | albums.show | AlbumController@show | GET |
| /download | downloads | DownloadController@index | GET |
| /ppdb | ppdb | PpdbController@index | GET |
| /kontak | contact | ContactController@index | GET |

---

# Authentication Routes

Laravel Breeze

| URL | Route Name |
|------|------------|
| /login | login |
| /logout | logout |
| /forgot-password | password.request |
| /reset-password | password.reset |

Middleware

guest

auth

---

# Admin Routes

Prefix

```text
/admin
```

Middleware

```text
auth
```

Name Prefix

```text
admin.
```

Example

```php
Route::prefix('admin')
    ->middleware('auth')
    ->name('admin.')
    ->group(function () {

    });
```

---

# Dashboard

| URL | Route Name |
|------|------------|
| /admin/dashboard | admin.dashboard |

---

# Website Settings

Resource

```php
Route::resource('settings', SettingController::class);
```

Generated Routes

```text
admin.settings.index

admin.settings.create

admin.settings.store

admin.settings.show

admin.settings.edit

admin.settings.update

admin.settings.destroy
```

---

# Menu Management

```php
Route::resource('menus', MenuController::class);
```

Routes

```text
admin.menus.index

admin.menus.create

admin.menus.store

admin.menus.show

admin.menus.edit

admin.menus.update

admin.menus.destroy
```

---

# Slider Management

```php
Route::resource('sliders', SliderController::class);
```

---

# Pages

```php
Route::resource('pages', PageController::class);
```

---

# Principal

```php
Route::resource('principals', PrincipalController::class);
```

---

# Teachers

```php
Route::resource('teachers', TeacherController::class);
```

---

# Facilities

```php
Route::resource('facilities', FacilityController::class);
```

---

# Categories

```php
Route::resource('categories', CategoryController::class);
```

---

# Posts

```php
Route::resource('posts', PostController::class);
```

---

# Announcements

```php
Route::resource('announcements', AnnouncementController::class);
```

---

# Albums

```php
Route::resource('albums', AlbumController::class);
```

---

# Galleries

```php
Route::resource('galleries', GalleryController::class);
```

---

# Downloads

```php
Route::resource('downloads', DownloadController::class);
```

---

# PPDB

```php
Route::resource('ppdbs', PpdbController::class);
```

---

# Social Links

```php
Route::resource('social-links', SocialLinkController::class);
```

---

# Visitor Logs

Visitor logs are generated automatically.

No CRUD interface is required.

Admin Route

```text
/admin/visitor-logs
```

Controller

VisitorLogController@index

---

# Profile Routes

| URL | Route Name |
|------|------------|
| /admin/profile | admin.profile.edit |
| /admin/profile/update | admin.profile.update |
| /admin/profile/password | admin.profile.password |

---

# Route Middleware

## Public

```text
web
```

---

## Authentication

```text
auth
```

---

## Guest

```text
guest
```

---

# Route Naming Rules

Use lowercase.

Use plural for resources.

Examples

```text
teachers.index

teachers.store

teachers.edit

posts.index

posts.show

downloads.destroy
```

---

# Route Model Binding

Always use slug for frontend.

Example

```php
Route::get('/berita/{post:slug}');
```

```php
Route::get('/guru/{teacher:slug}');
```

```php
Route::get('/album/{album:slug}');
```

Never expose numeric IDs on public pages unless required.

---

# Route Group Example

```php
Route::middleware(['auth'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', DashboardController::class)
            ->name('dashboard');

        Route::resource('teachers', TeacherController::class);
        Route::resource('posts', PostController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('albums', AlbumController::class);
        Route::resource('galleries', GalleryController::class);
        Route::resource('downloads', DownloadController::class);
    });
```

---

# URL Convention

Frontend

```text
/

/profil

/guru

/guru/budi-santoso

/fasilitas

/fasilitas/perpustakaan

/berita

/berita/lomba-pramuka

/galeri

/album/class-meeting

/download

/ppdb

/kontak
```

Admin

```text
/admin/dashboard

/admin/posts

/admin/teachers

/admin/facilities

/admin/pages

/admin/sliders

/admin/menus
```

---

# Route Security

Every admin route must:

- Use auth middleware.
- Validate incoming requests.
- Authorize actions where necessary.
- Prevent direct access without authentication.

---

# Future Routes (Version 2.0)

The following routes are reserved for future development:

```text
/admin/students

/admin/staffs

/admin/achievements

/admin/extracurriculars

/admin/agendas

/admin/events

/admin/faqs

/admin/testimonials
```

---

# Routing Checklist

Before adding a new route, ensure:

- Route name is unique.
- URL follows naming conventions.
- Controller exists.
- Middleware is correctly applied.
- Resource routes are used whenever possible.
- Frontend uses slug-based URLs.
- Route model binding is implemented.

---

# Current Routing Status

Version

1.0.0

Status

Approved

Next Step

Implementation in routes/web.php