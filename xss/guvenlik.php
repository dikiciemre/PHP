<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- örnek bir form yapısı oluşturdum. -->
<form action="" method="post">
    <input type="text" name="username"><br>
    <button type="submit">GÖNDER</button>
</form>




<?php
// strip_tags() bu fonksiyon form kutusuna gönderilen kod etiketlerini temizler.
// htmlspecialchars() bu fonksiyon form kutusuna girilen kodları engeller, veri çalınmasının önüne geçer.
echo htmlspecialchars($_POST['username']) ?? 'YOOK !';
?>

</body>
</html>