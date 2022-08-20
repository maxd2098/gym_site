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
    <link rel="stylesheet" href="<?=BASE_URL . 'assets/css/style.css'?>">
    <script src="https://kit.fontawesome.com/90241b67b0.js" crossorigin="anonymous"></script>
</head>
<body>

<!--HEADER start-->
<?php

include SITE_ROOT . "/pages/header.php";
include SITE_ROOT . "/app/controllers/programs.php";

?>
<!--HEADER end-->


<!--MAIN start-->

<div class="container">
    <!--PROGRAMS CARDS start-->
    <div class="row main-content">
        
        <div class="program-cards col-lg-9 col-12">
            <div class="d-flex justify-content-between">
                <h2 class="main-trainers">
                    Программы тренировок
                </h2>
                <?php if(isset($_SESSION['status']) && $_SESSION['status'] == 1): ?>
                    <div class="button-program-add">
                        <a href="<?=BASE_URL . 'createProgram.php'?>">
                            <button type="button" class="btn btn-danger">Добавить свою программу</button>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="card col-12">
                <a href="program.php">
                    <div class="row g-0">
                        <div class="img-div col-lg-4">
                            <img src="assets/img/programs/program_1.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <h3 class="card-title">Упражнения на мышцы груди и плеч</h3>
                                <div class="card-author">Автор: Фред Ган</div>
                                <div class="card-date">11.08.22 15:32</div>
                                <p class="card-text">Это более широкая карта с вспомогательным текстом ниже в качестве естественного перехода к дополнительному контенту. Этот контент немного длиннее.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="card col-12">
                <a href="program.php">
                    <div class="row g-0">
                        <div class="img-div col-lg-4">
                            <img src="assets/img/programs/program_2.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <h3 class="card-title">Упражнения на бицепс и мышцы спины</h3>
                                <div class="card-author">Автор: Фред Ган</div>
                                <div class="card-date">10.08.22 13:45</div>
                                <p class="card-text">Это более широкая карта с вспомогательным текстом ниже в качестве естественного перехода к дополнительному контенту. Этот контент немного длиннее.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="card col-12">
                <a href="program.php">
                    <div class="row g-0">
                        <div class="img-div col-lg-4">
                            <img src="assets/img/programs/program_3.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <h3 class="card-title">Упражнения на бицепс</h3>
                                <div class="card-author">Нильсон Дэвидс</div>
                                <div class="card-date">10.08.22 13:45</div>
                                <p class="card-text">Это более широкая карта с вспомогательным текстом ниже в качестве естественного перехода к дополнительному контенту. Этот контент немного длиннее.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            
        </div>
        <!--PROGRAMS CARDS start-->
        
        <!--SIDEBAR start-->
        <?php include SITE_ROOT . "/pages/sidebar.php"; ?>
        <!--SIDEBAR end-->
    
    </div>
</div>
<!--MAIN end-->

<!--FOOTER start-->
<?php include SITE_ROOT . "/pages/footer.php"; ?>
<!--FOOTER end-->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>
</html>
