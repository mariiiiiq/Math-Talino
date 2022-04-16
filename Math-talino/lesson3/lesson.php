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
          <a class="nav-link" aria-current="page" href="../student.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../map.php">Lessons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../game.php
          ">Games</a>
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
    <div class="pt-3 ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../map.php">Lesson List</a></li>
                <li class="breadcrumb-item active">Lesson 3</li>
                <li class="breadcrumb-item"><a href="objective.php">Objective</a></li>
                <li class="breadcrumb-item"><a href="pretest.php">Pre-test</a></li>
                <li class="breadcrumb-item"><a href="drill.php">Drill</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lesson</li>
            </ol>
        </nav>
    </div>
    <!--method 1-->
    <div class="content slideLeft">
      <div class="px-3 pt-3">
          <h3 class="title">Lesson 3: Least Common Multiple</h3>
      </div>
      <section id="content" class="px-3 ">      
        <p class="intro1" ><h5><b>Let us start learning the new concept with the help of this problem.</b></h5>
            Read and understand the problem.
        </p>
        <center><img src = "../assets/img/ms.janice.png" class="prob"></center>
        <div class="">
          <p>What is asked in the Problem?<br>
            <span><i class="bi bi-patch-question mx-2 ps-4"></i>The least possible number of bottles that the class gathered.
            </span>
          </p>
          <p>What are the given facts that can help you solve the problem?<br>
            <span><i class="bi bi-patch-question mx-2 ps-4"></i>boxes of 4, boxes of 6.
            </span>
          </p>
          <p>What can you say about the class of Ms. Janice?<br>
            <span><i class="bi bi-patch-question mx-2 ps-4"></i>They are helping restore our planet by means of recycling.</span>
          </p>
        </div>
        <p class="m-0">The problem is about finding the least common multiple 
            because it requires us to find the least possible number of bottles
             that the class gathered.<br><span style="color:#F05161">Let's try Solving the problem!</p> 
        <div class="d-flex justify-content-left">
          <div class="fact"><p class="mb-0">
          <span class="title blue">Least Common Multiple</span> (LCM) is the smallest multiple common to the given numbers.</p>
          </div>
        </div>
        Let us try finding the answer to the given problem using different methods.
        <div>
          <div class="d-flex justify-content-left">
            <div class="fact"><p class="mb-0">
              Method 1: <span class="title red"><u>Listing Method</u></span></p>
            </div>
          </div>
          <div class="row g-1">
            <div class="col-sm-6">
            Step 1: List the multiples of <span class="title yel">4</span> and <span class="title yel">6</span>.<br>
              &nbsp;&nbsp;Multiples of <span class="title yel">4</span>: <u>4, 8, <span class="title red">12</span>, 16, 10, <span class="title red">24</span>, 28, 32, <span class="title red">36</span>, 40, 44...</u><br>
              &nbsp;&nbsp;Mulitples of <span class="title yel">6</span>: <u>6, <span class="title red">12</span>, 18, <span class="title red">24</span>, 30, <span class="title red">36</span>, 42, 48, 54, 60, 64...</u><br>
              Step 2: Find all the common multiples of <span class="title yel">4</span> and <span class="title yel">6</span>.<p class="m-0">
                &nbsp;&nbsp;Common Multiples of <span class="title yel">4</span> & <span class="title yel">6</span>: <u><span class="title red"> 12, 24 </span></u> and <u> <span class="title red">36</span></u></h6><br>
            </div>
            <div class="col-sm-6">
              <p class="mb-0">
                Step 3: The smallest number will be the LCM of <span class="title yel">4</span> and <span class="title yel">6</span>.<p class="m-0">
                &nbsp;&nbsp;Out of all the common multiples of <span class="title yel">4</span> & <span class="title yel">6</span>, <span class="title red">
                &nbsp;&nbsp;12 </span> has the smallest value, therefore...<br>
            </p>  
            <div class="d-flex justify-content-center">
            <div class="fact">
              <p class="mb-0"><span class="title red">Least Common Multiple</span> (LCM) : <u> 12</u></p>
            </div>
          </div>
        </div>
            </div>
          </div>
        <!--method2-->
        <div class="pt-2" style="border-top:2px solid #9b9b7a">
            <div class="d-flex justify-content-start">
              <div class="fact"><p class="mb-0">
                Method 2: <span class="title purple"><u>Prime Factorization</u></span></p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <p>
                Step 1: Write each number as a product of its prime factors using factor tree method.
                </p>
                <div class="row">
                  <div class="col-6 d-flex justify-content-end">
                    <img src = "../assets/img/LCMmethod2.1.png" class="janice w-50">
                  </div>
                  <div class="col-6">
                    <img src = "../assets/img/LCMmethod2.2.png" class="janice w-50">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <p class="m-0">
                Step 2: List down the prime factors of <span class="title yel">4</span> and <span class="title yel">6</span>.
                  <br><span class="ps-5"><span class="title yel">4</span> = <span class="title purple">2</span> x <span class="title purple">2</span></span><br><span class="ps-5"> <span class="title yel">6</span> =  <span class="title purple">2</span> x <span class="title purple">3</span></span>
                </p>
               <p class="m-0">Step 3: Multiply the common prime factor of <span class="title yel">4</span> and <span class="title yel">6</span> to the other factors to get the LCM.</p>
                  <div><center><img src = "../assets/img/LCMmethod2.3.png" style="width:50%"></center></div>
              </div>
            </div>
            <div class="d-flex justify-content-center">
              <div class="fact">
                <p class="mb-0"><span class="title purple">Least Common Multiple</span> (LCM) : <u> 12</u></p>
              </div>
            </div>
          </div>
          <div>
              <!--method3-->
            <div class="d-flex justify-content-start">
              <div class="fact"><p class="mb-0">
                Method 3: <span class="title yel"><u>Continuous Division</u></span></p>
              </div>
            </div>
            <p class="m-0">
              Step 1: Write the given numbers horizontally and find a prime number that will divide all the given numbers without a remainder, if possible.
            <br><span class="ps-5"><img src = "../assets/img/LCMmethod3.1.png" style="width:110px;"></span></p>
            <p class="m-0">
              Step 2: Divide the given numbers by that prime number and write the quotients below the dividends.
              <br><span class="ps-5"><img src = "../assets/img/LCMmethod3.2.png" style="width:150px;"></span></p>
            <p class="m-0">
              Step 3: Continue the process until all the quotients have no more common prime divisor.
              <br><span class="ps-5"><img src = "../assets/img/LCMmethod3.3.png" style="width:150px;"></span></p>
            <p class="m-0">
              Step 3: Multiply all the prime divisors common to the given numbers to get the GCF.
              <br><span class="ps-5"><img src = "../assets/img/LCMmethod3.4.png" style="width:250px;" c> </span></p>
            <div class="d-flex justify-content-center">
              <div class="fact">
                <p class="mb-0"><span class="title yel">Least Common Multiple</span> (LCM) : <u> 12</u></p>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="fact">
              <p class="mb-0">Therefore, the least possible number of bottles that the class gathered is<span class="title blue"> 12</span> </p>
            </div>
          </div>
        </div>
    </section>
        <a href="drill.php" class="title btnback btn btns">Back</a>
        <a href="lesson-video.php" class="title btnnext btn btns">Next</a>
  </div>
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