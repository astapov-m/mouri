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
        <h2 class="form-signin-heading">Регистрация</h2>
        <input type="text" class="form-control" placeholder="Логин" name="login"/>
        <input type="text" class="form-control" placeholder="Имя" name="name"/>
        <input type="text" class="form-control" placeholder="Номер телефона (89853885341)" name="number"/>
        <input type="password" class="form-control" placeholder="Пароль" name="pass"/>
        <input type="password" class="form-control" placeholder="Повторите пароль" name="pass2"/>
        <button class="btn btn-lg btn-primary btn-block btn-regist" type="submit">Зарегистрироваться</button>
        <br>
        <a href="login.php">Вход</a>
        <br>
        <p class="msg none"></p>
    </form>
</div>
<?php include 'components/footer.php' ?>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/main.js"></script>
</body>
</html>


