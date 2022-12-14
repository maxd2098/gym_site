<?php

include_once SITE_ROOT . "/app/database/db.php";

//$programs = selectAllStatesForTrainer('programs', 'users');

// РЕДАКТИРОВАНИЕ СТАТЬИ В АДМИНКЕ start
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['edit_id'])) {
    $program = selectOneAndForDisplayOrEditProgram('programs', 'users', ['id_program' => $_GET['edit_id']]);
    //che($program);
}

// РЕДАКТИРОВАНИЕ СТАТЬИ В АДМИНКЕ end


// РЕДАКТИРОВАНИЕ СТАТЬИ edit start
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['button_adminEditProgram'])) {
    //che($_POST);
    $title = trim($_POST['title']);
    $text = $_POST['text'];
    $id_program = $_POST['id_program'];
    //$author_id = $_SESSION['id'];
    
    if ($_FILES['img']['name'] !== '') {
        $imgName = 'img' . time() . '_' . $_FILES['img']['name'];
        $imgType = $_FILES['img']['type'];
        $imgTmp = $_FILES['img']['tmp_name'];
        $imgSize = $_FILES['img']['size'];
        $imgPath = SITE_ROOT . '\assets\imageToServer\\' . $imgName;
        
        if(strpos($imgType, 'image') !== false) {
            $result = move_uploaded_file($imgTmp, $imgPath);
            if ($result) {
                $_POST['img'] = $imgName;
            } else {
                $errMsg []= "Ошибка загрузки изображения на сервер";
            }
        } else {
            $errMsg []= "Можно загружать только изображения";
        }
        
    }
    
    if ($title === '' || $text === '') {
        $errMsg []= 'Не все поля * заполнены';
        $program = selectOneAndForDisplayOrEditProgram('programs', 'users', ['id_program' => $id_program]);
    } else {
        $timeNow = date('Y-m-d H:i:s', time() + (60 * 60 * 10));
        //che($timeNow);
        $program = [
            'title' => $title,
            'text' => $text,
            'change_date' => $timeNow
        ];
        if(isset($_POST['img'])) {
            $program['img'] = $_POST['img'];
            $programImg = selectOneAnd('programs', ['id_program' => $id_program]);
            unlink(SITE_ROOT . '\assets\imageToServer\\' . $programImg['img']);
        }
        updateAll('programs', $id_program, 'id_program', $program);
        header('location: display.php');
    }
}

// РЕДАКТИРОВАНИЕ СТАТЬИ edit end


// УДАЛЕНИЕ СТАТЬИ В АДМИНКЕ start
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['delete_id'])) {
    $programImg = selectOneAnd('programs', ['id_program' => $_GET['delete_id']]);
    delete('programs', ['id_program' => $_GET['delete_id']]);
    unlink(SITE_ROOT . '\assets\imageToServer\\' . $programImg['img']);
    header('location: display.php');
}

// УДАЛЕНИЕ СТАТЬИ В АДМИНКЕ end


// РЕДАКТИРОВАНИЕ СТАТУСА СТАТЬИ edit start
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['edit_id']) && isset($_GET['publish'])) {
    updateAll('programs', $_GET['edit_id'], 'id_program', ['publish' => $_GET['publish']]);
    header('location: display.php');
}

// РЕДАКТИРОВАНИЕ СТАТУСА СТАТЬИ edit end














