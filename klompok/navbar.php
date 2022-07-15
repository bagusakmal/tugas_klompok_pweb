<?php include 'config.php' ?>
<?php include 'hak-akses.php'; ?>

<!DOCTYPE html>
<html>
<head>
  
  <link rel="stylesheet" type="text/css" href="gaya.css">
</head>
<body>
<div class="container" style="">
  <div id="top">
      <h1>RETRO</h1>
      <p>Web kang dadi andalan</p>
      
    </div>
<ul>
  <li><a href="index.php">HOME</a></li>
  <li class="dropdown"><a href="#news">BERITA</a><div class="dropdown-content">
      <a href="sport.php">SPORT</a>
      <a href="internasional.php">INTERNASIONAL</a>
      <a href="#">GLOBAL</a>
    </div></li>
  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Teme</a>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </li>
  <li style="float:right"><a href="proses/logout.php">LOGOUT</a></li>
</ul>

</div>

</body>
</html>


