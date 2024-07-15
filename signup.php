<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];


    if ($username === "admin" && $password === "password") {
        header("Location: gg.html");
        exit();
    } else {
        $errorMessage = "Invalid username or password.";
    }
}
?>