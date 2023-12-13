<?php echo "emre";
// php yırum satırı
/* php yorum satırı 2*/
echo '<br>';

?> 

*********************************************************************************************


<h1> <?php echo "Emre" ?> </h1>
<h3> <?= "Emre" //echo yazmadan da kullanımı ?>  </h3> 
<h4> <?= "h4 boyutunda yazı yazdım" ?></h4>



*********************************************************************************************


<?php /* DEĞİŞKEN TANIMLAMASI YAPMA*/
echo '<br>';
$name = "Emre Dikici"; // değişken tanımlamasu $ ile yapılır.
echo $name; // ekrana echo ile bastırdık.
echo '<br>';

?> 


*********************************************************************************************


<?php
$txt = "PHP";
echo "I love $txt!"; // ekran çıktısı: I love PHP!
?>


*********************************************************************************************

//! STATİC KULLANIMI
<?php
function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
// 0
// 1
// 2

?> 



*********************************************************************************************


<?php //! VAR_DUMP İLE DEĞERİN ÖZELLİKLERİNE ERİŞİRİZ 

$DENEME = false;
var_dump($DENEME); // bool(false) değeri döner 
echo '<br>';

?>




<?php  
$x = 5985;
var_dump($x);
// int(5985)
?>  



<?php  
$x = 10.365;
var_dump($x);
// float(10.365)
?> 



 *********************************************************************************************



<?php //! SABİT TANIMLAMASI YAPMA (TEK TIRNAK İLE YAPILIR)


// String değerler
define('NAME','Emre');
define('NAME2','Fatma');
echo NAME ;
echo NAME2;

echo "<br>";

// Integer değerler
define('NUMBER',3);
define('NUMBER1',2);
echo NUMBER ;
echo NUMBER1;

echo "<br>";

// Float değerler
$FLOAT = 3.8;
echo $FLOAT;

echo "<br>";

// Bollean değerler
$BOOL = true;
echo $BOOL;
echo '<br>';

?> 



*********************************************************************************************


<?php //! STRLEN KULLANIMI

echo strlen("Hello world!");
// 12
?> 



*********************************************************************************************


<?php //! str_word_count

echo str_word_count("Hello world!");
// 2
?> 
 
 
*********************************************************************************************


<?php /* Aritmetik Operatörler TANIMLAMASI YAPMA
            Aritmetik Operatörler
            Operatörler
            Toplama (+)
            Çıkartma (–)
            Çarpma (*)
            Bölme (/)
            Mod (%)
*/


// işlemlerin sonuçlarını ekrana bastormak istersek echo $total ve ya echo $result yapabiliriz.
$num1 = 4; // "num1" değişkenine 4 sayısını atar
$num2 = 3; // "num2" değişkenine 3 sayısını atar
$total = $num1 + $num2; // Sonuç 7 olur
$toplam = $num1 + 2; // Sonuç 6 olur

echo "<br>";


$num11 = 8; // "num1" değişkenine 8 değerini atar
$num21 = 2; // "num2" değişkenine 2 değerini atar
$result = $num11 - $num21; // Sonuç 6 Olur
$result = $num11 - 1; // Sonuç 7 olur.

echo "<br>";


$num12 = 2; // "num1" değişkenine 2 değerini atar
$num22 = 8; // "num2" değişkenine 82 değerini atar
$result = $num12 * $num22; // Sonuç 16 Olur
$result = $num12 * 2; // Sonuç 4 olur.

echo "<br>";


$num13 = 6; // "num1" değişkenine 6 değerini atar
$num23 = 3; // "num2" değişkenine 2 değerini atar
$result = $num13 / $num23; // Sonuç 2 olur
$result = $num13 / 2; // Sonuç 3 olur.

echo "<br>";


$num14 = 5; // "num1" değişkenine 5 değerini atar
$num24 = 3; // "num2" değişkenine 2 değerini atar
$result = $num14 % $num24; // Sonuç 2 olur
$result = $num14 % 4; // Sonuç 1 olur.
?> 


