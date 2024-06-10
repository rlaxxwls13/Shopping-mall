<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../lib/css/style.css">
</head>

<body>
    <div class="wrap" id="regist_wrap">
        <div>
            <h1>Change Password Form</h1>
            <form action="changepw_ok.php" method="post" name="changeform" id="change_form" class="form"
                onsubmit="return changepw()">
                <p><input type="text" name="userid" id="userid" placeholder="ID"></p>
                <p><input type="password" name="new_pw" placeholder="New Password"></p>
                <p><input type="password" name="new_pw_ch" placeholder="New Password Check"></p>
                <p><input type="submit" value="Change Password" class="changepw_btn form_btn"></p>
                <p class="pre_btn">Are you join? <a href="index.php">Login.</a></p>
            </form>
        </div>
    </div>
    <script src="./lib/js/regist.js"></script>
</body>

</html>