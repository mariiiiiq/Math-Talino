<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="assets/img/logo-sm.ico" rel="icon">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Math-Talino</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-border">
    <div class="container-fluid mx-5">
      <a class="navbar-brand bold w-50" href="game.php"><img src="assets/img/logo-sm.png" class="navbar-logo" alt="">Math-Talino</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="student.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="lessonlist.php">Lessons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="game.php">Games</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <?php session_start();
            echo $_SESSION['user'];?>
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
      <!--content here-->
      <h1 class="text-center bold">Games</h1>
        <div class="row">
            <div class="box col-md-3">
                <a href="https://phet.colorado.edu/sims/html/fractions-intro/latest/fractions-intro_en.html" class="card p-2 mb-2" rel="noreferrer">
                    <div class="mt-1">
                        <div class="d-flex justify-content-center align-content-stretch flex-wrap">
                        <iframe src="https://phet.colorado.edu/sims/html/fractions-intro/latest/fractions-intro_en.html"
                            class="w-100 p-3" alt="" allowfullscreen>
                        </iframe>
                        </div>
                        <div>
                            <h3 class="bold text-center mt-3 mb-3">Intro</h3>
                            <div id="desc">
                                <p class="text-center">Predict and explain how changing a fraction's numerator 
                                    and denominator changes the value of the fraction.<br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="box col-md-3">
                <a href="https://phet.colorado.edu/sims/html/build-a-fraction/latest/build-a-fraction_en.html" class="card p-2 mb-2" rel="noreferrer">
                    <div class="mt-1">
                        <div class="d-flex justify-content-center align-content-stretch flex-wrap">
                        <iframe src="https://phet.colorado.edu/sims/html/build-a-fraction/latest/build-a-fraction_en.html"
                            class="w-100 p-3" alt="" 
                            allowfullscreen>
                        </iframe>
                        </div>
                        <div>
                            <h3 class="bold text-center mt-3 mb-3">Build a Fraction</h3>
                            <div id="desc">
                                <p class="text-center">Build A Fraction expands on ideas from the Fraction Intro and 
                                    Fraction Matcher sims and can also be used as a standalone tool.<br><br></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="box col-md-3">
                <a href="index.php" class="card p-2 mb-2" rel="noreferrer">
                    <div class="mt-1">
                        <div class="d-flex justify-content-center align-content-stretch flex-wrap">
                        <iframe src="https://phet.colorado.edu/sims/html/fractions-mixed-numbers/latest/fractions-mixed-numbers_en.html"
                            class="w-100 p-3" alt=""
                            allowfullscreen>
                        </iframe>
                        </div>
                        <div>
                            <h3 class="bold text-center mt-3 mb-3">Mixed Numbers</h3>
                            <div id="desc">
                                <p class="text-center">Predict and explain how changing a fraction's numerator 
                                    and enominator affects the fraction's value.<br><br></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="box col-md-3">
                <a href="https://phet.colorado.edu/sims/html/fraction-matcher/latest/fraction-matcher_en.html" class="card p-2 mb-2" rel="noreferrer">
                    <div class="mt-1">
                        <div class="d-flex justify-content-center align-content-stretch flex-wrap">
                        <iframe src="https://phet.colorado.edu/sims/html/fraction-matcher/latest/fraction-matcher_en.html"
                            class="w-100 p-3" alt=""
                            allowfullscreen>
                        </iframe>
                        </div>
                        <div>
                            <h3 class="bold text-center mt-3 mb-3">Matcher</h3>
                            <div id="desc">
                                <p class="text-center">Find matching fractions using numbers and pictures.
                                Make the same fractions match the using different numbers and picture patterns.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
        <div class="box col-md-3"></div> 
            <div class="box col-md-3">
                <a href="https://phet.colorado.edu/sims/html/fractions-equality/latest/fractions-equality_en.html" class="card p-2 mb-2" rel="noreferrer">
                    <div class="mt-1">
                        <div class="d-flex justify-content-center align-content-stretch flex-wrap">
                        <iframe src="https://phet.colorado.edu/sims/html/fractions-equality/latest/fractions-equality_en.html"
                            class="w-100 p-3" alt=""
                            allowfullscreen>
                        </iframe>
                        </div>
                        <div>
                            <h3 class="bold text-center mt-3 mb-3">Equality</h3>
                            <div id="desc">
                                <p class="text-center">Make equivalent fractions using different numbers. 
                                Match fractions in different picture patterns and
                                compare fractions on a number line</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="box col-md-3">
                <a href="https://www.addictinggames.com/embed/html5-games/24820" class="card p-2 mb-2" rel="noreferrer">
                    <div class="mt-1">
                        <div class="d-flex justify-content-center align-content-stretch flex-wrap">
                        <iframe src="https://www.addictinggames.com/embed/html5-games/24820"
                            class="w-100 p-3" alt=""
                            allowfullscreen>
                        </iframe>
                        </div>
                        <div>
                            <h3 class="bold text-center mt-3 mb-3">Fraction</h3>
                            <div id="desc">
                                <p class="text-center">    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br><br><br><br> </p>
                            </div>
                        </div>
                    </div>
                </a>
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
