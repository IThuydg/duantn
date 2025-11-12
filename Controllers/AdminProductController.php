<?php
class AdminProductController {
    function index(){
        include_once "./Models/Product.php";
        $productModel = new Product();
        $products = $productModel->getAll();
        include_once "./Views/admin/product_list.php";
    }

    function create(){
        include_once "./Views/admin/product_create.php";
    }

    function store(){
        include_once "./Models/Product.php";
        $productModel = new Product();

        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "./public/img/".$image);

        $productModel->insert($name, $price, $image, $description);
        header("location: ?ctrl=adminproduct&act=index");
    }

    function edit($id){
        include_once "./Models/Product.php";
        $productModel = new Product();
        $product = $productModel->getById($id);
        include_once "./Views/admin/product_edit.php";
    }

    function update($id){
        include_once "./Models/Product.php";
        $productModel = new Product();

        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];

        if($_FILES['image']['name'] != ""){
            $image = $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], "./public/img/".$image);
        } else {
            $old = $productModel->getById($id);
            $image = $old['image'];
        }

        $productModel->update($id, $name, $price, $image, $description);
        header("location: ?ctrl=adminproduct&act=index");
    }

    function delete($id){
        include_once "./Models/Product.php";
        $productModel = new Product();
        $productModel->delete($id);
        header("location: ?ctrl=adminproduct&act=index");
    }
}
