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

## Admin Login

![sc3](https://github.com/user-attachments/assets/1c384a80-856b-4e20-aedb-f2d6656f2a04)

## User Login

![sc4](https://github.com/user-attachments/assets/d2cc2231-3be2-454a-b7b0-e3cfd335cdfd)

## Admin Task Assign

![sc1](https://github.com/user-attachments/assets/d0534cb1-ffce-4d58-9738-0f312310539f)

## User Task Pending Processing Complete

![sc2](https://github.com/user-attachments/assets/8a738e89-8c44-4f5b-a784-02bad6e86256)
