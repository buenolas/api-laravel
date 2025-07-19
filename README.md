# Laravel Players API

A RESTful API built with Laravel to manage player resources, featuring full CRUD operations.

## 🚀 Features

- **CRUD** for `Players`
- Containerized using **Docker** and **Docker Compose** (PHP 8.2 + PostgreSQL)
- Follows REST API best practices and standards

## 📋 Table of Contents

1. [Demo](#demo)
2. [Prerequisites](#prerequisites)
3. [Installation](#installation)
4. [Docker Setup](#docker-setup)
5. [Running the Application](#running-the-application)
6. [API Endpoints](#api-endpoints)
7. [Database Migrations](#database-migrations)
8. [Contributing](#contributing)
9. [License](#license)

---

## 📷 Demo

https://github.com/user-attachments/assets/4535f919-501a-4f15-a371-538bf0d4b02f

---

## ✅ Prerequisites

- [Docker](https://www.docker.com/products/docker-desktop/)
- [Docker Compose](https://docs.docker.com/compose/)

---

## 🛠 Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/buenolas/api-laravel.git
   cd api-laravel
   
    ```

2. Copy `.env.example` and set your `.env`:

   ```bash
   cp .env.example .env
   ```

3. Generate application key:

   ```bash
   php artisan key:generate
   ```

---

## 🐳 Docker Setup

Build and launch containers (PHP 8.2 + PostgreSQL):

```bash
docker compose up --build -d
```

Containers:

* `db`: PostgreSQL, port `5432`
* `laravelapp`: Laravel API, port `8000`

Clear any old containers if necessary:

```bash
docker compose down -v
```

---

## ▶️ Running the Application

After Docker builds and runs:

```bash
docker compose exec laravelapp php artisan migrate
```

Then access:

```
http://localhost:8000/api/players
```

---

## 📚 API Endpoints

| Method | URL                 | Description               |
| ------ | ------------------- | ------------------------- |
| GET    | `/api/players`      | List all players          |
| POST   | `/api/players`      | Create a new player       |
| GET    | `/api/players/{id}` | Retrieve a single player  |
| PUT    | `/api/players/{id}` | Update an existing player |
| DELETE | `/api/players/{id}` | Delete a player           |

---

## 🤝 Contributing

Contributions are welcome! To suggest features or file a PR:

1. Fork the repo
2. Create your branch (`git checkout -b feature/XYZ`)
3. Commit your changes (`git commit -m 'Add feature XYZ'`)
4. Push (`git push origin feature/XYZ`)
5. Open a Pull Request

---

## 📜 License

This project is open source under the [MIT License](LICENSE).
