<?php
session_start();
require 'db_connection.php';

if (isset($_SESSION['user_id'])) {
    $user_id = intval($_SESSION['user_id']);
    $sql = "SELECT p.id, p.product_name, p.price FROM wishlist w JOIN product_list p ON w.product_id = p.id WHERE w.user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $wishlist = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($wishlist);
} else {
    echo json_encode([]);
}
?>