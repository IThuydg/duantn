<?php
include_once "./Models/Database.php";
class Product {
    private $db;
    function __construct(){
        $this->db = new Database();
    }

    function getNew(){
        return $this->db->query("SELECT * FROM products ORDER BY id DESC LIMIT 5");
    }
    function getById($id){
        return $this->db->queryOne("SELECT * FROM products WHERE id = ?", $id);
    }
    function getAll(){
        return $this->db->query("SELECT * FROM products ORDER BY id DESC");
    }
    function insert($name, $price, $image, $description){
        return $this->db->insert("INSERT INTO products(name, price, image, description) VALUES(?,?,?,?)",
            $name, $price, $image, $description);
    }
    function update($id, $name, $price, $image, $description){
        return $this->db->insert("UPDATE products SET name=?, price=?, image=?, description=? WHERE id=?",
            $name, $price, $image, $description, $id);
    }
    function delete($id){
        return $this->db->insert("DELETE FROM products WHERE id=?", $id);
    }
}
