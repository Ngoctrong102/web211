<?php
$routes = array(

    // customer
    "" => array(
        "handler" => "home/renderHome",
        "roles" => ["all"]
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
    "cart" => array(
        "handler" => "user/renderShoppingCart",
        "roles" => ["all"]
    ),
    "showcolor" => array(
        "handler" => "color/renderShowColor",
        "roles" => ["all"]
    ),
    "add" => array(
        "handler" => "color/renderAddColor",
        "roles" => ["all"]
    ),
    "add/coloradded" => array(
        "handler" => "color/ColorAdded",
        "roles" => ["all"]
    ),
    "edit/:num(id)" => array(
        "handler" => "color/renderEditColor",
        "roles" => ["all"]
    ),
    "edit/coloredited/:num(id)" => array(
        "handler" => "color/ColorEdited",
        "roles" => ["all"]
    ),
    "delete/:num(id)" => array(
        "handler" => "color/ColorDeleted",
        "roles" => ["all"]
    ),
    "logout" => array(
        "handler" => "user/logout",
        "roles" => ["all"]
    ),
    "shop" => array(
        "handler" => "customer/product/renderHomeShop",
        "roles" => ["all"]
    ),
    "account" => array(
        "handler" => "customer/account/renderAccountPage",
        "roles" => ["customer"]
    ),
    "account/addNewAddress" => array(
        "handler" => "customer/account/addNewAddress",
        "roles" => ["customer"]
    ),
    "account/deleteAddress" => array(
        "handler" => "customer/account/deleteAddress",
        "roles" => ["customer"]
    ),
    "account/updateAddress" => array(
        "handler" => "customer/account/updateAddress",
        "roles" => ["customer"]
    ),

    // admin
    "admin" => array(
        "handler" => "admin/dashboard/renderDashboard",
        "roles" => ["all"]
    ),
    "admin/form" => array(
        "handler" => "admin/form/renderForm",
        "roles" => ["all"]
    ),
    "home" => array(
        "handler" => "customer/home/renderHomePage",
        "roles" => ["all"]
    )
);
