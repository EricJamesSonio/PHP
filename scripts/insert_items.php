<?php
require_once "../db/db.php";
require_once "../function.php";

// === ITEM DATA ===
$name = "Egg Sandwich";
$price = 5.50;
$category_id = 2;        // Sandwich
$subcategory_id = 4;     // Egg
$description = "Yummy egg sandwich with scrambled eggs";

$attributes = [
    ["attribute_name" => "egg_type", "attribute_value" => "Scrambled"],
    ["attribute_name" => "cook_level", "attribute_value" => "Medium"]
];

// === CHECK IF ITEM EXISTS ===
if (!itemExists($con, $name)) {
    $item_id = insertItem($con, $name, $price, $category_id, $subcategory_id, $description);

    if ($item_id) {
        foreach ($attributes as $attr) {
            insertAttribute($con, $item_id, $attr["attribute_name"], $attr["attribute_value"]);
        }
        echo "✅ '$name' inserted successfully with attributes.";
    } else {
        echo "❌ Error inserting '$name'.";
    }
} else {
    echo "⚠️ '$name' already exists. Skipping insert.";
}
?>
