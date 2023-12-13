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


//! ınner joın örneği

$sql = "SELECT page_category, ptc.page_title FROM page  INNER JOIN page_to_content ptc on page.page_id = ptc.page_id
        WHERE page_type = 'service'";


$query = $db->query($sql);

if ( $query->rowCount() ){
    print_r($query->fetchAll(PDO::FETCH_ASSOC));
}



?>