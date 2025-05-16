<?php
require_once __DIR__ . '/../controllers/UserController.php';

$controller = new UserController();

if (isset($_GET['id'])) {
    $controller->show($_GET['id']);
} else {
    $controller->index();
}
