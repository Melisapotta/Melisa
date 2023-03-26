<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>BOX MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=c79def8b&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <h3>BOX MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container99" style="background-image:url('123.jpg')";>
<div class="container">
<div class="row mt-3 text-center">
  <div class="col">
<h1>top</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="1.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Ada Apa Dengan Cinta 2 </h5>
        <p class="card-text">Ada Apa dengan Cinta? 2 ialah sebuah filem Indonesia arahan Riri Riza. Filem ini merupakan sekuel kepada filem Ada Apa Dengan Cinta? tahun 2002. Filem ini juga ditayangkan serentak di tiga negara iaitu Indonesia, Malaysia dan Brunei. Filem lakonan Dian Sastrowardoyo dan Nicholas Saputra membawakan semula peranan mereka sebagai Cinta dan Rangga.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="2.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">kisah Tentang Murid Tuhan Yesus</h5>
        <p class="card-text">Simon dinamakan sebagai Petrus atau "batu karang", yang mengisyaratkan bahwa Yesus meletakkan landasan gereja-Nya di atas Petrus</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="8.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Herry Potter</h5>
        <p class="card-text">Harry Potter adalah seri tujuh novel fantasi yang dikarang oleh penulis Inggris J. K. Rowling. Novel ini mengisahkan tentang petualangan seorang penyihir remaja bernama Harry Potter dan sahabatnya, Ronald Bilius Weasley dan Hermione Jean Granger, yang merupakan pelajar di Sekolah Sihir Hogwarts.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="4.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Doraemon</h5>
        <p class="card-text">Doraemon adalah karakter fiksi dalam serial manga dan anime Jepang dengan nama yang sama yang dibuat oleh Fujiko F. Fujio, nama pena dari tim penulisan Hiroshi Fujimoto dan Motoo Abiko</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="5.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">DORA</h5>
        <p class="card-text">Dora and the Lost City of Gold adalah film petualangan Amerika tahun 2019 yang disutradarai oleh James Bobin. Ini adalah adaptasi live-action dan kelanjutan dari serial televisi Nickelodeon dan Nick Jr Dora the Explorer. Dibintangi oleh Isabela Moner sebagai karakter judul, dengan Eugenio Derbez, Michael Peña, Eva Longoria, dan Danny Trejo dalam peran pendukung.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="7.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Dragon 3D</h5>
        <p class="card-text">The Hidden World adalah film fantasi laga animasi komputer 3D Amerika Serikat tahun 2019 yang diproduksi oleh DreamWorks Animation dan didistribusikan oleh Universal Pictures. Film ini dibuat berdasarkan seri buku Inggris dengan nama yang sama oleh Cressida Cowell. Film ini adalah sekuel film animasi-komputer 2014 How to Train Your Dragon 2 dan yang ketiga dalam trilogi.</p>
      </div>
    </div>
  </div>
  
    </div>></div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
