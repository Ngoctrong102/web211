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
        "handler" => "cart/renderShoppingCart",
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
    "addcolorajax" => array(
        "handler" => "color/ColorAddedAjax",
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
    "shop/detail" => array(
        "handler" => "customer/product/renderDetailPage",
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
    "news" => array(
        "handler" => "customer/news/renderAllNews",
        "roles" => ["all"]
    ),
    "news/:num(id)" => array(
        "handler" => "customer/news/renderNewsDetails",
        "roles" => ["all"]
    ),
    "news/comment" => array(
        "handler" => "customer/news/addComment",
        "roles" => ["all"]
    ),
    "user/uploadAvatar" => array(
        "handler" => "customer/account/uploadAvatar",
        "roles" => ["all"]
    ),
    "user/updateEmail" => array(
        "handler" => "customer/account/updateEmail",
        "roles" => ["all"]
    ),
    "user/updatePhone" => array(
        "handler" => "customer/account/updatePhone",
        "roles" => ["all"]
    ),
    "news/loadComments" => array(
        "handler" => "customer/news/loadComments",
        "roles" => ["all"]
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
        "handler" => "admin/product/renderEditPage",
        "roles" => ["all"]
    ),
    "admin/products/editProduct/:num(id)" => array(
        "handler" => "admin/product/editProduct",
        "roles" => ["all"]
    ),
    "admin/products/delete/:num(id)" => array(
        "handler" => "admin/product/deleteProduct",
        "roles" => ["all"]
    ),
    "admin/file-manager" => array(
        "handler" => "admin/fileManager/renderFileManager",
        "roles" => ["all"]
    ),
    "admin/news" => array(
        "handler" => "admin/news/renderAllNews",
        "roles" => ["all"]
    ),
    "admin/news/add" => array(
        "handler" => "admin/news/renderAddPage",
        "roles" => ["all"]
    ),
    "admin/news/addNew" => array(
        "handler" => "admin/news/addNews",
        "roles" => ["all"]
    ),
    "admin/news/edit/:num(id)" => array(
        "handler" => "admin/news/renderEditPage",
        "roles" => ["all"]
    ),
    "admin/news/editNews/:num(id)" => array(
        "handler" => "admin/news/editNews",
        "roles" => ["all"]
    ),
    "admin/news/delete/:num(id)" => array(
        "handler" => "admin/news/deleteNews",
        "roles" => ["all"]
    )

);
