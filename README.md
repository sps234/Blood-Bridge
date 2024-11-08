# Blood Bridge

![alt](Assets/images/home.png)

Blood Bank Management System (Blood Bridge) is a web-based application designed to efficiently manage blood donations, donors, and recipients. It provides an integrated platform for donors and recipients to ensure the availability of safe and life-saving blood for those in need.

## Table Of Contents

- [Prerequisites](#prerequisites)
- [Deployment](#deployment)
- [Installation](#installation)
- [Usage](#usage)
- [Flowchart](#flowchart)
- [Features](#features)
- [Technologies Used](#technologies-used)

## Prerequisites

Before you begin, ensure you have met the following requirements:

- **XAMPP**: You need XAMPP installed for hosting the application in your Linux environment.XAMPP includes Apache, MySQL, PHP, and phpMyAdmin, which are essential for running the application.


## Installation

To set up the Blood Bridge application with XAMPP in your Linux environment, follow these steps:

1. Clone the repository into your local machine in the directory where your PHP web server is serving files. In my case, it's located in `/xampp/htdocs`.

   ```bash
   git clone https://github.com/sps234/Blood Bridge.git
   ```

2. Go to the phpMyAdmin in your web browser at
   ```bash
   http://localhost/phpmyadmin/
   ```
3. Create a database named `Blood Bridge` and import the file `Blood Bridge.sql` present in `/Database`.

4. Access the application in your web browser at
   ```bash
   http://localhost/Blood Bridge/index.php
   ```

## Usage

- **Login**: Users can log in with their respective roles (patient, donor, or admin) using their credentials.
- **Patients**: Patients have access to their profiles, blood donation requests, and request history.
- **Donors**: Donors can view their profile , blood donations, and check their donation history.
- **Admin**: Admins have access to user and donation management features.

## Flowchart

```mermaid
graph TD
    A[Blood Bridge]

  subgraph Login/Register
  A1[Patient Login]
  A3[Admin Login]
  A2[Donor Login]
  A1 --> |New to Blood Bridge|A4[Patient Register]
  A3 --> |New to Blood Bridge|A6[Admin Register]
  A2 --> |New to Blood Bridge|A5[Donor Register]
  end

  subgraph Patient
    A1 --> |Success| K[Patient Dashboard]
    K --> L[View Profile]
    L --> M[Update Profile]
    L --> N[Delete Account]
    K --> O[Request Blood]
    K --> Q[Request History]
    O --> |Submit Request| R[View Past Requests]
    Q --> R
  end

  subgraph Admin
    A3 --> |Success| E[Admin Dashboard]
    E --> H[All blood types unit levels]
    E --> |Manage|I[Patient/Donor Accounts]
    E --> G[Requests/Donations]
    E --> HI[View Past Donations/Requests]
    G --> |Manages requests/donations|AR[Approve/Reject according to the request/donation data]
    H --> |Update blood units| UB[Update Blood]
  end

  subgraph Donor
    A2 --> |Success| T[Donor Dashboard]
    T --> U[View Profile]
    U --> V[Update Profile]
    U --> W[Delete Account]
    T --> X[Donate Blood]
    T --> Z[Donation History]
    X --> |Submit Donation| AA[View Past Donations]
    Z --> AA
  end


  A --> A1
  A --> A2
  A --> A3
  A4 --> K
  A5 --> T
  A6 --> E

```
## Features

- User authentication and role-based authorization for patients, donors, and admins.
- Profile management for patients and donors.
- Blood donation request system.
- Donation history tracking.
- Admin panel for user and donation management.

## Technologies Used

- **PHP**: Backend scripting language.
- **MySQL**: Database management system.
- **HTML**: for website structure.
- **CSS**: for styling.
- **Bootstrap**: Front-end framework for styling.










