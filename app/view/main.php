<?php
    session_start(); // 세션 시작
    if (!isset($_SESSION['username'])) {
        header("Location: login.php"); // 로그인되어 있지 않으면 로그인 페이지로 리다이렉트
        exit;
    }
    $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../lib/css/style.css">
</head>

<body>

    <div class="wrap" id="main_wrap">
        <div>
            <h1>Main Form</h1>
            <p class="login_user_id">🎉🎉🎉 <?php echo $username; ?>님, Welcom 🎉🎉🎉</p>
            <p><img src="./lib/image/image.png" alt="imoticon"></p>
            <p class="form_btn"><a href="../controller/logout_ok.php">Logout</a></p>
        </div>
    </div>
</body>

</html>

</html>