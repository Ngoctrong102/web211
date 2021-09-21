<?php
$routes = array(
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


    "test" => array(
        "handler" => "test/index",
        "roles" => ["all"]
    )
);
