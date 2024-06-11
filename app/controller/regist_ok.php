<?php
    include '../config/sql_conn.php';

    $userid = $_POST['userid'];
    $userpw = $_POST['userpw'];
    $username = $_POST['username'];
    $userphone = $_POST['userphone'];
    $useremail = $_POST['useremail'];
    $userhobbies = implode(",", $_POST['hobby']);

    $sql = "INSERT INTO Member (userid, userpw, username, userphone, useremail, userhobby) VALUES ('$userid', '$userpw', '$username', '$userphone', '$useremail', '$userhobbies')";
    $result = mysqli_query($conn, $sql);

    if($result) {
        $conn->close();
        header("Location: ../view/main.php");
        exit();
    } else {
        echo "회원가입에 실패했습니다: " . mysqli_error($conn);
    }
?>