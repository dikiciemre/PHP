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

//! UPDATE METODU İLE İD 1 DEKİ  emre  İSİMi EMRE İLE DEĞİŞTİRİLDİ
$My_Update = $db->query("UPDATE TabloA SET isim = 'EMRE' WHERE id=1"); // sorgu bir değişkene atandı

// eğer update işlemi olumlu ise ekrana  Veri Güncellemesi Olumlu yazısı bastırıldı
if($My_Update){
    echo "Veri Güncellemesi Olumlu ";
}else{
    echo "Veri Güncellemesi Olumsuz";
}


?>