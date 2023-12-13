<?php

//! VERİTABANI BAĞLANTISI 
try {
    $db = new PDO("mysql:host=localhost;","root","root");
    $db->query("USE test"); // test database kullan anlamına geliyor.
    $db->setAttribute(3,2); // Hataları düzgün şekilde yönetebilmeyi sağlar 
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
    echo  $e->getMessage(); // hata yakalanırsa mesajını bastırır.

}


echo"<pre>";

//! İNSERT METODU İLE YENİ BİR VERİ EKLENDİ.
$My_insert = $db->query("
    INSERT INTO TabloA SET
                        id = '10',
                        isim = 'Zeynep',
                        soyisim = 'Demirel',
                        yas = '32'"); // sorgu bir değişkene atandı




if($My_insert){
    echo "Veri Güncellemesi Olumlu ";
}else{
    echo "Veri Güncellemesi Olumsuz";
}


?>