*********************************************************************************************


<?php /* karşılaştırma Operatörler TANIMLAMASI YAPMA*/


$a = 3; $b = 4;

echo $a == $b; // Sonuç: false // a b ye eşit midir ?
echo $a === $b; // Sonuç: false //a b ile aynı mıdır ? [ == ile === farkları: 2 ile '2 aynı değildir ancak eşittir']
echo $a != $b; // Sonuç: true //
echo $a !== $b; // Sonuç: true //
echo $a < $b; // Sonuç: true // a küçük müdür b den
echo $a > $b; // Sonuç: false // a büyük müdür b den
echo $a <= $b; // Sonuç: true // a küçük eşit midir b den
echo $a >= $b; // Sonuç: false // a büyük eşit midir b den
echo $a <=> $b; // Sonuç: -1 //

echo "<br>";

?> 



*********************************************************************************************


<?php /*Artırma ve Azaltma Operatörleri
        Artırma ve azaltma operatörleri temel anlamda sayı değerlerini artırma ve azaltmak amacı ile kullanılır.

        Operatörler
        Artırma Operatörü (++)
        Azaltma Operatörü (--) */

   


/*Önceden Artırım
Artırma operatörü değişkenin başında kullanıldığında önce değişkenin değeri artırılır. */
$a = 5;
echo ++$a; // Ekrana 6 sonucunu yazar.
echo $a; // Ekrana 6 sonucunu yazar.

echo "<br>";


/*Sonradan Artırım
Artırma operatörü değişkenin sonunda kullanıldığında değişkenin değeri sonradan artar. */
$a = 5;
echo $a++; // Ekrana 5 sonucunu yazar.
echo $a; // Ekrana 6 sonucunu yazar.


echo "<br>";


/*Önceden Azaltma
Azaltma operatörü değişkenin başında kullanıldığında önce değişkenin değeri azaltılır. */
$a = 5;
echo --$a; // Ekrana 4 sonucunu yazar.
echo $a; // Ekrana 4 sonucunu yazar.


echo "<br>";


/* Sonradan Azaltma
Azaltma operatörü değişkenin sonunda kullanıldığında değişkenin değeri sonradan azalır. */
$a = 5;
echo $a--; // Ekrana 5 sonucunu yazar.
echo $a; // Ekrana 4 sonucunu yazar.
echo "<br>";

?>     


*********************************************************************************************


<?php /* Birleştirme Operatörü
Birleştirme operatörü nokta(.) ile gösterilir. İki ifadenin arasında yer alarak sağındaki ifade ile solundaki ifadeleri birbirine birleştirir. */

$isim = 'Emre'; // = atama operatörü ile atama yapıldı.
$soyisim = 'Dikici';
$yas = 20;
echo 'Merhaba, benim ismim '. $isim.' soyismim '.$soyisim.'. Şuan '.$yaş.' yaşımdayım.'; // Ekrana "Merhaba, benim ismim Emre soyismim Dİkici. Şuan 20 yaşımdayım." sonucunu yazar.
echo "<br>";
?>


*********************************************************************************************


<?php // Mantıksal Operatörler && ve ya operatörü    || ve operatörü
$a = 3;
$b = 2;

echo ($a > $b) && ($a != $b); // Hem $a > $b hem de $a != $b durumları true sonucu verdiğinden; sonuç true olacaktır.
echo ($a > $b) || ($a == $b); // Hem $a > $b true $a == $b false sonucu verdiğinden; Veya(||) koşulunda sonuç true olacaktır.
echo "<br>";

?>


*********************************************************************************************

<?php /* IF-ELSE-ELSEIF Kullanımı */

$sayi = 10; // Örnek bir sayı

