<?php
/* Copy to connection.php and set your local DB credentials (XAMPP defaults shown). */
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_db";
if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
    die("failed to connect!");
}
