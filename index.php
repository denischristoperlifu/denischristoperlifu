<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <title>Document</title>
</head>
<body>

    
    <?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=bae3a49e&s='.$judul.'"';

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
<nav class="navbar  bg-dark">
  <div class="container text-white">
    <div class="logo" style="width: 0px;">
    <img src="logo1.png" alt="" class="logo" style="width: 100px;">
    </div>
    <h1>BIOSKOP</h1>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="Pencarian" name="cari"></input>
    </form>
  </div>
</nav>
<div class="badan d-flex">
  <div class="tittle text-white">
    <h1>TRENDING MOVIE</h1>
<div class="container-1 swiper">
      <div class="slide-container">
        <div class="card-wrapper swiper-wrapper">
          <div class="card swiper-slide">
            <div class="image-box">
              <img src="h1.jpg" alt="" />
            </div>
            <div class="title-details">
              <div class="name-judul">
                <h3 class="name">Mr. and Mrs. Incredible <br>
                 (San kei hap lui) (2011)</h3>
                <h4 class="job">Comedy, Romance, China, Hong Kong</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-box">
              <img src="h2.jpg" alt="" />
            </div>
            <div class="title-details">
              <div class="name-judul">
                <h3 class="name">Zokkomon (2011)</h3>
                <h4 class="job">Foreign, Science Fiction, India</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-box">
              <img src="h3.jpg" alt="" />
            </div>
            <div class="title-details">
              <div class="name-judul">
                <h3 class="name">Black Mask (Hak hap) (1996)</h3>
                <h4 class="job">Tak Berkategori, Hong Kong</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-box">
              <img src="h4.jpg" alt="" />
            </div>
            <div class="title-details">
              <div class="name-judul">
                <h3 class="name">The Phantom (1996)</h3>
                <h4 class="job">Adventure, Comedy, Australia, Usa</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-box">
              <img src="h5.jpg" alt="" />
            </div>
            <div class="title-details">
              <div class="name-judul">
                <h3 class="name">American Hero (2015)</h3>
                <h4 class="job">Comedy, Sci-fi, Usa</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <div class="swiper-pagination"></div>
      </div>
    </div>

    <script src="swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</div>
<div class="cardd d-flex flex-wrap align-content-md-center justify-content-center" >
    <div class="title text-white">
        <h1>MOVIE ONE PIECE</h1>
<div class="card-1 d-flex">
<div class="card" style="width: 20rem;">
  <img src="3.jpg" class="card-img-top" alt="...">
  <div class="card-body bg-dark text-white text-center">
  <h4>One Piece: Adventure on Nejimaki Island</h4>
    <p class="card-text">Action, Adventure, Animation, Japan, BluRay, 2019, 1080</p>
    <a class="btn btn-danger " href="#" role="button">Wacth</a>
  </div>
</div>
<div class="card" style="width: 20rem;">
  <img src="4.jpg" class="card-img-top" alt="...">
  <div class="card-body bg-dark text-white text-center">
    <h4>One Piece Episode Special 09 : Episode Sabo</h4>
    <p class="card-text ">Adventure, Animation, Comedy, Japan, HDTV, 2016, 720</p>
    <a class="btn btn-danger " href="#" role="button">Wacth</a>
  </div>
</div>
<div class="card" style="width: 20rem;">
  <img src="5.jpg" class="card-img-top" alt="...">
  <div class="card-body bg-dark text-white text-center">
  <h4>One Piece Film: Red (2022)</h4>
    <p class="card-text">Action, Adventure, Animation, Japan, HDRip, 2022, 720</p>
    <a class="btn btn-danger " href="#" role="button">Wacth</a>
  </div>
</div>
</div>
<div class="card-2 d-flex">
<div class="card" style="width: 20rem;">
  <img src="6.jpg" class="card-img-top" alt="...">
  <div class="card-body bg-dark text-white text-center">
  <h4>One Piece: Stampede (2019)</h4>
    <p class="card-text">Action, Adventure, Animation, Japan, HDRip, 2022, 720</p>
    <a class="btn btn-danger " href="#" role="button">Wacth</a>
  </div>
