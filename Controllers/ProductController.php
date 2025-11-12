<?php 
// quan ly cac trang lien quan sp
// vd danh sach sp, chi tiet sp ,tim kiem sp
class ProductController{
    function list() {
        include_once "./Views/product_list.php";
    }

    function detail($id) {
        include_once "./Models/Product.php";
        $productModel = new Product();
        $product = $productModel->getById($id);
        include_once "./Views/product_detail.php";
    }

    function search() {
        include_once "./Views/product_search.php";
    }
    
}