<?php
 session_start();
  if(!isset($_SESSION['user'])){
    header('Location: ../index.php');
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
    <link href="../assets/img/logo-sm.ico" rel="icon">
    <link href="../assets/css/s.css" rel="stylesheet">
    <link href="../assets/css/mobile.css" rel="stylesheet">
    <link href="../assets/css/animations.css" rel="stylesheet">
    <title>Math-Talino</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light navbar-border">
    <div class="container-fluid">
      <a class="navbar-brand bold w-50" href="#"><img src="../assets/img/logo-sm.png" class="navbar-logo" alt="">Math-Talino</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../student.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../map.php">Lessons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../game.php">Games</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['name'];?>
          </a>
          <ul class="dropdown-menu drop-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item text-danger" href="../index.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<img src="../assets/img/objleaves1.png" class="objl1" alt="">
<div class="container-fluid">
    <div class="p-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../map.php">Lesson List</a></li>
                <li class="breadcrumb-item active">Lesson 4</li>
                <li class="breadcrumb-item active">Objectives</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-6 d-md-flex flex-md-column justify-content-center align-items-stretch pt-md-0 order-2 order-md-1" data-aos="">
            <div>
                <img src="../assets/img/objcircle.png" class="img-fluid obj bigEntrance" alt="">
                <div class="speech">
                    <img src="../assets/img/speechhi.png" class="img-fluid hatch speechimg" alt="">
                    
                </div>            
            </div>
        </div>
        <div class="col-md-6 order-1 order-md-2" data-aos="">
            <h3 class="title mt-5" >Objectives</h3>
                <ol>
                    <li> Identify proper fractions, improper fractions and mixed numbers;
                    <li> Change improper fractions to mixed numbers and vice versa; and
                    <li> Change fractions to lowest terms.
                </ol>
                <table><tr><td ><a href="../lesson4.1/pretest.php" ><img src="../assets/img/woodtile4.1.png" class="w-100 4-1" alt=""></a></div></td>
                <td><img src="../assets/img/woodtile4.2.png" class="w-100 4-2" alt=""></td><tr></table>
        
              </div>
      </div>
      <a href="../map.php" class="title btnback btn btns">Back</a>
</div>
<img src="../assets/img/objleaves2.png" class="objl2" alt="">

</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        $(".btnback").mouseenter(function(){
          $('.btnback').addClass('floating');
        });
        $(".btnback").mouseleave(function(){
          $('.btnback').removeClass('floating');
        });
        $(".4-1").mouseenter(function(){
          $('.4-1').addClass('floating');
        });
        $(".4-1").mouseleave(function(){
          $('.4-1').removeClass('floating');
        });
        $(".4-2").mouseenter(function(){
          $('.4-2').addClass('floating');
        });
        $(".4-2").mouseleave(function(){
          $('.4-2').removeClass('floating');
        });
        $.ajax({
          type:'POST',
          url:'l4.php',
          data:{
              user:$('.dropdown-toggle').attr('id'),
          },
          success:function(data)
          {
            $('.4-2').click(function(){
              if(data=='1'){
                window.location.href="../lesson4.2/pretest.php";
              }
            });
          }
        });
    </script>
  </body>
</html>