<?php

//  8980277 Mandar Sankhe
//  8961944 Susmi Rani
//  8969031 Dhruvinkumar Jayani


//include connection file 
include "dbconnect.php";

$itemName = $_POST['model'];
$brand = $_POST['brand'];
$description = $_POST['description'];
$price = $_POST['price'];

$sql = "INSERT INTO Items (ItemName, Brand, ItemDescription, Price) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssd", $itemName, $brand, $description, $price);

if ($stmt->execute()) {
    header("Location: UserInterface/index.php"); // Replace "success.php" with your desired page
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();

$conn->close();
?>