</div>
<div class="card" style="width: 20rem;">
  <img src="7.jpg" class="card-img-top" alt="...">
  <div class="card-body bg-dark text-white text-center">
  <h4>One Piece: Heart of Gold (2016)</h4>
    <p class="card-text">Action, Adventure, Animation, Japan, HDRip, 2022, 720</p>
    <a class="btn btn-danger " href="#" role="button">Wacth</a>
  </div>
</div>
<div class="card" style="width: 20rem;">
  <img src="8.jpg" class="card-img-top" alt="...">
  <div class="card-body bg-dark text-white text-center">
  <h4>One Piece Film Z <br>
   (2012)</h4>
    <p class="card-text text-white">Action, Adventure, Animation, Japan, HDRip, 2022, 720</p>
    <a class="btn btn-danger " href="#" role="button">Wacth</a>
  </div>
</div>
</div>
</div>
</div>
<div class="bg d-flex flex-wrap  justify-content-center  align-content-md-center">
<div class="card" style="width: 16rem;  height: 640px;">
  <img src="av1.jpg" class="card-img-top" alt="...">
  <div class="card-body bg-dark text-white text-center">
  <h4>Avengers: Endgame (2019)</h4>
    <p class="card-text">Adventure, Animation, Comedy, Japan, HDTV, 2016, 720</p>
    <a class="btn btn-danger " href="#" role="button">Wacth</a>
  </div>
</div>
<div class="card" style="width: 16rem;  height: 640px;">
  <img src="avg2.jpg" class="card-img-top" alt="...">
  <div class="card-body bg-dark text-white text-center">
    <h4>Avengers: Infinity War (2018)</h4>
    <p class="card-text">Adventure, Animation, Comedy, Japan, HDTV, 2015, 480</p>
    <a class="btn btn-danger " href="#" role="button">Wacth</a>
  </div>
</div>
<div class="card" style="width: 16rem;  height: 640px;">
  <img src="avg3.jpg" class="card-img-top" alt="...">
  <div class="card-body bg-dark text-white text-center">
  <h4>Avengers of Justice: Farce Wars (2018)</h4>
    <p class="card-text">Action, Adventure, Animation, Japan, BluRay, 2000, <br>
     1080</p>
    <a class="btn btn-danger " href="#" role="button">Wacth</a>
  </div>
</div>

<div class="card" style="width: 16rem;  height: 640px;">
  <img src="avg4.jpg" class="card-img-top" alt="...">
  <div class="card-body bg-dark text-white text-center">
  <h4>Avengers: Age of Ultron (2015)</h4>
    <p class="card-text">Adventure, Animation, Comedy, Japan, HDTV, 2016, 720</p>
    <a class="btn btn-danger " href="#" role="button">Wacth</a>
  </div>
</div>
<div class="card" style="width: 16rem; height: 640px;">
  <img src="avg5.jpg" class="card-img-top" alt="...">
  <div class="card-body bg-dark text-white text-center">
  <h4>Avengers Confidential: Black Widow & Punisher</h4>
    <p class="card-text">Action, Adventure, Animation, Japan, HDRip, 2022, 720</p>
    <a class="btn btn-danger " href="#" role="button">Wacth</a>
  </div>
</div>
<div class="card" style="width: 16rem; height: 640px;">
  <img src="avg6.jpg" class="card-img-top" alt="...">
  <div class="card-body bg-dark text-white text-center">
  <h4>Avengers Grimm: Time Wars (2018)</h4>
    <p class="card-text text-white">Action, Adventure, Fantasy, Sci-fi, Usa, BluRay, 2019, 1080</p>
    <a class="btn btn-danger " href="#" role="button">Wacth</a>
  </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
