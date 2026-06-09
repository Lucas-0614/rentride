<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }
        .logo img {
            width: 200px;
            height: auto;
            margin-bottom: 20px;
        }
        .receipt {
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .receipt h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="logo">
        <a href="index.php">
            <img src="img/logo.png" alt="RentRide Logo">
        </a>
    </div>
    <div class="receipt">
        <?php
        if (isset($_GET['amount']) && isset($_GET['cardName']) && isset($_GET['email']) && isset($_GET['receiptID'])) {
            $amount = htmlspecialchars($_GET['amount']);
            $cardName = htmlspecialchars($_GET['cardName']);
            $email = htmlspecialchars($_GET['email']);
            $receiptID = htmlspecialchars($_GET['receiptID']);

            echo "<h2>Payment Receipt</h2>";
            echo "Receipt ID: $receiptID<br>";
            echo "Amount Paid: RM $amount<br>";
            echo "Cardholder's Name: $cardName<br>";
            echo "Email: $email<br>";
        } else {
            echo "Missing payment details.";
        }
        ?>
    </div>
</body>
</html>