if ($sayi > 10) {
    echo "Sayı 10'dan büyük.";
} elseif ($sayi == 10) {
    echo "Sayı 10'a eşit.";
} else {
    echo "Sayı 10'dan küçük.";
}
echo "<br>";
?>






<?php
$t = date("H");
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
 



*********************************************************************************************


<?php /* Switch-case Kullanımı */

$gun = "Salı"; // Örnek bir gün

switch ($gun) {
    case "Pazartesi":
        echo "Bugün Pazartesi, haftaya başladık!";
        break;
    case "Salı":
        echo "Bugün Salı, güzel bir gün!";
        break;
    case "Çarşamba":
        echo "Bugün Çarşamba, ortası geldi!";
        break;
    case "Perşembe":
        echo "Bugün Perşembe, hafta sonuna yaklaşıyoruz.";
        break;
    case "Cuma":
        echo "Bugün Cuma, hafta sonu geldi!";
        break;
    default:
        echo "Bilinmeyen gün!";
        break;
}

echo "<br>";
?>


*********************************************************************************************


<?php /* array kullanımı */

$a = ['elma','armut']; // dizi tanımlandı



// Dizileri print_r(dizi) veya var_dump(dizi) şeklinde ekrana yazdırabiliriz.
echo '<pre>'; // dizilerin ekran çıktısında daha düzenli olmasını sağlar.
// dizilerin anahtarları belirtilmediğinde 0'dan başlayarak sırasıyla anahtar değerleri otomatik atanır.
$a = ['elma','armut']; 
print_r($a); //İfadenin çıktısı: Array ( [0] => elma [1] => armut )


echo "<br>";


$b = ['A'=>'elma','B'=>'armut'];
print_r($b); //İfadenin çıktısı : Array ( [A] => elma [B] => armut )


echo "<br>";


$kisi = [
    'isim' => 'Emre',
    'soyisim' => 'Dikici',
    'dogumtarihi' => '13.07.2003'
];

print_r($kisi);
/* İfadenin çıktısı
Array(
    [isim] => Emre
    [soyisim] => Dikici
    [dogumtarihi] => 13.07.2003
)
*/
echo "Merhaba benim adım " . $kisi['isim'] . " " . $kisi['soyisim'] . "  Doğum tarihim " . $kisi['dogumtarihi']; //İfadenin çıktısı: Merhaba benim adım Emre DİKİCİ  Doğum tarihim 13.07.2003


echo "<br>";


$hayvanlar = array('kedi', 'köpek', 'tavşan');

echo $hayvanlar[0]; // "kedi" Çıktısını verir.
echo $hayvanlar[1]; // "köpek" Çıktısını verir.
echo $hayvanlar[2]; // "tavşan" Çıktısını verir.
echo "<br>";

?>







<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();

// My car is a black Volvo!
// My car is a red Toyota!

?>


*********************************************************************************************


<?php /* Çok Boyutlu Diziler */

$hayvan_gruplari = [
    'surungen_hayvanlar' => ['Yılan','Kertenkele'],
    'ucabilen_hayvanlar' => ['Kartal','Güvercin','Şahin']
];
print_r($hayvan_gruplari);
/* Ekrana Çıktısı
(
    [surungen_hayvanlar] => Array
        (
            [0] => Yılan
            [1] => Kertenkele
        )

    [ucabilen_hayvanlar] => Array
        (
            [0] => Kartal
            [1] => Güvercin
            [2] => Şahin
        )

)
*/


echo "<br>";


$hayvan_gruplari = [
    'surungen_hayvanlar' => [
        'Yılan',
        'Kertenkele' => [
            'keler', 'bukalemun', 'geko', 'agama'
        ]
    ],
    'ucabilen_hayvanlar' => ['Kartal','Güvercin','Şahin']
];

