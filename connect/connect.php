<?php

$conn = mysqli_connect('localhost', 'manhkhanh', '', 'mk_test');

if (!$conn) {
    echo "Error: " . mysqli_connect_error();
}
