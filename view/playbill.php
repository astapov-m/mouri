<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mouri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/btn.css">
    <link rel="stylesheet" href="../style/nav.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/card.css">
</head>
<body>

<?php include 'components/nav.php' ?>

<hr style="width: 100%;margin-bottom: 100px">
<?php
require_once '../vendor/config/dbConfig.php';
$categories = mysqli_query($connect, "SELECT * FROM `categories`");
while ($category = mysqli_fetch_array($categories)) {
    echo '<h1 align="center">'.$category['name'].'</h1>';
    echo '<hr style="width: 100%;margin-bottom: 10px;margin-top: 10px">';
    echo '<div class="container container-card">';
    $events = mysqli_query($connect, "SELECT * FROM `events` where `category_id` = '$category[0]'");
    while ($event = mysqli_fetch_array($events)) {
        echo '<div class="card">';
        echo '<div class="card-header">';
        echo '<img src="'.'../images/'.$event['image'].'" alt="rover" />';
        echo '</div>';
        echo '<div class="card-body">';
        echo '<h4>'.$event['name'].'</h4>';
        echo '<p style="color : cornflowerblue">'.$event['date'].'</p>';
        echo '<p style="font-size: 15px">'.'Стоимость : '.$event['price'].'р'.'</p>';
        echo '<p style="font-size: 15px">'.' Кол-во мест: '.$event['size'].'/'.$event['maxSize'].'</p>';
        echo '<a href="Event.php?id='.$event['id'].'">Подробнее</a>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
}
?>

<!-- Site footer -->
<?php include 'components/footer.php' ?>
</body>
</html>
