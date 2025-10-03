<?php

class Employee {
    private string $name;
    private int $id;
    
    function __construct(string $name, int $id) {
        $this->name = $name;
        $this->id = $id;
    }

    function getDetails() {
        return "Name : " . $this->name . " Id : " . $this->id; 
    }

    function getName() {
        return $this->name;
    }

    function getId() {
        return $this->id;
    }

}

class Cashier extends Employee {
    function __construct(string $name, int $id) {
        parent::__construct($name, $id);
    }

}

class Admin extends Employee {
    function __construct(string $name, int $id) {
        parent::__construct($name, $id);
    }

}