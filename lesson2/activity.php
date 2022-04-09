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
      td{
        text-align:right;
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
    <div class="ps-3 pt-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../map.php">Lesson List</a></li>
                <li class="breadcrumb-item"><a href="objective.php">Objective</a></li>
                <li class="breadcrumb-item"><a href="pretest.php">Pre-test</a></li>
                <li class="breadcrumb-item"><a href="drill.php">Drill</a></li>
                <li class="breadcrumb-item"><a href="lesson.php">Lesson 2</a></li>
                <li class="breadcrumb-item"><a href="lesson-video.php">Lesson Video</a></li>
                <li class="breadcrumb-item"><a href="conclusion.php">Conclusion</a></li>
                <li class="breadcrumb-item active" aria-current="page">Activity</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-3 d-md-flex flex-md-column justify-content-center align-items-stretch  order-2 order-md-1 score" data-aos="">
            <img src="../assets/img/owlintree.png" class="owlintree" alt="">
            <img src="../assets/img/owlintreewscroll.png" class="owlintree scroll" style="display:none;" alt="">
            <p class="result" ></p>
        </div>
        <div class="col-lg-9 order-1 justify-content-center align-items-stretch order-lg-2 board" data-aos="">
            <div class="boardtext">
                <table style="width:100%;">
                    <tr>
                        <th colspan="2">
                            <h6 class="title text-center">Let us try to see what you have learned about Greatest Common Factor.</h6>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                        <h6 class="text-center">Find the Greatest Common Factor (GCF).</h6>
                        </th>
                    </tr>
                </table>
                <table class="act-2">
                    <tbody>
                    <tr >
                        <td>1.</td>
                        <td>
                            9 and 12 = <input class="input-num" id="num1"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>
                            20 and 40 = <input class="input-num" id="num2"></input>
                        </td>
                    </tr>
                    <tr >
                        <td>3.</td>
                        <td>
                            6 and 18 = <input class="input-num" id="num3"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>
                           21 and 35 = <input class="input-num" id="num4"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>
                            4 and 20 = <input class="input-num" id="num5">
                        </td>
                    </tr>
                    </tbody>
                </table>
                <button class="btn primary btnsubmit mt-2" type="button" name="btnSubmit" style="" id="btnSubmit">Submit</button>
                <button class="btn primary mt-2" type="button" name="btnShow" style="display:none" id="btnShow">Answers</button>  
            </div>
        </div>
    </div>
    <a href="posttest.php" class="title btnnext btn btns">Next</a>
</div>
<img src="../assets/img/objleaves2.png" class="objl2" alt="">

</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="activity.js"></script>
    <script>
        $(".next").mouseenter(function(){
          $('.next').addClass('floating');
        });
        $(".next").mouseleave(function(){
          $('.next').removeClass('floating');
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
                        $('.scroll').css('display', 'inline-block');
                        $('.result').css('display', 'inline-block');
                        $('.result').html(data);
                        $('.speechtext').html("Good job");
                        $('#btnSubmit').prop('disabled', true);
                        $('#btnShow').css('display', 'inline-block');
                    }
                }
            });
        });
    </script>
  </body>
</html>