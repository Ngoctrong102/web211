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

    "showA" => array(),

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
    ),


    "color" => array(
        "handler" => "color/color/renderColorPage",
        "roles" => ['all']
    ),
    "color/add" => array(
        "handler" => "color/color/renderAddPage",
        "roles" => ['all']
    ),
    "color/addNewColor" => array(
        "handler" => "color/color/addNewColor",
        "roles" => ['all']
    ),
    "color/edit/:num(id)" => array(
        "handler" => "color/color/renderEditPage",
        "roles" => ["all"]
    ),
    "color/editColor/:num(id)" => array(
        "handler" => "color/color/submitEditColor",
        "roles" => ["all"]
    ),
    "color/delete/:num(id)" => array(
        "handler" => "color/color/deleteColor",
        "roles" => ["all"]
    ),
    "color/addNewColorAjax" => array(
        "handler" => "color/color/addNewColorAjax",
        "roles" => ["all"]
    )
);
