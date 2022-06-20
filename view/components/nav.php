<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="../index.php">Mouri</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../view/playbill.php">Афиша</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../view/contacts.php">Контакты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../view/about.php">О компании</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../view/me.php">Обо мне</a>
                </li>
            </ul>
        </div>
    </div>
    <?php
    if ($_SESSION['user']) {
       echo '<a class="a-btn" href="../view/account.php">Забронированное</a>';
       echo '<a class="a-btn" href="../vendor/logout.php">Выход</a>';
    }else{
        echo ' <a class="a-btn" href="../view/register.php">Регистрация</a>';
        echo '<a class="a-btn" href="../view/login.php">Вход</a>';
    }
    ?>

</nav>

