# 🚗 RentRide

A car-rental web application — browse a fleet, book a vehicle, pay, and receive a receipt.
Built as my **Diploma Final Year Project**: a multi-page front end backed by a **PHP**
server layer with user authentication and a simple payment/receipt flow.



## Features

- **Vehicle catalogue** — individual pages for each car (BMW, Audi, Honda, Nissan, Mazda,
  Mercedes, Hyundai and more) with images and specs.
- **User accounts** — sign-up and login (`signup.php`, `login.php`, `logout.php`) with PHP
  sessions; protected pages redirect guests to login via a `check_login()` guard.
- **Booking & payment** — a checkout flow (`payment.php`) that generates a unique receipt ID
  and renders a printable receipt (`receipt.php`).
- **Admin / fleet views** — fleet management and staff/overview pages for the back office.

## Tech stack

PHP · MySQL (XAMPP) · HTML5 · CSS3 · JavaScript · JSON

## Setup (local, XAMPP)

1. Place this folder in your XAMPP `htdocs/`.
2. Create a MySQL database named `login_db` with a `users` table (id, name, email, password).
3. Copy the connection template:
   ```bash
   cp connection.example.php connection.php
   ```
4. Start Apache + MySQL and open `http://localhost/rentride/index.php`.

## Known limitations / future improvements

This was an early diploma project, and I've left the code as submitted but documented the
parts I would now do differently — which is itself part of the story:

- **SQL queries use string interpolation** (e.g. `check_login()`); these should be converted
  to **prepared statements** to prevent SQL injection.
- **Passwords and payment details were written to flat files** in the original build. Those
  runtime data files have been **removed and git-ignored** (they contained test card data),
  and payment data should never be persisted like that — a real build would tokenise via a
  payment gateway and never store CVV/PAN.
- Front end is multiple standalone HTML pages; a templating layer or framework would remove
  the duplicated markup.

> Documenting these honestly is intentional: it shows I can read my own older code critically
> and know what "production-grade" would require.

## License

[MIT License](LICENSE)
