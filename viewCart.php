<?php
session_start();

// Check if cart session variable exists
if(isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
    $total = 0;

    // Calculate total price
    foreach($cart as $item) {
        $total += $item['price'];
    }

    // Return cart data as JSON
    echo json_encode(array('success' => true, 'cart' => $cart, 'total' => $total));
} else {
    // Return empty cart message
    echo json_encode(array('success' => true, 'cart' => array(), 'total' => 0));
}
?>
