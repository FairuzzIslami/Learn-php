<?php
    if(isset($_POST['submit'])){
        if($_POST['user'] == 'fairuz' && $_POST['pw'] == '123'){
            header('Location: admind.php');
            exit;
        }
        else{
            $error = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login in here</h1>
    <form action="" method="post">
        <label for="usr">Username:</label><br>
        <input type="text" name="user" id="usr"><br>
        <label for="psw">Password:</label><br>
        <input type="password" name="pw" id="psw"><br><br>
        <button type="submit" name="submit">Klik here</button>
    </form>
    <?php if(isset($error)){ ?>
        <h1>User/Password salah!!</h1>
    <?php } ?>

</body>
</html>
