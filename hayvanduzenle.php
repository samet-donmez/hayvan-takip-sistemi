<?php

$baglanti = mysqli_connect("localhost", "dbusr21360859008", "EiSSaYlaDmiP", "dbstorage21360859008");


if (!$baglanti) {
    die("Veritabanı bağlantı hatası: " . mysqli_connect_error());
}


$hayvan_id = isset($_POST['id']) ? $_POST['id'] : '';
$tur = isset($_POST['tur']) ? $_POST['tur'] : '';
$cinsiyet = isset($_POST['cinsiyet']) ? $_POST['cinsiyet'] : '';
$saglik = isset($_POST['saglik']) ? $_POST['saglik'] : '';
$dogum_tarihi = isset($_POST['dogum_tarihi']) ? $_POST['dogum_tarihi'] : '';
$bakici = isset($_POST['bakici']) ? $_POST['bakici'] : '';
$gelis_tarihi = isset($_POST['gelis_tarihi']) ? $_POST['gelis_tarihi'] : '';
$son_kontrol_tarihi = isset($_POST['son_kontrol_tarihi']) ? $_POST['son_kontrol_tarihi'] : '';
$asi_durumu = isset($_POST['asi_durumu']) ? $_POST['asi_durumu'] : '';


$sorgu = "UPDATE hayvanlar SET tur='$tur', cinsiyet='$cinsiyet', saglik='$saglik', dogum_tarihi='$dogum_tarihi', bakici='$bakici', gelis_tarihi='$gelis_tarihi', son_kontrol_tarihi='$son_kontrol_tarihi', asi_durumu='$asi_durumu' WHERE id='$hayvan_id'";


if (mysqli_query($baglanti, $sorgu)) {
    echo "Hayvan başarıyla düzenlendi.";
} else {
    echo "Hata: " . mysqli_error($baglanti);
}


mysqli_close($baglanti);
header("Location: index.php");
exit();
?>
