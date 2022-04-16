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
                <li class="breadcrumb-item active">Lesson 3</li>
                <li class="breadcrumb-item"><a href="objective.php">Objective</a></li>
                <li class="breadcrumb-item"><a href="pretest.php">Pre-test</a></li>
                <li class="breadcrumb-item"><a href="drill.php">Drill</a></li>
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
                            <h6 class="title text-center">Let us see if you already know how to find the Least Common Multiple.</h6>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                        <h6 class="text-center">Find the Least Common Multiple (LCM) of each pair of numbers.</h6>
                        </th>
                    </tr>
                   
                </table>
                <div class="row">
                  <div class="col-md-4 ps-4 d-flex justify-content-center">
                    <table class="">
                      <tr>
                        <td>1.</td>
                        <td class="txtr">2 =</td>
                        <td>2, 4, 6, 8, 10, ...</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="txtr">4 =</td>
                        <td>4, 8, 12, 16, 20, ...</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>LCM:</td>
                        <td><input type="text" id="num1" class="act-inp"></td>
                      </tr>
                    </table>
                  </div>
                  <div class="col-md-4 d-flex justify-content-center">
                    <table class="">
                      <tr>
                        <td>2.</td>
                        <td class="txtr">5 =</td>
                        <td>5, 10, 15, 20, 25, ...</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="txtr">3 =</td>
                        <td>3, 6, 9, 12, 15, ...</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>LCM:</td>
                        <td><input type="text" id="num2" class="act-inp"></td>
                      </tr>
                    </table>
                  </div>
                  <div class="col-md-4 d-flex justify-content-center">
                    <table class="">
                      <tr>
                        <td>3.</td>
                        <td class="txtr">4 =</td>
                        <td>4, 8, 12, 16, 20, ...</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="txtr">8 =</td>
                        <td>8, 16, 24, 32, 40, ...</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>LCM:</td>
                        <td><input type="text" id="num3" class="act-inp"></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 d-flex justify-content-center">
                    <table class="">
                      <tr>
                        <td>4.</td>
                        <td class="txtr">3 =</td>
                        <td>3, 6, 9, 12, 15, ...</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="txtr">9 =</td>
                        <td>9, 18, 27, 36, 45, ...</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>LCM:</td>
                        <td><input type="text" id="num4" class="act-inp"></td>
                      </tr>
                    </table>
                  </div>
                  <div class="col-md-6 d-flex justify-content-center">
                    <table class="">
                      <tr>
                        <td>5.</td>
                        <td class="txtr">10 =</td>
                        <td>10, 20, 30, 40, 50, ...</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="txtr">15 =</td>
                        <td>15, 30, 45, 60, 75, ...</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>LCM:</td>
                        <td><input type="text" id="num5" class="act-inp"></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <button class="btn primary btnsubmit mt-1" type="button" name="btnSubmit" style="" id="btnSubmit">Submit</button>
                <button class="btn primary mt-2" type="button" name="btnShow" style="display:none" id="btnShow">Answers</button> 
            </div>
        </div>
    </div>
    <a href="conclusion.php" class="title btnback btn btns">Back</a>
    <a href="posttest.php" class="title btnnext btn btns">Next</a>
</div>
<img src="../assets/img/objleaves2.png" class="objl2" alt="">

</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="activity.js"></script>
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
            for(let i=1;i<=5;i++){
                $('#num'+i).keypress(function (e) {    
                    var charCode = (e.which) ? e.which : event.keyCode    
                    if (String.fromCharCode(charCode).match(/[^0-9]/g))   
                        return false;                        
                });    
            }
            $.ajax({
                type:'POST',
                url:'save.php',
                data:{
                type:"activity",
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