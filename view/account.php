<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: ../index.php');
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
</head>
<body>
<?php include 'components/nav.php' ?>

<section class="h-100" style="background-color: #eee; margin-top: 50px">
    <div class="container h-100 py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10">
                <?php
                $user_id = $_SESSION['user']['id'];
                require_once '../vendor/config/dbConfig.php';
                $events = mysqli_query($connect, "SELECT name, date, price , image FROM `orders` INNER JOIN `events` ON event_id = events.id WHERE user_id = '$user_id'");
                while ($event = mysqli_fetch_array($events)) {
                   echo '<div class="card rounded-3 mb-4">
                    <div class="card-body p-4">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">';
                   echo '<img src="../images/'.$event['image'].'" class="img-fluid rounded-3" alt="Cotton T-shirt">';
                   echo '</div>
                            <div class="col-md-3 col-lg-3 col-xl-3">';
                   echo '<p class="lead fw-normal mb-2">'.$event['name'].'</p>';
                   echo '<p><span class="text-muted">'.$event['date'].'</span></p>';
                   echo '</div>
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">';
                   echo ' <h5 class="mb-0">'.$event['price'].'р'.'</h5>';
                   echo '</div>
                        </div>
                    </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </div>
</section>
<?php include 'components/footer.php' ?>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/main.js"></script>
</body>
</html>



