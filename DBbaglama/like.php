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

//! İNSERT METODU İLE YENİ BİR VERİ EKLENDİ.

$sql_code = "SELECT * FROM TabloA WHERE isim LIKE 'a%' "; // ismi a ile başlayanları getirdim

$My_Code = $db->query($sql_code); // sql sorgusunu query içine verdim

$My_Code = $My_Code->fetchAll(PDO::FETCH_ASSOC); // birden fazla veri çekeceğim için fetchall kullandım

print_r($My_Code); // çıktıyı php ekranında da göstermek için yazdım

if (count($My_Code) > 0) {
    echo "Sorgu Çalıştı";
}else{
    echo "Sorgu Hatalı !";
}
?>