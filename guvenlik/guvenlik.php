<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style.css">
    <title>Document</title>
</head>
<body>

<h1> <s>GÜVENLİK</s></h1>

<?php
require 'config/config.php'; //db bağlantısı yapılan php sayfasını dahil eder



//db de hazır halde olan test dbsinin içindeki fruits tablosundaki verileri getirir.
$q = $db->query('SELECT * FROM fruits');

$fruits = $q->fetchAll(2);
echo "<pre>";
print_r($fruits);
?>

    
</body>
</html>





