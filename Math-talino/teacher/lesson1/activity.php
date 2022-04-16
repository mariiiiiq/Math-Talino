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

<img src="../../assets/img/objleaves1.png" class="objl1" alt="">
<div class="container-fluid">
    <div class="ps-3 pt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../teacher.php">Lesson List</a></li>
                <li class="breadcrumb-item active">Lesson 1</li>
                <li class="breadcrumb-item"><a href="objective.php">Objectives</a></li>
                <li class="breadcrumb-item"><a href="pretest.php">Pre-Test</a></li>
                <li class="breadcrumb-item"><a href="pretest.php">Drill</a></li>
                <li class="breadcrumb-item"><a href="lesson.php">Lesson</a></li>
                <li class="breadcrumb-item"><a href="lesson-video.php">Lesson Video</a></li>
                <li class="breadcrumb-item"><a href="conclusion.php">Conclusion</a></li>
                <li class="breadcrumb-item active" aria-current="page">Activity</li>
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
                            <h6 class="title text-center">Let us see if you can already do the activity.</h6>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                        <h6 class="text-center">Complete the table below with the needed data.</h6>
                        </th>
                    </tr>
                   
                </table>
                <table class="act1" style="text-align:center;">
                    <tbody>
                    <tr>
                        <th>Numbers</th>
                        <th>Factors</th>
                        <th >Number of Factors</th>
                        <th>Prime or Composite?</th>
                    </tr>
                    <td class="">Ex. 19</td>
                        <td class="">1, 19</td>
                        <td><input type="text" id="" class="input-num" value="2" disabled></input></td>
                        <td><input type="text" id="" class="act-input" value="Prime" disabled></input></td>
                    <tr>
                        <td class="">1. 12</td>
                        <td class="">1, 2, 3, 4, 6, 12</td>
                        <td><input type="text" id="numf1" class="input-num"></input></td>
                        <td><input type="text" id="num1" class="act-input"></input></td>
                    </tr>
                    <tr>
                        <td>2. 20</td>
                        <td>1, 2, 4, 5, 10, 20</td>
                        <td><input type="text" id="numf2" class="input-num"></input></td>
                        <td><input type="text" id="num2" class="act-input"></input></td>
                    </tr>
                    <tr>
                        <td>3. 21</td>
                        <td>1, 3, 7, 21</td>
                        <td><input type="text" id="numf3" class="input-num"></input></td>
                        <td><input type="text" id="num3" class="act-input"></input></td>
                    </tr>
                    <tr>
                        <td>4. 31</td>
                        <td>1, 31</td>
                        <td><input type="text" id="numf4" class="input-num"></input></td>
                        <td><input type="text" id="num4" class="act-input"></input></td>
                    </tr>
                    <tr>
                        <td>5. 43</td>
                        <td>1, 43</td>
                        <td><input type="text" id="numf5" class="input-num"></input></td>
                        <td><input type="text" id="num5" class="act-input"></input></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <a href="conclusion.php" class="title btnback btn btns">Back</a>
    <a href="posttest.php" class="title btnnext btn btns">Next</a>
</div>
<img src="../../assets/img/objleaves2.png" class="objl2" alt="">

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
        function showAns(){
          const keyf = ['6', '6', '4', '2', '2'];
          const key = [ 'COMPOSITE', 'COMPOSITE', 'COMPOSITE','PRIME', 'PRIME'];
          for(let i=0;i<5;i++){
            var n = i + 1;
            var numf = "numf" + n.toString();
            var num = "num" + n.toString();
            document.getElementById(numf).value = keyf[i];
            document.getElementById(num).value = key[i];
          }
        }
        $(document).ready(function() {
            for(let i=1;i<=5;i++){
                $('#numf'+i).keypress(function (e) {    
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