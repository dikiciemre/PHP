<?php


class ozellik{

    public $NAME;
    public $AYAKSAYISI;


    public function showInfo(){
        echo 'Hayvanın adı:' . $this->NAME ."<br>" .'Ayak Sayısı' . $this->AYAKSAYISI;
    }
}


class kedi extends ozellik{

    public $tuyrengi="beyaz";
}

$Mişa = new kedi();
$Mişa->NAME = "Misa";
$Mişa->AYAKSAYISI = "4";
$Mişa->showInfo();
?>