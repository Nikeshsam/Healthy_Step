<!-- PHP Backend -->
<?php
    include 'DbConnect.php'; // database connection file

    // Add User
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['firstname'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = md5($_POST['password']); // Using MD5 for simplicity (consider bcrypt in production)
        $role = 'user';
        $active = 1;
        $created_at = date('Y-m-d H:i:s');
        $phone = $_POST['phone'];

        $sql = "INSERT INTO users (firstname, lastname, email, password, role, active, created_at, phone) 
                VALUES ('$firstname', '$lastname', '$email', '$password', '$role', '$active', '$created_at', '$phone')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('User added successfully'); window.location.href='index.php';</script>";
} else {
    echo "<script>alert('Error: " . mysqli_error($conn) . "'); window.location.href='#add-user';</script>";
}

        mysqli_close($conn);
    }