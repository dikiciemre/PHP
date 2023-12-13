<?php


class aritmetik{

    public $NUMBER1;
    public $NUMBER2;
    public $TOPLAM;

    public function plus(int $NUMBER1, int $NUMBER2){
        echo $NUMBER1+$NUMBER2;
    }

    public function minus(int $NUMBER1, int $NUMBER2){
        echo $NUMBER1-$NUMBER2;
    }


}

$islem = new aritmetik();
$islem->plus(3,2)."<br>";
$islem->minus(3,2);

?>