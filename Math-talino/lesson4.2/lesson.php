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
          <a class="nav-link" href="../games.php">Games</a>
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
                <li class="breadcrumb-item active">Lesson 4.2</li>
                <li class="breadcrumb-item"><a href="../lesson4/objective.php">Objective</a></li>
                <li class="breadcrumb-item"><a href="pretest.php">Pre-test</a></li>
                <li class="breadcrumb-item"><a href="drill.php">Drill</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lesson</li>
            </ol>
        </nav>
    </div>
    <!--start-->
    <div class="content slideLeft">
      <div class="px-3 pt-3">
          <h3 class="title">Lesson 4.2: Changing Improper Fraction to Mixed Number and Vice versa</h3>
      </div>
      <section id="content" class="px-3 ">      
        <p class="intro1" ><h5><b>Let us start learning the new concept with the help of this problem.</b></h5>
            Read and understand the problem.
        </p>
        <center><img src = "../assets/img/monica.png" class="prob"></center>
        <div class="">
          <p>What can you say about Monica? What kind of person is she?<br>
            <span><i class="bi bi-patch-question mx-2 ps-4"></i>Monica loves to serve her visitors. She is very hospitable.</span>
          </p>
          <p>What is asked in the Problem?<br>
            <span><i class="bi bi-patch-question mx-2 ps-4"></i>The number of whole cake and fraction part of cake that she will serve her visitors.
            </span>
          </p>
          <p>What are the given facts that can help you solve the problem?<br>
            <span><i class="bi bi-patch-question mx-2 ps-4"></i>
            <span class="fraction title red"><span class="numerator">7</span><span class="denominator">3</span></span>
            </span>
          </p>
        </div>
        <div>
          <p class="m-0">Let us try to answer the problem by using the figures below.</p>
          <div class="row">
            <div class="col-sm-5">
              <center><img src = "../assets/img/l43.png" class="w-100"></center>
            </div>
            <div class="col-sm">
              <p class="m-0">
                A. <span class="fraction title"><span class="numerator red">3</span><span class="denominator purple">
                3</span></span> or <span class="fraction title yel">1</span> (If the <span class="fraction title red">numerator</span> and <span class="fraction title purple">denominator</span> are the same, the <span class="fraction title blue">fraction</span> is equal to <span class="fraction title yel">1</span>.)<br>
                B. <span class="fraction title"><span class="numerator red">3</span><span class="denominator purple">
                3</span></span> or <span class="fraction title yel">1</span><br>
                C. <span class="fraction title purple"><span class="numerator">1</span><span class="denominator">
                3</span></span><br>
              </p>
              <p class="m-0">Notice that there are 2 (A and B) </span>whole cakes and <span class="fraction title purple"><span class="numerator">1</span><span class="denominator">3</span></span> 
                (C) of a cake.<br>
                Combine the numbers, write it as <span class="title yel">2<span class="fraction"><span class="numerator">1</span><span class="denominator">3</span></span></span> and read it as two and one-third.
              </p>  
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="fact m-0 py-0">
              <p class="mb-0">So, we can say that <span class="fraction title red"><span class="numerator">7</span><span class="denominator">3</span></span>(<span class="title red">Improper fraction</span>) is equal to
                <span class="title yel">2<span class="fraction"><span class="numerator">1</span><span class="denominator">3</span></span></span>(<span class="title yel">Mixed Number</span>)
            </div>
          </div>
        </div>
        <div class="pt-2 mt-2" style="border-top:2px solid #9b9b7a">
          <p>Now let us try changing <span class="title red">Improper Fraction</span> to <span class="title yel">Mixed Number</span> by using computation.</p>
          <div class="row">
            <div class="col-sm-5">
            <center><img src = "../assets/img/l45.png" class="w-100"></center>
            </div>
            <div class="col-sm">
              <p class="m-0">To change <span class="title red">Improper Fraction</span> to <span class="title yel">Mixed Number</span>:<br>
                1: Divide the <span class="title red">numerator</span> by the <span class="title purple">denominator</span>;<br>
                2: If the quotient has no remainder then the answer is simply the quotient itself. To represent it as <span class="title blue">fraction</span>, use <span class="title purple">1</span> as its <span class="title purple">denominator</span>;<br>
                3: The quotient has a remainder, then it can be expressed as <span class="title yel">Mixed Number</span>:
                <ol type="a" class="m-0">
                  <li>the quotient is the <span class="title yel">whole number</span>;</li>
                  <li>the remainder is the <span class="title red">numerator</span>; and</li>
                  <li>the divisor is the <span class="title purple">denominator</span>.</li>
                </ol>
              </p>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="fact m-0 py-0">
              <p class="mb-0">So, <span class="fraction title red"><span class="numerator">7</span><span class="denominator">3</span></span>
              which is an <span class="title red">Improper fraction</span> can be written as
                <span class="title yel">2<span class="fraction"><span class="numerator">1</span><span class="denominator">3</span></span></span><span class="title yel"> Mixed Number</span>.
            </div>
          </div>
        </div>
        <div class="pt-2 mt-2" style="border-top:2px solid #9b9b7a">
          <p class="m-0">Now let us try the other way around. Changing <span class="title yel">Mixed Number</span> to <span class="title red">Improper Fraction</span> by using computation.</p>
          <div class="row">
            <div class="col-sm-4">
            <center><img src = "../assets/img/l46.png" class="w-100"></center>
            </div>
            <div class="col-sm">
              <p >To change <span class="title yel">Mixed Number</span> to <span class="title red">Improper Fraction</span>:<br>
                1: Multiply the <span class="title purple">Denominator</span>(<span class="title purple">3</span>) by the <span class="title yel">whole number</span>(<span class="title yel">2</span>);<br>
                2: Add the product(<span class="title blue">6</span>) to the <span class="title red">numerator</span>(<span class="title red">1</span>);<br>
                3: Write the sum(<span class="title blue">7</span>) as the <span class="title red">numerator</span> of the <span class="title red">improper fraction</span>; and<br>
                4: Copy the <span class="title purple">Denominator</span>(<span class="title purple">3</span>)     
              </p>
              <div class="d-flex justify-content-center">
                <div class="fact m-0 py-0">
                  <p class="mb-0">Therefore, <span class="title yel">2<span class="fraction"><span class="numerator">1</span><span class="denominator">3</span></span></span> which is a <span class="title yel"> Mixed Number</span>
                  can be written as an <span class="title red">Improper fraction</span> as
                  <span class="fraction title red"><span class="numerator">7</span><span class="denominator">3</span></span>
                  and read as seven-third.
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>
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