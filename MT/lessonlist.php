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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="assets/img/logo-sm.ico" rel="icon">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Math-Talino</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-border">
    <div class="container-fluid mx-5">
      <a class="navbar-brand bold w-50" href="lessonlist.php"><img src="assets/img/logo-sm.png" class="navbar-logo" alt="">Math-Talino</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarSupportedContent">
      <ul class="navbar-nav">
       <li class="nav-item">
          <a class="nav-link" aria-current="page" href="student.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="lessonlist.php">Lessons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="game.php">Games</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $_SESSION['user'];?>
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
    <div class="container-fluid p-5">
    <h1 class="text-center bold">Lessons</h1>
        <div class="row">
            <div class="box col-md-3">
                <a href="lessons/objective1.php" class="card p-2 mb-2" rel="noreferrer">
                    <div class="mt-1">
                        <div class="d-flex justify-content-center align-content-stretch flex-wrap">
                            <img src="assets/img/Fluid-red.png" class="w-100 p-3" alt="">
                            <img src="assets/img/owl1.png" class="owl p-3" alt="">
                        </div>
                        <div>
                            <h3 class="bold text-center mt-3 mb-3">Lesson 1</h3>
                            <div id="desc">
                                <p class="text-center">Prime and Composite Number</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="box col-md-3">
                <a href="Lesson2/lesson2.php" class="card p-2 mb-2" rel="noreferrer">
                    <div class="mt-1">
                        <div class="d-flex justify-content-center align-content-stretch flex-wrap">
                            <img src="assets/img/Fluid-yellow.png" class="w-100 p-3" alt="">
                            <img src="assets/img/owl1.png" class="owl p-3" alt="">
                        </div>
                        <div>
                            <h3 class="bold text-center mt-3 mb-3">Lesson 2</h3>
                            <div id="desc">
                                <p class="text-center">Greatest Common Factor</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="box col-md-3">
                <a href="Lesson3/objective3.php" class="card p-2 mb-2" rel="noreferrer">
                    <div class="mt-1">
                        <div class="d-flex justify-content-center align-content-stretch flex-wrap">
                            <img src="assets/img/Fluid-violet.png" class="w-100 p-3" alt="">
                            <img src="assets/img/owl1.png" class="owl p-3" alt="">
                        </div>
                        <div>
                            <h3 class="bold text-center mt-3 mb-3">Lesson 3</h3>
                            <div id="desc">
                                <p class="text-center">Least Common Multiple</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="box col-md-3">
                <a href="Lesson4/objective4.php" class="card p-2 mb-2" rel="noreferrer">
                    <div class="mt-1">
                        <div class="d-flex justify-content-center align-content-stretch flex-wrap">
                            <img src="assets/img/Fluid-blue.png" class="w-100 p-3" alt="">
                            <img src="assets/img/owl1.png" class="owl p-3" alt="">
                        </div>
                        <div>
                            <h3 class="bold text-center mt-3 mb-3">Lesson 4</h3>
                            <div id="desc">
                                <p class="text-center">Fractions</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="box col-md-3">
                <a href="Lesson5/objective5.php" class="card p-2 mb-2" rel="noreferrer">
                    <div class="mt-1">
                        <div class="d-flex justify-content-center align-content-stretch flex-wrap">
                            <img src="assets/img/Fluid-red.png" class="w-100 p-3" alt="">
                            <img src="assets/img/owl1.png" class="owl p-3" alt="">
                        </div>
                        <div>
                            <h3 class="bold text-center mt-3 mb-3">Lesson 5</h3>
                            <div id="desc">
                                <p class="text-center">Addition and Subtraction of Similar Fractions</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="box col-md-3">
                <a href="Lesson6/objective6.php" class="card p-2 mb-2" rel="noreferrer">
                    <div class="mt-1">
                        <div class="d-flex justify-content-center align-content-stretch flex-wrap">
                            <img src="assets/img/Fluid-yellow.png" class="w-100 p-3" alt="">
                            <img src="assets/img/owl1.png" class="owl p-3" alt="">
                        </div>
                        <div>
                            <h3 class="bold text-center mt-3 mb-3">Lesson 6</h3>
                            <div id="desc">
                                <p class="text-center">Addition and Subtraction of Dissimilar Fractions</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="box col-md-3">
                <a href="Lesson7/objective7.php" class="card p-2 mb-2" rel="noreferrer">
                    <div class="mt-1">
                        <div class="d-flex justify-content-center align-content-stretch flex-wrap">
                            <img src="assets/img/Fluid-violet.png" class="w-100 p-3" alt="">
                            <img src="assets/img/owl1.png" class="owl p-3" alt="">
                        </div>
                        <div>
                            <h3 class="bold text-center mt-3 mb-3">Lesson 7</h3>
                            <div id="desc">
                                <p class="text-center">Subtracting a Fraction from a Whole Number</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="box col-md-3">
                <a href="Lesson8/objective8.php" class="card p-2 mb-2" rel="noreferrer">
                    <div class="mt-1">
                        <div class="d-flex justify-content-center align-content-stretch flex-wrap">
                            <img src="assets/img/Fluid-blue.png" class="w-100 p-3" alt="">
                            <img src="assets/img/owl1.png" class="owl p-3" alt="">
                        </div>
                        <div>
                            <h3 class="bold text-center mt-3 mb-3">Lesson 8</h3>
                            <br>
                            <div id="desc">
                                <p class="text-center">Understanding Decimals</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="box col-md-3"></div> 
            <div class="box col-md-3">
                <a href="Lesson9/objective9.php" class="card p-2 mb-2" rel="noreferrer"> 
                    <div class="mt-1">
                        <div class="d-flex justify-content-center align-content-stretch flex-wrap">
                            <img src="assets/img/Fluid-red.png" class="w-100 p-3" alt="">
                            <img src="assets/img/owl1.png" class="owl p-3" alt="">
                        </div>
                        <div>
                            <h3 class="bold text-center mt-3 mb-3">Lesson 9</h3>
                            <div id="desc">
                                <p class="text-center">Reading and Writing Decimal Number</p>
                            </div>
                        </div>
                    </div>    
                </a>
            </div> 
            <div class="box col-md-3">
                <a href="Lesson10/objective10.php" class="card p-2 mb-2" rel="noreferrer"> 
                    <div class="mt-1">
                        <div class="d-flex justify-content-center align-content-stretch flex-wrap">
                            <img src="assets/img/Fluid-red.png" class="w-100 p-3" alt="">
                            <img src="assets/img/owl1.png" class="owl p-3" alt="">
                        </div>
                        <div>
                            <h3 class="bold text-center mt-3 mb-3">Lesson 10</h3>
                            <div id="desc">
                                <p class="text-center">Rounding, Comparing and Arranging Decimal Numbers</p>
                            </div>
                        </div>
                    </div>    
                </a>
            </div> 
        </div>   
    </div>
    </div>
    <div class="footer" id="footer">
      <div class="footercontent">
          &copy; Copyright <strong><span>Math-Talino</span></strong>. All Rights Reserved
      </div>
  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function() {
        if ($("body").height() > $(window).height()) {
          $("#footer").css("position", "relative");
        }
      });
    </script>
  </body>
</html>
