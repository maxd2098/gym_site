<?php

include "../../path.php";

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
include SITE_ROOT . "/pages/banAdmin.php";
include SITE_ROOT . '/app/controllers/adminCarousel.php';

?>
<!--HEADER end-->


<!--MAIN start-->

<div class="container">
    
    <div class="row main-content">
        <!--ADMIN CONTENT start-->
        <div class="admin-content col-lg-9 col-12">
            <form class="row justify-content-center" action="edit.php" method="post" enctype="multipart/form-data">
                <div class="mb-3 col-12 col-lg-6 error-msg">
                    <?php
                    foreach($errMsg as $msg) {
                        echo $msg . "<br>";
                    }
                    ?>
                </div>
                <div class="w-100"></div>
                <div class="mb-3 col-12 col-lg-6">
                    <label for="exampleInputEmail1" class="form-label">ID слайда*</label>
                    <input name="id_slide" value="<?=$slide['id_slide']; ?>" type="text" class="form-control" readonly>
                </div>
                
                <div class="w-100"></div>
                <div class="mb-3 col-12 col-lg-6">
                    <label for="exampleInputEmail1" class="form-label">Надпись для слайда*</label>
                    <input name="title" value="<?=$slide['title']; ?>" type="text" class="form-control" maxlength="100" placeholder="Введите заголовок слайда">
                </div>
                <?php if($slide['img'] != ''): ?>
                    <div class="w-100"></div>
                    <div class="mb-3 col-12 col-lg-6">
                        <label for="exampleInputEmail1" class="form-label">Нынешнее изображение</label>
                        <div class="img-edit">
                            <img src="<?=BASE_URL . '/assets/imageToServer/' . $slide['img']; ?>" class="img-fluid" alt="Загрузите фотографию">
                        </div>
                    </div>
                <?php endif; ?>
                <div class="w-100"></div>
                <div class="mb-3 col-12 col-lg-6">
                    <label for="exampleInputEmail1" class="form-label">Изменить изображение</label>
                    <input name="img" type="file" class="form-control">
                </div>
                
                <div class="w-100"></div>
                <div class="buttons-form mb-3 col-12 col-lg-6">
                    <button name="button_adminEditSlide" type="submit" class="btn btn-danger">Сохранить</button>
                    <a class="button-reg" href="display.php">
                        <button type="button" class="btn btn-secondary">Не сохранять</button>
                    </a>
                </div>
            </form>
        </div>
        <!--ADMIN CONTENT end-->
        
        <!--SIDEBAR start-->
        <?php include SITE_ROOT . "/pages/sidebarAdmin.php"; ?>
        <!--SIDEBAR end-->
    
    </div>
</div>
<!--MAIN end-->

<!--FOOTER start-->
<?php include SITE_ROOT . "/pages/footer.php"; ?>
<!--FOOTER end-->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>
</html>




