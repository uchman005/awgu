<?php

use Apps\Template;
use Apps\Core;

$Route->add("/awgu/users/login", function () {
    $Template = new Template;
    $Core = new Core;
    $Data = $Core->data;
    $email = $Data->email;
    $password = $Data->password;
    $login = $Core->Login($email, $password);
    if ($login) {
        $Template->authorize($login);
        $Template->setError("Login Successful", "success", "/awgu/user/dashboard");
        $Template->redirect("/awgu/user/dashboard");
    }
    $Template->setError("Email or password is incorrect, please try again", "warning", "/awgu/login");
    $Template->redirect("awgu/login");
}, "POST");


$Route->add("/awgu/user/dashboard", function () {
    $Template = new Template(auth_url);
    $Core = new Core;
    $User = $Core->GetUserInfo($Template->storage("accid"));
    $Template->addheader("dashboard.layouts.header");
    $Template->addfooter("dashboard.layouts.footer");

    $Template->assign("User", $User);
    $Template->assign("title", "Dashboard");
    $Template->render("dashboard.index");
}, "GET");


$Route->add("/awgu/user/priests", function () {
    $Template = new Template(auth_url);
    $Core = new Core;
    $User = $Core->GetUserInfo($Template->storage("accid"));
    $Template->addheader("dashboard.layouts.header");
    $Template->addfooter("dashboard.layouts.footer");
    $Template->assign("User", $User);
    $Template->assign("title", "Dashboard");
    $Template->render("dashboard.priests");
}, "GET");
$Route->add("/awgu/user/priests/addpriest", function () {
    $Template = new Template(auth_url);
    $Core = new Core;
    $User = $Core->GetUserInfo($Template->storage("accid"));
    $Template->addheader("dashboard.layouts.header");
    $Template->addfooter("dashboard.layouts.footer");
    $Template->assign("User", $User);
    $Template->assign("title", "Dashboard");
    $Template->render("dashboard.addpriest");
}, "GET");

$Route->add("/awgu/users/create", function () {
    $Template = new Template(auth_url);
    $Core = new Core;
    $Data = $Core->data;
    $email = $Data->email;
    $name = $Data->name;
    $password = $Data->password;
    $dod = $Data->dod;
    $parish = $Data->parish;
    $img_name = md5($email);

    $handle = new \Verot\Upload\Upload($_FILES['img']);
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

    $create = $Core->CreateUser($email, $name, $password, $dod, $parish, $img_name);
    if ($create) {
        $Template->setError("Priest created successfully", "success", "/awgu/user/priests");
        $Template->redirect("/awgu/user/priests");
    }
    $Template->setError("Priest creation failed due to network, try again", "warning", "/awgu/user/priests");
    $Template->redirect("/awgu/user/priests");
}, "POST");
$Route->add("/awgu/user/reflect", function () {
    $Template = new Template(auth_url);
    $Core = new Core;
    $User = $Core->GetUserInfo($Template->storage("accid"));
    $Template->addheader("dashboard.layouts.header");
    $Template->addfooter("dashboard.layouts.footer");
    $Template->assign("User", $User);
    $Template->assign("title", "Dashboard");
    $Template->render("dashboard.reflect");
}, "GET");
$Route->add("/awgu/user/priests/addreflect", function () {
    $Template = new Template(auth_url);
    $Core = new Core;
    $User = $Core->GetUserInfo($Template->storage("accid"));
    $Template->addheader("dashboard.layouts.header");
    $Template->addfooter("dashboard.layouts.footer");
    $Template->assign("User", $User);
    $Template->assign("title", "Dashboard");
    $Template->render("dashboard.addreflect");
}, "GET");
