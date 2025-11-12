<?php 
// dùng để quản lý các trang không liên quan 
// cd : trang chủ, trang liên hệ, trang giới thiệu
class PageController{
    function home() {
        // xu ly du lieu
        // goi den models de xu ly
        include_once "./Models/Product.php";
        $productModel = new Product();
        $productList = $productModel->getNew();
        // hien thi du lieu
        include_once "./Views/page_home.php";
    }
    function contact() {
        include_once "./Views/page_contact.php";
    }

    function about() {}

}       