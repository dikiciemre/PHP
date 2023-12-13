<?php

/*
r	Open a file for read only. File pointer starts at the beginning of the file
w	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x	Creates a new file for write only. Returns FALSE and an error if file already exists
r+	Open a file for read/write. File pointer starts at the beginning of the file
w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+	Creates a new file for read/write. Returns FALSE and an error if file already exists/
*/


/*
//? dosya oluşturma (TOUCH)
touch("tedt.txt"); // çalıştığında tedt.txt dosyası oluşturulur.
unlink("tedt.txt"); // dosyayı siler
*/


/**
// dosyayı w ile açarsan dosyayı içini silerek açar 
$file = fopen("test.txt","w"); 

// dosya içeriğini silmeden açar. sonuna veri ekler. veri eklenmesi gerektiğinde kullanılır
$file = fopen("test.txt","a"); 
*/


/*
//? FGETS ile dosyanın içindeki yazıları satır satır getirir.
$file = fopen('test.txt','r');
echo fgets($file);
echo fgets($file);
echo fgets($file);
*/



/*
//? aşağıdaki while döngüsü ile tüm satırları bastırdık.
$file = fopen('test.txt','r');
while ($line = fgets($file)) {
    echo $line.'<br>';
}
*/



/*
//? FREAD 150 bytle lık veri getirdi
$file = fopen('test.txt','r');
echo fread($file,150);
*/






/*
//? FWRİTE en alt satıra yeni veri eklendi
$file = fopen('test.txt','a');
fwrite($file,"deneme denedik denedik de noldu olmadı");
*/



/*
//? FEOF satırın sonuna geldiğinde true döner
$file = fopen('test.txt','r');

while ($line = fgets($file)) {
    print_r(feof($file));
    echo $line.'<br>';
}
*/




/*
//? php de dosya varlığını kontrol eder FİLE_EXİSTS
// aşağıdaki kod bool(true) döner

$control = file_exists("test.txt");
var_dump($control);
*/





?>