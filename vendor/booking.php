<?php
session_start();
if(!$_SESSION['user']) {
    $response = [
        "status" => false,
        "message" => 'Вам необходимо авторизироваться'
    ];

    echo json_encode($response);
    die();
}

require_once 'config/dbConfig.php';
$idEvent = $_POST['id'];
$idUser = $_SESSION['user']['id'];
$status = 1;

$check = mysqli_query($connect,"SELECT * FROM `orders` WHERE `user_id` = '$idUser' AND `event_id` = '$idEvent'");
if(mysqli_num_rows($check) > 0){
    $response = [
        "status" => false,
        "message" => 'Вы уже записаны на данное мероприятие'
    ];

    echo json_encode($response);
}
else{
    $maxId = mysqli_fetch_array(mysqli_query($connect, "SELECT MAX(id) as id FROM orders"))["id"] + 1;
    mysqli_query($connect, "INSERT INTO `orders` (`id`, `user_id`, `event_id`, `status`) VALUES ('$maxId', '$idUser', '$idEvent', '$status')");

    $size = (mysqli_fetch_array(mysqli_query($connect, "SELECT size as size FROM events"))["size"] + 1);
    mysqli_query($connect, "UPDATE `events` SET `size` = '$size' WHERE `id` = '$idEvent'");

    $response = [
        "status" => true,
        "message" => 'Вы успешно забронировали себе место'
    ];

    echo json_encode($response);
}
