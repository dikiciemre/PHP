<?php

//? curl extension aktif olup olmadığını kontrol eder
/*
if(extension_loaded('curl')){
    echo 'CURL aktif durumda!';
}else{
    echo 'CURL yok!';
}
*/




//! CURL (Client URL)
// patika.dev anasayfasını getirir.

$curl = curl_init('https://www.patika.dev/');    

curl_exec($curl);

curl_close($curl);




?>