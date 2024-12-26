# Task Management System

```bash
# Backend Setup
git clone https://github.com/akasifislam/task_management.git
cd backend
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run dev
# Configure your database in the `.env` file
php artisan migrate --seed
php artisan serve --port=9000

# Frontend Setup
cd client
npm install
npm run dev
# Open the application in your browser:
http://localhost:5173/login

# Admin Login
# Email: admin@mail.com
# Password: secret007

# User Login
# Email: user@mail.com
# Password: secret007
```
