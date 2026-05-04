<?php
include '../db.php';

$drive = $_POST['drive'] ?? null;
$amount = $_POST['amount'] ?? null;
$first_name = $_POST['first_name'] ?? null;
$last_name = $_POST['last_name'] ?? null;
$email = $_POST['email'] ?? null;
$contact = $_POST['contact'] ?? null;
$address = $_POST['address'] ?? null;

/* BASIC VALIDATION (prevents empty garbage inserts) */
if (!$drive || !$amount || !$first_name || !$last_name || !$email) {
    die("Missing required fields.");
}

/* SQL QUERY */
$sql = "INSERT INTO monetary_donations 
(drive, amount, first_name, last_name, email, contact, address)
VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

/* 🔥 THIS is what was breaking your code */
if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

/* TYPE MAP:
   s = string
   d = decimal (amount)
*/
$stmt->bind_param(
    "sdsssss",
    $drive,
    $amount,
    $first_name,
    $last_name,
    $email,
    $contact,
    $address
);

/* EXECUTION */
if ($stmt->execute()) {
    echo "Donation saved successfully.";
    echo "<br><a href='../index.php'>Back to Home</a>";
} else {
    echo "Execute failed: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>