print_r($hayvan_gruplari);
/*Ekrana Çıktısı
Array
(
    [surungen_hayvanlar] => Array
        (
            [0] => Yılan
            [Kertenkele] => Array
                (
                    [0] => keler
                    [1] => bukalemun
                    [2] => geko
                    [3] => agama
                )

        )

    [ucabilen_hayvanlar] => Array
        (
            [0] => Kartal
            [1] => Güvercin
            [2] => Şahin
        )

)
*/


echo '<br>';

// dizide istediğimiz elemanı çağırma.
$hayvan_gruplari = [
    'surungen_hayvanlar' => [
        'Yılan',
        'Kertenkele' => [
            'keler', 'bukalemun', 'geko', 'agama'
        ]
    ],
    'ucabilen_hayvanlar' => ['Kartal','Güvercin','Şahin']
];

echo $hayvan_gruplari['surungen_hayvanlar']['Kertenkele'][1]; // ekrana bukalemun yazar
echo '<br>';



?>


*********************************************************************************************


<?php /* for döngüsü */

for ($i = 1; $i <= 10; $i++) {echo $i;}
echo '<br>';
?>



*********************************************************************************************


<?php /* foreach döngüsü */

// dizide olan her değeri yazar.
$isimler = ["Emre","Buse","Ece","Mustafa","Buse"];  
foreach($isimler as $value) {
    echo $value ."<br>";
}
echo '<br>';


foreach ($isimler as $anahtar => $deger){
    echo $anahtar.' -> '. $deger .'<br>';
}
/*Ekran çıktısı
0 -> Emre
1 -> Buse
2 -> Ece
3 -> Mustafa
4 -> Buse
*/
echo '<br>';

?>


*********************************************************************************************


<?php /* fonksiyon tanımlama */

function selamla() {
    return "Selam, nasılsın?";
 }
 
 $donen_deger = selamla(); 
 
 echo $donen_deger; // Ekran Çıktısı: Selam, nasılsın?
 echo '<br>';





/*Parametrelere varsayılan değer atama
Parametrelere varsayılan değerler atayarak değer girilmediği durumları ele alabiliriz.*/
function topla($sayi1, $sayi2 = 30) {
   return  $sayi1 + $sayi2;
}
echo topla(10, 20).'<br>';
echo topla(10);
/* Ekran Çıktısı
30
40
*/
echo '<br>';

?>


*********************************************************************************************


<?php /* anonim fonksiyonlar */

$islem['topla'] = function ($num1, $num2) {
    echo $num1 + $num2.'<br>';
};
$islem['cikar'] = function ($num1, $num2) {
    echo $num1 - $num2.'<br>';
};
$islem['bol'] = function ($num1, $num2) {
    echo $num1 / $num2.'<br>';
};
$islem['carp'] = function ($num1, $num2) {
    echo $num1 * $num2.'<br>';
};

$islem['topla'](10,5);
$islem['cikar'](10,5);
$islem['bol'](10,5);
$islem['carp'](10,5);

echo '<br>';



// başka bir kullanım tasarımı
function hesapla($n1, $n2, $islem){
    $islem['topla']($n1,$n2);
    $islem['cikar']($n1,$n2);
    $islem['bol']($n1,$n2);
    $islem['carp']($n1,$n2);
}

hesapla(10,5, $islem);


echo '<br>';


// bir başka örnek
$number = [[1,2],[2,3],[3,4],[4,5]];

array_map(function ($e){
    global $islem;
    echo $e[0].'+'.$e[1].' =';
    $islem['topla']($e[0],$e[1]);
    echo '<br>';
}, $number);
echo '<br>';
?>



<?php
function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
// Jani Refsnes.
// Hege Refsnes.
// Stale Refsnes.
// Kai Jim Refsnes.
// Borge Refsnes.

?>

*********************************************************************************************



<?php // recursive fonksiyon

