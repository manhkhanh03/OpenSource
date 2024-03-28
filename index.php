<?php

session_start();
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}
?>

<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="d-flex jus-content-between">
        <?php if (isset($user)) { ?>
            <div class="w-20">
                <?php echo strtoupper($user->name) ?>
            </div>
            <div class="w-20">
                <a href="./handleRequest/logout.php" class="" style="cursor: pointer;">Đăng xuất</a>
            </div>
        <?php } else { ?>
            <div class="w-20">
                Chưa đăng nhập
            </div>
            <div class="w-20">
                <a href="./handleRequest/web/login.php" class="" style="cursor: pointer;">Đăng nhập</a>
            </div>
        <?php } ?>
    </div>
</body>

</html>