<?php

use controller\LoginController\LoginController;

require_once '../controller/LoginController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $login = new LoginController();

    $login->login($email, $password);
}
