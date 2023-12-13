<?php

//! VERİTABANI BAĞLANTISI 
try {
    $db = new PDO("mysql:host=localhost;","root","root");
    $db->query("USE test");
    $db->setAttribute(3,2);
    $db->query("SET @@lc_time_names = 'tr_TR'; "); // türkçe karakter desteği sağlar
    $db->query("SEET CHARACTER SET utf8mb4 ");
    $db->query("SEET CHARACTER_SET_CONNECTION=utf8mb4 "); // bağlantımızın karakter setini ayarlar

                            /* veritabanında örnek bir tablo oluşturur (deneme kodu)
                            $db->query("CREATE TABLE Btablosu(
                                    id INT(11),
                                    isim VARCHAR(100)
                                )");
                                */
} catch (PDOException $e) {
    echo  $e->getMessage();

}


echo"<pre>";

$MyChoice = $db->query("SELECT * FROM TabloA"); // sorgu bir değişkene atandı
$my_friends = $MyChoice->fetchAll(2); // sorgunun atandığı değişken fetchall ile getirildi ve değişkene atandı
// fetchal ın içine verdiğim 2 değeri ekrandan bastırılan isimlerin veritabanında hangi değişken adı ile tutuldu ise o şekilde gelmesini sağlar

print_r($my_friends); // DB den getirilen elemanlar ekrana yazdırıldı.
?>