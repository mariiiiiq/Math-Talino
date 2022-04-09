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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="assets/img/logo-sm.ico" rel="icon">
    <link href="assets/css/s.css" rel="stylesheet">
    <link href="assets/css/mobile.css" rel="stylesheet">
    <link href="assets/css/animations.css" rel="stylesheet">
    <title>Math-Talino</title>
    <style>
        .eggs-sm{
          display: none;
        }
        @media only screen and (max-width: 768px) {
          .eggs-sm{
            display: block;
      }
      .eggs-lg{
        display: none;
      }
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
          <a class="nav-link" href="student.php">Home</a>
        </li>
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
<img src="assets/img/map small.png" class="map-sm" style="" alt="">
<img src="assets/img/map2.png" class="map" alt="">
  <div class="container-fluid">
      <!--content here-->
      
      <div>
            <img src="assets/img/woodtile.png" class="woodtile" alt="">
            
            <div class="woodtile  ps-5 pe-4 pt-3">
                <p class="title" id="lessontitle">Lessons</p>
            </div>
      </div>
      <div class="eggs-lg pt-5 mt-5">
        <div class="row pt-5">
          <div class="col-2 d-flex justify-content-center">
            <div class="eggdiv tossing" style="">
              <img src="assets/img/basket.png" class="basket 1" alt="">
              <img src="assets/img/egg.png" class="egg1" alt="">
              <img src="assets/img/eggcracked.png" class="crack1 egg1" alt="">
            </div>
          </div>
          <div class="col-2 d-flex justify-content-center">
            <div class="eggdiv tossing" style="">
              <img src="assets/img/basket.png" class="basket 2" alt="">
              <img src="assets/img/egg.png" class="egg2" alt="">
              <img src="assets/img/eggcracked.png" class="crack2 egg2" alt="">
            </div>
          </div>
          <div class="col-2 d-flex justify-content-center">
            <div class="eggdiv tossing" style="">
              <img src="assets/img/basket.png" class="basket 3" alt="">
              <img src="assets/img/egg.png" class="egg3" alt="">
              <img src="assets/img/eggcracked.png" class="crack3 egg3" alt="">
            </div>
          </div>
          <div class="col-2 d-flex justify-content-center">
            <div class="eggdiv tossing" style="">
              <img src="assets/img/basket.png" class="basket 4" alt="">
              <img src="assets/img/egg.png" class="egg4" alt="">
              <img src="assets/img/eggcracked.png" class="crack4 egg4" alt="">
            </div>
          </div>
          <div class="col-2 d-flex justify-content-center">
            <div class="eggdiv tossing" style="">
              <img src="assets/img/basket.png" class="basket 5" alt="">
              <img src="assets/img/egg.png" class="egg5" alt="">
              <img src="assets/img/eggcracked.png" class="crack5 egg5" alt="">
            </div>
          </div>
        </div>
        <div class="row mt-5 pt-5">
          <div class="col-2 d-flex justify-content-center">
            <div class="eggdiv tossing" style="">
              <img src="assets/img/basket.png" class="basket 1" alt="">
              <img src="assets/img/egg.png" class="egg1" alt="">
              <img src="assets/img/eggcracked.png" class="crack1 egg1" alt="">
            </div>
          </div>
          <div class="col-2 d-flex justify-content-center">
            <div class="eggdiv tossing" style="">
              <img src="assets/img/basket.png" class="basket 2" alt="">
              <img src="assets/img/egg.png" class="egg2" alt="">
              <img src="assets/img/eggcracked.png" class="crack2 egg2" alt="">
            </div>
          </div>
          <div class="col-2 d-flex justify-content-center">
            <div class="eggdiv tossing" style="">
              <img src="assets/img/basket.png" class="basket 3" alt="">
              <img src="assets/img/egg.png" class="egg3" alt="">
              <img src="assets/img/eggcracked.png" class="crack3 egg3" alt="">
            </div>
          </div>
          <div class="col-2 d-flex justify-content-center">
            <div class="eggdiv tossing" style="">
              <img src="assets/img/basket.png" class="basket 4" alt="">
              <img src="assets/img/egg.png" class="egg4" alt="">
              <img src="assets/img/eggcracked.png" class="crack4 egg4" alt="">
            </div>
          </div>
          <div class="col-2 d-flex justify-content-center">
            <div class="eggdiv tossing" style="">
              <img src="assets/img/basket.png" class="basket 5" alt="">
              <img src="assets/img/egg.png" class="egg5" alt="">
              <img src="assets/img/eggcracked.png" class="crack5 egg5" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="eggs-sm pt-5 mt-5">
        <div class="row mt-5 pt-5">
          <div class="col-6 d-flex justify-content-center">
            <div class="eggdiv tossing" style="">
              <img src="assets/img/basket.png" class="basket 1" alt="">
              <img src="assets/img/egg.png" class="egg1" alt="">
              <img src="assets/img/eggcracked.png" class="crack1 egg1" alt="">
            </div>
          </div>
          <div class="col-6">
            <div class="eggdiv tossing" style="">
              <img src="assets/img/basket.png" class="basket 2" alt="">
              <img src="assets/img/egg.png" class="egg2" alt="">
              <img src="assets/img/eggcracked.png" class="crack2 egg2" alt="">
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5">
          <div class="col-6 d-flex justify-content-center">
            <div class="eggdiv tossing" style="">
              <img src="assets/img/basket.png" class="basket 3" alt="">
              <img src="assets/img/egg.png" class="egg3" alt="">
              <img src="assets/img/eggcracked.png" class="crack3 egg3" alt="">
            </div>
          </div>
          <div class="col-6 ">
            <div class="eggdiv tossing" style="">
              <img src="assets/img/basket.png" class="basket 4" alt="">
              <img src="assets/img/egg.png" class="egg4" alt="">
              <img src="assets/img/eggcracked.png" class="crack4 egg4" alt="">
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5">
          <div class="col-6 d-flex justify-content-center">
            <div class="eggdiv tossing" style="">
              <img src="assets/img/basket.png" class="basket 5" alt="">
              <img src="assets/img/egg.png" class="egg5" alt="">
              <img src="assets/img/eggcracked.png" class="crack5 egg5" alt="">
            </div>
          </div>
          <div class="col-6 ">
            <div class="eggdiv tossing" style="">
              <img src="assets/img/basket.png" class="basket 6" alt="">
              <img src="assets/img/egg.png" class="egg6" alt="">
              <img src="assets/img/eggcracked.png" class="crack6 egg6" alt="">
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5">
          <div class="col-6 d-flex justify-content-center">
            <div class="eggdiv tossing" style="">
              <img src="assets/img/basket.png" class="basket 7" alt="">
              <img src="assets/img/egg.png" class="egg7" alt="">
              <img src="assets/img/eggcracked.png" class="crack7 egg7" alt="">
            </div>
          </div>
          <div class="col-6 ">
            <div class="eggdiv tossing" style="">
              <img src="assets/img/basket.png" class="basket 8" alt="">
              <img src="assets/img/egg.png" class="egg8" alt="">
              <img src="assets/img/eggcracked.png" class="crack8 egg8" alt="">
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5">
          <div class="col-6 d-flex justify-content-center">
            <div class="eggdiv tossing" style="">
              <img src="assets/img/basket.png" class="basket 9" alt="">
              <img src="assets/img/egg.png" class="egg9" alt="">
              <img src="assets/img/eggcracked.png" class="crack9 egg9" alt="">
            </div>
          </div>
          <div class="col-6 ">
            <div class="eggdiv tossing" style="">
              <img src="assets/img/basket.png" class="basket 10" alt="">
              <img src="assets/img/egg.png" class="egg10" alt="">
              <img src="assets/img/eggcracked.png" class="crack10 egg10" alt="">
            </div>
          </div>
        </div>
      </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function() {
        if ($("body").height() > $(window).height()) {
          $("#footer").css("position", "relative");
        }
        setTimeout(function() {
            $('.spch').css('display', 'block');
        }, 2000);
      });
      $(document).ready(function(){
        for(let i=1; i<=10;i++){
          $("."+i).hover(function(){
            switch(i){
              case 1: 
                $("#lessontitle").html("Lesson 1: <br>Prime and Composite Number");
                break;
              case 2:
                $("#lessontitle").html("Lesson 2: <br>Greatest Common Factor");
                break;
              case 3:
                $("#lessontitle").html("Lesson 3: <br>Least Common Multiple");
                break;
              case 4:
                $("#lessontitle").html("Lesson 4: <br>Fractions");
                break;
              case 5:
                $("#lessontitle").html("Lesson 5: <br>Addition and Subtraction of Similar Fractions");
                break;
              case 6:
                $("#lessontitle").html("Lesson 6: <br>Addition and Subtraction of Dissimilar Fractions");
                break;
              case 7:
                $("#lessontitle").html("Lesson 7: <br>Subtracting a Fraction from a Whole Number");
                break;
              case 8:
                $("#lessontitle").html("Lesson 8: <br>Understanding Decimals");
                break;
              case 9:
                $("#lessontitle").html("Lesson 9: <br>Reading and Writing Decimal Number");
                break;
              case 10:
                $("#lessontitle").html("Lesson 10: <br>Rounding, Comparing and Arranging Decimal Numbers");
                break;
            }
          });
          $("."+i).mouseout(function() {
            $("#lessontitle").html("Lessons");
          });
          
        }
        for(let i=1; i<=2;i++){
          $("."+i).click(function() {
            window.location.href="lesson"+i+"/objective.php";
          });
        }
        
      });
    </script>
  </body>
</html>