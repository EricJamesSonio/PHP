<?php

class Database {
    private $employeeList = [];

    function addEmployee($employee) {
        $this->employeeList[] = $employee;
    }

    function removeEmployee($id) {
        foreach ($this->employeeList as $index => $emp) {
            if ($id == $emp->getId()) {

                unset($this->employeeList[$index]);

                $this->employeeList = array_values($this->employeeList);
                return true; 
            }
        }
        return false; 
    }

    function getEmployeeList() {
        return $this->employeeList;
    }
}