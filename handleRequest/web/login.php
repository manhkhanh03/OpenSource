<?php
session_start();

$_SESSION['next'] = 'test_project/pages/login.php';

require('../../route.php');
exit;
