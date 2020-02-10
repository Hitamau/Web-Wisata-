<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wisata Jogja</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="la.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="chicago.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="ny.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<style type="text/css">
body { background-color:silver; }
</style>
<div class="jumbotron text-center" style="background-color:silver"
<!--img src="https://ecs7.tokopedia.net/blog-tokopedia-com/uploads/2018/10/liburan-ke-yogyakarta-3.jpg" class="img-fluid" alt="Responsive image"-->
  <h1>Wisata Di Yogyakarta </h1>
  <p>Project Web Service</p> 
  </div>
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index1.php?">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Destinasi Tempat Wisata
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
 <a class="dropdown-item" href="index1.php?wisatayogyakarta=malioboro">Malioboro</a>
          <a class="dropdown-item" href="index1.php?wisatayogyakarta=candiborobudur">Candi Borobudur</a>
          <a class="dropdown-item" href="index1.php?wisatayogyakarta=candiprambanan">Candi Prambanan</a>
 <a class="dropdown-item" href="index1.php?wisatayogyakarta=candiratuboko">Candi Ratu Boko</a>
          <a class="dropdown-item" href="index1.php?wisatayogyakarta=pantaiindrayanti">Pantai Indrayanti</a>
 <a class="dropdown-item" href="index1.php?wisatayogyakarta=pantaiindrayanti">Pantai Indrayanti</a>
 <a class="dropdown-item" href="index1.php?wisatayogyakarta=pantaiparangtritis">Pantai Parangtritis</a>
 <a class="dropdown-item" href="index1.php?wisatayogyakarta=hutanpinusmangunan">Hutan Pinus Mangunan</a>
 <a class="dropdown-item" href="index1.php?wisatayogyakarta=gumukpasirparangkusumo">Gumuk Pasir Parangkusumo</a>
 

        </div>
 <li class="nav-item">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Destinasi Kuliner
        </a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
 <a class="dropdown-item" href="index1.php?wisatayogyakarta=BebekCakKotingJogja">Bebek Cak Koting</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="navbar-form navbar-left" action="/index1.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
<form class="form-inline my-2 my-lg-0" action="index1.php? method="get">
 <input class="form-control mr-sm-2" type="search" placeholder="Search" name="wisatayogyakarta" aria-label="Search">
 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
  </div>

</nav>  
<div class="container">
  <div class="row">
    <div class="col-sm-1">

    </div>
<div class="col-sm-12">
      <h3>Gambar</h3>        
      <?php
if(isset($_REQUEST['wisatayogyakarta'])){
$wisatayogyakarta = $_REQUEST['wisatayogyakarta'];
}
else {
$wisatayogyakarta = 'wisatayogyakarta';
}

$url='https://www.flickr.com/services/rest/?method=flickr.photos.search&api_key=c627991fc2b2f4372196745eabd2a86a&text='.$wisatayogyakarta;

$url = file_get_contents($url);
$xml = simplexml_load_string($url);
$numOfCols = 4;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>
<div class="row">

<?php
//print_r($xml);
foreach($xml->photos->photo as $foto){
?>  
        <div class="col-sm-<?php echo $bootstrapColWidth; ?>">
<?php
echo $foto['title'];
$alamat = 'https://farm' . $foto['farm'] . '.staticflickr.com/' . 
$foto['server'] . '/' .
$foto['id'] . '_' .
$foto['secret'] . '.jpg'
;
echo '<br>';
echo "<img src='$alamat' class='img-thumbnail'>";

?>
</div>
<?php
$rowCount++;
if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
}
?>
</div>
    </div>
  </div>
</div>

</body>
</html>