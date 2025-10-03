<?php

require_once __DIR__ . '/../controllers/employeeController.php';
require_once __DIR__ . '/../models/employeeModel.php';
require_once __DIR__ . '/../../database/db.php';

$db = new Database();
$empModel = new EmployeeModel($db);
$empController = new EmployeeController($empModel);


