<?php

namespace controller\Controller;

class Controller
{
    public $conn;
    public function __construct()
    {
        require('../connect/connect.php');
        $this->conn = $conn;
    }
}
