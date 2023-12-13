<?php


class user{


    public $NAME = "Emre Dikici";
    const AGE = 20; // sabit tanımlandı.

    public function write_name(){
        return $this->NAME;
    }
}

$user1 = new user();// user1 adında nesne oluşturuldu.
echo $user1->write_name();
echo user::AGE; // sabit değer bu şekilde bastırılır

?>