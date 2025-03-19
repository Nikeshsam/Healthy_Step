<?php
     include 'DbConnect.php'; // database connection file

    // Add Product
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_product'])) {
        $product_name = $_POST['product_name'];
        $category_id = $_POST['category_id'];
        $subcategory_id = $_POST['subcategory_id'];
        $weight = $_POST['weight'];
        $price = $_POST['price'];
        $count = $_POST['count'];
        $image_url = $_POST['image_url'];
    
        // Insert into product_list table
        $insert_product = "INSERT INTO product_list (product_name, category_id, subcategory_id, weight, price, count, image_url) 
                           VALUES ('$product_name', '$category_id', '$subcategory_id', '$weight', '$price', '$count', '$image_url')";
        if ($conn->query($insert_product) === TRUE) {
            // Get the last inserted product ID
            $product_id = $conn->insert_id;
    
            // Insert into product_weights table
            $insert_weight = "INSERT INTO product_weights (product_id, weight) VALUES ('$product_id', '$weight')";
            if ($conn->query($insert_weight) === TRUE) {
                echo "<script>alert('Product added successfully!'); window.location.href='#add-product';</script>";
            } else {
                echo "<script>alert('Error saving weight: " . $conn->error . "');</script>";
            }
        } else {
            echo "<script>alert('Error adding product: " . $conn->error . "');</script>";
        }
    }?>
