<?php

$baglanti = mysqli_connect("localhost", "dbusr21360859008", "EiSSaYlaDmiP", "dbstorage21360859008");


if (!$baglanti) {
    die("Veritabanı bağlantı hatası: " . mysqli_connect_error());
}


$id = isset($_POST['id']) ? $_POST['id'] : '';


$sorgu = "DELETE FROM hayvanlar WHERE id = '$id'";


if (mysqli_query($baglanti, $sorgu)) {
    echo "Hayvan başarıyla silindi.";
} else {
    echo "Hata: " . mysqli_error($baglanti);
}


mysqli_close($baglanti);
header("Location: index.php");
exit();
?>
