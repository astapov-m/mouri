<?php
session_start();
if ($_SESSION['user']) {
    header('Location: ../view/account.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mouri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/nav.css">
    <link rel="stylesheet" href="../style/btn.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/auth.css">
    <link rel="stylesheet" href="../style/msg.css">
</head>
<body>
<?php include 'components/nav.php' ?>
<div class="wrapper">
    <form class="form-signin">
        <h2 class="form-signin-heading">Вход</h2>
        <input type="text" class="form-control" placeholder="Логин" name="login"/>
        <input type="password" class="form-control" placeholder="Пароль" name="pass"/>
        <button class="btn btn-lg btn-primary btn-block btn-entry" type="submit">Вход</button>
        <br>
        <a href="register.php">Регистрация</a>
        <br>
        <p class="msg none"></p>
    </form>
</div>
<?php include 'components/footer.php' ?>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/main.js"></script>
</body>
</html>

