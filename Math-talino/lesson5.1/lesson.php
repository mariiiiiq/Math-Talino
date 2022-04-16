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
    <div class="pt-3 ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../map.php">Lesson List</a></li>
                <li class="breadcrumb-item active">Lesson 5.1</li>
                <li class="breadcrumb-item"><a href="../lesson5/objective.php">Objective</a></li>
                <li class="breadcrumb-item"><a href="pretest.php">Pre-Test</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lesson</li>
            </ol>
        </nav>
    </div>
    <div class="content slideLeft">
      <div class="px-3 pt-3">
          <h3 class="title">Lesson 5: Addition and Subtraction of Similar Fractions </h3>
      </div>
      <section id="content" class="px-3 ">      
        <p class="intro1" ><h5><b>Let us start learning the new concept with the help of this problem.</b></h5>
            Read and understand the problem.
        </p>
        <center><img src = "../assets/img/mike.png" class="prob"></center>
        
        <p class="m-0">Mike seemed to have done a lot of walking. How do we find out the distance he walked? 
          <br>Let us study how we can visualize addition of similar fractions.
        </p>  
        <div class="pt-2">
          <div class="d-flex justify-content-left">
            <div class="fact mx-0"><p class="mb-0">
              <span class="title purple"><u>Proper Fraction</u></span></p>
            </div>
          </div>
          <div class="row g-1">
            <div class="col-sm-5">
              <center><img src = "../assets/img/l5.1.1.png" class="w-50"></center>
            </div>
            <div class="col-sm">
              <div class="">
                <p>To get the distance Mike had walked, we add the fractions. <br>Notice that the <span class="title blue">fractions</span> are similar because 
                they have the same <span class="title purple">denominators</span>. Remember in adding <span class="title blue">similar fractions</span>,
                just add the <span class="title red">numerators</span> and simply copy the <span class="title purple">denominator.</span><br>
                  </p>
              </div>
            </div>
          </div>
          <div class="row g-1 mt-2">
            <div class="col-sm">
                  Observe the figure <span class="drag">on the right side</span><span class="type">below</span>. Each box represents<div class="fraction title"><span class="numerator red">1</span><span class="denominator purple">
                10</span></span></div> of a kilometer. The <span class="title red">red</span> shaded squares represents the distance travelled by Mike to the store and the <span class="title yel">yellow</span> shaded squares represents the distance travelled by Mike to the flowershop.
            </div>
            <div class="col-sm-5">
                <center><img src = "../assets/img/l5.1.2.png" class="prob"></center>        
            </div>        
                <p>We can say that, Mike travelled <span class="fraction title"><span class="numerator red">3</span><span class="denominator purple">10</span></span></span> 
                  of a kilometer to the store. Mike travelled 
                  <span class="fraction title"><span class="numerator yel">4</span><span class="denominator purple"> 10</span></span></span> of a kilometer to the flowershop.
                  <div class="d-flex justify-content-left">
                    <div class="fact mx-0">
                      <p class="mb-0">
                      Therefore, Mike walked a distance of <span class="fraction title purple"><span class="numerator">7</span><span class="denominator">10</span></span></span> of a kilometer to buy rice and flowers.
                    </p>
                    </div>
                  </div>
                </p>
            </div>
          </div>
        <div class="pt-2" style="border-top:2px solid #9b9b7a">
          <div class="d-flex justify-content-start">
            <div class="fact mx-0"><p class="mb-0">
              <span class="title red"><u>Improper Fraction</u></span></p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <p>
              Sometimes, the answer we get is an <span class="title red">improper fraction</span>. If that happens, simply change the <span class="title red">improper fraction</span> to a <span class="title yel">mixed number</span>. 
              See the example <span class="type">below</span><span class="drag">on the side</span>.
              </p>
            </div>
            <div class="col-sm-6">
              <center><img src = "../assets/img/lesson53.png" class="w-50"></center>
            </div>
          </div>
          <div>
            <div class="row">
              <div class="col-sm">
                  In adding similar fractions, you have to:
                <ol> 
                  <li>  add the numerators and copy the denominator
                  <li>  reduce your answer to lowest term
                </ol> 
                <p class="m-0">Let us have another example.<br></p>
                <img src = "../assets/img/lesson55.png" class="prob">
              </div>
              <div class="col">
              <p class="m-0">Since both the numerator and the denominator can still be divided by <span class="title yel">2</span>, their GCF, then it will be reduced to lowest term<br></p>
                <img src = "../assets/img/lesson56.png" class="w-50"><br>
                The answer is
                <div class="fraction"><span class="title purple"><span class="numerator">6</span><span class="denominator">
                10</span></span></div> or
                <div class="fraction"><span class="title purple"><span class="numerator">3</span><span class="denominator">
                5</span></span></div>
                This is already the final answer because there is no GCF that can divide both the numerator and denominator
              </div>
            </div> 
          </div> 
        </div>
      </div>
    </section>
    <a href="pretest.php" class="title btnback btn btns">Back</a>
    <a href="lesson-video.php" class="title btnnext btn btns">Next</a>
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