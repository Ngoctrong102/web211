<?php
$routes = array(
    "" => array(
        "handler" => "home/renderHome",
        "roles" => ["all"]
    ),
    "home" => array(
        "handler" => "home/home1",
        "roles" => ["all"]
    ),
    "home/home2" => array(
        "handler" => "home/home2",
        "roles" => ["all"]
    ),
    "home/sayHello/:str(name)" => array(
        "handler" => "home/home3",
        "roles" => ["all"]
    ),
    "abc" => array(
        "handler" => "students/subjects/math/index",
        "roles" => ["all"]
    ),
    "myaccount" => array(
        "handler" => "students/subjects/math/index",
        "roles" => ["admin", "user"]
    ),
    "login" => array(
        "handler" => "user/renderLoginForm",
        "roles" => ["all"]
    ),
    "register" => array(
        "handler" => "user/renderRegisterForm",
        "roles" => ["all"]
    ),
    "user/register" => array(
        "handler" => "user/register",
        "roles" => ["all"]
    ),
    "user/login" => array(
        "handler" => "user/login",
        "roles" => ["all"]
    ),
    "subject/math/:num(x)/:str(y)" => array(
        "handler" => "students/subjects/math/pathVariable",
        "roles" => ["all"]
    ),
    "logout" => array(
        "handler" => "user/logout",
        "roles" => ["all"]
    )
);
