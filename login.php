<?php
session_start();
require_once 'DbConnect.php';  // Database connection

// Get JSON input from the request
$data = json_decode(file_get_contents("php://input"));

// Extract login data
$email = $data->email;
$password = $data->password;
$otp = "";
//$remember = $data->remember;

// Initialize response array
$response = ['success' => false, 'message' => ''];

// If the OTP field is empty, it's email/password login
if (empty($otp)) {

    // Prepare a SQL query for login with email/phone and password
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch user and verify password
        $user = $result->fetch_assoc();
      
        if (password_verify($password, $user['password'])) {
            $_SESSION['name'] = $user['firstname'];
            $response['success'] = true;
            $response['message'] = 'Login successful!';

        } else {
            $response['message'] = 'Invalid password!';
        }
    } else {
        $response['message'] = 'User not found!';
    }

    $stmt->close();
}
// Otherwise, it's an OTP login
else {
  
    // Need to Implement OTP login logic here (e.g., checking OTP code from database or session)
    if ($otp === "123456") { // Example OTP, in reality you'd validate this properly
        $_SESSION['username'] = $email_or_phone;
        $response['success'] = true;
        $response['message'] = 'OTP login successful!';
    } else {
        $response['message'] = 'Invalid OTP!';
    }
}

// Return response as JSON
echo json_encode($response);

// Close connection
$conn->close();
?>
