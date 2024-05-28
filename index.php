




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    
    <style>
        html {
    overflow-y: scroll;
       }
  body{
        margin:0%;
        padding: 0%;
    }
      #ekleFormu{
        display: none;
      }
      
      #silFormu{
        display: none;
      }

      #duzenleFormu{
        display: none;
      }

      #goruntuleTablosu{
        display: none;
      }

    
    </style>


<?php
$baglanti = mysqli_connect("localhost", "dbusr21360859008", "EiSSaYlaDmiP", "dbstorage21360859008");


?>


</head>
<body>
  

 
    <div class="container mt-3"><h1>Hayvanat Bahçesi Hayvan Takip Sistemi</h1></div>
    <div id="secenekler"  class="container mt-3 secenekler" >
        <button type="button" id="ekleButonu" class="btn btn-success">Hayvan Ekle</button>
        <button type="button" id="silButonu" class="btn btn-danger">Hayvan Sil</button>
        <button type="button" id="duzenleButonu" class="btn btn-warning">Hayvanı Düzenle</button>
        <button type="button" id="goruntuleButonu" class="btn btn-info">Hayvanları Görüntüle</button>
    </div>
    <div id="ekleFormu"  class="container mt-3 mb-5 form-control bg-light ekleFormu" >
        
        <div class="mt-2"><h2>Hayvan ekle</h2></div>
        <form action="hayvanekle.php" method="POST">
        <div class="mt-2">
            <label for="" class="form-label">Hayvan Türü:</label>
           <select name="tur" id="" class="form-select">
             <option value="Papağan">Papağan</option>
             <option value="Aslan">Aslan</option>
             <option value="Maymun">Maymun</option>
             <option value="Zürafa">Zürafa</option>
             <option value="Fil">Fil</option>
           </select>
        </div>

        <div class="mt-2">
            <label for="" class="form-label">Hayvan Cinsiyeti:</label>
           <select name="cinsiyet" id="" class="form-select">
             <option value="Erkek">Erkek</option>
             <option value="Dişi">Dişi</option>
           </select>
        </div>

        <div class="mt-2">
            <label for="" class="form-label">Hayvan Sağlığı:</label>
           <select name="saglik" id="" class="form-select">
             <option value="Sağlıklı">Sağlıklı</option>
             <option value="Hasta">Hasta</option>
           </select>
        </div>

        <div class="mt-2">
           <label for="" class="form-label">Doğum Tarihi:</label>
           <input type="text" name="dogum_tarihi" id="" class="form-control">
        </div>

        <div class="mt-2">
            <label for="" class="form-label">Bakıcısı:</label>
           <select name="bakici" id="" class="form-select">
             <option value="Ahmet Yılmaz">Ahmet Yılmaz</option>
             <option value="Zeynep Esra Küçük">Zeynep Esra Küçük</option>
             <option value="Tuğba Yarasız">Tuğba Yarasız</option>
             <option value="Ege Çokyürek">Ege Çokyürek</option>
             <option value="Fatma Akıllı">Fatma Akıllı</option>
           </select>
        </div>

         <div class="mt-2">
            <label for="" class="form-label">Geliş Tarihi:</label>
            <input type="text" name="gelis_tarihi" id="" class="form-control">
         </div>

         <div class="mt-2">
            <label for="" class="form-label">Son Kontrol Tarihi:</label>
            <input type="text" name="son_kontrol_tarihi" id="" class="form-control">
         </div>


         <div class="mt-2">
            <label for="" class="form-label">Aşı Durumu:</label>
           <select name="asi_durumu" id="" class="form-select">
             <option value="Oldu">Oldu</option>
             <option value="Olmadı">Olmadı</option>
           </select>
        </div>
        <div class="mt-1">
          <button id="ekleFormButonu" class="btn btn-success" >Ekle</button>
        </div>  
    </form>   
    </div>
    
    
    
    
    <div id="silFormu" class="container mt-3 mb-5 form-control bg-light silFormu">
       <div class="mt-2"><h2>Hayvan Sil</h2></div>
       <form action="hayvansil.php" method="POST">
       <div class="mt-2">
        <label for="" class="form-label">Hayvan Id:</label>
        <input type="text" name="id" id="" class="form-control">
       </div>

       <div class="mt-1">
        <button id="silFormButonu" class="btn btn-danger">Sil</button>
      </div> 
    </form>    
    </div>
       
    
    <div id="duzenleFormu"  class="container mt-3 mb-5 form-control bg-light duzenleFormu" >
        
      <div class="mt-2"><h2>Hayvanı Düzenle</h2></div>
      <form action="hayvanduzenle.php" method="Post">

        <div class="mt-2">
          <label for="" class="form-label">Hayvan Id:</label>
          <input type="text" name="id" id="" class="form-control">
         </div>

      <div class="mt-2">
          <label for="" class="form-label">Hayvan Türü:</label>
         <select name="tur" id="" class="form-select">
           <option value="Papağan">Papağan</option>
           <option value="Aslan">Aslan</option>
           <option value="Maymun">Maymun</option>
           <option value="Zürafa">Zürafa</option>
           <option value="Fil">Fil</option>
         </select>
      </div>

      <div class="mt-2">
          <label for="" class="form-label">Hayvan Cinsiyeti:</label>
         <select name="cinsiyet" id="" class="form-select">
           <option value="Erkek">Erkek</option>
           <option value="Dişi">Dişi</option>
         </select>
      </div>

      <div class="mt-2">
          <label for="" class="form-label">Hayvan Sağlığı:</label>
         <select name="saglik" id="" class="form-select">
           <option value="Sağlıklı">Sağlıklı</option>
           <option value="Hasta">Hasta</option>
         </select>
      </div>

      <div class="mt-2">
         <label for="" class="form-label">Doğum Tarihi:</label>
         <input type="text" name="dogum_tarihi" id="" class="form-control">
      </div>

      <div class="mt-2">
          <label for="" class="form-label">Bakıcısı:</label>
         <select name="bakici" id="" class="form-select">
           <option value="Ahmet Yılmaz">Ahmet Yılmaz</option>
           <option value="Zeynep Esra Küçük">Zeynep Esra Küçük</option>
           <option value="Tuğba Yarasız">Tuğba Yarasız</option>
           <option value="Ege Çokyürek">Ege Çokyürek</option>
           <option value="Fatma Akıllı">Fatma Akıllı</option>
         </select>
      </div>

       <div class="mt-2">
          <label for="" class="form-label">Geliş Tarihi:</label>
          <input type="text" name="gelis_tarihi" id="" class="form-control">
       </div>

       <div class="mt-2">
          <label for="" class="form-label">Son Kontrol Tarihi:</label>
          <input type="text" name="son_kontrol_tarihi" id="" class="form-control">
       </div>

       <div class="mt-2">
          <label for="" class="form-label">Aşı Durumu:</label>
         <select name="asi_durumu" id="" class="form-select">
           <option value="Oldu">Oldu</option>
           <option value="Olmadı">Olmadı</option>
         </select>
      </div>
      <div class="mt-1">
        <button id="duzenleFormButonu" class="btn btn-warning" >Düzenle</button>
      </div>  
  </form>   
  </div>


    <div id="goruntuleTablosu" class="container mt-3 mb-5 goruntuleTablosu">
        <h2>Hayvanlar</h2>           
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Id</th>
              <th>Türü</th>
              <th>Cinsiyeti</th>
              <th>Sağlığı</th>
              <th>Doğum Tarihi</th>
              <th>Bakıcısı</th>
              <th>Geliş Tarihi</th>
              <th>Son Kontrol Tarihi</th>
              <th>Aşı Durumu</th>
            </tr>
          </thead>
          <tbody>
          <?php
               $baglanti = mysqli_connect("localhost", "dbusr21360859008", "EiSSaYlaDmiP", "dbstorage21360859008");

               
                if (!$baglanti) {
                    die("Veritabanı bağlantı hatası: " . mysqli_connect_error());
                }

              
                $sorgu = "SELECT * FROM hayvanlar";
                $sonuc = mysqli_query($baglanti, $sorgu);

                
                    while ($row = mysqli_fetch_assoc($sonuc)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['tur'] . "</td>";
                        echo "<td>" . $row['cinsiyet'] . "</td>";
                        echo "<td>" . $row['saglik'] . "</td>";
                        echo "<td>" . $row['dogum_tarihi'] . "</td>";
                        echo "<td>" . $row['bakici'] . "</td>";
                        echo "<td>" . $row['gelis_tarihi'] . "</td>";
                        echo "<td>" . $row['son_kontrol_tarihi'] . "</td>";
                        echo "<td>" . $row['asi_durumu'] . "</td>";
                        echo "</tr>";
                    }
                

                
                mysqli_close($baglanti);
                ?>
          </tbody>
        </table>
      </div>
    
    
    <script>
       var secenekler=document.getElementById("secenekler");//ilk başta ne yapmak istediğimizi soran tuşlar
       var ekleButonu=document.getElementById("ekleButonu");//ilk baştaki ekleme butonu
       var silButonu=document.getElementById("silButonu");//ilk baştaki silme butonu
       var duzenleButonu=document.getElementById("duzenleButonu");//ilk baştaki düzenle butonu
       var goruntuleButonu=document.getElementById("goruntuleButonu");//ilk baştaki görüntüleme butonu
       var ekleFormu=document.getElementById("ekleFormu");//hayvan ekle'ye basınca çıkan form
       var ekleFormButonu=document.getElementById("ekleFormButonu");//hayvan ekle'ye basınca çıkan formun sonundaki ekle butonu
       var silFormu=document.getElementById("silFormu");//hayvan sil'e basınca çıkan form
       var silFormButonu=document.getElementById("silFormButonu");//hayvan sil'e basınca çıkan formun sonundaki sil butonu
       var duzenleFormu=document.getElementById('duzenleFormu');//hayvanı düzenle'ye basınca çıkan form
       var duzenleFormButonu=document.getElementById('duzenleFormButonu');//hayvanı düzenle'ye basınca çıkan formun sonundaki düzenle butonu
       var goruntuleTablosu=document.getElementById("goruntuleTablosu");//hayvanları görüntüleye basınca çıkan tablo
         
       ekleButonu.addEventListener('click',hayvanEkleFormuAc);
       function hayvanEkleFormuAc(){
        ekleFormu.style.display="block";
        silFormu.style.display="none";
        duzenleFormu.style.display="none";
        goruntuleTablosu.style.display="none";
        
       }

       ekleFormButonu.addEventListener('click',hayvanEkle);
       function hayvanEkle(){
        ekleFormu.style.display="none";  
       }

       silButonu.addEventListener('click',hayvanSilFormuAc);
       function hayvanSilFormuAc(){
        ekleFormu.style.display="none";
        silFormu.style.display="block";
        duzenleFormu.style.display="none";
        goruntuleTablosu.style.display="none";
       }

       silFormButonu.addEventListener('click',hayvanSil);
       function hayvanSil(){
        silFormu.style.display="none";
        
       }
      
       duzenleButonu.addEventListener('click',duzenleFormuAc);
       function duzenleFormuAc(){
        ekleFormu.style.display="none";
        silFormu.style.display="none";
        duzenleFormu.style.display="block";
        goruntuleTablosu.style.display="none";
        
       }

       duzenleFormButonu.addEventListener('click',hayvanDuzenle);
       function hayvanDuzenle(){
         duzenleFormu.style.display="none";
       }

       goruntuleButonu.addEventListener('click',goruntuleTablosuAc);
       function goruntuleTablosuAc(){
        ekleFormu.style.display="none";
        silFormu.style.display="none";
        duzenleFormu.style.display="none";
        goruntuleTablosu.style.display="block";
       }

    </script>
</body>
</html>