$categories = [
    [
        'id' => 1,
        'parent' => 0,
        'name' => 'Back-end Teknolojileri'
    ],
    [
        'id' => 2,
        'parent' => 0,
        'name' => 'Front-End Teknolojileri'
    ],
    [
        'id' => 3,
        'parent' => 0,
        'name' => 'Mobil Uygulama'
    ],
    [
        'id' => 4,
        'parent' => 1,
        'name' => 'PHP'
    ],
    [
        'id' => 5,
        'parent' => 1,
        'name' => 'NodeJS'
    ],
    [
        'id' => 6,
        'parent' => 4,
        'name' => 'Laravel'
    ],
    [
        'id' => 7,
        'parent' => 4,
        'name' => 'Codeigniter'
    ],
    [
        'id' => 8,
        'parent' => 2,
        'name' => 'Javascript'
    ],
    [
        'id' => 9,
        'parent' => 8,
        'name' => 'VueJS'
    ],
    [
        'id' => 10,
        'parent' => 8,
        'name' => 'AngularJS'
    ]
];

// fonksiyon yardımı ile ekrana bastırdık.
function categoryList(array $categories, int $parent = 0) : string {
    $html = '<ul>';
    foreach ($categories as $category)
        if ($category['parent'] == $parent):
            $html .= '<li>' . $category['name'];
            $html .= categoryList($categories, $category['id']);
            $html .= '</li>';
        endif;
    $html .= '</ul>';
    return $html;
}

echo categoryList($categories);
echo '<br>';
?>


*********************************************************************************************


<?php // static kullanımı

// static olmadan
function counter(){
    $count = 1;
    echo $count;
    $count++;
}
counter();
counter();
counter();
counter();
//Sonuç: 1111
echo '<br>';




// static kullanımı ile
function counter1(){
    static $count = 1;
    echo $count;
    $count++;
}
counter1();
counter1();
counter1();
counter1();
//Sonuç: 1234
echo '<br>';

?>


*********************************************************************************************



<?php /* Dizi Fonksiyonları 
            print_r();
            Bir değişkenin veya dizinin gösterimini ekrana basar.

            var_dump();
            Bu işlev bir değişkenin türü ve değeri dahil değişkenle ilgili bilgileri gösterir. Diziler ve nesneler ardışık olarak bileşenlerine ayrılarak tüm yapısı değerleriyle birlikte gösterilir.
            
            explode();
            Bir dizgeyi bir ayraca göre bölüp bir dizi haline getirir
            
            implode();
            Dizi elemanlarını birleştirip bir dizge elde eder.
            
            count();
            Bir dizideki eleman sayısını veya bir nesnedeki şeylerin sayısını döndürür.
            
            is_array();
            Değişkenin bir dizi içerip içermediğine bakar
            */



//! implode kullanımı
$dizi = [1,3,5,7,9];
$yenidizi = implode(' <-> ',$dizi); 
echo $yenidizi;
echo '<br>';
echo "<br>";
echo '***';
echo "<br>";
// ekran çıktısı: 1 <-> 3 <-> 5 <-> 7 <-> 9

 

//! explode kullanımı
$yenidizi1 = explode(' <-> ',$yenidizi);
print_r( $yenidizi1);
echo '<br>';
echo "<br>";
echo '***';
echo "<br>";
/*
 Array
(
    [0] => 1
    [1] => 3
    [2] => 5
    [3] => 7
    [4] => 9
)
 */



//!shuffle(); Bir diziyi karıştırır.
$sayılar = range(1, 20);
shuffle($sayılar);
foreach ($sayılar as $sayı) {
    echo "$sayı ";
}
echo '<br>';
echo "<br>";
echo '***';
echo "<br>";
// ekran çıktısı: 17 6 8 14 19 7 13 20 11 15 10 9 12 2 1 16 5 3 18 4 



//!array_combine(); Anahtarlar için bir dizi, değerler için ise başka bir dizi kullanarak bir ilişkisel dizi oluşturur.
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
print_r($c);
echo '<br>';
echo "<br>";
echo '***';
echo "<br>";
/*Array
(
    [green] => avocado
    [red] => apple
    [yellow] => banana
)
*/



