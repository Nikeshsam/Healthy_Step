<?php
// Include your database connection file

require_once 'DbConnect.php'; 

// Initialize the response array
$response = [
    'success' => false,
    'message' => ''
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    // Get the form data
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $role = "user";
    $active = 1;

    // Check if fields are not empty
    if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirm_password)) {
        $response['message'] = "Please fill in all fields!";
        echo json_encode($response); // Return response
        exit; // Exit after responding
    }

    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['message'] = "Invalid email address!";
        echo json_encode($response); // Return response
        exit; // Exit after responding
    }

    // Check if passwords match
    if ($password !== $confirm_password) {
        $response['message'] = "Passwords do not match!";
        echo json_encode($response); // Return response
        exit; // Exit after responding
    }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if the email already exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $response['message'] = 'Email already registered!';
    } else {

        // Insert the user into the database
        $stmt->close(); // Close the previous statement
        
        $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, phone, password, role, active) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssissi", $firstname, $lastname, $email, $phone, $hashed_password, $role, $active);

        if ($stmt->execute()) {
            // If registration is successful
            $response['success'] = true;
            $response['message'] = 'Registration successful!';
        } else {
            $response['message'] = 'Error occurred. Please try again.';
        }
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();

// Return JSON response
echo json_encode($response);
?>
