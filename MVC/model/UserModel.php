<?php

class UserModel{
    public $db;

    // testdb isimli veritabanından veri çeker.
    // veritabanı bağlantısı yapıldı.
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=testdb;','root','root');
    }


    // userları alır ve değerleri döner
    public function ListUSers(){ 
        $q = $this->db->query('SELECT * FROM users');
        return $q->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>