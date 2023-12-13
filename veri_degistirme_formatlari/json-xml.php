<?php



//! json objesine dönüştürür.
/*
$json_format = ['isim' => 'Emre',
'soyisim' => 'Dikici'
];

echo json_encode($json_format);
*/



//!json objesini array e dönüştürür.
/*
$obj_format = '{
    "isim" => "Emre",
"soyisim" => "Dikici"
}';

$array_format = json_decode($obj_format,true);
echo $array_format['isim'];
print_r($array_format);
*/



/*
$json_file = file_get_contents('kisi.json');
//echo $json_file // obje formatında ekrana bastırdı.


$array_format = json_decode($json_file, true); // array formatına çevirdi
echo "<pre>";
print_r($array_format); // array fprmatında olan dosyayı ekrana bastırdı.
*/




// ******************************************************************




// dosya okuma işlemi yapıldığında dosyanın tarayıcıya xml formatında olduğunu söyleyen kod
//header("Content-type: application/xml; charset='utf8'");


$kisi = simplexml_load_file('kisi.xml'); //  xml dosyasını okur

echo "<pre>";
print_r($kisi); // xml dosyası nın içeriğini bastırır.



?>



