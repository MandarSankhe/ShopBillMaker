<?php
//  8980277 Mandar Sankhe
//  8961944 Susmi Rani
//  8969031 Dhruvinkumar Jayani


//include connection file 
include "dbconnect.php";



$itemID = $_POST['hdnId'];
$itemName = $_POST['editmodel'];
$brand = $_POST['editbrand'];
$description = $_POST['editdescription'];
$price = $_POST['editprice'];

// Prepare and bind
$stmt = $conn->prepare("UPDATE Items SET ItemName=?, Brand=?, ItemDescription=?, Price=? WHERE ItemID=?");
$stmt->bind_param("sssdi", $itemName, $brand, $description, $price, $itemID);

// Execute the query
if ($stmt->execute()) {
    header("Location: UserInterface/index.php"); // Replace "success.php" with your desired page
    exit;
} else {
    echo "Error updating record: " . $stmt->error;
}

// Close statement and connection
$stmt->close();


$conn->close();
