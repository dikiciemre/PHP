<?php

class user{

    public $isim;
    private $password;
    protected $soyisim;

    public function getIsım(){
        return $this->isim;
    }

    public function setIsım( $isim ){
        $this->isim = $isim;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword( $password ){
        $this->password = $password;
    }

    public function getSoyısım(){
        return $this->soyisim;
    }

    public function setSoyısım( $soyisim ){
        $this->soyisim = $soyisim;
    }
}

$user = new user();

// değer atamları yapıldı
$user->setIsım( "Emre" );
$user->setPassword("12345");
$user->setSoyısım( "Dikici") ;



// ekrana bastırıldı.
echo $user->getIsım()."<br>";
echo $user->getSoyısım()."<br>";
echo $user->getPassword()."<br>";
?>