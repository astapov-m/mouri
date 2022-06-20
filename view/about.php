<?php
session_start();
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
</head>
<body style="background-color: #4a4a4a">
<?php include 'components/nav.php' ?>
<div class="container" style="background-color: #4a4a4a; color: white; font-size: 20px; margin-top: 20px">
    <h1 style="margin-top: 80px">О компании</h1>
    <p><b>Mouri</b> — российский информационно-развлекательный интернет-портал, анонсирующий выставки, концерты, спектакли, фестивали, кинопоказы преимущественно в Москве.</p>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/k1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../images/k2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../images/k3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>
    <p>Был основан в 2012 году командой молодых разработчиков. Сообщество Mouri во ВКонтакте появилось раньше, чем сайт.</p>
    <p>В 2015 году портал занял третье место в номинации «Лучший интернет-проект» в премии «Молодые миллионеры», организованной журналом «Деловая Москва» . В этом же году портал победил во всероссийской интернет-премии «Прометей» в категории «СМИ».</p>
    <p>В 2019 году подкасты Mouri были отмечены премией VK Podcast Awards в номинации «Выбор экспертов».</p>
</div>
<?php include 'components/footer.php' ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


