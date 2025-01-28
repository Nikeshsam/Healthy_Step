<?php
     include 'DbConnect.php'; // database connection file

    // Add Product
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_name'])) {
        $product_name = $_POST['product_name'];
        $category_id = $_POST['category_id'];
        $subcategory_id = $_POST['subcategory_id'];
        $weight = $_POST['weight'];
        $price = $_POST['price'];
        $count = $_POST['count'];
        $image_url = $_POST['image_url'];

        $sql = "INSERT INTO product_list (product_name, category_id, subcategory_id, weight, price, count, image_url) 
                VALUES ('$product_name', '$category_id', '$subcategory_id', '$weight', '$price', '$count', '$image_url')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Product added successfully'); window.location.href='index.php';</script>";
} else {
    echo "<script>alert('Error: " . mysqli_error($conn) . "'); window.location.href='#add-product';</script>";
}

        mysqli_close($conn);
    }
?>
