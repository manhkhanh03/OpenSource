<?php

namespace controller\LoginController;

use controller\Controller\Controller;

require_once '../controller/Controller.php';

class LoginController extends Controller
{
    public function login($email, $password = 'admin')
    {
        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

        $result = mysqli_query($this->conn, $query);
        $user = mysqli_fetch_object($result);

        if (!isset($user->id)) {
            $this->change('test_project/pages/login.php');
        }

        session_start();
        $_SESSION['user'] = $user;
        $this->change('test_project/index.php');
    }
}
