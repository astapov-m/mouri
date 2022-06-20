<?php
session_start();
require_once 'config/dbConfig.php';
$name = $_POST['name'];
$login = $_POST['login'];
$number = $_POST['number'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];
$check_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
if (mysqli_num_rows($check_login) > 0) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Такой логин уже существует",
        "fields" => ['login']
    ];

    echo json_encode($response);
    die();
}

$error_fields = [];

if ($login === '') {
    $error_fields[] = 'login';
}

if ($pass === '') {
    $error_fields[] = 'pass';
}

if ($name === '') {
    $error_fields[] = 'name';
}

if ($number === '' || !preg_match("/^[0-9]{11}$/",$_POST['number'])) {
    $error_fields[] = 'number';
}

if ($pass2 === '') {
    $error_fields[] = 'pass2';
}

if (!empty($error_fields)) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Проверьте правильность полей",
        "fields" => $error_fields
    ];

    echo json_encode($response);

    die();
}
$pass = md5($_POST['pass']);
$pass2 = md5($_POST['pass2']);

if($pass == $pass2){
    $maxId = mysqli_fetch_array(mysqli_query($connect, "SELECT MAX(id) as id FROM users"))["id"] + 1;
    mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `login`, `password`, `phone`) VALUES ('$maxId', '$name', '$login', '$pass', '$number')");

    $response = [
        "status" => true,
        "message" => "Успешная регистрация"
    ];
    echo json_encode($response);die();
}
else{
    $error_fields = ['pass','pass2'];
    $response = [
        "status" => false,
        "type" => 3,
        "message" => "Пароли не совпадают",
        "fields" => $error_fields
    ];
    echo json_encode($response);
}



