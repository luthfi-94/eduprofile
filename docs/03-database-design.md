# Database Design

## Project Information

| Item | Description |
|------|-------------|
| Project | EduProfile |
| Institution | UPTD SDN 7 WAY LIMA |
| Database | MySQL |
| Character Set | utf8mb4 |
| Collation | utf8mb4_unicode_ci |

---

# Database Design Principles

The database is designed based on the following principles:

- Normalized (3NF)
- Easy to maintain
- Easy to scale
- Consistent naming convention
- Foreign key constraints
- Eloquent ORM Friendly

---

# Entity Relationship Diagram (ERD)

```text
users
│
├── manages
│
├───────────────┐
│               │
│               │
settings     profiles
                │
                │
                ▼
           principals

categories
     │
     │ 1
     │
     ▼
posts

albums
    │
    │ 1
    ▼
galleries
```

---

# Table List

1. users
2. settings
3. profiles
4. principals
5. teachers
6. facilities
7. categories
8. posts
9. albums
10. galleries
11. ppdb_infos
12. contacts

---

# Table: users

Purpose:

Store administrator accounts.

| Field | Type | Null | Key | Description |
|--------|------|------|-----|-------------|
| id | BIGINT | NO | PK | Primary Key |
| name | VARCHAR(100) | NO | | Full Name |
| email | VARCHAR(100) | NO | UNIQUE | Login Email |
| email_verified_at | TIMESTAMP | YES | | Laravel Default |
| password | VARCHAR(255) | NO | | Password Hash |
| remember_token | VARCHAR(100) | YES | | Remember Login |
| created_at | TIMESTAMP | | | |
| updated_at | TIMESTAMP | | | |

Indexes

- PRIMARY(id)
- UNIQUE(email)

---

# Table: settings

Purpose:

Store global website configuration.

| Field | Type |
|--------|------|
| id | BIGINT |
| school_name | VARCHAR(150) |
| logo | VARCHAR(255) |
| favicon | VARCHAR(255) |
| email | VARCHAR(100) |
| phone | VARCHAR(30) |
| address | TEXT |
| facebook | VARCHAR(255) |
| instagram | VARCHAR(255) |
| youtube | VARCHAR(255) |
| google_maps | TEXT |
| footer_text | TEXT |
| created_at | TIMESTAMP |
| updated_at | TIMESTAMP |

Indexes

- PRIMARY(id)

---

# Table: profiles

Purpose:

Store school profile information.

| Field | Type |
|--------|------|
| id | BIGINT |
| history | LONGTEXT |
| vision | TEXT |
| mission | LONGTEXT |
| goals | LONGTEXT |
| created_at | TIMESTAMP |
| updated_at | TIMESTAMP |

Indexes

- PRIMARY(id)

---

# Table: principals

Purpose:

Store principal information.

| Field | Type |
|--------|------|
| id | BIGINT |
| name | VARCHAR(150) |
| position | VARCHAR(100) |
| photo | VARCHAR(255) |
| welcome_message | LONGTEXT |
| created_at | TIMESTAMP |
| updated_at | TIMESTAMP |

Indexes

- PRIMARY(id)

---

# Table: teachers

Purpose:

Store teacher data.

| Field | Type |
|--------|------|
| id | BIGINT |
| nip | VARCHAR(30) |
| name | VARCHAR(150) |
| gender | ENUM('Male','Female') |
| birth_place | VARCHAR(100) |
| birth_date | DATE |
| education | VARCHAR(100) |
| position | VARCHAR(100) |
| subject | VARCHAR(100) |
| photo | VARCHAR(255) |
| created_at | TIMESTAMP |
| updated_at | TIMESTAMP |

Indexes

- PRIMARY(id)
- INDEX(nip)
- INDEX(name)

---

# Table: facilities

Purpose:

Store school facilities.

| Field | Type |
|--------|------|
| id | BIGINT |
| name | VARCHAR(150) |
| image | VARCHAR(255) |
| description | TEXT |
| created_at | TIMESTAMP |
| updated_at | TIMESTAMP |

