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
                <li class="breadcrumb-item active">Lesson 4.2</li>
                <li class="breadcrumb-item"><a href="../lesson4/objective.php">Objectives</a></li>
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
                            <h6 class="title text-center">Let us try to see what you know about the new lesson.</h6>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                        <h6 class="text-center">Study and determine if each pair of fractions below are true or false.</h6>
                        </th>
                    </tr>
                </table>
                <div class="row px-4 ">
                  <div class="col-md pt-2">
                    1. <span class="fraction"><span class="numerator">3</span><span class="denominator">2</span></span> = 
                      1<span class="fraction"><span class="numerator">1</span><span class="denominator">2</span></span>
                    <fieldset id="num1">
                      <label class="t1"><input type="radio" name="num1" id="t1" value="true">True</label>
                      <label class="f1"><input type="radio" name="num1" id="f1" value="false">False</label>
                    <fieldset>
                  </div>
                  <div class="col-md pt-2">
                    2. 1<span class="fraction"><span class="numerator">2</span><span class="denominator">5</span></span> =
                    <span class="fraction"><span class="numerator">6</span><span class="denominator">5</span></span>
                    <fieldset id="num2">
                      <label class="t2"><input type="radio" name="num2" id="t2" value="true">True</label>
                      <label class="f2"><input type="radio" name="num2" id="f2" value="false">False</label>
                    <fieldset>
                  </div>
                  <div class="col-md pt-2">
                    3. <span class="fraction"><span class="numerator">5</span><span class="denominator">3</span></span> = 
                      1<span class="fraction"><span class="numerator">1</span><span class="denominator">3</span></span>
                    <fieldset id="num3">
                      <label class="t3"><input type="radio" name="num3" id="t3" value="true">True</label>
                      <label class="f3"><input type="radio" name="num3" id="f3" value="false">False</label>
                    <fieldset>
                  </div>
                  <div class="col-md pt-2">
                    4. <span class="fraction"><span class="numerator">8</span><span class="denominator">4</span></span> = 2
                    <fieldset id="num4">
                      <label class="t4"><input type="radio" name="num4" id="t4" value="true">True</label>
                      <label class="f4"><input type="radio" name="num4" id="f4" value="false">False</label>
                    <fieldset>
                  </div>
                  <div class="col-md pt-2">
                    5. 1<span class="fraction"><span class="numerator">3</span><span class="denominator">10</span></span> = 
                    <span class="fraction"><span class="numerator">13</span><span class="denominator">10</span></span>
                    <fieldset id="num5">
                      <label class="t5"><input type="radio" name="num5" id="t5" value="true">True</label>
                      <label class="f5"><input type="radio" name="num5" id="f5" value="false">False</label>
                    <fieldset>
                  </div>
                </div>
                <div class="row px-4 ">
                  <div class="col-md pt-2">
                    6. 1 = <span class="fraction"><span class="numerator">1</span><span class="denominator">2</span></span>
                    <fieldset id="num6">
                      <label class="t6"><input type="radio" name="num6" id="t6" value="true">True</label>
                      <label class="f6"><input type="radio" name="num6" id="f6" value="false">False</label>
                    <fieldset>
                  </div>
                  <div class="col-md pt-2">
                    7. <span class="fraction"><span class="numerator">20</span><span class="denominator">6</span></span> =
                    3<span class="fraction"><span class="numerator">2</span><span class="denominator">6</span></span>
                    <fieldset id="num7">
                      <label class="t7"><input type="radio" name="num7" id="t7" value="true">True</label>
                      <label class="f7"><input type="radio" name="num7" id="f7" value="false">False</label>
                    <fieldset>
                  </div>
                  <div class="col-md pt-2">
                    8. 2<span class="fraction"><span class="numerator">1</span><span class="denominator">7</span></span> = 
                      <span class="fraction"><span class="numerator">8</span><span class="denominator">7</span></span>
                    <fieldset id="num8">
                      <label class="t8"><input type="radio" name="num8" id="t8" value="true">True</label>
                      <label class="f8"><input type="radio" name="num8" id="f8" value="false">False</label>
                    <fieldset>
                  </div>
                  <div class="col-md pt-2">
                    9. <span class="fraction"><span class="numerator">8</span><span class="denominator">3</span></span> =
                      2<span class="fraction"><span class="numerator">2</span><span class="denominator">3</span></span> 
                    <fieldset id="num9">
                      <label class="t9"><input type="radio" name="num9" id="t9" value="true">True</label>
                      <label class="f9"><input type="radio" name="num9" id="f9" value="false">False</label>
                    <fieldset>
                  </div>
                  <div class="col-md pt-2">
                    10. <span class="fraction"><span class="numerator">11</span><span class="denominator">2</span></span> = 5
                    <fieldset id="num10">
                      <label class="t10"><input type="radio" name="num10" id="t10" value="true">True</label>
                      <label class="f10"><input type="radio" name="num10" id="f10" value="false">False</label>
                    <fieldset>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <a href="../lesson4/objective.php" class="title btnback btn btns">Back</a>
    <a href="drill.php" class="title btnnext btn btns">Next</a>
</div>
<img src="../../assets/img/objleaves2.png" class="objl2" alt="">

</div>
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
        $(document).ready(function() {
          var id;
          const key = ['true', 'false', 'false', 'true', 'true', 'false', 'true', 'false', 'true', 'false'];
          for(var i=0;i<10;i++){
          
          var n = i + 1;
          var num = "num"+ n.toString();
          var radioButtons = document.getElementsByName(num);
            for(var j = 0; j < radioButtons.length; j++)
            {
              if(radioButtons[j].value == key[i]){
                id = radioButtons[j].getAttribute('id');
                  
              }
            }
            $('.'+id).css('color', 'green');
          }
            
        });
    </script>
  </body>
</html>