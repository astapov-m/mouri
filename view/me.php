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
    <link rel="stylesheet" href="../style/me.css">
</head>
<body>
<?php include 'components/nav.php' ?>
<div class="wrapper clearfix">
    <div class="left">

        <div class="name-hero" style="margin-bottom: 50%">

            <div class="me-img"></div>

            <div class="name-text">

                <h1>Диана Казакова</h1>
                <p>20 лет</p>
                <p>diana@gmail.com</p>
                <p>8-985-388-53-41</p>

            </div>

        </div>

    </div>
    <div class="right">

        <div class="inner">
            <section>
                <h1>Администратор</h1>
                <p>Всем привет! Меня зовут Диана, я являюсь создателем проекта "Мouri".</em></p>
                <p>"Ежедневно наша команда собирает для Вас самые интересные мероприятия Москвы! Мы стараемся развиваться и двигаться ногу в ногу с современными технологиями! Начав когда-то с идеи, мы  достигли больших успехов в организации масштабных мероприятий"</em></p>
                <p>Если у вас возникают проблемы с бронированием билетов , вопросы по мероприятиям или перебои функционирования сайта - обращайтесь ко мне! Мы стараемся развиваться и всегда прислушиваемся к вашим пожеланиям!</em></p>
                <p>До встречи на самых масштабных мероприятиях!</em></p>
            </section>

        </div>

    </div>



</div>
<?php include 'components/footer.php' ?>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/main.js"></script>
</body>
</html>

