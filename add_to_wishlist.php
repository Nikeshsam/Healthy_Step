<?php
session_start();
require 'Db_Connect.php';

if (isset($_POST['product_id']) && isset($_SESSION['user_id'])) {
    $product_id = intval($_POST['product_id']);
    $user_id = intval($_SESSION['user_id']);
    $sql = "INSERT INTO wishlist (user_id, product_id) VALUES (?, ?) ON DUPLICATE KEY UPDATE added_at = NOW()";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ii", $user_id, $product_id);
        $stmt->execute();
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to add to wishlist']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'User not logged in or invalid product']);
}
?>