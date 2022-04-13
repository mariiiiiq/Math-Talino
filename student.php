<?php
 session_start();
  if(!isset($_SESSION['user'])){
    header('Location: index.php');
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://fonts.cdnfonts.com/css/meticula" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/wicked-mouse" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="assets/img/logo-sm.ico" rel="icon">
    <link href="assets/css/s.css" rel="stylesheet">
    <link href="assets/css/mobile.css" rel="stylesheet">
    <link href="assets/css/animations.css" rel="stylesheet">
    <title>Math-Talino</title>
    <style>
      body{
        background-image:
        -webkit-gradient(linear, left top, right top, from(#88888b), to(#88888b));
        background-image:
        -moz-linear-gradient(left, #88888b, #88888b);
      }
      </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-border" style="z-index:99999;">
    <div class="container-fluid">
      <a class="navbar-brand bold w-50" href="admin-account.php"><img src="assets/img/logo-sm.png" class="navbar-logo" alt="">Math-Talino</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="map.php">Lessons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="game.php">Games</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <?php
            echo $_SESSION['name'];?>
        </a>
          <ul class="dropdown-menu drop-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item text-danger" href="index.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

      <div class="path">
        <img src="assets/img/dark games.png" class="dgames" style=""alt="">
        <img src="assets/img/light games.png" class="dgames light" style=""alt="">
      </div>
      <div class="path">
        <img src="assets/img/dark lesson.png" class="dlessons" style=""alt="">
        <img src="assets/img/light lesson.png" class="dlessons light" style=""alt="">
      </div>
      <div class="d-flex justify-content-center align-items-center">
        <img src="assets/img/backowl.png" id="backowl" class="slideUp hiowl" alt="">
        <img src="assets/img/hiowl.png" id="hiowl" class="hiowl" style="display:none;" alt="">
      </div>

      <img src="assets/img/botleft.png" class="bl" style=""alt="">
    <img src="assets/img/botright.png" class="br" style=""alt="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function() {
        setTimeout(function() {
            $('#backowl').css('display', 'none');
            $('#hiowl').css('display', 'block');
            $("#backowl").removeClass("slideUp");
        }, 1000);
        $('.dlessons').click(function(){
          $('#hiowl').css('display', 'none');
          $('#backowl').css('display', 'block');
          $( "#backowl" ).animate({
            top:5,
            right:90}, 2000, function(){
              location.href="map.php";
            });
        });
        $('.dgames').click(function(){
          $('#hiowl').css('display', 'none');
          $('#backowl').css('display', 'block');
          $( "#backowl" ).animate({
            top:5,
            left:90}, 2000, function(){
              location.href="game.php";
            });
          
        });
      });
    </script>
  </body>
</html>
