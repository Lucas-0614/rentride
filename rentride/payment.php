<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize inputs
    $cardName = htmlspecialchars($_POST['cardName']);
    $cardNumber = htmlspecialchars($_POST['cardNumber']);
    $expiryDate = htmlspecialchars($_POST['expiryDate']);
    $cvv = htmlspecialchars($_POST['cvv']);
    $email = htmlspecialchars($_POST['email']);
    $amount = htmlspecialchars($_POST['amount']);

    // Generate a random receipt ID
    $receiptID = uniqid('receipt_', true);

    // Simulate payment processing
    // Debugging information
    $logData = "Receipt ID: $receiptID\nCard Name: $cardName\nCard Number: $cardNumber\nExpiry Date: $expiryDate\nCVV: $cvv\nEmail: $email\nAmount: $amount\n";
    file_put_contents('payment_log.txt', $logData, FILE_APPEND);

    // Read existing data from the JSON file
    $filePath = 'customers.json';
    $existingData = file_exists($filePath) ? json_decode(file_get_contents($filePath), true) : [];

    // Add new data
    $newData = [
        'receiptID' => $receiptID,
        'cardName' => $cardName,
        'email' => $email,
        'amount' => $amount
    ];
    $existingData[] = $newData;

    // Write updated data back to the JSON file
    file_put_contents($filePath, json_encode($existingData, JSON_PRETTY_PRINT));

    // Redirect to receipt page
    header("Location: receipt.php?amount=" . urlencode($amount) . "&cardName=" . urlencode($cardName) . "&email=" . urlencode($email) . "&receiptID=" . urlencode($receiptID));
    exit();
} else {
    echo "Invalid request method.";
}
?>
