<?php


//TODO dizin demek klasör demek

/*
//? verilen değerde bir klasör olup olmadığını kontrol eder
var_dump(file_exists("deneme_klasoru"));
*/




/*
//! MKDİR
//? MKDİR emre isimli klasör oluşturur
mkdir("emre"); 
*/





/*
//? klasörün varlığını kontrol eder ve yok ise o klasörü oluşturur.
$dizinadi = "a/b/c";

if(file_exists($dizinadi)){
    echo "şu isimli".$dizinadi."dizin zaten var";
}elseif(mkdir($dizinadi,0777, true)){
    echo "şu isimli".$dizinadi."oluşturuldu";
}else {
    echo 'hata oluştu';
}
*/




/*
//! RMDİR
//? c dizini silindi 
$dizinadi = "a/b/c";

rmdir($dizinadi);
*/




/*
//! Bulunduğumuz dizindeki tüm dosya ve klasörleri listeler.
$files = scandir('.'); 

//! Bulunduğumuz dizindeki sadece dosyaları listeler.
$files = array_filter(scandir('.'), 'is_dir'); 

//! Bulunduğumuz dizindeki sadece dosyaları listeler.
$files = glob('*'); 

//! Bulunduğumuz dizindeki sadece .php uzantılı dosyaları listeler.
$files = glob('*.php'); 

//! Bulunduğumuz dizindeki sadece .php uzantılı dosyaları listeler.
$files = glob('*.{php,txt}', GLOB_BRACE);
*/
?>