    <?php

    $baglanti = mysqli_connect("localhost", "dbusr21360859008", "EiSSaYlaDmiP", "dbstorage21360859008");


    if (!$baglanti) {
        die("Veritabanı bağlantı hatası: " . mysqli_connect_error());
    }


    $tur = isset($_POST['tur']) ? $_POST['tur'] : '';
    $cinsiyet = isset($_POST['cinsiyet']) ? $_POST['cinsiyet'] : '';
    $saglik = isset($_POST['saglik']) ? $_POST['saglik'] : '';
    $dogum_tarihi = isset($_POST['dogum_tarihi']) ? $_POST['dogum_tarihi'] : '';
    $bakici = isset($_POST['bakici']) ? $_POST['bakici'] : '';
    $gelis_tarihi = isset($_POST['gelis_tarihi']) ? $_POST['gelis_tarihi'] : '';
    $son_kontrol_tarihi = isset($_POST['son_kontrol_tarihi']) ? $_POST['son_kontrol_tarihi'] : '';
    $asi_durumu = isset($_POST['asi_durumu']) ? $_POST['asi_durumu'] : '';


    $sorgu = "INSERT INTO hayvanlar (tur, cinsiyet, saglik, dogum_tarihi, bakici, gelis_tarihi, son_kontrol_tarihi, asi_durumu) VALUES ('$tur', '$cinsiyet', '$saglik', '$dogum_tarihi', '$bakici', '$gelis_tarihi', '$son_kontrol_tarihi', '$asi_durumu')";



    if (mysqli_query($baglanti, $sorgu)) {
        echo "Hayvan başarıyla eklendi.";
    } else {
        echo "Hata: " . $sorgu . "<br>" . mysqli_error($baglanti);
    }

    mysqli_close($baglanti);





    header("Location: index.php");
    exit();
    ?>
