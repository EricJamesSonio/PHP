<?php

class Employee {
    private $name;
    private $id;

    function __construct($name, $id) {
        $this->name = $name;
        $this->id = $id;
    }

    function getName() {
        return $this->name;
    }

    function getId() {
        return $this->id;
    }

}

class EmployeeModel {
    private $database;

    function __construct($database) {
        $this->database = $database;
    }

    function addEmployee($emp) {
        $this->database->addEmployee($emp);
    }

    function removeEmployee($id): void {
        $this->database->removeEmployee($id);
    }

    function findEmployee($id) {
        foreach ($this->database->getEmployeeList() as $emp) {
            if ($emp->getId() == $id) {
                return $emp;
            }
        }
        return null; 
    }

    function getDatabase() {
        return $this->database;
    }


}


?>