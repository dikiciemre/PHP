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

// vegetables tablosu oluşturuldu
$db->query("CREATE TABLE vegetables (
    ProductID INT PRIMARY KEY,
    ProductName VARCHAR(255),
    Origin VARCHAR(255),
    Price DECIMAL(10, 2)
    )");



$db->query("INSERT INTO Products (ProductID, ProductName, Origin, Price)
VALUES
    (1, 'patlıcan', 'TR', 10.99),
    (2, 'yeşil biber', 'ENG', 15.99),
    (3, 'kırmızı biber', 'FRNC', 12.49),
    (4, 'sarı biber', 'ALMN', 9.99),
    (5, 'fasulye', 'TR', 19.99),
    (6, 'kabak', 'FRNC', 14.99),
    (7, 'pırasa', 'ENG', 8.99)
    )");




?>