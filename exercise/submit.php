<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = $_POST["name"];
    $email   = $_POST["email"];
    $contact = $_POST["contact"];

    $stmt = $conn->prepare("INSERT INTO my_contact (name, email, contact) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $contact);

    if ($stmt->execute()) {
        echo "Data saved successfully. <a href='index.php'>Back</a> | <a href='dashboard.php'>Dashboard</a>";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
$conn->close();