<?php
header('Content-Type: application/json');

// Get the input data
$data = json_decode(file_get_contents('php://input'), true);
$receiptID = isset($data['receiptID']) ? $data['receiptID'] : null;

if (!$receiptID) {
    echo json_encode(['success' => false, 'message' => 'Invalid receipt ID']);
    exit;
}

$customersFile = 'customers.json';

// Read the existing data from customers.json
$customersData = json_decode(file_get_contents($customersFile), true);

if ($customersData === null) {
    echo json_encode(['success' => false, 'message' => 'Failed to read customers data']);
    exit;
}

// Filter out the customer with the given receiptID
$newCustomersData = array_filter($customersData, function($customer) use ($receiptID) {
    return $customer['receiptID'] !== $receiptID;
});

// Check if the receiptID was found and deleted
if (count($customersData) === count($newCustomersData)) {
    echo json_encode(['success' => false, 'message' => 'Receipt ID not found']);
    exit;
}

// Save the updated data back to customers.json
if (file_put_contents($customersFile, json_encode(array_values($newCustomersData), JSON_PRETTY_PRINT))) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to delete payment']);
}
?>
