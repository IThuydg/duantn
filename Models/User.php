<?php
include_once "./Models/Database.php";
class User
{
    private $db;
    function __construct()
    {
        $this->db = new Database();
    }
    function login($email, $password)
    {
        $user =  $this->db->queryOne(
            "SELECT * FROM users WHERE email = ? AND password = ? ",
            $email,
            MD5($password)
        );
        return isset($user) ? $user : false;
    }
    function checkEmail($email)
    {
        $user = $this->db->queryOne("SELECT * FROM users WHERE email=?", $email);
        return $user;
    }

    function register($name, $email, $password)
    {
        return  $this->db->insert("INSERT INTO users(`name`, `email`, `password`) VALUES(?,?,?)", $name, $email, MD5($password));
    }
    
}
