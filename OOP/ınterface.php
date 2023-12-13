<?php

// Bir arayüz (interface) tanımlama
interface EPostaGonder {
    public function gonderEPosta($alici, $mesaj);
}


// Arayüzü uygulayan bir sınıf oluşturma
class EPostaServisi implements EPostaGonder {
    public function gonderEPosta($alici, $mesaj) {
        // E-posta gönderme işlemleri burada gerçekleştirilir
        echo "E-posta '$alici' adresine gönderildi: '$mesaj'\n";
    }
}

// Arayüzü uygulayan başka bir sınıf oluşturma
class FarkliEPostaServisi implements EPostaGonder {
    public function gonderEPosta($alici, $mesaj) {
        // Farklı bir e-posta servisine gönderme işlemleri burada gerçekleştirilir
        echo "Farklı bir e-posta servisine e-posta '$alici' adresine gönderildi: '$mesaj'\n";
    }
}

// Kullanım
$epostaServisi = new EPostaServisi();
$epostaServisi->gonderEPosta("ornek@ornek.com", "Merhaba, bu bir test e-postasıdır.");

$farkliEpostaServisi = new FarkliEPostaServisi();
$farkliEpostaServisi->gonderEPosta("farkli@ornek.com", "Farklı e-posta servisine gönderilen mesaj.");
?>