//!array_count_values(); Bir dizideki tüm değerleri sayar.
$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));
echo '<br>';
echo "<br>";
echo '***';
echo "<br>";
/*
Array
(
    [1] => 2
    [hello] => 2
    [world] => 1
)
*/ 




//!array_flip(); Bir dizideki anahtarlarla değerleri yer değiştirir.
$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);
print_r($flipped);
echo "<br>";
echo "<br>";
echo '***';
echo "<br>";
/*
Array
(
    [oranges] => 0
    [apples] => 1
    [pears] => 2
)
*/




//!array_key_exists(); Belirtilen anahtar veya indis dizide var mı diye bakar.
$dizi = array('ilk' => 1, 'ikinci' => 4);
if (array_key_exists('ilk', $dizi)) {
    echo "'ilk' elememanı dizide mevcut";
}
echo "<br>";
echo "<br>";
echo '***';
echo "<br>";
// 'ilk' elememanı dizide mevcut




//!array_map(); Belirtilen dizilerin elemanlarını geriçağırım işlevini uygular.
function cube($n) {
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);
print_r($b);
echo "<br>";
echo "<br>";
echo '***';
echo "<br>";
/*
Array
(
    [0] => 1
    [1] => 8
    [2] => 27
    [3] => 64
    [4] => 125
)
*/





//!array_filter(); Bir dizinin elemanlarını bir geriçağırım işleviyle süzgeçten geçirir.

function tek($var) {
   //tamsayı girdi tek sayı mı diye bakar
    return $var & 1;
}

function cift($var) {
   //tamsayı girdi çift sayı mı diye bakar
    return !($var & 1);
}

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

echo " Tek:\n";
print_r(array_filter($array1, "tek"));
echo "Çift:\n";
print_r(array_filter($array2, "cift"));
/*
Tek:
Array
(
    [a] => 1
    [c] => 3
    [e] => 5
)
Çift:
Array
(
    [0] => 6
    [2] => 8
    [4] => 10
    [6] => 12
*/
echo "<br>";
echo "<br>";
echo '***';
echo "<br>";





//!array_merge(); Belirtilen dizileri ardarda ekleyerek yeni bir dizi oluşturur.
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo "<br>";
echo "<br>";
echo '***';
echo "<br>";
/*
Array
(
    [color] => green
    [0] => 2
    [1] => 4
    [2] => a
    [3] => b
    [shape] => trapezoid
    [4] => 4
)
*/





//!array_rand(); Bir diziden belli sayıda rasgele anahtar döndürür.
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";
echo "<br>";
echo "<br>";
echo '***';
echo "<br>";





//!array_reverse(); Diziyi tersine sıralayıp döndürür.

$girdi  = array("php", 4.0, array("green", "red"));
$normal = array_reverse($girdi);
$korunan = array_reverse($girdi, true);

print_r($girdi);
print_r($normal);
print_r($korunan);
echo "<br>";
echo "<br>";
echo '***';
echo "<br>";
/*
Array
(
    [0] => php
    [1] => 4
    [2] => Array
        (
            [0] => green
            [1] => red
        )

)
*/





//!array_search(); Bir dizide belirtilen değeri arar ve bulursa ilgili ilk anahtarı döndürür.

$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); // $key = 2;
$key = array_search('red', $array);   // $key = 1;
echo "<br>";
echo "<br>";
echo '***';
echo "<br>";
/*
Array
(
    [0] => Array
        (
            [0] => green
            [1] => red
        )

    [1] => 4
    [2] => php
)
Array
(
    [2] => Array
        (
            [0] => green
            [1] => red
        )

    [1] => 4
    [0] => php
)
*/



//!in_array(); Bir dizide bir değerin varlığını araştırır.

$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Irix var";
}
if (in_array("mac", $os)) {
    echo "Mac var";
}
echo "<br>";
echo "<br>";
echo '***';
echo "<br>";
// Irix var



