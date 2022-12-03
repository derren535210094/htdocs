<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM user
            WHERE email = '%s'",
           $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if($user) {

       if (password_verify($_POST["password"], $user["password_hash"])) {

            session_start();

            session_regenerate_id();

            $_SESSION["user_id"] = $user["id"];

            header("Location: UAS_Kelompok_1.php");
            exit;
        } else if ($_POST["password"] == $user["password_hash"]) {
            session_start();

            session_regenerate_id();

            $_SESSION["user_id"] = $user["id"];

            header("Location: UAS_Kelompok_1.php");
            exit;
        }
    }

    $is_invalid = true;
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <style>
        body{
            background-repeat: no-repeat;
            background-size: cover;
            background-position-y: -100px;
            text-align: center;
            color: white;
        }
        .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
#logins:hover{
    color: yellow;
}
    </style>

    <title>Login: Indo Classroom</title>
</head>
<body style="background-image: url(https://drive.google.com/uc?id=1FyiF5ImYT6vaDj_PspzygQq8-nrmGB_x);">
<pre>






</pre>

    <h1 style="color: white">Login</h1>

    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>

    <form method="post">
        <label for="email">email</label>
        <input type="email" name="email" id="email" class="center"
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">

        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="center">

        <button>Log in</button><br><br>

        <label> <a id="logins" href="Forgot_Password.html">Forgot password ?</a></label>
        
    </form>
    
</body>
</html>