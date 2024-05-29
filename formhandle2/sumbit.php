<?php

$conn = new mysqli('localhost', 'root', '', 'test');


if (!empty($conn->connect_error)) {
    echo '<h1>connection fauld</h1>';
}

echo "<pre>";
echo print_r($_POST);
echo "<pre>";

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$age = $_POST['age'];



print_r($_POST['name']);


$sql = "INSERT INTO student (name, phone,email,age) VALUES ('$name','$phone','$email','$age')";



echo $conn->query($sql);
