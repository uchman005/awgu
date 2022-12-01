<?php

$Route->add("/Awgu/bishop/reflection", function () {
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title", "Bishop`s Reflections");
    $Template->render("reflections");
}, "GET");

$Route->add("/Awgu/login", function () {
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title", "Login");
    $Template->render("login");
}, "GET");

$Route->add("/Awgu/bishop/reflection/{id}", function ($id) {
    $Template = new Apps\Template;
    $Core = new Apps\Core;
    $Template->addheader("layouts.header");
    $sql = "SELECT * FROM `reflections` WHERE `id` = $id";
    $reflection = mysqli_query($Core->dbCon, $sql);
    $reflection = mysqli_fetch_object($reflection);
    $Template->assign("reflection", $reflection);
    $Template->addfooter("layouts.footer");
    $Template->assign("title", $reflection->title);
    $Template->render("reflection");
}, "GET");
