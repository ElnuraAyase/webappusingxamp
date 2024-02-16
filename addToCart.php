<?php
session_start();

// Check if item name and price are provided
if(isset($_POST['itemName']) && isset($_POST['price'])) {
    $itemName = $_POST['itemName'];
    $price = $_POST['price'];

    // Add item to cart session variable
    $_SESSION['cart'][] = array('name' => $itemName, 'price' => $price);

    // Return success message
    echo json_encode(array('success' => true, 'message' => 'Item added to cart.'));
} else {
    // Return error message
    echo json_encode(array('success' => false, 'message' => 'Item name and price not provided.'));
}
?>
