<?php
$routes = array(

    // customer
    "" => array(
        "handler" => "customer/home/renderHomePage",
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


    // admin
    "admin" => array(
        "handler" => "admin/dashboard/renderDashboard",
        "roles" => ["all"]
    ),
    "admin/form" => array(
        "handler" => "admin/form/renderForm",
        "roles" => ["all"]
    ),
    "admin/categories" => array(
        "handler" => "admin/category/renderAllCategories",
        "roles" => ["all"]
    ),
    "admin/categories/add" => array(
        "handler" => "admin/category/renderAddPage",
        "roles" => ["all"]
    ),
    "admin/categories/addNew" => array(
        "handler" => "admin/category/addNewCategory",
        "roles" => ["all"]
    ),
    "admin/categories/edit/:num(id)" => array(
        "handler" => "admin/category/renderEditPage",
        "roles" => ["all"]
    ),
    "admin/categories/editCategory/:num(id)" => array(
        "handler" => "admin/category/editCategory",
        "roles" => ["all"]
    ),
    "admin/categories/delete/:num(id)" => array(
        "handler" => "admin/category/deteleCategory",
        "roles" => ["all"]
    ),
    "admin/units" => array(
        "handler" => "admin/unit/renderAllUnits",
        "roles" => ["all"]
    ),
    "admin/units/add" => array(
        "handler" => "admin/unit/renderAddPage",
        "roles" => ["all"]
    ),
    "admin/units/addNew" => array(
        "handler" => "admin/unit/addNewUnit",
        "roles" => ["all"]
    ),
    "admin/units/edit/:num(id)" => array(
        "handler" => "admin/unit/renderEditPage",
        "roles" => ["all"]
    ),
    "admin/units/editUnit/:num(id)" => array(
        "handler" => "admin/unit/editUnit",
        "roles" => ["all"]
    ),
    "admin/units/delete/:num(id)" => array(
        "handler" => "admin/unit/deteleUnit",
        "roles" => ["all"]
    ),
    "admin/products" => array(
        "handler" => "admin/product/renderAllProducts",
        "roles" => ["all"]
    ),
    "admin/products/add" => array(
        "handler" => "admin/product/renderAddPage",
        "roles" => ["all"]
    ),
    "admin/products/addNew" => array(
        "handler" => "admin/product/addNewProduct",
        "roles" => ["all"]
    ),
    "admin/products/edit/:num(id)" => array(
        "handler" => "admin/product/renderAddPage",
        "roles" => ["all"]
    ),

);
