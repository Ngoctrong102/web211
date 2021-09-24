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
    "admin/abc" => array(
        "handler" => "students/subjects/math/index",
        "roles" => ["admin"]
    ),
    "account/login" => array(
        "handler" => "account/login",
        "roles" => ["all"]
    ),
    "login" => array(
        "handler" => "account/index",
        "roles" => ["all"]
    ),
    "register" => array(
        "handler" => "account/renderRegisterView",
        "roles" => ["all"]
    ),
    "subject/math/:num(x)/:str(y)" => array(
        "handler" => "students/subjects/math/pathVariable",
        "roles" => ["all"]
    ),
    "test" => array(
        "handler" => "test/index",
        "roles" => ["all"]
    )
);