//! array_shift(); Dizini başlangıcından bir eleman çıkarır.

$deste = array("as", "papaz", "kız", "vale");
$kart = array_shift($deste);
print_r($deste);
echo "<br>";
echo "<br>";
echo '***';
echo "<br>";
/*
Array
(
    [0] => papaz
    [1] => kız
    [2] => vale
)
*/



//!array_pop(); Dizinin sonundaki elemanı diziden çıkartır.

$depo = array("portakal", "muz", "elma", "ahududu");
$meyve = array_pop($depo);
print_r($depo);
echo "<br>";
echo "<br>";
echo '***';
echo "<br>";

/*
Array
(
    [0] => portakal
    [1] => muz
    [2] => elma
)
*/




//!array_slice(); Bir dizinin belli bir bölümünü döndürür

$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);      // çıktısı: "c", "d", "e"
$output = array_slice($input, -2, 1);  // çıktısı: "d"
$output = array_slice($input, 0, 3);   // çıktısı: "a", "b", "c"
echo "<br>";
echo "<br>";
echo '***';
echo "<br>";




//! array_sum(); Bir dizideki değerlerin toplamını hesaplar.

$a = array(2, 4, 6, 8);
echo "sum(a) = " . array_sum($a) . "\n";

$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
echo "sum(b) = " . array_sum($b) . "\n";
echo "<br>";
echo "<br>";
echo '***';
echo "<br>";
/*
sum(a) = 20
sum(b) = 6.9
*/




//!array_product(); Bir dizideki değerlerin çarpımını bulur.

$a = array(2, 4, 6, 8);
echo "çarpım(a) = " . array_product($a) . "\n";
echo "çarpım(array()) = " . array_product(array()) . "\n";
echo "<br>";
echo "<br>";
echo '***';
echo "<br>";
/*
çarpım(a) = 384
çarpım(array()) = 1
*/


//!array_unique(); Diziden yinelenen değerleri siler.

$girdi = array("a" => "yeşil", "kırmızı", "b" => "yeşil", "mavi", "kırmızı");
$sonuç = array_unique($girdi);
print_r($sonuç);
echo "<br>";
echo "<br>";
echo '***';
echo "<br>";
/*
Array
(
    [a] => yeşil
    [0] => kırmızı
    [1] => mavi
)

*/



//!array_values(); Bir dizinin tüm değerlerini döndürür.

$dizi = array("beden" => "XL", "renk" => "sarı");
print_r(array_values($dizi));
echo "<br>";
echo "<br>";
echo '***';
echo "<br>";
/*
Array
(
    [0] => XL
    [1] => sarı
)

*/


//!array_push(); Belli sayıda elemanı dizinin sonuna ekler.

$küme = array("elma", "armut");
array_push($küme, "muz", "portakal");
print_r($küme);
echo "<br>";
echo "<br>";
echo '***';
echo "<br>";
/*
Array
(
    [0] => elma
    [1] => armut
    [2] => muz
    [3] => portakal
)
*/


//!array_unshift(); Bir dizinin başlangıcına bir veya daha fazla eleman ekler.

$liste = array("ayva", "muz");
array_unshift($liste, "elma", "armut");
print_r($liste);
echo "<br>";
echo "<br>";
echo '***';
echo "<br>";
/*
Array
(
    [0] => elma
    [1] => armut
    [2] => ayva
    [3] => muz
)

*/



//!array_keys(); Bir dizideki tüm anahtarları veya bir anahtar altkümesini döndürür.

$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));

$array = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large"));
print_r(array_keys($array));
echo "<br>";
echo "<br>";
echo '***';
echo "<br>";
/*
Array
(
    [0] => 0
    [1] => color
)
Array
(
    [0] => 0
    [1] => 3
    [2] => 4
)
Array
(
    [0] => color
    [1] => size
)
*/






