
# MenuMesh

MenuMesh is a Laravel-based microservices project designed for distributed architecture. It integrates HTTP REST APIs and RabbitMQ for efficient communication and processing across services. The system is tailored for restaurant management, handling menus, orders, emails, and restaurant operations seamlessly.

## Features

1. **Menu Service**:
   - REST API to retrieve all available menu.
   - Handles GET requests efficiently.

2. **Order Service**:
   - REST API for retrieving and creating new order.
   - New order creation triggers RabbitMQ for further processing.

3. **Email Service**:
   - Processes email notifications through RabbitMQ.

4. **Restaurant Service**:
   - Manages restaurant-related operations via RabbitMQ.

## Architecture

MenuMesh employs a distributed architecture with the following components:

- **HTTP REST API** for synchronous operations like fetching menu and order.
- **RabbitMQ** for asynchronous communication between microservices (e.g., handling order creation and email notifications).
- Each microservice is independent, ensuring scalability and modularity.

## Tech Stack

- **Laravel**: Backend framework.
- **RabbitMQ**: Message broker for asynchronous communication.
- **MySQL**: Database for data persistence.
- **Docker (Optional)**: For containerized deployment.

## Setup Instructions

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/ishahid007/menumash.git
   cd MenuMesh
   ```

2. **Install Dependencies**:
   ```bash
   composer install
   npm install
   ```

3. **Environment Configuration**:
   - Copy `.env.example` to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update database and RabbitMQ credentials in `.env`.

4. **Run Migrations**:
   ```bash
   php artisan migrate
   ```

5. **Start Services**:
   - Start RabbitMQ (ensure it’s installed and running).
   - Run the Laravel application:
     ```bash
     php artisan serve
     ```

6. **Queue Listener**:
   ```bash
   php artisan queue:work
   ```

## API Endpoints

### Menu Service
- **GET** `/api/menu`: Retrieve all menu.

### Order Service
- **GET** `/api/order/{$id}`: Retrieve specific order by order id.
- **POST** `/api/order`: Create a new order (triggers RabbitMQ).

### Email Service
- Handled via RabbitMQ (no direct API endpoint).

### Restaurant Service
- Handled via RabbitMQ (no direct API endpoint).

## Contributing

Contributions are welcome! Please fork this repository and submit a pull request for any changes or enhancements.

## License

This project is licensed under the [MIT License](LICENSE).

---

### TODOs
- [ ] Add unit and integration tests.
- [ ] Dockerize the application for easier deployment.
- [ ] Enhance documentation for RabbitMQ integration.

---

Happy coding with **MenuMesh**!
