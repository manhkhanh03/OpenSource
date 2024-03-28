<?php
session_start();
if (isset($_SESSION['user'])) {
    session_start();
    $_SESSION['next'] = 'test_project/';
    require('../route.php');
    exit;
}

?>

<html>

<head>
    <title>Login by ManhKhanh</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="d-flex jus-content-center align-item-center">
        <div class="w-30 h-100 border-radius-4 border-solid-1 ">
            <form action="../handleRequest/login.php" method="POST" id="formSubmit">
                <h1 class="text-center w-100">Đăng nhập</h1>
                <br />
                <div class="d-flex jus-content-center flex-wrap">
                    <div class="w-90 m-1">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-input w-100 p-1 mt-1" id="email" placeholder="Email">
                    </div>
                    <div class="w-90 m-1">
                        <label for="password">Mật khẩu</label>
                        <input type="password" class="form-input w-100 p-1 mt-1" name="password" id="password" placeholder="Mật khẩu">
                    </div>

                    <button type="submit" class="btn btn-primary text-center">Đăng nhập</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>