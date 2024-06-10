<?php
    include '../config/sql_conn.php';
    
    $userid = $_GET['userid'];
    $sql = "select useridx from Member where userid='$userid'";
    $result = mysqli_query($conn, $sql);    // 쿼리 실행
    $data = mysqli_fetch_array($result);    // 결과를 배열 형태로 가져옴
    
    echo isset($data['useridx']) ? "X" : "O";
?>