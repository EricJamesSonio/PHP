<?php

require_once __DIR__ . '/../utils/init.php';

switch ($request) {
    case 'addEmployee' :
        $data = json_decode(file_get_contents('php://input'), true);
        $employee = new Employee($data['name'], $data['id']);
        $employeeController->addEmployee($employee);
        echo json_encode(["status" => true]);
        break;

    case 'removeEmployee' :
        $data = json_decode(file_get_contents('php://input'), true);
        $employeeController->removeEmployee($data);
        echo json_encode(["status" => true]);
        break;
}

