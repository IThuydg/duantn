<?php
session_start();

// Header riêng cho admin
include_once "./Views/admin/layout_header.php";

if (isset($_GET['ctrl']) && isset($_GET['act'])) {
    $controllerName = ucfirst($_GET['ctrl']) . "Controller";
    include_once "./Controllers/{$controllerName}.php";

    // Check quyền admin
    if (stripos($_GET['ctrl'], 'admin') === 0 && $_GET['act'] != 'login' && $_GET['act'] != 'submitlogin') {
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
            $_SESSION['info'] = "Bạn không có quyền truy cập!";
            header("location: admin_index.php?ctrl=admin&act=login");
            exit;
        }
    }

    $ctrl = new $controllerName();
    $act = $_GET['act'];

    $params = $_GET;
    unset($params['ctrl'], $params['act']);

    if (!empty($params)) {
        $ctrl->$act(...array_values($params));
    } else {
        $ctrl->$act();
    }
} else {
    header("location: admin_index.php?ctrl=admin&act=dashboard");
}

include_once "./Views/admin/layout_footer.php";
