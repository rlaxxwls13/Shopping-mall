<?php
    session_start();
    session_destroy();
    header("Location: ../view/login.php"); // 로그인 페이지로 리다이렉트
    exit;
?>