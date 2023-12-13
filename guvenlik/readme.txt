guvenlik klasörü altındaki  config klasörü altındaki config.php dosyası içinde veritabanı bağlantısı yaptım. 
Ancak bu şekilde yaptığım bağlantıya dışarıdan basit bir saldırı ile girilebilir. Veri çalınması yaşanabilir.
Bunu önlemek adına .htaccess isimli dosya oluşturdum
        Options -Indexes
        deny from all
içine yazılan bu kodlar veritabanının güvenli bir şekilde bağlanmasına olanak verdi.



öte yandan sayfamıza html eklemek istersek style.css içinden verilerin çalınması önlenmek adına style.css in olduğu klasöre de htaccess eklendi.
ancak bu noktada 
        Options -Indexes
yalnızca bu kod kullanıldı. çünkü deny from all kullanımı css dosyasının html ile olan bağlantısını engeller.
    
