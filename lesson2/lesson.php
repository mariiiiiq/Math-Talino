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
  <style>
      .dropzone{
          width: 80px;
          height: 50px;
      }
      .dropzones{
          font-size: 25px;
          font-weight: bold;
          text-align: center;
      }
      .choices{
        width: 100px;
      }
      .button{
        font-weight: bold;
      }
      .token{
        width: 100px;
        height: 100px; 
      }
      #ip2 {
        border-radius: 25px;
        border: 2px solid #947D9E;
        padding: 20px; 
        width: 60px;
        height: 15px;    
      }
      #ip6 {
        border-radius: 50%;
        border: 2px solid #947D9E;
        padding: 20px; 
        width: 70px;
        height: 15px;
      }
      .method2{
        margin: auto;
        top: 50px;
      }
      .A {
        text-indent: 80px;
      }
      .tree{
        width: 300px;
        height: 300px;
      }
      .definition{
        padding: 15px;
        position: ;
        background-color: #EF7D96;
        top: 5000;
        left: 100px;
        margin: auto;
        position: absolute;
      }
      .f12{
        width: 300px;
        height: 300px;
      }
      .f8{
        width: 300px;
        height: 300px;
      }
      .factortree{
        width: 200px;
        height: 200px;
        margin: 5px;
        float: bottom;
      }
      .continue{
        width: 200px;
        height: 200px;
        margin: 5px;
        float: bottom;
      }
      td {
        text-align: top left;
      }
      .multi{
        width: 300px;
        height: 100px;
        margin: 5px;
        float: bottom;
      }
      .conti{
        width: 300px;
        height: 300px;
        margin: 5px;
        float: bottom;
      }
  </style>
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
    <div class="px-3">
        <h3 class="title">Lesson 2: Greatest Common Factor</h3>
    </div>
    <section id="content" class="px-3" style="display:none;">
      <p class="intro1" >Let us start learning the new concept with the help of this problem.<br>
            Read the story problem.
      </p>
      <img src = "../assets/img/nancy.png" class="nancy w-100">
        <div class="">
            <p>What is asked in the Problem?<br>
            <span><i class="bi bi-patch-question mx-2 ps-4"></i>The greatest number of vases that Nancy will use.
            What are the given facts that can help you solve the problem?
            </span>
            </p>
            <p>What are the given facts that can help you solve the problem?<br>
            <span><i class="bi bi-patch-question mx-2 ps-4"></i>8 red gumamela flowers</span><br>
            <span><i class="bi bi-patch-question mx-2 ps-4"></i>12 pink gumamela flowers</span>
            </p>
            <p>What can you say about Nancy? What kind of person is she?<br>
            <span><i class="bi bi-patch-question mx-2 ps-4"></i>Nancy is grateful to have her teachers. She is thoughtful.</span><br>
            </p>
        </div>
      <p>You can find the answer to the given problem using different methods.</p> 
      
        <!-- Method1 -->
        <div> 
        <h4 style="font-weight:bold">Let us answer the problem using the first method.</h4>
        <h3 style="font-weight:bold" font color="#F3F1EE"><u>Method 1: Listing Method</u></h3>

        <h6 style="font-weight:bold">Arrange the factors from smallest to biggest</h6>
        <div class="row">
        <div class="col">
          <div class="numbers">
            <table class="tblnum">
            <tr>
                <td>
                    <h4 class="text-center"><span class="title" draggable="true" id="1"><u>1</u></span></h4>
                </td>
                <td>
                    <h4 class="text-center"><span class="title" draggable="true" id="2"><u>2</u></span></h4>
                </td>
                <td>
                    <h4 class="text-center"><span class="title" draggable="true" id="5"><u>5</u></span></h4>
                </td>
                <td>
                    <h4 class="text-center"><span class="title" draggable="true" id="7"><u>7</u></span></h4>
                </td>
                <td>
                    <h4 class="text-center"><span class="title" draggable="true" id="11"><u>11</u></span></h4>
                </td>
            </tr>
            <tr>
                <td>
                    <h4 class="text-center"><span class="title" draggable="true" id="9"><u>9</u></span></h4>
                </td>
                <td>
                    <h4 class="text-center"><span class="title" draggable="true" id="4"><u>4</u></span></h4>
                </td>
                <td>
                    <h4 class="text-center"><span class="title" draggable="true" id="0"><u>0</u></span></h4>
                </td>
                <td>
                    <h4 class="text-center"><span class="title" draggable="true" id="15"><u>15</u></span></h4>
                </td>
                <td>
                    <h4 class="text-center"><span class="title" draggable="true" id="6"><u>6</u></span></h4>
                </td>
            </tr>
            </table>
            <table style="width:100%;">
                <tbody class="dropzones">
                    <tr >
                        <td>8 = </td>
                        <td style="text-align:center">
                            <input class="dropzone" id="num1"></input><span class="asd" id="drop1"></span> 
                        </td>
                        <td style="text-align:center">2</td>
                        <td style="text-align:center">
                            <input class="dropzone" id="num2"></input><span class="asd" id="drop2"></span> 
                        </td>
                        <td style="text-align:center">8</td>
                    </tr>
                                
                    <tr >
                      <td>12 = </td>
                        <td style="text-align:center">1</td>
                        <td style="text-align:center">
                           <input class="dropzone" id="num3"></input><span class="asd" id="drop3"></span> 
                        </td>
                        <td style="text-align:center">3</td>
                        <td style="text-align:center">4</td>
                        <td style="text-align:center">
                            <input class="dropzone" id="num4"></input><span class="asd" id="drop4"></span> 
                        </td>
                        <td style="text-align:center">12</td>
                    </tr>
            </table>
                <br>
                <table style="width:90%">
                <tbody class="choices">
                <tr >
                    <td>What are the common factors of 8 & 12?<br> Choose the correct answer by clicking one of the tokens below.</td>
                </tr>
                <tr>
                    <td>
                    <div class="button">
                      <button style= "border:none; background-color: transparent;" onclick="AnswerA()" class="button"><img src="../assets/img/token1.png" style="width:50%" class="token">A. 1, 2 & 4 </button>&nbsp;  &nbsp;
                    </div>
                    </td>
                    <td>
                      Your Answer:
                      <input type="text" id="ip2"/>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div class="button">
                      <button style= "border:none; background-color: transparent;" onclick="AnswerB()" class="button"><img src="../assets/img/token2.png" style="width:50%" class="token">B. 2, 3 & 4 </button>&nbsp;  &nbsp;
                    </div>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div class="button">
                      <button style= "border:none; background-color: transparent;" onclick="AnswerC()" class="button"><img src="../assets/img/token3.png" style="width:50%" class="token">C. 2, 3 & 6 </button>&nbsp;  &nbsp;
                    </div>
                    </td>
                </tr>
                </table>
                <table>
                  <tr>
                    <td><p>Greatest Common Factor (GCF) is the biggest factor or number common to the given numbers.
                    Based on your answer above, what is the greatest common factor (GCF) of 8 & 12?<br><br>
                    </p>
                     </td>
                  </tr>
                  <tr>
                    <td>
                    <input type="text" id="ip6"/><br>
                    </td>
                  </tr>
                </table>
            <button onclick="displayPhrase()">See result</button>&nbsp;  &nbsp;
          </div>
        </div>
        <div class="col">
        <table style ="width: 100%">
            <tr>
                <th style="text-align:center"><h5 style="font-weight:bold" ><u>Factors of 8</u></th>
                <th style="text-align:center"><h5 style="font-weight:bold"><u>Factors of 12</u></th>
            </tr>
            <tr>
                <td style="text-align:center">
                    1 x 8<br>
                    2 x 4
                </td>
                <td style="text-align:center">
                    1 x 12<br>
                    2 x 6<br>
                    3 x 4
                </td>
            </tr>
            </table>
          <h5 class="bold">Instruction:</h5>
          <p>The items shown above are the listed factors of 8 & 12. Use them as your reference to fill in the blanks and
               arrange the factors of 8 & 12 from smallest to biggest number. Drag the given numbers to the blank spaces below.
          </p>
        </div>
      </div>

      <!--method 2-->
      <div class="method2">
      <h4 style="font-weight:bold">Now that we know how to find the greatest common factor of two numbers or GCF,<br>
      let us now explore other methods in finding the GCF.</h4>
       <p> When a composite number is written as a product of all of its prime factors, we have the Prime Factorization of the number.</p> 
       <span><i class="bi bi-patch-question mx-2 ps-4"></i>Example:
       <p class="A"> 16 = 2 x 2 x 2 x 2 </p><br>
       <p>Factor Tree<br>
          <span><i class="bi bi-patch-question mx-2 ps-4"></i>a diagram used to determine the prime factors of a number.</span><br>
          <span><i class="bi bi-patch-question mx-2 ps-4"></i>The number 16 can be written in prime factorization as 2 x 2 x 2 x 2. All of the factors are prime numbers.</span><br>
        </p>
          <table style="width: 50%">
                  <tr>
                    <th style="text-align:center"><h5 style="font-weight:bold" ><u>Factor Tree</u></th>
                    <th style="text-align:center"><h5 style="font-weight:bold"><u>Continuous Division</u></th>
                </tr>
                <tr>
                  <td>
                  <p>A factor tree is a diagram used to determine the prime factors of a number.
                    The number 16 can be written in prime factorization as 2 x 2 x 2 x 2. All of the factors are prime numbers.</p>
                  </td>
                  <td>
                  <p>In Continuous Division, we need to divide number by its prime factor and continue dividing until we reach the quotient 1. prime factors of a number.
                    The number 16 can be written in The number 16 can be written in prime factorization as 2 x 2 x 2 x 2.<br> All of the factors are prime numbers.</p>
                  </td>
                </tr>
                <tr>
                  <td style="text-align:center">
                  <div class="factortree">
                    <img src="../assets/img/factor3.png" class="factor3 w-100">
                  </div>
                  </td>

                  <td style="text-align:center">
                  <div class="continue">
                    <img src="../assets/img/cont.png" class="cont w-100">
                  </div>
                  </td>
                </tr>
            </table>
      <div class="row">
        <div class="col">
          <br>
        <h4 style="font-weight:bold">Let us answer the problem using the second method.</h4>
        <h3 style="font-weight:bold" font color="#F3F1EE"><u>Method 2: Factor Tree</u></h3>
        <h6 style="font-weight:bold">Write each number as a product of its prime factors using factor tree method</h6>
          <div class="numbers">
            <table class="tblnum" style="width: 50%">
            <tr>
                <td>
                    <h4 class="text-center"><span class="title" draggable="true" id="1"><u>1</u></span></h4>
                </td>
                <td>
                    <h4 class="text-center"><span class="title" draggable="true" id="2"><u>2</u></span></h4>
                </td>
                <td>
                    <h4 class="text-center"><span class="title" draggable="true" id="3"><u>3</u></span></h4>
                </td>
                <td>
                    <h4 class="text-center"><span class="title" draggable="true" id="4"><u>4</u></span></h4>
                </td>
                <td>
                    <h4 class="text-center"><span class="title" draggable="true" id="5"><u>5</u></span></h4>
                </td>
            </tr>
            </table>
            <table style="width:50%;">
                <tbody class="dropzones">
                    <tr >
                        <td>8 = </td>
                        <td style="text-align:center">
                            <input class="dropzone" id="ftree1"></input><span class="asd" id="tree1"></span> 
                        </td>
                        <td style="text-align:center">X</td>
                        <td style="text-align:center">
                            <input class="dropzone" id="ftree2"></input><span class="asd" id="tree2"></span> 
                        </td>
                        <td style="text-align:center">X</td>
                        <td style="text-align:center">
                            <input class="dropzone" id="ftree3"></input><span class="asd" id="tree3"></span> 
                        </td>
                    </tr>
                                
                    <tr >
                      <td>12 = </td>
                      <td style="text-align:center">
                            <input class="dropzone" id="ftree4"></input><span class="asd" id="tree4"></span> 
                        </td>
                        <td style="text-align:center">X</td>
                        <td style="text-align:center">
                            <input class="dropzone" id="ftree5"></input><span class="asd" id="tree5"></span> 
                        </td>
                        <td style="text-align:center">X</td>
                        <td style="text-align:center">
                            <input class="dropzone" id="ftree6"></input><span class="asd" id="tree6"></span> 
                        </td>
                    </tr>
            </table>
            <button onclick="revealAns()">See result</button>&nbsp;  &nbsp;
          </div>
        </div>
        <div class="col">
        <h5 class="bold">Instruction:</h5>
          <p>The items shown below are the prime factors of 8 & 12. Use them as your reference to list down prime factors of 8 & 12.
              Drag the given numbers to the blank spaces below.
          </p>
        <table style ="width: 100%">
        <tr>
                <th style="text-align:center"><h5 style="font-weight:bold" ><u>Factors of 8</u></th>
                <th style="text-align:center"><h5 style="font-weight:bold"><u>Factors of 12</u></th>
            </tr>
            <tr>
                <td style="text-align:center; width: 50px; height: 50px;">
                  <div class="f8">
                  <img src="../assets/img/fact8.png" class="fact8 w-100">
                  </div>
                </td>
                <td style="text-align:center; width: 50px; height: 50px;">
                <div class="f12">
                <img src="../assets/img/fact12.png" class="fact12 w-100">
                </div>

                </td>
            </tr>
            </table>
      <div class="row">
        <div class="col">
          <div class="numbers">
            </div>
            </div>
            </div>
            </div>

            <h3 style="font-weight:bold">Great Work!!</h3>
            <h6 style="font-weight:bold">Now that you've listed all of the prime factors,<br>
            Multiply the common prime factors of 8 and 12 to get the GCF. </h6>
            <br>
            <div class="multi">
              <img src="../assets/img/multi.png" class="multi w-100">
            </div>
            <br>
            <br>
            <h3 style="font-weight:bold"><br><br>2 x 2 = 4</h3>
            <h5 style="font-weight:bold">Greatest Common Factor(GCF):<u> 4</u></h5>

            
            <!--method 3-->
          <div class="method3">
            <div class="row">
            <div class="col">
              <div class="numbers">
                <h4 style="font-weight:bold">After learning how to get GFC using factor 3,<br>
                let us now learn how to use continuous division in getting the GCF.</h4>
                <h3 style="font-weight:bold" font color="#F3F1EE"><u>Method 3:  Continuous Division</u></h3>
                <p> Continuous division is done following the steps below.</p> 
                <span><i class="bi bi-patch-question mx-2 ps-4"></i>Write the given numbers horizontally and find a prime number that will divide all the given numbers without a remainder, if possible.<br></span>
                <span><i class="bi bi-patch-question mx-2 ps-4"></i>Divide the given numbers by that prime number and write the quotients below the dividends.<br></span>
                <span><i class="bi bi-patch-question mx-2 ps-4"></i>Continue the process until all the quotients have no more common prime divisor.<br></span>
                <div class="conti">
                <img src="../assets/img/contin.png"  class="contin w-100"><br>
                </div>
                <span><i class="bi bi-patch-question mx-2 ps-4"></i>Multiply all the prime divisors common to the given numbers to get the GCF.<br></span>
                <h3 style="font-weight:bold">2 x 2 = 4</h3>
                <h5 style="font-weight:bold">Greatest Common Factor(GCF):<u> 4</u></h5>
                <h5 style="font-weight:bold">Therefore, <u> 4</u> is the greatest possible number of vases that Nancy can use.></h5>
            </div>
        </section>

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
        setTimeout(function() {
          $('#content').css('display', 'block');
          $('#content').addClass('pullDown');
        }, 1500);
      });
        document.addEventListener("dragstart", function(event) {
        event.dataTransfer.setData("text", event.target.id);
        });
        document.addEventListener("dragenter", function(event) {
            if ( event.target.className == "dropzone" ) {
                event.target.style.border = "1px solid #ef7d96";
            }
        });
        document.addEventListener("dragover", function(event) {
            event.preventDefault();
            if ( event.target.className == "dropzone" ) {
            event.target.style.border = "1px dotted #ef7d96";
        }
        });
        document.addEventListener("dragleave", function(event) {
            if ( event.target.className == "dropzone" ) {
                event.target.style.border = "";
            }
        });
            document.addEventListener("drop", function(event) {
            event.preventDefault();
            if ( event.target.className == "dropzone" ) {
                var data = event.dataTransfer.getData("Text");
                var inputid = event.target.id;
                var input = document.getElementById(inputid).value;
                if(input==""){
                    document.getElementById(inputid).value = data;
                }
                else{
                    document.getElementById(inputid).value = data;
                }
                event.target.style.border = "1px solid black";
            }
        });
        function displayPhrase()
        {
            document.getElementById("num1").value = '1';
            document.getElementById("num2").value = '4';
            document.getElementById("num3").value = '2';
            document.getElementById("num4").value = '6';
            document.getElementById("ip2").value = 'A';
            document.getElementById("ip6").value = '4';
            
        }
        function revealAns()
        {
            document.getElementById("ftree1").value = '2';
            document.getElementById("ftree2").value = '2';
            document.getElementById("ftree3").value = '2';
            document.getElementById("ftree4").value = '2';
            document.getElementById("ftree5").value = '2';
            document.getElementById("ftree6").value = '3';
            
        }

        function AnswerA()
        {
            document.getElementById("ip2").value = 'A';
            
        }
        function AnswerB()
        {
            document.getElementById("ip2").value = 'B';
            
        }
        function AnswerC()
        {
            document.getElementById("ip2").value = 'C';
            
        }
    </script>
  </body>
</html>