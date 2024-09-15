<?php

//  8980277 Mandar Sankhe
//  8961944 Susmi Rani
//  8969031 Dhruvinkumar Jayani


//include connection file 
include "dbconnect.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO Customers (CustomerName, Email, Phone) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $phone);

if ($stmt->execute()) {
    header("Location: UserInterface/customers.php"); // Replace "success.php" with your desired page
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();

$conn->close();
?>