<?php

require_once "../db.php";
require_once "../function.php";

// Category Table (Drink, Sandwich)
createtable($con, 'category', "
    CREATE TABLE IF NOT EXISTS category (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL
    )
");




?>