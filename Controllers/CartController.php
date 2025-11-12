<?php
// xu ly gio hang, thanh toan
class CartController{
    function list(){
         if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = [];
    }
    $cart = $_SESSION['cart'];
    include_once "./Models/Product.php";
    $productModel = new Product();
    $totalMoney = 0;
    foreach  ($cart as &$item){
       $info = $productModel->getById($item['id']);
       $item['name'] = $info['name'];
       $item['price'] = $info['price'];
       $item['sale_price'] = $info ['sale_price'];
       $item['total'] = $item['quantity'] * (isset($item['sale_price']) ? $item['sale_price'] : $item['price']);
       $totalMoney += $item['total'];
    }
    $_SESSION['total_money'] = $totalMoney;
        include_once "./Views/cart_list.php";
    }
    function checkout(){
        include_once "./Views/cart_checkout.php";
    }
    function add($id){
    //  kiem tra co gio hang ch -> ch co -> tao gio hang
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = [];
    }
    // da co gia hang -> them vao gio hang
    // TH1 : sp da co trong gio hang -> tang so luong san pham
    $inCart = false;
    foreach ($_SESSION['cart'] as &$item){
        if($item['id']==$id){
            $item['quantity']++;
    $inCart = true;
            break;
        }
    }
    // TH2 : sp chua co trong gio hang -> them vao gio hang = 1
    if(!$inCart){
        array_push($_SESSION['cart'], ['id'=>$id,'quantity'=>1]);
    }
    $_SESSION['info'] = "da them vao gio hang";
    header("location: ?ctrl=product&act=detail&id=$id");
}
function decrease($id){ // giam so luong
    foreach($_SESSION['cart'] as &$item){
        if($item['id']==$id){
            $item['quantity']--;
            $item['quantity'] = max(1, $item['quantity']);
            break;
        }
    }
    header('location: ?ctrl=cart&act=list');
}
function increase($id){ // tang so luong
    foreach($_SESSION['cart'] as &$item){
        if($item['id']==$id){
            $item['quantity']++;
            break;
        }
    }
        header('location: ?ctrl=cart&act=list');

}
function remove($id){
    foreach($_SESSION['cart'] as $index => &$item){
        if($item['id']==$id){
            array_splice($_SESSION['cart'], $index, 1);
            break;
        }
    }
        header('location: ?ctrl=cart&act=list');

}
}