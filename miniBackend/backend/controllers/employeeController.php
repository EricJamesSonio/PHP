<?php

class EmployeeController {
    private $model;

    function __construct($model) {
        $this->model = $model;
    }

    function addEmployee($emp) {
        if ($this->model->findEmployee($emp->getId())) {
            return false;
        }
        $this->model->addEmployee($emp);
        return true;
    }

    function removeEmployee($emp) {
        if ($this->model->findEmployee($emp->getId())) {
            $this->model->removeEmployee($emp);
            return true;
        }
        return false;
        
    }
}



?>