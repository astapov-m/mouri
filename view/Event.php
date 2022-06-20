<?php
session_start();
?>
<?php
$url = $_SERVER['QUERY_STRING'];
parse_str($url,$x);
$id = $x['id'];

require_once '../vendor/config/dbConfig.php';
$event = mysqli_query($connect, "SELECT * FROM `events` where `id` = '$id'");
while ($row = mysqli_fetch_array($event)) {
    $img = $row['image'];
    $size = $row['size'];
    $name = $row['name'];
    $maxSize = $row['maxSize'];
    $price = $row['price'];
    $date = $row['date'];
    $description = $row['description'];
}

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
    <link rel="stylesheet" href="../style/product.css">
    <link rel="stylesheet" href="../style/msg.css">
</head>
<body>
<?php include 'components/nav.php' ?>

    !-- Product Details -->

    <div class="product_details" style="margin-bottom: 50px">
        <div class="container">
            <div class="row details_row">

                <!-- Product Image -->
                <div class="col-lg-6">
                    <div class="details_image">
                        <div class="details_image_large">
                            <?php
                            echo '<img src="'.'../images/'.$img.'" alt="">';
                            ?>
                        </div>

                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-lg-6">
                    <div class="details_content">
                        <div class="details_name" data-id="1"><?php echo $name;?> </div>
                        <div class="details_price"><p><?=$date?></p></div>

                        <div class="in_stock_container">
                            <div class="availability"><?=$price?>р &nbsp Кол-во мест: <?=$size?>/<?=$maxSize?></div>
                        </div>
                        <div class="details_text">
                            <p> <?=$description?>
                            </p>
                            <br>
                        </div>

                        <!-- Product Quantity -->
                    </div>
                    <br>
                    <button class="btn-product btn-booking" type="submit" style="position: absolute;bottom: 0">Забронировать билет</button>
                </div>
                <p class="msg none"></p>
            </div>
        </div>
    </div>

<!-- Site footer -->
<?php include 'components/footer.php' ?>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/main.js"></script>
</body>
</html>
