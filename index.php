<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mouri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/btn.css">
    <link rel="stylesheet" href="style/nav.css">
    <link rel="stylesheet" href="style/footer.css">
</head>
<body>

<?php include 'view/components/nav.php' ?>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://i.postimg.cc/bNQp0RDW/1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block" style="margin-left: 50px">
                <h5>Выставки в Москве</h5>
                <p>Полное описание событий, подборка самых интересных мероприятий, фотографии на Mouri</p>
            </div>
        </div>
    </div>
</div>
<!--- ignore the code below-->

<div class="link-area">
    <a href="view/playbill.php" target="_blank">Выбор мероприятия</a>
</div>

<!-- Site footer -->
<?php include 'view/components/footer.php' ?>
</body>
</html>
