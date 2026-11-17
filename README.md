# Innovation Hub — Incubator Website

A web platform for the **Sheikh Kamal IT Business Incubator at CUET** (Chittagong University of Engineering & Technology). The site introduces the incubator and its facilities, and lets visitors apply for programs, browse upcoming events, and request dorm rooms.

Built with HTML, CSS, Bootstrap, JavaScript/jQuery on the front end and PHP + MySQL on the back end.

## Features

- **Home page** with an overview of the incubator, why startups should join (funding, mentorship, workspace), and a contact section
- **Services** pages describing labs, workspaces, the auditorium, machine lab and other facilities
- **Events** listing pulled from the database, with a date-range filter and a calendar view
- **Host an event** and **office space** request forms
- **Dorm room requisition** with a booking form (check-in/out dates, room type, gender) and live counts of male/female reservations
- **Our team / officers** pages
- **Startup application** page
- **User registration and login**

## Tech Stack

| Layer     | Tools                                   |
|-----------|-----------------------------------------|
| Front end | HTML5, CSS3, Bootstrap 5, jQuery, FullCalendar |
| Back end  | PHP (mysqli)                            |
| Database  | MySQL / MariaDB                         |
| Local server | XAMPP / WAMP / LAMP                  |

## Project Structure

```
├── index.html / home1.html / website.html   # Landing pages
├── serve.html / service.html / service2.html # Services
├── startup.html / apply.html                 # Startup info & application
├── team.html / officers.html                 # Team pages
├── office_form.html / Hostevent.html         # Request forms
├── events.php / events1.php / calender.php   # Event listing & calendar
├── example.php                               # Event image carousel
├── dorm.php / dorm1.php                      # Dorm availability
├── dorm_room.php / dorm2.php / reservation.php # Dorm booking
├── register.php / login.php                  # Authentication
├── *.css                                     # Page stylesheets
└── *.jpg / *.png / *.JPG                     # Images and icons
```

## Getting Started

### Prerequisites

- [XAMPP](https://www.apachefriends.org/) (or any Apache + PHP + MySQL setup)

### Installation

1. Clone the repository into your server's web root (e.g. `C:\xampp\htdocs`).
   The pages link to `http://localhost/IP%20Project/...`, so name the folder **`IP Project`**:

   ```bash
   cd C:/xampp/htdocs
   git clone https://github.com/isssh23/website-of-an-Incubator.git "IP Project"
   ```

2. Start **Apache** and **MySQL** from the XAMPP control panel.

3. Open phpMyAdmin (`http://localhost/phpmyadmin`) and create the databases below.

4. Visit `http://localhost/IP%20Project/index.html`.

### Database Setup

The code connects as `root` with no password on `localhost`. It uses three databases:

```sql
-- User accounts
CREATE DATABASE register;
USE register;
CREATE TABLE reg (
  id INT AUTO_INCREMENT PRIMARY KEY,
  Name VARCHAR(100) NOT NULL UNIQUE,
  Email VARCHAR(150) NOT NULL,
  Password VARCHAR(255) NOT NULL
);

-- Events
CREATE DATABASE events;
USE events;
CREATE TABLE eve (
  id INT AUTO_INCREMENT PRIMARY KEY,
  Name VARCHAR(200) NOT NULL,
  Image VARCHAR(255),
  Link VARCHAR(255),
  Start DATE,
  End DATE
);

-- Dorm reservations
CREATE DATABASE dorm_room;
USE dorm_room;
CREATE TABLE reservation (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(150),
  full_name VARCHAR(150),
  gender VARCHAR(10),
  checkin DATE,
  checkout DATE,
  roomtype VARCHAR(50),
  phone VARCHAR(20)
);
```

> The column names match what the PHP files use; adjust types and lengths as needed.

## Known Limitations / Future Work

- Navigation links are hardcoded to `http://localhost/IP%20Project/`; switching to relative paths would make the site portable.
- Passwords are stored and compared in plain text; they should be hashed with `password_hash()` / `password_verify()`.
- Database credentials are repeated in each PHP file; moving them to a single config file would simplify deployment.
- The event date filter builds its SQL query with string interpolation; it should use bound parameters.
- Images could be moved into an `assets/` folder to tidy up the root directory.

## Author

**Ishraq Samiha** — [@isssh23](https://github.com/isssh23)
