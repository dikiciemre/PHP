<?php

// form yapısındaki veriler alındı.
// htmlspecialchars: form alanında html karakterleri kullanımını engelliyor
function filtre($p){
    return is_array($p) ? array_map("filtre", $p) : htmlspecialchars(trim($p));
}

$dizi = array_map("filtre", $_POST); // array map ile dizideki değerler dönüldü 

echo "<pre>";
print_r($dizi);
?>