<?php
    session_start();
    include '../config/sql_conn.php';

    $userid = $_POST['userid'];
    $userpw = $_POST['userpw'];

    $sql = "select * from Member where userid='$userid'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if(!$num) {
        echo "<script> 
        alert(\"일치하는 아이디가 없습니다.\");
        history.back();
        </script>";
        exit;
    } else {
        $row = mysqli_fetch_array($result);
        if($row['userpw'] != $userpw) {
            echo "<script>
                    alert(\"비밀번호가 일치하지 않습니다.\");
                    history.back();
                </script>";
                exit;
        } else {
            $_SESSION['username'] = $row['username'];
            $conn->close();
            header("Location: ../view/main.php");
        }
    }
    
?>