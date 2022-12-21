<?php


define('DOT', '.');
require_once DOT . "/bootstrap.php";
require_once DOT . "/_public/reflection.php";
require_once DOT . "/_public/users.php";
require_once DOT . "/_public/message.php";

//Home page//
$Route->add('/awgu/', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," Awgu Diocese Home");

    $Template->render("home");

}, 'GET');
//Home page//

$Route->add('/awgu/{page}', function ($page) {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," Awgu Diocese ". ucfirst($page));

    $Template->render("pages.{$page}");

}, 'GET');



//Logout Sessions//
$Route->add(
    '/awgu/auth/logout',
    function () {
        $Template = new Apps\Template;
        $Template->expire();
        $Template->cleanAll(session_delete_timout);
        $Template->redirect("/awgu/");
    },
    'GET'
);
//Logout Sessions//



$Route->run('/');
