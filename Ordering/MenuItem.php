<?php

class MenuItem {
    private string $name;
    private int $code;
    private float $price;

    function __construct($name, $code, $price) {
        $this->name = $name;
        $this->code = $code;
        $this->price = $price;
    }

    function getName() {
        return $this->name;
    }

    function getCode() {
        return $this->code;
    }

    function getPrice() {
        return $this->price;
    }

    function getDetails() {
        return "Name : " . $this->name . " " . "Price : " . $this->price . "Code : " . $this->code;
    }
}


// FOOD CATEGORY
class Food extends MenuItem {
    function __construct($name, $code, $price) {
        parent::__construct($name, $code, $price);
    }

}

// DRINKS CATEGORY
class Drinks extends MenuItem {
    function __construct($name, $code, $price) {
        parent::__construct($name, $code, $price);
    }

}


// DESSERT CATEGORY
class Dessert extends MenuItem {
    function __construct($name, $code, $price) {
        parent::__construct($name, $code, $price);
    }

}













?>