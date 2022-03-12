<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link href="../assets/img/logo-sm.ico" rel="icon">

    <link href="../assets/css/style.css" rel="stylesheet">
    <title>Math-Talino</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light navbar-border">
    <div class="container-fluid mx-5">
      <a class="navbar-brand bold w-50" href="admin-account.php"><img src="../assets/img/logo-sm.png" class="navbar-logo" alt="">Math-Talino</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarSupportedContent">
      <ul class="navbar-nav">
       <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../student.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../lessonlist.php">Lessons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../game.php">Games</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <?php session_start(); echo $_SESSION['user'];?>
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
    <div class="container content mb-3">
        <h1 class="text-center mt-5">Lesson 2: <b>Greatest Common Factor</b></h1>
        <div class="row">
            <div class="box col-md-3"></div> 
                <div class="box col-md-3">
                    <a href="lesson2.1.php" class="card p-2 mb-2" rel="noreferrer"> 
                        <div class="mt-1">
                            <div class="d-flex justify-content-center align-content-stretch flex-wrap">
                                <img src="../assets/img/Fluid-red.png" class="w-100 p-3" alt="">
                                <img src="../assets/img/owl1.png" class="owl p-3" alt="">
                            </div>
                            <div>
                                <h3 class="bold text-center mt-3 mb-3">Lesson 2.1</h3>
                                <div id="desc">
                                    <p class="text-center">Finding the Common Factors and the
                                        Greatest Common Factor of Two Numbers
                                    </p>
                                </div>
                            </div>
                        </div>    
                    </a>
                </div> 
                <div class="box col-md-3">
                    <a href="Lesson10/objective10.php" class="card p-2 mb-2" rel="noreferrer"> 
                        <div class="mt-1">
                            <div class="d-flex justify-content-center align-content-stretch flex-wrap">
                                <img src="../assets/img/Fluid-red.png" class="w-100 p-3" alt="">
                                <img src="../assets/img/owl1.png" class="owl p-3" alt="">
                            </div>
                            <div>
                                <h3 class="bold text-center mt-3 mb-3">Lesson 2.2</h3>
                                <div id="desc">
                                    <p class="text-center">Solving Word Problems Involving
                                        Greatest Common Factor
                                    </p>
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
    <!-- Optional JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        function lbl(value){
            if(value!="")
            {
                document.getElementById("lblselect").style.WebkitTransform = "translateY(-19px)"; 
            }
            else{
            }
        }
    $(document).ready(function() {
        if ($("body").height() > $(window).height()) {
            $("#footer").css("position", "relative");
        }
    });
    </script>
  </body>
</html>
