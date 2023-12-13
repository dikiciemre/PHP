<?php

// session_start(); ile oturum başlatılır.
session_start();
$_SESSION ["name"] = "Emre";
// bu şekilde bir session tanımlandığında başka bir php sayfasında bu 
// name değerini kullanmak istersek o sayfada da session_start(); dememiz gerekir.



?>