<?php

class Person {
    private string $firstName;
    private string $middleName;
    private string $lastName;

    function __construct(string $firstName, string $middleName, string $lastName) {
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->lastName = $lastName;
    }

    function getFirstName() {
        return $this->firstName;
    }

    function getMiddleName() {
        return $this->middleName;
    }

    function getLastName() {
        return $this->lastName;
    }

    function getDetails() {
        return "Name : " . $this->firstName . " " . $this->middleName . " " . $this->lastName;
    }
}

class Student extends Person {
    private int $id;

    function __construct(string $firstName, string $middleName, string $lastName, int $id) {
        parent::__construct($firstName, $middleName, $lastName);
        $this->id = $id;
    }

    function getId() {
        return $this->id;
    }

}

// EMPLOYEE EXTENDS ALSO PERSON

class Employee extends Person {
    private int $id;

    function __construct(string $firstName, string $middleName, string $lastName, int $id) {
        parent::__construct($firstName, $middleName, $lastName);
        $this->id = $id;
    }

    function getId() {
        return $this->id;
    }

}

class Cashier extends Employee {
    function __construct(string $firstName, string $middleName, string $lastName, int $id) {
        parent::__construct($firstName, $middleName, $lastName, $id);
    }
}

class Teacher extends Employee {
    function __construct(string $firstName, string $middleName, string $lastName, int $id) {
        parent::__construct($firstName, $middleName, $lastName, $id);
    }
}












?>