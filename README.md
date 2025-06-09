<<<<<<< HEAD
# 🍽️ Take-Home Assignment – Implement "Create Meal" Mutation (Laravel + GraphQL)

### 🧠 Objective

Build a `createMeal` GraphQL mutation for the `ourHavenAPI` Laravel backend using our architectural approach: **GraphQL → Resolver → Facade → Service → Eloquent Model**, with input validation and event-based notification.

This task tests your ability to work with Laravel, GraphQL via Lighthouse, and service-oriented design.

---

## 📦 Tools & Stack

This project uses:

* **Laravel** (PHP framework)
* **Lighthouse** (GraphQL server for Laravel)
  👉 [Lighthouse Docs – Installation](https://lighthouse-php.com/6/getting-started/installation.html)
* **Eloquent ORM**
* **Laravel Events & Listeners**
* **GraphQL-first API** (no REST endpoints)

> You’ll be working entirely through the GraphQL layer.

---

## 🧩 Task Scope

### ✅ What You’ll Implement:

1. **GraphQL Mutation**
   Add a `createMeal` mutation that accepts required fields and returns the created meal.

2. **Input Validation**
   Use Lighthouse’s custom validator feature to enforce rules (e.g. required fields, value ranges, etc.).

3. **Mutation Resolver**
   Implement a class-based resolver that accepts input and passes it to a Facade.

4. **Business Logic Layer**
   Route logic through a Facade to a Service that handles model creation.

5. **Model Interaction**
   Create and persist a new Meal record using Laravel’s Eloquent model.

6. **Event Handling**
   After creation, fire a Laravel event to signal that a meal was created. Optionally, implement a listener for further side effects (e.g., notification or logging).

---

## 🗃️ Assumed Database Schema

You’ll be working with a `meals` table. Assume the following structure:

| Field        | Type      | Notes                    |
| ------------ | --------- | ------------------------ |
| id           | UUID/Int  | Primary key              |
| name         | String    | Required                 |
| description  | Text      | Optional                 |
| price        | Decimal   | Required, positive value |
| category\_id | UUID/Int  | Foreign key (optional)   |
| created\_at  | Timestamp | Auto-managed by Laravel  |
| updated\_at  | Timestamp | Auto-managed by Laravel  |

You can include related models like `MealCategory` if needed.

---

## 🔁 Flow Summary

1. **Client Mutation Call**: Sends a GraphQL mutation with input
2. **Resolver**: Handles input and invokes the Facade
3. **Facade**: Delegates to a Service
4. **Service**: Handles validation, creation, and fires an event
5. **Eloquent Model**: Saves the meal in the database
6. **Event**: Signals that a new meal was created

---

## 🧪 Bonus Points

* Add a feature test to confirm mutation behavior
* Implement a listener that logs or sends an email on meal creation
* Use database seeding to simulate sample data

---

## 📬 Submission Instructions

1. Clone [ourHaven Test repository](https://github.com/ourHaven/take-home)
2. Create a new branch for your solution
3. Push your changes
4. Make a PR to main branch

---

## 🧾 How We’ll Evaluate

* Proper use of Laravel & Lighthouse features
* Clean architecture: GraphQL → Resolver → Facade → Service → Model
* Adherence to Laravel coding standards
* Modular, readable, and maintainable code
* Correct database interaction and event handling
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

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
>>>>>>> 506e706 (Create Meal mutation with service layer)
