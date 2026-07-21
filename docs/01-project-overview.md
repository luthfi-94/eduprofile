# Project Overview

## Project Information

| Item | Description |
|------|-------------|
| Project Name | EduProfile |
| Application Type | School Profile Website |
| Institution | UPTD SDN 7 WAY LIMA |
| Framework | Laravel 12 |
| Frontend | Blade Template + Bootstrap 5.3 |
| Backend | Laravel MVC |
| Database | MySQL |
| Authentication | Laravel Breeze |
| Development Method | Modular Development |
| Version | 1.0.0 |

---

# Project Description

EduProfile is a web-based school profile information system developed specifically for UPTD SDN 7 WAY LIMA.

The application serves as the official school website and provides an administration dashboard for managing all website content.

The system is designed to be modern, lightweight, responsive, secure, maintainable, and easy to use by school administrators.

---

# Project Objectives

The objectives of this application are:

- Introduce UPTD SDN 7 WAY LIMA professionally.
- Publish school information quickly.
- Display teacher and staff information.
- Display school facilities.
- Publish school news and activities.
- Display school gallery.
- Publish PPDB information.
- Make content management easier for administrators.
- Improve the school's digital presence.

---

# Scope of the Project

The application consists of two main areas.

## 1. Public Website

Accessible by everyone without login.

Contains:

- Home
- School Profile
- Principal Welcome
- Teachers
- Facilities
- News
- Gallery
- PPDB Information
- Contact

---

## 2. Admin Dashboard

Accessible only by authenticated users.

Contains:

- Dashboard
- Website Settings
- School Profile Management
- Principal Management
- Teacher Management
- Facilities Management
- News Management
- Categories Management
- Gallery Management
- Album Management
- PPDB Management
- Contact Management
- User Management

---

# Target Users

### Administrator

Responsibilities:

- Manage website content
- Publish news
- Update school profile
- Manage teachers
- Manage galleries
- Manage facilities

---

### Principal

Responsibilities:

- Review published information
- Publish welcome message

---

### Teachers

Responsibilities:

- View information
- Share school news

---

### Students

Responsibilities:

- Access school information

---

### Parents

Responsibilities:

- Obtain school information
- Read announcements
- Access PPDB information

---

### Public Visitors

Responsibilities:

- Learn about the school
- Read news
- View facilities
- View gallery

---

# Functional Requirements

The application must provide:

- Authentication
- Dashboard
- CRUD Management
- Image Upload
- CKEditor Integration
- Search
- Pagination
- Responsive Design
- Flash Messages
- Form Validation
- SEO Friendly URLs

---

# Non Functional Requirements

The application must be:

- Responsive
- Secure
- Fast
- Lightweight
- User Friendly
- Easy to Maintain
- SEO Friendly
- Cross Browser Compatible

---

# Technology Stack

## Backend

- Laravel 12
- PHP 8.3+

## Frontend

- Blade Template
- Bootstrap 5.3
- Bootstrap Icons
- JavaScript

## Database

- MySQL

## Tools

- Composer
- Node.js
- NPM
- Vite
- Git
- Visual Studio Code

---

# Application Architecture

Presentation Layer

- Blade Views
- Bootstrap Components

↓

Application Layer

- Controllers
- Form Requests
- Services (if needed)

↓

Business Layer

- Eloquent Models

↓

Data Layer

- MySQL Database

---

# Main Modules

Authentication

Dashboard

Website Settings

School Profile

Principal

Teachers

Facilities

Categories

News

Albums

Gallery

PPDB

Contact

Users

Frontend Website

---

# Development Principles

The project follows the following principles:

- Clean Code
- MVC Architecture
- PSR-12 Coding Standard
- SOLID Principles (where applicable)
- DRY (Don't Repeat Yourself)
- KISS (Keep It Simple)
- Laravel Best Practices

---

# Naming Convention

Controllers

Example:

TeacherController

NewsController

FacilityController

Models

Teacher

Post

Category

Album

Gallery

Routes

teachers.index

teachers.create

teachers.store

teachers.edit

teachers.update

teachers.destroy

---

# File Upload Rules

Uploaded images are stored in:

storage/app/public

Accessed through:

storage/

Use Laravel Storage facade.

Allowed formats:

- JPG
- JPEG
- PNG
- WEBP

Maximum file size:

2 MB

---

# Security Requirements

- Authentication required for Admin Dashboard
- CSRF Protection
- XSS Protection
- SQL Injection Protection
- Server-side Validation
- Password Hashing
- Route Middleware

---

# Performance Requirements

- Use Eloquent Relationships
- Use Pagination
- Optimize Images
- Lazy Load Images where appropriate
- Cache Configuration in Production

---

# Responsive Requirements

The website must support:

- Desktop
- Laptop
- Tablet
- Mobile

Bootstrap Grid System must be used.

---

# Project Status

Current Status:

Planning Phase

Next Phase:

Project Initialization

---

# Expected Outcome

The final product should be a professional school profile website with a modern user interface, responsive design, clean code architecture, and a complete administration dashboard that is easy to maintain and expand in the future.