Indexes

- PRIMARY(id)

---

# Table: categories

Purpose:

News categories.

| Field | Type |
|--------|------|
| id | BIGINT |
| name | VARCHAR(100) |
| slug | VARCHAR(120) |
| created_at | TIMESTAMP |
| updated_at | TIMESTAMP |

Indexes

- PRIMARY(id)
- UNIQUE(slug)

---

# Table: posts

Purpose:

Store school news.

| Field | Type |
|--------|------|
| id | BIGINT |
| category_id | BIGINT |
| title | VARCHAR(255) |
| slug | VARCHAR(255) |
| thumbnail | VARCHAR(255) |
| content | LONGTEXT |
| published_at | DATETIME |
| status | ENUM('Draft','Published') |
| created_at | TIMESTAMP |
| updated_at | TIMESTAMP |

Primary Key

- id

Foreign Key

category_id → categories.id

Indexes

- INDEX(category_id)
- UNIQUE(slug)
- INDEX(status)

Relationship

Category

1 ---- *

Posts

---

# Table: albums

Purpose:

Gallery albums.

| Field | Type |
|--------|------|
| id | BIGINT |
| title | VARCHAR(150) |
| description | TEXT |
| cover | VARCHAR(255) |
| created_at | TIMESTAMP |
| updated_at | TIMESTAMP |

Indexes

- PRIMARY(id)

---

# Table: galleries

Purpose:

Gallery photos.

| Field | Type |
|--------|------|
| id | BIGINT |
| album_id | BIGINT |
| title | VARCHAR(150) |
| image | VARCHAR(255) |
| created_at | TIMESTAMP |
| updated_at | TIMESTAMP |

Primary Key

- id

Foreign Key

album_id → albums.id

Indexes

- INDEX(album_id)

Relationship

Album

1 ---- *

Gallery

---

# Table: ppdb_infos

Purpose:

PPDB information.

| Field | Type |
|--------|------|
| id | BIGINT |
| title | VARCHAR(255) |
| description | LONGTEXT |
| requirements | LONGTEXT |
| registration_open | DATE |
| registration_close | DATE |
| created_at | TIMESTAMP |
| updated_at | TIMESTAMP |

Indexes

- PRIMARY(id)

---

# Table: contacts

Purpose:

Contact information.

| Field | Type |
|--------|------|
| id | BIGINT |
| address | TEXT |
| phone | VARCHAR(30) |
| email | VARCHAR(100) |
| google_maps | LONGTEXT |
| created_at | TIMESTAMP |
| updated_at | TIMESTAMP |

Indexes

- PRIMARY(id)

---

# Relationships Summary

| Parent | Child | Relationship |
|---------|-------|--------------|
| categories | posts | One to Many |
| albums | galleries | One to Many |

---

# Naming Convention

## Tables

Plural

Examples

users

teachers

posts

albums

---

## Models

Singular

User

Teacher

Post

Album

Gallery

---

## Controllers

Singular + Controller

TeacherController

PostController

GalleryController

---

## Migration

create_users_table

create_teachers_table

create_posts_table

---

## Foreign Key

category_id

album_id

---

## Route Name

teachers.index

teachers.store

teachers.update

posts.index

posts.store

---

# Upload Directory

Teacher Photos

storage/app/public/teachers

News Thumbnail

storage/app/public/posts

Gallery Images

storage/app/public/galleries

Facility Images

storage/app/public/facilities

Principal Photo

storage/app/public/principal

Logo

storage/app/public/settings

---

# Database Migration Order

1. users
2. settings
3. profiles
4. principals
5. teachers
6. facilities
7. categories
8. posts
9. albums
10. galleries
11. ppdb_infos
12. contacts

---

# Future Database Expansion

The following tables may be added in future versions:

- achievements
- announcements
- extracurriculars
- students
- staffs
- downloads
- agendas
- visitor_logs
- activity_logs

These tables are outside the scope of version 1.0.

---

# Current Database Version

Version: 1.0.0

Status: Planning