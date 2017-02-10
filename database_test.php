<?php // query.php

// require_once 'login.php';

// login.php
$hn = 'www.it354.com';
$db = 'it354_students';
$un = 'it354_students';
$pw = 'steinway';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM customers";
$result = $conn->query($query);
if (!$result) die($conn->error);

$rows = $result->num_rows;

for ($j = 0 ; $j < $rows ; ++$j)
{
  $result->data_seek($j);
  echo 'First Name: ' . $result->fetch_assoc()['firstName'] . '<br>';
  $result->data_seek($j);
  echo 'Last Name: ' . $result->fetch_assoc()['lastName'] . '<br>';
  $result->data_seek($j);
	echo 'Address: ' . $result->fetch_assoc()['address'] . '<br>';
	$result->data_seek($j);
  echo 'City: ' . $result->fetch_assoc()['city'] . '<br>';
	$result->data_seek($j);
	echo 'State: ' . $result->fetch_assoc()['state'] . '<br>';
	$result->data_seek($j);
	echo 'Zip: ' . $result->fetch_assoc()['zip'] . '<br>';
	$result->data_seek($j);
	echo 'Email: ' . $result->fetch_assoc()['email'] . '<br>';
	$result->data_seek($j);
	echo 'Phone: ' . $result->fetch_assoc()['phone'] . '<br><br>';
}

$result->close();
$conn->close();
?>