<?php

include "path.php";

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Тренажерка</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/90241b67b0.js" crossorigin="anonymous"></script>
</head>
<body>

<!--HEADER start-->
<?php include "pages/header.php"; ?>
<!--HEADER end-->


<!--MAIN start-->


<div class="container">
    <!--TRAINERS CARDS start-->
    <div class="row main-content">
        
        <div class="trainer-describe col-lg-9 col-12">
            <h2 class="name-trainer">
                Фред Ган
            </h2>
            <div class="img-div">
                <img src="assets/img/trainers/trainer_1.jpg" class="img-fluid" alt="...">
            </div>
            <div class="weight-train age">
                Возраст: 32 года
            </div>
            <div class="weight-train experience">
                Стаж работы: 5 лет
            </div>
            <div class="weight-train email">
                Email: fredgan@gmail.com
            </div>
            <div class="describe">
                Но укрепление и развитие внутренней структуры напрямую зависит от переосмысления внешнеэкономических политик.
                Лишь явные признаки победы институционализации являются только методом политического участия и функционально
                разнесены на независимые элементы. Но акционеры крупнейших компаний, вне зависимости от их уровня,
                должны быть в равной степени предоставлены сами себе.
            </div>
            <button class="btn btn-primary" type="submit">Оставить заявку</button>
        </div>
        <!--TRAINERS CARDS end-->
        
        <!--SIDEBAR start-->
        <?php include "pages/sidebar.php"; ?>
        <!--SIDEBAR end-->
    
    </div>
</div>
<!--MAIN end-->

<!--FOOTER start-->
<?php include "pages/footer.php"; ?>
<!--FOOTER end-->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>
</html>
