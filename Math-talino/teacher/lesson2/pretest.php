<?php
 session_start();
  if(!isset($_SESSION['user'])){
    header('Location: ../../index.php');
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
    <link href="../../assets/img/logo-sm.ico" rel="icon">
    <link href="../../assets/css/s.css" rel="stylesheet">
    <link href="../../assets/css/mobile.css" rel="stylesheet">
    <link href="../../assets/css/animations.css" rel="stylesheet">
    <title>Math-Talino</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-border">
  <div class="container-fluid">
    <a class="navbar-brand bold w-50" href="teacher.php"><img src="../../assets/img/logo-sm.png" class="navbar-logo" alt="">Math-Talino</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../../teacher.php">Lessons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../game.php">Games</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../accounts.php">Student Accounts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../scores.php">Student Scores</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['user'];?>
          </a>
          <ul class="dropdown-menu drop-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item text-danger" href="../../index.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<img src="../assets/img/objleaves1.png" class="objl1" alt="">
<div class="container-fluid">
    <div class="ps-3 pt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../teacher.php">Lesson List</a></li>
                <li class="breadcrumb-item active">Lesson 2</li>
                <li class="breadcrumb-item"><a href="objective.php">Objectives</a></li>
                <li class="breadcrumb-item active">Pre-Test</li>
            </ol>
        </nav>
    </div>
    <div class="d-flex justify-content-center">
        <div class="board" data-aos="">
            <div class="boardtext">
                <table style="width:100%;">
                    <tr>
                        <th colspan="2">
                            <span class="px-2 py-0 mx-0 result" style="float:right;"></span>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <h6 class="title text-center">Let us try to see what you know about Greatest Common Factor.</h6>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                        <h6 class="text-center">Find the Greatest Common Factor (GCF).</h6>
                        </th>
                    </tr>
                </table>
                <div class="row g-1">
                    <div class="col-sm-6 d-flex justify-content-center">
                        <p>1. 2 and 4 = <input class="input-num" id="num1"></input></p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center">
                        <p>2. 3 and 6 = <input class="input-num" id="num2"></input></p>
                    </div>
                </div>
                <div class="row g-1">
                    <div class="col-sm-6 d-flex justify-content-center">
                        <p>3. 4 and 8 = <input class="input-num" id="num3"></input></p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center">
                        <p>4. 6 and 9 = <input class="input-num" id="num4"></input></p>
                    </div>
                </div>
                <div class="row g-1">
                    <div class="col-sm-6 d-flex justify-content-center">
                        <p>5. 10 and 15 = <input class="input-num" id="num5"></p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center">
                        <p>6. 6 and 12 = <input class="input-num" id="num6"></input></p>
                    </div>
                </div>
                <div class="row g-1">
                    <div class="col-sm-6 d-flex justify-content-center">
                        <p>7. 8 and 16 = <input class="input-num" id="num7"></input>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center">
                        <p>8. 12 and 15 = <input class="input-num" id="num8"></input></p>
                    </div>
                </div>
                <div class="row g-1">
                    <div class="col-sm-6 d-flex justify-content-center">
                        <p>9. 9 and 18 = <input class="input-num" id="num9"></input></p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center">
                        <p>10. 14 and 21 = <input class="input-num" id="num10"></input></p>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <a href="objective.php" class="title btnback btn btns">Back</a>
    <a href="drill.php" class="title btnnext btn btns">Next</a>
</div>
<img src="../assets/img/objleaves2.png" class="objl2" alt="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="pre-test.js"></script>
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
        function showAns(){
          const key = ['2', '3', '4', '3', '5', '6', '8', '3', '9', '7'];
          for(let i=0;i<10;i++){
            var n = i + 1;
            var num = "num" + n.toString();
            document.getElementById(num).value = key[i];
          }
        }
        $(document).ready(function() {
          for(let i=1;i<=10;i++){
                $('#num'+i).keypress(function (e) {    
                    var charCode = (e.which) ? e.which : event.keyCode    
                    if (String.fromCharCode(charCode).match(/[^0-9]/g))   
                        return false;                        
                });    
            }
            showAns();
        });
    </script>
  </body>
</html>