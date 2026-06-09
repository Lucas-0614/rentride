<?php 
session_start();

include("connection.php");
include("functions.php");

$error_message = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        //save to database
        $user_id = random_num(20);
        $query = "INSERT INTO users (user_id, user_name, password) VALUES ('$user_id', '$user_name', '$password')";

        if (mysqli_query($con, $query)) {
            header("Location: login.php");
            die;
        } else {
            echo "Failed to register user.";
        }
    } else {
        $error_message = "Please enter some valid information!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup - RentRide</title>
    <style type="text/css">
        .logo {
            display: flex;
            align-items: left;
        }

        .logo img {
            width: 150px;
            height: auto;
            margin-right: 10px;
        }

        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
        }

        #box {
            background-color: #222;
            margin: auto;
            width: 300px;
            padding: 20px;
            border: 1px solid red;
            border-radius: 10px;
        }

        #text {
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
        }

        #button {
            padding: 10px;
            width: 100px;
            color: white;
            background-color: red;
            border: none;
            cursor: pointer;
        }

        #button:hover {
            background-color: darkred;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php">
                <img src="img/logo.png" alt="RentRide Logo">
            </a>
        </div>
    </header>
    <div id="box">
        <form method="post">
            <div style="font-size: 20px;margin: 10px;color: white;">Signup</div>
            <?php if (!empty($error_message)): ?>
                <div class="error"><?php echo $error_message; ?></div>
            <?php endif; ?>
            <input id="text" type="text" name="user_name" placeholder="Username"><br><br>
            <input id="text" type="password" name="password" placeholder="Password"><br><br>
            <input id="button" type="submit" value="Signup"><br><br>
            <a href="login.php">Click to Login</a><br><br>
        </form>
    </div>
</body>
</html>
