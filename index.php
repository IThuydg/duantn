<?php
// điều hướng các controller
session_start();

include_once "./Views/layout_header.php";
if (isset($_GET['ctrl']) && isset($_GET['act'])) {
    // neu co yeu cau dieu huong -> chuyen den controller theo yeu cau
    include_once "./Controllers/". ucfirst($_GET['ctrl'])."Controller.php";
    $ctrl = new (ucfirst($_GET['ctrl'])."Controller")();
    $act = $_GET['act'];
    $args = array_splice($_GET, 2, count($_GET) -2);
    $ctrl->$act(...$args);
}else{
    include_once "./Controllers/PageController.php";
    $ctrl = new PageController();
    $ctrl->home();
}
include_once "./Views/layout_footer.php";