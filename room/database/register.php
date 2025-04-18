<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'] ?? '';
    $firstname = $_POST['firstname'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $street = $_POST['street'] ?? '';
    $barangay = $_POST['Barangay'] ?? '';
    $town = $_POST['town'] ?? '';
    $city = $_POST['city'] ?? '';

    if (empty($email)) {
        echo "Error: Email is required.";
        exit;
    }

    $sql = "INSERT INTO guest (password, firstname, lastname, email, phone, street, barangay, town, city) 
            VALUES ('$password', '$firstname', '$lastname', '$email', '$phone', '$street', '$barangay', '$town', '$city')";

    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";

        // Redirect to login page after successful registration
        header("Location: ../fronts/loginform/index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}
?>
