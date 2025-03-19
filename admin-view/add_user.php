<!-- PHP Backend -->
<?php
    include 'DbConnect.php'; // database connection file

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_user'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $insert_user = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";
        if ($conn->query($insert_user) === TRUE) {
            echo "<script>alert('User added successfully!'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Error: " . $conn->error . "');</script>";
        }
    }
    $conn->close();
?>