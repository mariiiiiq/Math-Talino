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
    <style>
      .c{
        width:40px;
      }
    </style>
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
          <a class="nav-link active" aria-current="page" href="../student.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../map.php">Lessons</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['user'];?>
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
    <div class="pt-3 ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../map.php">Lesson List</a></li>
                <li class="breadcrumb-item active">Lesson 4.1</li>
                <li class="breadcrumb-item"><a href="../lesson4/objective.php">Objective</a></li>
                <li class="breadcrumb-item"><a href="pretest.php">Pre-Test</a></li>
                <li class="breadcrumb-item"><a href="drill.php">Drill</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lesson</li>
            </ol>
        </nav>
    </div>
    <!--start-->
    <div class="content slideLeft">
      <div class="px-3 pt-3">
          <h3 class="title">Lesson 4.1: Fraction</h3>
      </div>
      <section id="content" class="px-3 ">      
        <p class="intro1" ><h5><b>Let us start learning the new concept with the help of this problem.</b></h5>
            Read and understand the problem.
        </p>
        <center><img src = "../assets/img/l41.png" class="prob"></center>
        <div class="">
          <p>What can you say about <span class="title purple">Bon</span>, <span class="title red">Sheilla</span>, and <span class="title yel">Mari</span>?<br>
            <span><i class="bi bi-patch-question mx-2 ps-4"></i>They use to exercise daily to make their body strong and healthy.</span>
          </p>
          <p>What is asked in the Problem?<br>
            <span><i class="bi bi-patch-question mx-2 ps-4"></i>Who among the three runs the shortest distance?
            </span>
          </p>
          <p>What are the given facts that can help you solve the problem?<br>
            <span><i class="bi bi-patch-question mx-2 ps-4"></i><span class="fraction title purple"><span class="numerator">7</span><span class="denominator">
                8</span></span> kilometer, 
                <span class="fraction title red"><span class="numerator">9</span><span class="denominator">
                8</span></span> kilometers, 
                and <span class="title yel">1</span><span class="fraction title yel"><span class="numerator">2</span><span class="denominator">
                8</span></span> kilometers
            </span>
          </p>
        </div>
        <div>
          <p class="m-0">Let us know first the parts of <span class="title blue">Fraction</span></p>
          <div class="row">
            <div class="col-sm-5">
              <center><img src = "../assets/img/partfraction.png" class="w-100"></center>
            </div>
            <div class="col-sm">
            <span class="title blue">Fraction</span> only have two main parts: the <span class="title red">numerator</span> and the <span class="title purple">denominator</span>. The <span class="title red">numerator</span> is the number above the line and the <span class="title purple">denominator</span> is the number below the line in the <span class="title blue">Fraction</span>.
            </div>
          </div>
        </div>
        <div>
          <p class="m-0">Let us try to compare the three <span class="title blue">Fraction</span>.<br>
            Observe the figures below.</p>
            <div class="row g-1">
            <div class="col-sm-6">
              <center><img src = "../assets/img/race.png" class=" w-100"></center>
            </div>
            <div class="col-sm-6">
              <p class="mb-0">
                <p class="m-0">&nbsp;&nbsp;Take a look at the figure and notice that <span class="fraction"><span class="title purple"><span class="numerator">7</span><span class="denominator">
                8</span></span></span> is the shortest distance among the three given fractions. 
                <div class="d-flex justify-content-center">
                  <div class="fact">
                    <p class="mb-0">Therefore, <span class="title purple"><u>Bon</u></span> runs the shortest distance. </p>
                  </div>
                </div>
              </p>  
            </div>
            <div>
              <div class="d-flex justify-content-start">
                <div class="fact"><p class="mb-0">
                  <p class="m-0">There are three Kinds of <span class="title blue">Fraction</span>: <span class="title purple">Proper</span>, <span class="title red">Improper</span>, and <span class="title yel">Mixed Number</span></p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm">
                  <div class="d-flex justify-content-start">
                    <div class="fact m-0"><p class="mb-0">
                      <p class="m-0"><span class="title purple">Proper Fraction</span></p>
                    </div>
                  </div>
                  <p>If the numerator is smaller than the denominator it is called <span class="title purple">Proper Fraction</span>.<br>
                  Ex. <span class="title purple">Bon</span> runs <span class="fraction title purple"><span class="numerator">7</span><span class="denominator">
                    8</span></span> kilometers. Since <span class="title purple">7</span> is smaller than <span class="title purple">8</span>, therefore it is a <span class="title purple">proper fraction</span>.
                  </p>
                </div>
                <div class="col-sm">
                  <div class="d-flex justify-content-start">
                    <div class="fact m-0"><p class="mb-0">
                      <p class="m-0"><span class="title red">Improper Fraction</span></p>
                    </div>
                  </div>
                  <p>If the numerator is larger than the denominator it is called an <span class="title red">Improper Fraction</span>.<br>
                  Ex. <span class="title red">Sheilla</span> runs <span class="fraction title red"><span class="numerator">9</span><span class="denominator">
                    8</span></span> kilometers. Since <span class="title red">9</span> is larger than <span class="title red">8</span>, therefore it is an <span class="title red">Improper fraction</span>.
                  </p>
                </div>
              </div>
              <div class="row pt-3" style="border-top:2px solid #9b9b7a">
                <div class="col-sm">
                  <div class="d-flex justify-content-start">
                    <div class="fact m-0"><p class="mb-0">
                      <p class="m-0"><span class="title yel">Mixed Number</span></p>
                    </div>
                  </div>
                  <p>If the <span class="title blue">fraction</span> contains a <span class="title yel">whole number</span> and a <span class="title purple">proper fraction</span> it is called <span class="title yel">Mixed Number</span>.<br>
                    Ex. <span class="title yel">Mari</span> runs <span class="title yel">1</span><span class="fraction title yel"><span class="numerator">2</span><span class="denominator">
                    8</span></span> kilometers. Since <span class="title yel">1</span> is a <span class="title yel">whole number</span> and <span class="title yel">2</span> is smaller than <span class="title yel">8</span>, therefore it is a <span class="title yel">Mixed Number</span>.
                  </p>
                </div>
                <div class="col-sm">
                  <p class="m-0">Here are some other examples of Proper, Improper, and Mixed Fractions.
                  <center><img src = "../assets/img/l42.png" class="prob"></center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
          <a href="drill.php" class="title btnback btn btns">Back</a>
        <a href="lesson-video.php" class="title btnnext btn btns">Next</a>
  </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        $(".btnnext").mouseenter(function(){
          $('.btnnext').addClass('floating');
        });
        $(".btnnext").mouseleave(function(){
          $('.btnnext').removeClass('floating');
        });
        $(".btnback").mouseenter(function(){
          $('.btnback').addClass('floating');
        });
        $(".btnback").mouseleave(function(){
          $('.btnback').removeClass('floating');
        });
    </script>
  </body>
</html>