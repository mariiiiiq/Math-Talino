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
                <li class="breadcrumb-item"><a href="objective.php">Objective</a></li>
                <li class="breadcrumb-item"><a href="pretest.php">Pre-test</a></li>
                <li class="breadcrumb-item"><a href="drill.php">Drill</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lesson 2: Greatest Common Factor</li>
            </ol>
        </nav>
    </div>
    <div class="content slideLeft">
      <div class="px-3 pt-3">
          <h3 class="title">Lesson 2: Greatest Common Factor</h3>
      </div>
      <section id="content" class="px-3 ">      
        <p class="intro1" ><h5><b>Let us start learning the new concept with the help of this problem.</b></h5>
            Read and understand the problem.
        </p>
        <center><img src = "../assets/img/nancy.png" class="ross"></center>
        <div class="">
          <p>What is asked in the Problem?<br>
            <span><i class="bi bi-patch-question mx-2 ps-4"></i>The greatest number of vases that Rachel will use.
            </span>
          </p>
          <p>What are the given facts that can help you solve the problem?<br>
            <span><i class="bi bi-patch-question mx-2 ps-4"></i>8 red roses, 12 pink roses.
            </span>
          </p>
          <p>What can you say about Rachel? What kind of person is she?<br>
            <span><i class="bi bi-patch-question mx-2 ps-4"></i>Rachel is grateful to have her teachers. She is
              thoughtful.</span>
          </p>
        </div>
        <p class="m-0">The problem is about finding the greatest common factor
          because it requires us to find the greatest quantity of equal groups
          that we can make with the red and pink roses.<br><span style="color:#F05161">Let's try to solve it!</p> 
        <div class="d-flex justify-content-left">
          <div class="fact"><p class="mb-0">
          <span class="title" style="color:#577BA0">Greatest Common Factor</span> (GCF) is the biggest factor or number common to the given numbers.</p>
          </div>
        </div>
        You can find the answer to the given problem using different methods.
        <div>
          <div class="d-flex justify-content-left">
            <div class="fact"><p class="mb-0">
              Method 1: <span class="title" style="color:#F05161"><u>Listing Method</u></span></p>
            </div>
          </div>
          <div class="row g-1">
            <div class="col-sm-6">
              Step 1: List the factors of <span class="title" style="color:#F2BC28">8</span> and <span class="title" style="color:#F2BC28">12</span>.
              <center><img src = "../assets/img/2table1.png" class="w-100"></center>
            </div>
            <div class="col-sm-6">
              <p class="mb-0">
                Step 2: Arrange the factors from the smallest to biggest.<p class="m-0">
                &nbsp;&nbsp;Factors of <span class="title" style="color:#F2BC28">8</span>: <u>1 , 2 , 4 and 8</u><br>
                &nbsp;&nbsp;Factors of <span class="title" style="color:#F2BC28">12</span>: <u>1 , 2 , 3 , 4 , 6 and 12</u>
                Step 3: Find the common factor/s of <span class="title" style="color:#F2BC28">8</span> and <span class="title" style="color:#F2BC28">12</span> (red numbers).<br>
                &nbsp;&nbsp;Factors of <span class="title" style="color:#F2BC28">8</span>: <u><span class="title" style="color:#F05161">1</span>, <span class="title" style="color:#F05161">2</span>, <span class="title" style="color:#F05161">4</span> and 8</u><br>
                &nbsp;&nbsp;Factors of <span class="title" style="color:#F2BC28">12</span>: <u><span class="title" style="color:#F05161">1</span>, <span class="title" style="color:#F05161">2</span>, 3, <span class="title" style="color:#F05161">4</span> , 6 and 12</u>
                <br>Common Factors: <u>1 , 2, and 4</u>. The greatest number will be the GCF.
              </p>  
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="fact">
              <p class="mb-0"><span class="title" style="color:#F05161">Greatest Common Factor</span> (GCF) : <u> 4</u></p>
            </div>
          </div>
        </div>
        <div class="pt-2" style="border-top:2px solid #9b9b7a">
          <p class="m-0">&nbsp;&nbsp;&nbsp;&nbsp;In the next 2 ways of finding the greatest common factor of two numbers, 
            it is important for you to know how to write a number as a product of its prime factors. When a composite number is written as a product of all of its
            prime factors, we have the <span class="title" style="color:#577BA0">Prime Factorization</span> of the number. For example, the number 16 can be written as a product of 
            its prime factors as: 16 = 2 x 2 x 2 x 2.
          </p>
          <div class="row g-1">
            <div class="col-sm-6">
              <div class="d-flex justify-content-center">
                <div class="fact">
                  <p class="mb-0"><span class="title" style="color:#F05161">Factor Tree</span> is a diagram used to determine the prime factors of a number.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <img src = "../assets/img/factortree.png" class="ross" style="float:right">
                </div>
                <div class="col">
                  <p>
                    The number 16 can be written in prime factorization as 2 x 2 x 2 x 2. All of the factors are prime numbers.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex justify-content-center">
                <div class="fact">
                  <p class="mb-0">In <span class="title" style="color:#F2BC28">Continuous Division</span>, we need to divide number by its prime factor and continue dividing until we reach the quotient 1.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <img src = "../assets/img/division.png" class="ross" style="float:right">
                </div>
                <div class="col">
                  <p>
                    The number 16 can be written in prime factorization as 2 x 2 x 2 x 2. All of the factors are prime numbers.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="fact">
              <p class="mb-0">The expression "2 x 2 x 2 x 2" is said to be the <span class="title" style="color:#577BA0">Prime Factorization</span> of 16.</p>
            </div>
          </div>
          <div>
            <div class="d-flex justify-content-start">
              <div class="fact"><p class="mb-0">
                Method 2: <span class="title" style="color:#F05161"><u>Prime Factorization</u></span></p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <p>
                  Step 1: Write each number as a product of its prime factors using factor tree method.
                </p>
                <div class="row">
                  <div class="col-6 d-flex justify-content-end">
                    <img src = "../assets/img/method2.png" class="ross">
                  </div>
                  <div class="col-6">
                    <img src = "../assets/img/method2.2.png" class="ross">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <p class="m-0">
                  Step 2: List down the prime factors of <span class="title" style="color:#F05161">8</span> and <span class="title" style="color:#F05161">12</span>.
                  <br><span class="ps-5">8 = 2 x 2 x 2</span><br><span class="ps-5">12 = 2 x 2 x 3</span>
                </p>
               <p class="m-0">Step 3: Multiply the common prime factors of <span class="title" style="color:#F05161">8</span> and <span class="title" style="color:#F05161">12</span> to get the GCF.</p>
                  <div><img src = "../assets/img/method2.3.png" class="nancy"></div>
              </div>
            </div>
            <div class="d-flex justify-content-center">
              <div class="fact">
                <p class="mb-0"><span class="title" style="color:#F05161">Greatest Common Factor</span> (GCF) : <u> 4</u></p>
              </div>
            </div>
          </div>
          <div>
            <div class="d-flex justify-content-start">
              <div class="fact"><p class="mb-0">
                Method 3: <span class="title" style="color:#F2BC28"><u>Continuous Division</u></span></p>
              </div>
            </div>
            <p class="m-0">
              Step 1: Write the given numbers horizontally and find a prime number that will divide all the given numbers without a remainder, if possible.
            <br><span class="ps-5"><img src = "../assets/img/method3.1.png" style="width:150px;"></span></p>
            <p class="m-0">
              Step 2: Divide the given numbers by that prime number and write the quotients below the dividends.
              <br><span class="ps-5"><img src = "../assets/img/method3.2.png" style="width:150px;"></span></p>
            <p class="m-0">
              Step 3: Continue the process until all the quotients have no more common prime divisor.
              <br><span class="ps-5"><img src = "../assets/img/method3.3.png" style="width:150px;"></span></p>
            <p class="m-0">
              Step 3: Multiply all the prime divisors common to the given numbers to get the GCF.
              <br><span class="ps-3"><img src = "../assets/img/method3.4.png" style="width:300px;"> </span></p>
            <div class="d-flex justify-content-center">
              <div class="fact">
                <p class="mb-0"><span class="title" style="color:#F2BC28;">Greatest Common Factor</span> (GCF) : <u> 4</u></p>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="fact">
              <p class="mb-0">Therefore, <span class="title" style="color:#577BA0;">4</span> is the greatest possible number of vases that Rachel can use.</p>
            </div>
          </div>
        </div>
    </section>
        <a href="lesson-video.php" class="title btnnext btn btns">Next</a>
  </div>
  </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        $(".next").mouseenter(function(){
          $('.next').addClass('floating');
        });
        $(".next").mouseleave(function(){
          $('.next').removeClass('floating');
        });
        $(document).ready(function() {
        $('.numbers').click(function(){
          $('.see').css('display', 'block');
        });
        $('.see').click(function(){
          $('.summary').css('display', 'block');
        });
        $('.circle').click(function(){
          $('#circle').css('display', 'block');
        });;
      });
      $(document).ready(function () {
          $('#btn1').click(function(){
            $('.circle').css("display", "block");
          });
          let exis = "<img src = '../assets/img/exis.png' class='exis'>";
          
          for(let i=1;i<=100;i++){
            
            $('#'+i).click(function(){
              composite(i);
            });
            $('#btnshow').click(function(){
              $('.circle').css("display", "block");
              composite(i);
            });
          }
          function composite(i){
            let composite = false;
            if(i%2==0 && i!=2){
              composite = true;
            }
            if(i%3==0 && i!=3){
              composite = true;
            }
            if(i%5==0 && i!=5){
              composite = true;
            }
            if(i%7==0 && i!=7){
              composite = true;
            }
            if(composite==true){
              $('#'+i).append(exis);
            }
          }
      });
    </script>
  </body>
</html>