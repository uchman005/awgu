<?php

use Apps\Template;
use Apps\Core;

$Route->add("/awgu/bishop/reflection", function () {
    $Template = new Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title", "Bishop`s Reflections");
    $Template->render("reflections");
}, "GET");

$Route->add("/awgu/login", function () {
    $Template = new Template;
    $Template->assign("title", "Login");
    $Template->render("login");
}, "GET");

$Route->add("/awgu/bishop/reflection/{id}", function ($id) {
    $Template = new Template;
    $Core = new Core;
    $Template->addheader("layouts.header");
    $sql = "SELECT * FROM `reflections` WHERE `id` = $id";
    $reflection = mysqli_query($Core->dbCon, $sql);
    $reflection = mysqli_fetch_object($reflection);
    $Template->assign("reflection", $reflection);
    $Template->addfooter("layouts.footer");
    $Template->assign("title", $reflection->title);
    $Template->render("reflection");
}, "GET");

$Route->add("/awgu/bishop/create_reflection", function () {
    $Template = new Template(auth_url);
    $Core = new Core;
    $Data = $Core->data;
    $title = $Data->title;
    $author = $Data->author;
    $body = $Data->body;
    $img_name = md5($title . $body . "1");
    $img_name2 = md5($title . $body . "2");
    $handle = new \Verot\Upload\Upload($_FILES['img1']);
    if ($handle->uploaded) {
        $ext = $handle->file_src_name_ext;
        $handle->file_new_name_body   = $img_name;
        $handle->file_overwrite       = true;
        $handle->image_resize         = true;
        $handle->image_x              = 200;
        $handle->image_ratio_y        = true;
        $handle->process('_store/');
        if ($handle->processed) {
            $img_name = $img_name . DOT . $ext;
            $handle->clean();
        } else {
            echo 'error : ' . $handle->error;
        }
    }
    $handle2 = new \Verot\Upload\Upload($_FILES['img2']);
    if ($handle2->uploaded) {
        $ext = $handle2->file_src_name_ext;
        $handle2->file_new_name_body   = $img_name2;
        $handle2->file_overwrite       = true;
        $handle2->image_resize         = true;
        $handle2->image_x              = 200;
        $handle2->image_ratio_y        = true;
        $handle2->process('_store/');
        if ($handle2->processed) {
            $img_name2 = $img_name2 . DOT . $ext;
            $handle2->clean();
        } else {
            echo 'error : ' . $handle->error;
        }
    }
    $create = $Core->CreateReflection($title, $author, $body, $img_name, $img_name2);
    if($create){
        $Template->setError("Reflection created successfully", "success" ,"/awgu/user/reflect");
        $Template->redirect("/awgu/user/reflect");
    }
    $Template->setError("Reflection creation failed Unexpectedly", "danger" ,"/awgu/user/reflect");
    $Template->redirect("/awgu/user/reflect");
}, "POST");

$Route->add("/awgu/bishop/reflection/edit/{id}", function ($id) {
    $Template = new Template(auth_url);
    $Core = new Core;
    // $user = $Core->GetUserInfo($id);
    // $Template->addheader("dashboard.layouts.header");
    // $Template->addfooter("dashboard.layouts.footer");
    // $Template->assign("priest", $user);
    // $Template->assign("title", "Edit " . $user->name);
    // $Template->render("dashboard.editpriest");
}, "GET");
