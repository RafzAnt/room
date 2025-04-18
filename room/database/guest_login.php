<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        header("Location: ../client/login.php?error=empty");
        exit;
    }

    $sql = "SELECT * FROM guest WHERE email = '$email'";
    $result = $con->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        if ($password == $row['password']) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['firstname'];
            header("Location: ../fronts/Guest/home.php");
            exit; 
        } else {
            header("Location: ../fronts/loginform/index.php?error=wrongpass");
            exit;
        }
    } else {
        header("Location: ../fronts/loginform/index.php?error=wrongpass");
        exit;
    }

    $con->close();
}
?>
