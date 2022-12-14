<?php

use Apps\Core;
use Apps\Template;

$Route->add("/awgu/user/messages", function () {
    $Template = new Template(auth_url);
    $Template->addheader("dashboard.layouts.header");
    $Template->addfooter("dashboard.layouts.footer");
    $Template->assign("title", "Messages");
    $Template->render("dashboard.messages");
}, "GET");

$Route->add("/awgu/user/bishop/add_message", function () {
    $Template = new Template(auth_url);
    $Template->addheader("dashboard.layouts.header");
    $Template->addfooter("dashboard.layouts.footer");
    $Template->assign('title', "Messages");
    $Template->render("dashboard.addmessage");
}, "GET");

$Route->add("/awgu/bishop/create_message", function () {
    $Core = new Core;
    $Template = new Template(auth_url);
    $Data = $Core->data;
    $title = $Data->title;
    $author = $Data->author;
    $body = $Data->body;
    $send = $Core->SaveMessage($title, $author, $body);
    if ($send) {
        $Template->setError("Message sent successfully", "success", "/awgu/user/messages");
        $Template->redirect("/awgu/user/messages");
    }
    $Template->setError("Message sending failed", "danger", "/awgu/user/messages");
    $Template->redirect("/awgu/user/messages");
}, "POST");



$Route->add("/awgu/messages/edit/{id}", function ($id) {
    $Template = new Template(auth_url);
    $Core = new Core;
    $user = $Core->GetUserInfo($Template->storage('accid'));
    if (!($user->role === 'bishop')) {
        $Template->setError("You are not allowed to perform this action", "danger", "/awgu/user/dashboard");
        $Template->redirect("/awgu/user/dashboard");
    }
    $message = $Core->GetMessage($id);
    $Template->assign("message", $message);
    $Template->assign("title", "Edit Message");
    $Template->addheader("dashboard.layouts.header");
    $Template->addfooter("dashboard.layouts.footer");
    $Template->render("dashboard.editmessage");
}, "GET");


$Route->add("/awgu/message/edit", function () {
    $Template = new Template(auth_url);
    $Core = new Core;
    $Data = $Core->data;
    $title = $Data->title;
    $body = $Data->body;
    $id = $Data->id;
    $user = $Core->GetUserInfo($Template->storage('accid'));
    if (!($user->role === 'bishop')) {
        $Template->setError("You are not allowed to perform this action", "danger", "/awgu/user/dashboard");
        $Template->redirect("/awgu/user/dashboard");
    } else {
        $edited = $Core->EditMessage($id, $title, $body);
        if ($edited) {
            $Template->setError("Edited Successfully", "success", "/awgu/user/messages");
            $Template->redirect("/awgu/user/messages");
        }
        $Template->setError("Editing Failed", "warning", "/awgu/user/messages");
        $Template->redirect("/awgu/user/messages");
    }
}, "POST");

$Route->add("/awgu/messages/delete/{id}", function ($id) {
    $Template = new Template(auth_url);
    $Core = new Core;
    $user = $Core->GetUserInfo($Template->storage('accid'));
    if (!($user->role === 'bishop')) {
        $Template->setError("You are not allowed to perform this action", "danger", "/awgu/user/dashboard");
        $Template->redirect("/awgu/user/dashboard");
    }
    $delete = $Core->DeleteMessage($id);
    if ($delete) {
        $Template->setError("Message deleted", "success", "/awgu/user/messages");
        $Template->redirect("/awgu/user/messages");
    }
    $Template->setError("Message deleting failed", "danger", "/awgu/user/messages");
    $Template->redirect("/awgu/user/messages");
}, "GET");

$Route->add("/awgu/messages/view/{id}", function ($id) {
    $Template = new Template;
    $Core = new Core;
    $Template->addheader("dashboard.layouts.header");
    $Template->addfooter("dashboard.layouts.footer");
    $message = $Core->GetMessage($id);
    $Template->assign("message", $message);
    $Template->assign("title", $message->title);
    $Template->render("dashboard.message");
}, "GET");
