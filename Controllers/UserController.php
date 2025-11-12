<?php 
// quan ly ng dung
class UserController{
    function register(){
        include_once "./Views/user_register.php";
    }
    function submitregister(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $rePassword = $_POST['rePassword'];
        if($password != $rePassword){
            $_SESSION['info'] = " mat khau chua dung";
            header("location: ?ctrl=user&act=register");
        } 
        // kiem tra email trung
        include_once "./Models/user.php";
        $userModel = new User ();
        $user = $userModel->checkEmail($email);
        
        if($user){
            $_SESSION['info'] = " Email da ton tai";
            header("location: ?ctrl=user&act=register");
            return;
        }
        // dang ky tai khoan
        if($userModel->register($name, $email, $password)){
            $_SESSION['info'] = " dang ky thanh cong";
            header("location: ?ctrl=user&act=login");
            return;
        } else {
            $_SESSION['info'] = " co loi dang ky vui long thu lai";
            header("location: ?ctrl=user&act=register");
            return;
        }
    }
    function login(){
        include_once "./Views/user_login.php";
    }
    function submitlogin(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        include_once "./Models/User.php";
        $userModel = new User();
        $user = $userModel->login($email, $password);
        if($user){
            $_SESSION['user'] = $user;
            $_SESSION['info'] = "dang nhap thanh cong";
            header("location: ?ctrl=page&act=home");
        }else{
            $_SESSION['info'] = "Sai email hoặc mật khẩu";
            header("location: ?ctrl=user&act=login");
        }
    }
    function logout(){
        unset($_SESSION['user']);
        header("location: ?ctrl=user&act=login");
        return;
    }
    function forgotPassword(){
        include_once "./Views/user_forgot_password.php";
    }
    function resetPassword(){
        include_once "./Views/user_resset_password.php";
    }
}