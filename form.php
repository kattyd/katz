<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databasename = "katzsubs";

    $conn = new mysqli($hostname, $username, $password, $databasename);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $conn->real_escape_string($_POST['email']);

        $sql = "INSERT INTO subscriptions (email) VALUES ('$email')";

        if (conn->query($sql) === TRUE) {
            header('Location: thanks.html');
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            exit();
        }
    }

    $conn->close();
?>