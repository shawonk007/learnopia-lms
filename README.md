# Learnopia - Learning Management System (LMS)

Welcome to **Learnopia**, an Learning Management System (LMS) built using **[Laravel](https://laravel.com/)** Blade, **[Bootstrap 5](https://getbootstrap.com/)** and other related tools. **Learnopia** is designed to provide a robust platform for managing and delivering online courses and educational content. This `README` file will guide you through the installation process, usage, important commands used in the project, and additional resources used, such as the **[AdminKit](https://adminkit.io/)** Admin panel.


# Table of Contents

- [Introduction](#introduction)
- [Technologies Used](#technologies-used)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
  - [Admin Dashboard](#1-admin-dashboard)
  - [Managing Courses](#2-managing-courses)
  - [Enrolling Students](#3-enrolling-students)
  - [Managing Instructors](#4-managing-instructors)
  - [Student Progress Tracking](#5-student-progress-tracking)
  - [Reporting and Analytics](#6-reporting-and-analytics)
- [AdminKit Admin Panel](#adminkit-admin-panel)
- [Contributing](#contributing)
- [License](#license)


## Introduction

Learnopia is an LMS developed using Laravel Blade, a powerful template engine provided by the Laravel framework. The system aims to facilitate e-learning by providing essential features for administrators, instructors, and learners. From creating and managing courses to tracking student progress, Learnopia empowers educational institutions and organizations to deliver a seamless learning experience.


## Technologies Used

The following technologies have been used in the development of Learnopia:

- **[Laravel](https://laravel.com/)** : A popular PHP web application framework known for its elegant syntax and feature-rich ecosystem.
- **[Laravel Blade](https://laravel.com/)** : The templating engine provided by Laravel for designing and rendering views.
- **[MySQL]** : The database management system used to store application data.
- **[Bootstrap](https://getbootstrap.com/)** : A CSS framework for creating responsive and attractive UI components.
- **[FontAwesome](https://fontawesome.com/)**: A popular icon library that provides a wide range of icons for web projects.


## Getting Started

Follow these instructions to get a copy of the Learnopia project up and running on your local machine for development and testing purposes.

#### Prerequisites

Before you proceed, ensure you have the following software installed:

- PHP (Version 8.2)
- Composer (Version 2.5)
- MySQL (Version 8.2)
- Laravel (Version 10.16)

#### Installation

1. Clone the **Learnopia** repository to your local machine using the following command:
```bash
git clone https://github.com/shawonk007/learnopia-lms.git
```

2. Navigate to the project directory:
```bash
cd learnopia-lms
```

3. Install the required `PHP` dependencies using Composer:
```bash
composer install
```

4. Install `Node.js` dependencies
###### Using npm:
```bash
npm install
```
or,
###### using Yarn:
```bash
yarn
```

5. Generate `Vite` serve manifest:
###### Using npm:
```bash
npm run dev
```
or,
###### using Yarn:
```bash
yarn dev
```

6. Create a new MySQL database for Learnopia and update the `.env` file with your database credentials:
```bash
cp .env.example .env
```

7. Generate a unique application key:
```bash
php artisan key:generate
```

8. Run the database migrations and seed the database with initial data:
```bash
php artisan migrate --seed
```

9. Start the development server:
```bash
php artisan serve
```

Congratulations! Learnopia should now be up and running at `http://localhost:8000`.


## Usage

Learnopia provides a user-friendly and intuitive interface for managing all aspects of your e-learning platform. Below are some key features and functionalities along with usage instructions:

#### 01. Admin Dashboard
Upon logging in as an administrator, you will be greeted with the Admin Dashboard. The dashboard offers an overview of key statistics, such as the total number of registered users, enrolled courses, and recent activity. It provides quick access to essential sections of the LMS, allowing you to manage courses, instructors, and students efficiently.

#### 02. Managing Courses
As an administrator or instructor, you can easily create, edit, and manage courses. To create a new course, navigate to the "Courses" section and click on "Create Course." Fill in the course details, such as the title, description, duration, and associated instructor. You can also upload course materials, including video lectures, presentations, and assignments.

#### 03. Enrolling Students
Students can enroll in courses by browsing the course catalog or searching for specific courses. Once a student finds a course of interest, they can click on the "Enroll" button to join the course. As an administrator or instructor, you can view the list of enrolled students for each course and track their progress.

#### 04. Managing Instructors
Learnopia allows administrators to manage instructors easily. You can add new instructors, view existing ones, and edit their profiles. Instructors play a crucial role in delivering high-quality educational content, and the LMS provides them with the necessary tools to create engaging courses.

#### 05. Student Progress Tracking
The LMS enables instructors and administrators to track the progress of students enrolled in each course. You can view individual student performance, monitor completed assignments, and assess quiz scores. This feature helps in identifying students who may need additional support or intervention.

#### 06. Reporting and Analytics
Learnopia provides comprehensive reporting and analytics features. As an administrator, you can generate reports on course performance, user activity, and overall system usage. These insights can aid in making data-driven decisions to enhance the learning experience.


## AdminKit Admin Panel
Learnopia incorporates the AdminKit Admin Panel to streamline administrative tasks. AdminKit is a flexible and modern admin dashboard template built with Bootstrap and other front-end technologies. Its customizable components and UI elements enable efficient management of various LMS functionalities.

Get it from here: **[AdminKit](https://adminkit.io/)**


## License
Learnopia is distributed under the `GNU General Public License version 3.0 (GPL-3.0)`. You can find the full text of the license in the `LICENSE` file.