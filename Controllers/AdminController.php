<?php
class AdminController {
    function login(){
        include_once "./Views/admin/admin_login.php";
    }

    function submitlogin(){
        include_once "./Models/User.php";
        $userModel = new User();
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $userModel->login($email, $password);
        if($user && $user['role'] === 'admin'){
            $_SESSION['user'] = $user;
            header("location: ?ctrl=admin&act=dashboard");
        } else {
            $_SESSION['info'] = "Tài khoản không hợp lệ hoặc không phải admin";
            header("location: ?ctrl=admin&act=login");
        }
    }

    function dashboard(){
        if(!$this->checkAdmin()) return;

        include_once "./Views/admin/dashboard.php";
    }

    function logout(){
        unset($_SESSION['user']);
        header("location: ?ctrl=admin&act=login");
    }

    private function checkAdmin(){
        if(!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin'){
            $_SESSION['info'] = "Bạn không có quyền truy cập!";
            header("location: ?ctrl=admin&act=login");
            return false;
        }
        return true;
    }
}
