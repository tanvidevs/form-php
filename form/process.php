<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'form');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($action == "signup") {
        $userid = $_POST['userid'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        // Insert user data into the `signup` table
        $sql = "INSERT INTO signup (userid, password) VALUES ('$userid', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif ($action == "login") {
        $userid = $_POST['userid'];
        $password = $_POST['password'];

        // Fetch user data from the `signup` table
        $sql = "SELECT * FROM signup WHERE userid='$userid'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                $_SESSION['userid'] = $row['userid'];
                echo "Login successful! Welcome, " . $_SESSION['userid'];
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found with this User ID.";
        }
    }

    $conn->close();
}
?>

