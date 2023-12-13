<?php

echo "<pre>";

//! date(); Yerel tarihi/saati biçimlendirir.
date_default_timezone_set('Europe/Istanbul');
echo date('Y.m.d H:i:s');
// ekran çıktısı: 2023.10.27 21:58:44



//! getdate(); Tarih/zaman bilgisi getirir.
print_r(getdate());
/* ekran çıktısı: 
Array
(
    [seconds] => 18
    [minutes] => 1
    [hours] => 22
    [mday] => 27
    [wday] => 5
    [mon] => 10
    [year] => 2023
    [yday] => 299
    [weekday] => Friday
    [month] => October
    [0] => 1698433278
)
*/

echo "<br>";

?>