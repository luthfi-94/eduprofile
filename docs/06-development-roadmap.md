# Development Roadmap

## Project Information

| Item | Description |
|------|-------------|
| Project | EduProfile |
| Institution | UPTD SDN 7 WAY LIMA |
| Framework | Laravel 12 |
| Method | Modular Development |
| Development Style | Feature by Feature |
| Version | 1.0.0 |

---

# Development Principles

The application must be developed incrementally.

Rules:

- Complete one module before starting another.
- Review every completed module.
- Test every module.
- Commit every completed module.
- Never skip development phases.
- Follow the documentation inside the docs folder.

---

# Development Workflow

```text
Planning

↓

Project Setup

↓

Authentication

↓

Admin Layout

↓

Dashboard

↓

Master Data

↓

Content Management

↓

Frontend

↓

Testing

↓

Optimization

↓

Deployment
```

---

# Phase 1

## Project Initialization

Objective

Prepare the Laravel project.

Tasks

- Create Laravel Project
- Configure .env
- Configure MySQL
- Install Composer Packages
- Install Laravel Breeze
- Install Bootstrap 5
- Configure Vite
- Configure Bootstrap Icons
- Configure Storage Link
- Git Initialization

Deliverables

- Laravel running successfully
- Login page available
- Bootstrap loaded

Status

Not Started

---

# Phase 2

## Authentication

Objective

Create administrator authentication.

Tasks

- Login
- Logout
- Forgot Password
- Reset Password
- Middleware
- Session Authentication

Deliverables

Administrator can securely log in.

Status

Not Started

---

# Phase 3

## Admin Layout

Objective

Create reusable admin layout.

Tasks

- Sidebar
- Navbar
- Footer
- Breadcrumb
- Flash Message
- Responsive Sidebar
- User Dropdown

Deliverables

Admin dashboard layout completed.

Status

Not Started

---

# Phase 4

## Dashboard

Objective

Build dashboard homepage.

Tasks

- Statistics Cards
- Latest News
- Latest Visitors
- Quick Menu
- Recent Activity

Deliverables

Responsive dashboard.

Status

Not Started

---

# Phase 5

## Website Settings

Objective

Manage website identity.

Tasks

- School Name
- Logo
- Favicon
- Contact
- Footer
- Google Maps

Deliverables

Website identity configurable from admin.

Status

Not Started

---

# Phase 6

## Menu Management

Objective

Manage frontend navigation.

Tasks

- CRUD Menu
- Parent Menu
- Menu Ordering
- Active / Inactive

Deliverables

Dynamic navigation menu.

Status

Not Started

---

# Phase 7

## Slider Management

Objective

Manage homepage slider.

Tasks

- CRUD Slider
- Upload Image
- Button URL
- Sort Order
- Active Status

Deliverables

Dynamic hero banner.

Status

Not Started

---

# Phase 8

## Pages Management

Objective

Manage static pages.

Tasks

- CRUD Pages
- CKEditor
- Slug Generator
- Featured Image
- Draft
- Publish

Pages include:

- Sejarah
- Visi
- Misi
- Tujuan
- Sambutan

Deliverables

Dynamic CMS pages.

Status

Not Started

---

# Phase 9

## Principal

Objective

Manage principal information.

Tasks

- CRUD Principal
- Upload Photo

Deliverables

Principal profile displayed.

Status

Not Started

---

# Phase 10

## Teachers

Objective

Manage teacher information.

Tasks

- CRUD Teacher
- Search
- Pagination
- Upload Photo

Deliverables

Teacher directory.

Status

Not Started

---

# Phase 11

## Facilities

Objective

Manage school facilities.

Tasks

- CRUD Facility
- Upload Image

Deliverables

Facilities page.

Status

Not Started

---

# Phase 12

## News Categories

Objective

Manage news categories.

Tasks

- CRUD Category
- Slug Generator

Deliverables

Category management.

Status

Not Started

---

# Phase 13

## News

Objective

Manage school news.

Tasks

- CRUD News
- Thumbnail Upload
- CKEditor
- Search
- Pagination
- Publish

Deliverables

News management completed.

Status

Not Started

---

# Phase 14

## Announcements

Objective

Manage announcements.

Tasks

- CRUD Announcement
- Publish
- Expiration Date

Deliverables

Announcement module.

Status

Not Started

---

