<?php
include 'DbConnect.php'; // database connection file

if (isset($_POST['category_id'])) {
    $categoryId = intval($_POST['category_id']);

    // Query to fetch products for the selected category
    $sqlProducts = "SELECT pl.id, pl.product_name, pl.image_url, pw.weight, pw.price 
                    FROM product_list AS pl 
                    JOIN product_weights AS pw ON pl.id = pw.product_id 
                    WHERE pl.category_id = ? limit 4";
    
    $stmt = $conn->prepare($sqlProducts);
    $stmt->bind_param("i", $categoryId);
    $stmt->execute();
    $productsResult = $stmt->get_result();

    $products = [];
    while ($product = $productsResult->fetch_assoc()) {
        $products[] = $product;
    }

    echo json_encode($products);
}
?>
