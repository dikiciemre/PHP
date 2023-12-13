<?php



class user{

// kurucu metod (önce bu çalışır)     
public function __construct(){
    echo "kurucu metod çalıştı"."<br>";
}    


// yıkıcı metod (en son bu çalışır)    
public function __destruct(){
    echo "yıkıcı metod çalıştı"."<br>";
}

public function selam(){
    echo "selam ne haber?"."<br>";
}
}



$user = new user();
$user->selam();
?>