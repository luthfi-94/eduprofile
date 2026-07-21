# UI Guidelines

## Project Information

| Item | Description |
|------|-------------|
| Project | EduProfile |
| Institution | UPTD SDN 7 WAY LIMA |
| Framework | Bootstrap 5.3 |
| Template Engine | Laravel Blade |
| Responsive | Yes |
| Dark Mode | Not Available (Version 1.0) |

---

# Design Philosophy

EduProfile is designed with the following principles:

- Modern
- Clean
- Professional
- Responsive
- Minimalist
- User Friendly
- Fast Loading
- Accessibility Friendly

The interface should be simple, easy to understand, and suitable for educational institutions.

---

# Color Palette

## Primary Color

Blue

HEX

```text
#0D6EFD
```

Used For

- Navbar
- Sidebar
- Primary Button
- Active Menu
- Hyperlink

---

## Secondary Color

White

HEX

```text
#FFFFFF
```

Used For

- Background
- Card
- Form

---

## Accent Color

Yellow

HEX

```text
#FFC107
```

Used For

- Badge
- Notification
- Highlight

---

## Success

```text
#198754
```

---

## Danger

```text
#DC3545
```

---

## Warning

```text
#FFC107
```

---

## Info

```text
#0DCAF0
```

---

## Dark

```text
#212529
```

---

## Light Gray

```text
#F8F9FA
```

---

# Typography

Primary Font

Poppins

Fallback

```text
sans-serif
```

Heading

600

Body

400

Button

500

Navigation

500

---

# Font Size

| Element | Size |
|---------|------|
| H1 | 36 px |
| H2 | 30 px |
| H3 | 24 px |
| H4 | 20 px |
| H5 | 18 px |
| Body | 16 px |
| Small | 14 px |

---

# Icons

Bootstrap Icons

Examples

- bi-house
- bi-person
- bi-book
- bi-image
- bi-building
- bi-newspaper

---

# Layout Structure

Frontend

```text
Navbar

↓

Hero Slider

↓

Welcome Section

↓

School Profile

↓

Facilities

↓

News

↓

Gallery

↓

PPDB

↓

Footer
```

---

Admin

```text
Navbar

↓

Sidebar

↓

Content

↓

Footer
```

---

# Navbar

Height

70 px

Position

Sticky Top

Background

Primary Blue

Menu Alignment

Right

Logo Alignment

Left

---

# Sidebar

Width

260 px

Collapsed Width

80 px

Background

White

Active Menu

Primary Blue

Border Radius

10 px

Icons

Bootstrap Icons

---

# Footer

Background

Dark

Text

White

Contains

- Copyright
- School Name
- Social Media

---

# Cards

Border Radius

16 px

Shadow

Bootstrap Shadow

Padding

20 px

Background

White

---

# Buttons

Primary

Blue

Secondary

Gray

Success

Green

Danger

Red

Warning

Yellow

Border Radius

10 px

---

# Forms

Input Height

45 px

Border Radius

10 px

Validation

Bootstrap Validation

Spacing

16 px

---

# Tables

Bootstrap Table

Hover

Yes

Striped

Yes

Responsive

Yes

Pagination

Yes

Search

Above Table

---

# Images

Format

JPG

PNG

WEBP

Maximum Size

2 MB

Preview Before Upload

Required

---

# CKEditor

Used For

- News
- Pages
- PPDB
- Announcements

Toolbar

Basic Formatting

Image Upload

Table

Link

Bullets

Numbering

Undo

Redo

---

# Gallery

Grid Layout

Desktop

4 Columns

Tablet

2 Columns

Mobile

1 Column

---

# Responsive Breakpoints

| Device | Width |
|---------|-------|
| Mobile | <576 px |
| Small | ≥576 px |
| Medium | ≥768 px |
| Large | ≥992 px |
| Extra Large | ≥1200 px |

Bootstrap Grid System must be used.

---

# Dashboard

Cards

5 Cards

Statistics

Latest News

Latest Visitors

Quick Menu

Recent Activity

---

# Animations

Allowed

Fade

Slide

Hover Scale

Smooth Transition

Duration

300 ms

Avoid excessive animations.

---

# UI Components

The application should use reusable Blade Components.

Components:

- Navbar
- Sidebar
- Footer
- Card
- Modal
- Alert
- Button
- Badge
- Breadcrumb
- Pagination
- Form Input
- Form Select
- Textarea
- Image Upload

---

# Notifications

Use SweetAlert2

Success

Green

Error

Red

Confirmation

Yellow

Toast

Top Right

---

# Loading State

Use Bootstrap Spinner.

Show loading during:

- Save Data
- Update Data
- Delete Data
- Upload Image

---

# Empty State

If no data exists,

Display:

- Illustration
- Friendly Message
- Add Data Button

---

# 404 Page

Display

- Illustration
- Friendly Message
- Back Home Button

---

# Accessibility

All images must have ALT text.

Buttons must have icons.

Forms must have labels.

Color contrast must follow WCAG recommendations.

Keyboard navigation should be supported.

---

# SEO Guidelines

Use semantic HTML5.

Use:

- header
- nav
- section
- article
- footer

Every page must have:

- Title
- Meta Description
- Open Graph Image

URLs must use slug.

Example

```text
/berita/lomba-pramuka-2026
```

---

# UI Development Rules

- Use Bootstrap utility classes whenever possible.
- Avoid inline CSS.
- Avoid inline JavaScript.
- Use reusable Blade Components.
- Maintain consistent spacing and typography.
- Optimize images before upload.
- Ensure all pages are responsive.
- Follow mobile-first design principles.

---

# Version

Version : 1.0.0

Status : Approved