# Phase 15

## Albums

Objective

Manage gallery albums.

Tasks

- CRUD Album
- Upload Cover

Deliverables

Album management.

Status

Not Started

---

# Phase 16

## Gallery

Objective

Manage gallery images.

Tasks

- CRUD Gallery
- Upload Images
- Search

Deliverables

Gallery module.

Status

Not Started

---

# Phase 17

## Downloads

Objective

Manage downloadable files.

Tasks

- CRUD Download
- Upload File
- Categories

Deliverables

Download Center.

Status

Not Started

---

# Phase 18

## PPDB

Objective

Manage PPDB information.

Tasks

- CRUD PPDB
- Banner
- Brochure Upload
- Registration Schedule
- Requirements
- Quota

Deliverables

PPDB Information Center.

Status

Not Started

---

# Phase 19

## Social Media

Objective

Manage social links.

Tasks

- CRUD Social Link
- Icon
- Active Status

Deliverables

Social media management.

Status

Not Started

---

# Phase 20

## Frontend Layout

Objective

Build frontend UI.

Tasks

- Navbar
- Hero
- Footer
- Responsive Layout

Deliverables

Frontend template.

Status

Not Started

---

# Phase 21

## Frontend Pages

Objective

Connect frontend with database.

Pages

- Home
- Profile
- Principal
- Teachers
- Facilities
- News
- Gallery
- Downloads
- PPDB
- Contact

Deliverables

Dynamic frontend website.

Status

Not Started

---

# Phase 22

## Visitor Statistics

Objective

Record website visitors.

Tasks

- Visitor Log
- Dashboard Statistics

Deliverables

Visitor statistics available.

Status

Not Started

---

# Phase 23

## Testing

Objective

Ensure application quality.

Testing

- CRUD Testing
- Validation Testing
- Authentication Testing
- Responsive Testing
- Browser Testing

Deliverables

Application tested.

Status

Not Started

---

# Phase 24

## Optimization

Objective

Optimize application performance.

Tasks

- Route Cache
- Config Cache
- View Cache
- Image Optimization
- Eager Loading
- Remove Unused Code

Deliverables

Optimized application.

Status

Not Started

---

# Phase 25

## Deployment

Objective

Deploy application.

Tasks

- Production Environment
- Shared Hosting
- Database Migration
- Storage Link
- Cache
- Backup

Deliverables

Production-ready application.

Status

Not Started

---

# Git Workflow

Every completed phase must follow:

```text
Develop

↓

Review

↓

Testing

↓

Commit

↓

Next Phase
```

---

# Commit Convention

Examples

```text
feat: setup laravel project

feat: implement authentication

feat: create dashboard

feat: add teacher module

feat: add news module

fix: resolve upload validation

refactor: optimize controllers

docs: update development roadmap
```

---

# AI Development Checklist

Before starting any phase, AI must:

- Read all files inside the docs folder.
- Review the existing project structure.
- Do not overwrite unrelated files.
- Explain the implementation plan.
- Generate complete code for one phase only.
- Wait for user approval before continuing.

---

# Progress Tracking

| Phase | Module | Status |
|--------|--------|--------|
| 1 | Project Initialization | ⬜ |
| 2 | Authentication | ⬜ |
| 3 | Admin Layout | ⬜ |
| 4 | Dashboard | ⬜ |
| 5 | Website Settings | ⬜ |
| 6 | Menu Management | ⬜ |
| 7 | Slider Management | ⬜ |
| 8 | Pages Management | ⬜ |
| 9 | Principal | ⬜ |
| 10 | Teachers | ⬜ |
| 11 | Facilities | ⬜ |
| 12 | News Categories | ⬜ |
| 13 | News | ⬜ |
| 14 | Announcements | ⬜ |
| 15 | Albums | ⬜ |
| 16 | Gallery | ⬜ |
| 17 | Downloads | ⬜ |
| 18 | PPDB | ⬜ |
| 19 | Social Media | ⬜ |
| 20 | Frontend Layout | ⬜ |
| 21 | Frontend Pages | ⬜ |
| 22 | Visitor Statistics | ⬜ |
| 23 | Testing | ⬜ |
| 24 | Optimization | ⬜ |
| 25 | Deployment | ⬜ |

---

# Current Project Status

Current Phase

Planning

Next Phase

Project Initialization

Version

1.0.0