# SaaS Notification Platform

A centralized notification service for sending messages through multiple communication channels (Email, SMS, Push, Telegram, etc.). The project is being developed as a SaaS platform where each client can manage their own notification templates and integrate with the service via API.

> **Project status:** In active development.

## Goals

* Centralize notification delivery.
* Support multiple notification channels.
* Process notifications asynchronously using queues.
* Provide a REST API for external services.
* Allow customers to manage templates through an admin panel.
* Build a scalable architecture suitable for future microservice decomposition.

---

## Tech Stack

### Backend

* PHP 8.3
* Laravel 13
* PostgreSQL
* Redis
* RabbitMQ
* Docker & Docker Compose

### Admin Panel

* Filament
* Spatie Laravel Permission

---

## Current Features

* Docker-based development environment
* PostgreSQL database
* Redis cache
* RabbitMQ queue broker
* Filament admin panel
* User authentication
* Role management (Admin / Customer)
* Notification Template CRUD
* API Key generation for clients

---

## Planned Features

* Notification sending API
* Email notifications
* SMS notifications
* Telegram notifications
* Webhook support
* Queue-based notification processing
* Notification history
* Delivery status tracking
* Retry mechanism
* Rate limiting
* Scheduled notifications
* API documentation (OpenAPI / Swagger)

---

## Project Structure

```
app/
 ├── Models/
 ├── Services/
 ├── Jobs/
 ├── Http/
 │    ├── Controllers/
 │    ├── Middleware/
 │    └── Requests/
 ├── Policies/
 ├── Events/
 └── Listeners/

routes/
database/
docker/
```

---

## Development

Start the application:

```bash
docker compose up -d --build
```

Install dependencies:

```bash
composer install
```

Generate application key:

```bash
php artisan key:generate
```

Run migrations:

```bash
php artisan migrate
```

Start queue worker:

```bash
php artisan queue:work
```

---

## Architecture

The platform follows a service-oriented architecture.

External applications authenticate using an API key and send notification requests to the REST API.

Notifications are placed into RabbitMQ queues and processed asynchronously by queue workers. Each notification is rendered using a predefined template before being delivered through the selected communication channel.

```
Client Application
        │
        ▼
 REST API (Laravel)
        │
        ▼
 API Authentication
        │
        ▼
 Notification Service
        │
        ▼
 RabbitMQ Queue
        │
        ▼
 Queue Worker
        │
        ▼
 Channel Provider
 (Email / SMS / Telegram / Push)
```

---

## Current Progress

* [x] Docker environment
* [x] PostgreSQL integration
* [x] Redis integration
* [x] RabbitMQ integration
* [x] Filament admin panel
* [x] User authentication
* [x] Role management
* [x] Notification Template CRUD
* [ ] Notification API
* [ ] Queue processing pipeline
* [ ] Channel implementations
* [ ] Delivery history
* [ ] Monitoring and metrics

---

