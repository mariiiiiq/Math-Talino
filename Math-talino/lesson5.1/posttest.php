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
    <div class="ps-3 pt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../map.php">Lesson List</a></li>
                <li class="breadcrumb-item active">Lesson 5.1</li>
                <li class="breadcrumb-item"><a href="../lesson4/objective.php">Objective</a></li>
                <li class="breadcrumb-item"><a href="pretest.php">Pre-Test</a></li>
                <li class="breadcrumb-item"><a href="lesson.php">Lesson</a></li>
                <li class="breadcrumb-item"><a href="lesson-video.php">Lesson Video</a></li>
              <li class="breadcrumb-item"><a href="activity.php">Activity</a></li>
              <li class="breadcrumb-item active" aria-current="page">Post-Test</li>
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
                            <h6 class="title text-center">Let us see if you know how to identify the correct number sentence.</h6>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <h6 class="text-center"><span class="drag">Drag</span><span class="type">Type</span> into the boxes <u class="bold">T</u> if the number sentence is true and <u class="bold">F</u> if false.</h6>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <h4 class="text-center"><span class="title" draggable="true" id="T"><u>T</u></span></h4>
                        </td>
                        <td>
                            <h4 class="text-center"><span class="title" draggable="true" id="F"><u>F</u></span></h4>   
                        </td>
                    </tr>
                </table>
                <div class="row px-4">
                  <div class="col-sm ">
                    <div class="text-center">
                      <input class="dropzone" id="num1"maxlength="1"></input> 1. 
                      <div class="fraction"><span class="numerator">2</span><span class="denominator">4</span></div> + 
                      <div class="fraction"><span class="numerator">1</span><span class="denominator">4</span></div> = 
                      <div class="fraction"><span class="numerator">3</span><span class="denominator">4</span></div><br>
                      <img src = "../assets/img/pre-fraction1.png" class="f"></div>
                  </div>
                  <div class="col-sm">
                    <div class="text-center">
                      <input class="dropzone" id="num2" value=""maxlength="1"></input> 2. 
                      <div class="fraction"><span class="numerator">1</span><span class="denominator">6</span></div> + 
                      <div class="fraction"><span class="numerator">1</span><span class="denominator">6</span></div> = 
                      <div class="fraction"><span class="numerator">5</span><span class="denominator">6</span></div>
                        <br>
                      <img src = "../assets/img/pre-fraction2.png" class="f">
                    </div>
                  </div>
                </div>
                <div class="row px-4">
                  <div class="col-sm">
                    <div class="text-center">
                      <input class="dropzone" id="num3"maxlength="1"></input> 3. 
                      <div class="fraction"><span class="numerator">3</span><span class="denominator">5</span></div> + 
                      <div class="fraction"><span class="numerator">1</span><span class="denominator">5</span></div> = 
                      <div class="fraction"><span class="numerator">5</span><span class="denominator">5</span></div>
                      <br>
                      <img src = "../assets/img/pre-fraction5.png" class="f">
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="text-center"> 
                      <input class="dropzone" id="num4"maxlength="1"></input> 4. 
                      <div class="fraction"><span class="numerator">2</span><span class="denominator">5</span></div> + 
                      <div class="fraction"><span class="numerator">1</span><span class="denominator">5</span></div> = 
                      <div class="fraction"><span class="numerator">3</span><span class="denominator">5</span></div>
                      <br>
                      <img src = "../assets/img/pre-fraction4.png" class="f">
                    </div>
                  </div>
                </div>
                <div class="row px-4">
                  <div class="col-sm">
                    <div class="text-center"> 
                      <input class="dropzone" id="num5"maxlength="1"></input> 5. 
                      <div class="fraction"><span class="numerator">5</span><span class="denominator">10</span></div> + 
                      <div class="fraction"><span class="numerator">2</span><span class="denominator">10</span></div> = 
                      <div class="fraction"><span class="numerator">7</span><span class="denominator">10</span></div>
                      <br>
                      <img src = "../assets/img/pre-fraction3.png" class="f">
                    </div>
                  </div>
                </div>
                <button class="btn primary btnsubmit mt-1" type="button" name="btnSubmit" style="" id="btnSubmit">Submit</button>
                <button class="btn primary mt-2" type="button" name="btnShow" style="display:none" id="btnShow">Answers</button> 
            </div>
        </div>
    </div>
    <a href="activity.php" class="title btnback btn btns">Back</a>
    <a href="../map.php" class="title btnnext btn btns">Lesson list</a>
</div>
<img src="../assets/img/objleaves2.png" class="objl2" alt="">

</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="posttest.js"></script>
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
            $.ajax({
                type:'POST',
                url:'save.php',
                data:{
                type:"posttest",
                act:"get",
                },
                success:function(data){
                    if ($.trim(data)){
                      $('.result').css('display', 'inline-block');
                      $('.result').html(data);
                      $('#btnSubmit').prop('disabled', true);
                      $('#btnShow').css('display', 'inline-block');
                    }
                }
            });
            
        });
    </script>
  </body>
</html>