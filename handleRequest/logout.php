<?php
session_start();

unset($_SESSION['user']);
$_SESSION['next'] = 'test_project/pages/login.php';
require('../route.php');
exit;
