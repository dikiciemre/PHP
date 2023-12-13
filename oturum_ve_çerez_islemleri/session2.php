<?php

//TODO bu php sayfasını çalıştırdığımda emre çıktısı verir.

// session_start(); ile oturum başlatılır.
session_start();

//!session_destroy(); // eğer bu kod yazılı iken çalıştırırsak çıktı vermez session kapatılmış olur

//echo $_SESSION["name"] // session.php den çağırdık ve  ekrana bastırdık


//isset() bir PHP işlevi (function) ve bir değişkenin tanımlı (defined) olup olmadığını kontrol etmek için kullanılır.
if (isset($_SESSION["name"])){
    echo 'merhaba' . $_SESSION["name"] . 'hoş geldin';
}else{
    echo 'git burdan oturum aç da gel!';
}

?>