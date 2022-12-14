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
include SITE_ROOT . '/app/controllers/adminPrograms.php';

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 5;
$offset = $limit * ($page - 1);
$countPage = countTable('programs');
$countPage = ceil($countPage['count'] / $limit);
//che($countPage);

$programs = selectAllForPage('programs', $limit, $offset);

?>
<!--HEADER end-->


<!--MAIN start-->

<div class="container">
    
    <div class="row main-content">
        <!--ADMIN CONTENT start-->
        <div class="admin-content col-lg-9 col-12">
            <h1>Тренировочные программы</h1>
            <div class="row admin-params">
                <div class="col-1"><strong>ID</strong></div>
                <div class="col-3 unimportant"><strong>Автор</strong></div>
                <div class="col-5 col-lg-4"><strong>Название</strong></div>
                <div class="col-3 col-lg-2"><strong>Действия</strong></div>
                <div class="col-2 unimportant"><strong>Статус</strong></div>
            </div>
            <?php foreach($programs as $program): ?>
            <?php //che($programs); ?>
                <div class="row admin-string">
                    <div class="col-1"><?=$program['id_program']; ?></div>
                    
                    <?php if(mb_strlen($program['email']) > 15): ?>
                        <div class="col-3 unimportant"><?=mb_substr($program['email'], 0, 15, $encoding='utf8'); ?>...</div>
                    <?php else: ?>
                        <div class="col-3 unimportant"><?=$program['email']; ?></div>
                    <?php endif; ?>
                    
                    <?php if(mb_strlen($program['title']) > 15): ?>
                        <div class="col-5 col-lg-4"><?=mb_substr($program['title'], 0, 15, $encoding='utf8'); ?>...</div>
                    <?php else: ?>
                        <div class="col-5 col-lg-4"><?=$program['title']; ?></div>
                    <?php endif; ?>
                    <div class="col-2 col-lg-1 edit"><a href="edit.php?edit_id=<?=$program['id_program']?>">Edit</a></div>
                    <div class="col-2 col-lg-1 delete"><a href="edit.php?delete_id=<?=$program['id_program']?>">Delete</a></div>
                    <?php if($program['publish'] == 1): ?>
                        <div class="col-2 status"><a href="edit.php?edit_id=<?=$program['id_program']?>&publish=0">Publish</a></div>
                    <?php else: ?>
                        <div class="col-2 status"><a href="edit.php?edit_id=<?=$program['id_program']?>&publish=1">UnPublish</a></div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>

            <!--PAGINATION start-->
            <?php include SITE_ROOT . "/pages/pagination.php"; ?>
            <!--PAGINATION end-->
            
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


