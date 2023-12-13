<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<!--  örnek bir form yapısı oluşturuldu -->
<form action="post.php" method="post">

<input type="text" name="isim" placeholder="isim"><br>
<input type="text" name="soyisim" placeholder="soyisim"><br>
<button type="submit">gönder</button>

<label >Diller</label> <br>

<label >PHP</label> <br>
<input type="checkbox" value="PHP" name="dil[]"><br>

<label >JS</label>
<input type="checkbox" value="JS" name="dil[]"><br>

<label >ANGULAR</label>
<input type="checkbox" value="ANGULAR" name="dil[]"><br>
</form>


</body>
</html>