/**
current();
Bir dizideki geçerli öğeyi döndür

end();
Bir dizinin dahili işaretçisini son elemanına ayarlar

next();
Bir dizinin dahili işaretçisini ilerletir

prev();
Dahili dizi işaretçisini geri alır.
*/

$araç = array('tabanvay', 'bisiklet', 'otomobil', 'uçak');
$kip = current($araç); // $kip = 'tabanvay';
$kip = next($araç);    // $kip = 'bisiklet';
$kip = current($araç); // $kip = 'bisiklet';
$kip = next($araç);    // $kip = 'otomobil';
$kip = prev($araç);    // $kip = 'bisiklet';
$kip = end($araç);     // $kip = 'uçak';
$kip = current($araç); // $kip = 'uçak';

$arr = array();
var_dump(current($arr)); // bool(false)

$arr = array(array());
var_dump(current($arr)); // array(0) { }
echo "<br>";
echo "<br>";
echo '***';
echo "<br>";
/*
bool(false)
array(0) {
}
*/




?>



*********************************************************************************************

<?php /*
            strlen($metin);
            Verilen metnin karakter sayısını yani uzunluğunu verir.
            
            explode($ayirici,$metin);
            Verilen metni belirtilen ayırıcı karaktere göre parçalar ve bir dizi olarak gönderir.
            
            implode($ayirici,$dizi);
            Bu fonksiyon explode() fonksiyonunun aksine bir dizideki değerleri belirtilen ayırıcıyla birleştirerek biraraya getirir.
            
            str_split($metin,$sayi);
            Verilen metni verilen sayı kadar karakter gruplarına bölerek bir diziye dönüştürür. Eğer sayı belirtilmezse, metni harf harf bölerek bir diziye atar.
            
            ltrim($metin), rtrim($metin), trim($metin);
            Verilen metnin sırasıyla solundaki(left-ltrim), sağındaki(right-rtrim) ve her iki tarafındaki(trim) gereksiz boşlukları temizler.
            
            substr($metin,$baslangic,$uzunluk);
            Bir metnin belirtilen başlangıç konumundan itibaren istenilen uzunluktaki bir parçasını gönderir.
            
            strtolower($metin), strtoupper($metin);
            Verilen metni sırasıyla küçük harfe ve büyükharfe dönüştürür.
            
            mb_strtolower() ve mb_strtoupper();
            Verilen metni sırasıyla küçük harfe ve büyükharfe dönüştürür. Türkçe karakter sorunu yaratmaz.
           
            ucfirst($metin), ucwords($metin);
            Bu iki fonksiyon sırasıyla verilen metnin ilk karakterini (ucfirst) ve metindeki her kelimenin ilk karakterini(ucwords) büyük harfe dönüştürür.
            
            str_replace($kaynak,$hedef,$metin);
            Verilen metindeki kaynak karakterlerin yerine hedef karakterileri koyarak değiştirme yapar. Bu fonksiyon küçük/büyük harf duyarlıdır.
           
            nl2br($metin);
            String ifadelerde kullanılan ve alt satıra geçmeyi sağlayan \n yerine kaynak kodda <br> yazmak için kullanılır.
            
            md5($metin), sha1($metin);
            Sırasıyla aldığı metne karşılık gelen karmaşık md5 ve sha1 kodlarını verir.
            
            strstr();
            Bir dizgede belirtilen karekterden sonrasını döndürür. */

?>



******************************************************************************************************************************************************************************************



//! SUPERGLOBALS KULLANIMI


//? PHP $_GLOBAL

<?php 
$x = 75;
$y = 25; 

function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
// 100
?>



//? PHP $_SERVER

<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
//  /demo/demo_global_server.php
//  35.194.26.41
//  35.194.26.41
//  https://tryphp.w3schools.com/showphp.php?filename=demo_global_server
//  Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36
//  /demo/demo_global_server.php
?>



//? PHP $_REQUEST

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>



******************************************************************************************************************************************************************************************
