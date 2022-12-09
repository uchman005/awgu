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