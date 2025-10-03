<?php
function createtable($con, $name, $sql) {
    if (mysqli_query($con, $sql)) {
        echo "TABLE '$name' created successfully.<br>";
    } else {
        echo "Error creating table '$name': " . mysqli_error($con) . "<br>";
    }
}
function itemExists($con, $name) {
    $stmt = $con->prepare("SELECT id FROM starbucksitem WHERE name = ?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $stmt->store_result();
    return $stmt->num_rows > 0;
}

function insertItem($con, $name, $price, $category_id, $subcategory_id, $description) {
    $stmt = $con->prepare("INSERT INTO starbucksitem (name, price, category_id, subcategory_id, description) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sdiss", $name, $price, $category_id, $subcategory_id, $description);
    if ($stmt->execute()) {
        return $stmt->insert_id;
    }
    return false;
}

function insertAttribute($con, $item_id, $attribute_name, $attribute_value) {
    $stmt = $con->prepare("INSERT INTO item_attributes (item_id, attribute_name, attribute_value) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $item_id, $attribute_name, $attribute_value);
    return $stmt->execute();
}
?>



