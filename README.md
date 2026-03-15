# eventify
Workshop &amp; Event Management Platform
# Eventify

**Eventify** is a workshop and event management platform built with **Laravel (backend)** and **Vue.js 3 (frontend)**.  
It allows users to browse, book, and review workshops, while organizers can manage events efficiently.

---

## Features

- **User Authentication & Roles**: Admin, Organizer, and Attendee roles with secure login/registration.
- **Workshop/Event Management**: CRUD operations for events with categories, images, online/offline toggle.
- **Booking System**: Users can book slots with real-time availability checks.
- **Payments Integration**: Stripe/PayPal integration for paid events.
- **Ratings & Reviews**: Attendees can rate and review events.
- **Admin Dashboard**: View key metrics, manage users, events, and bookings.
- **Search & Filters**: Find events by category, date, location, and rating.
- **Optional AI Suggestions**: Recommend events based on user activity (advanced feature).

---

## Tech Stack

- **Backend**: Laravel 10, MySQL/PostgreSQL, Sanctum/JWT, Redis (optional caching)
- **Frontend**: Vue.js 3, Pinia, Vue Router, TailwindCSS
- **Testing**: PHPUnit (backend), Vitest/Jest (frontend)
- **Deployment**: Docker, GitHub Actions CI/CD, AWS/DigitalOcean/Heroku

---

## Installation

### Backend
```bash
cd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve

Frontend

cd frontend
npm install
npm run dev
