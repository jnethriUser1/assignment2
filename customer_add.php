<?php // customer_add.php
//edit
// require_once 'login.php';

// login.php
$hn = 'www.it354.com';
$db = 'it354_students';
$un = 'it354_students';
$pw = 'steinway';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$firstName = mysqli_real_escape_string($conn, $_POST['firstname']);
$lastName = mysqli_real_escape_string($conn, $_POST['lastname']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$city = mysqli_real_escape_string($conn, $_POST['city']);
$state = mysqli_real_escape_string($conn, $_POST['state']);
$zip = mysqli_real_escape_string($conn, $_POST['zip']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);

// attempt insert query execution
$sql = "INSERT INTO customers (firstname, lastname, address, city, state, zip, email, phone) VALUES ('$firstName', '$lastName', '$address', '$city', '$state', '$zip', '$email', '$phone')";
if(mysqli_query($conn, $sql))
{
    echo "Records added successfully.";
}

else
{
    echo "ERROR: Unable to execute $sql. " . mysqli_error($conn);
}

// close connection
mysqli_close($conn);
?>
