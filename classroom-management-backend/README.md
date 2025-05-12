# Classroom Management Backend

This project is a simple classroom management backend built in PHP. It provides an API for managing student records, allowing clients to perform CRUD operations.

## Project Structure

```
classroom-management-backend
├── public
│   └── index.php          # Entry point of the application
├── src
│   ├── routes
│   │   └── web.php       # Defines the application routes
│   └── controllers
│       └── StudentController.php # Contains logic for handling student data
├── composer.json          # Composer configuration file
└── README.md              # Project documentation
```

## Setup Instructions

1. **Clone the repository**:
   ```
   git clone <repository-url>
   cd classroom-management-backend
   ```

2. **Install dependencies**:
   Make sure you have Composer installed, then run:
   ```
   composer install
   ```

3. **Run the application**:
   You can use the built-in PHP server to run the application:
   ```
   php -S localhost:8000 -t public
   ```

## API Usage

### Endpoints

- **GET /students**
  - Retrieves a list of all students.

- **POST /students**
  - Creates a new student. Requires a JSON body with student details.

- **DELETE /students/{id}**
  - Deletes a student by ID.

- **PATCH /students/{id}**
  - Updates an existing student's information by ID. Requires a JSON body with updated student details.

## Contributing

Feel free to submit issues or pull requests for improvements or bug fixes.