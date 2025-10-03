<?php
require_once "../db.php";
require_once "../function.php";

// Check if category exists
function categoryExists($con, $name) {
    $stmt = $con->prepare("SELECT id FROM category WHERE name = ?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $stmt->store_result();
    return $stmt->num_rows > 0;
}

$categories = ['Drinks', 'Sandwich'];

foreach ($categories as $category) {
    if (!categoryExists($con, $category)) {
        $stmt = $con->prepare("INSERT INTO category (name) VALUES (?)");
        $stmt->bind_param("s", $category);
        $stmt->execute();
        $stmt->close();
        echo "✅ Inserted category: $category<br>";
    } else {
        echo "ℹ️ Category already exists: $category<br>";
    }
}
