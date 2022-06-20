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
    <link rel="stylesheet" href="../style/contacts.css">
</head>
<body class="body-contacts" style="background-image: url('https://storage.yandexcloud.net/moskvichmag/uploads/2022/01/tsoy1.jpg')">
<?php include 'components/nav.php' ?>
<section id="contact"style="margin-top: 80px">

    <div class="contact-wrapper">

        <!-- Left contact page -->

        <form id="contact-form" class="form-horizontal" role="form" style="width: 100%;">

            <div class="form-group">
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="name" placeholder="Имя" name="name" value="" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <input type="email" class="form-control" id="email" placeholder="e-mail" name="email" value="" required>
                </div>
            </div>

            <textarea class="form-control" rows="10" placeholder="Сообщение" name="message" required></textarea>

            <button class="btn-product" id="submit" type="submit" value="SEND" style="width: 93%;">Отправить</button>

        </form>

        <!-- Left contact page -->

        <div class="direct-contact-container" style="margin: 50px">

            <ul class="contact-list">
                <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place a-btn" style="background-color: black">Москва</span></i></li>

                <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone a-btn "style="background-color: black" ><a href="tel:89853885341" >89853885341</a></span></i></li>

                <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail a-btn"style="background-color: black"><a href="mailto:diana@gmail.com" title="Send me an email">diana@gmail.com</a></span></i></li>

            </ul>

        </div>

    </div>

</section>

<iframe class="border" style="width: 90%; margin: 65px" src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac9a18e5331c633891ea6a1e5bf1f31a336d206934621b98b1ef7b519a8cc7729&amp;source=constructor" width="763" height="400" frameborder="0"></iframe>

<?php include 'components/footer.php' ?>
</body>
</html>


