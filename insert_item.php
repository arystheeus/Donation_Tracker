<?php
include '../db.php';

$drive = $_POST['drive'];
$item_name = $_POST['item_name'];
$quantity = $_POST['quantity'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];

$stmt = $conn->prepare("
    INSERT INTO item_donations 
    (drive, item_name, quantity, first_name, last_name, email, contact, address)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)
");

$stmt->bind_param(
    "ssisssss",
    $drive,
    $item_name,
    $quantity,
    $first_name,
    $last_name,
    $email,
    $contact,
    $address
);

if ($stmt->execute()) {
    echo "Donation saved successfully.";
    echo "<br><a href='../index.php'>Back to Home</a>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>