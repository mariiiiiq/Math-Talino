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
        input{
            text-transform: uppercase;
        }
    </style>
  </head>
  <body class="blue">
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
                <li class="breadcrumb-item"><a href="objective.php">Objectives</a></li>
                <li class="breadcrumb-item active">Pre-Test</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-3 d-md-flex flex-md-column justify-content-center align-items-stretch order-2 order-md-1 score" data-aos="">
            <img src="../assets/img/owlintree.png" class="owlintree" alt="">
            <img src="../assets/img/owlintreewscroll.png" class="owlintree scroll" style="display:none;" alt="">
            <p class="result" ></p>
        </div>
        <div class="col-lg-9 order-1 align-items-stretch order-lg-2 board" data-aos="">
            <div class="boardtext">
                <table style="width:100%;">
                    <tr>
                        <th colspan="2">
                            <h6 class="title text-center">Let us try to see what you know about prime and composite numbers.</h6>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                        <h6 class="text-center"><span class="drag">Drag</span><span class="type">Type</span> into the boxes <u class="bold">P</u> if the number is prime and <u class="bold">C</u> if the number is composite.</h6>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <h4 class="text-center"><span class="title" draggable="true" id="P"><u>P</u></span></h4>
                        </td>
                        <td>
                            <h4 class="text-center"><span class="title" draggable="true" id="C"><u>C</u></span></h4>
                        </td>
                    </tr>
                </table>
                <table class="num">
                    <tbody class="dropzones">
                    <tr >
                        <td>1.</td>
                        <td>
                            3 = <input class="dropzone" id="num1" maxlength="1"></input><span class="asd" id="chck1"></span>
                        </td>
                        <td>6.</td>
                        <td>
                            13 = <input class="dropzone" id="num6" maxlength="1"></input><span class="asd" id="chck6"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>
                            5 = <input class="dropzone" id="num2" maxlength="1"></input><span class="asd" id="chck2"></span>
                        </td>
                        <td>7.</td>
                        <td>
                            24 = <input class="dropzone" id="num7" maxlength="1"></input><span class="asd" id="chck7"></span>
                        </td>
                    </tr>
                    <tr >
                        <td>3.</td>
                        <td>
                            9 = <input class="dropzone" id="num3" maxlength="1"></input><span class="asd" id="chck3"></span>
                        </td>
                        <td>8.</td>
                        <td>
                            25 = <input class="dropzone" id="num8" maxlength="1"></input><span class="asd" id="chck8"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>
                            12&nbsp;&nbsp;= <input class="dropzone" id="num4" maxlength="1"></input><span class="asd" id="chck4"></span>
                        </td>
                        <td>9.</td>
                        <td>
                            36 = <input class="dropzone" id="num9" maxlength="1"></input><span class="asd" id="chck9"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>
                        15&nbsp;&nbsp;= <input class="dropzone" id="num5" maxlength="1"></input><span class="asd" id="chck5"></span>
                        </td
                        ><td>10.</td>
                        <td>
                            47 = <input class="dropzone" id="num10" maxlength="1"></input><span class="asd" id="chck10"></span></li>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <button class="btn primary btnsubmit mt-2" type="button" name="btnSubmit" style="" id="btnSubmit">Submit</button>
            </div>
        </div>
    </div>
    <a href="drill.php" class="title next btn btns">Next</a>
</div>
<img src="../assets/img/objleaves2.png" class="objl2" alt="">

</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="pre-test.js"></script>
    <script>
        $(".next").mouseenter(function(){
          $('.next').addClass('floating');
        });
        $(".next").mouseleave(function(){
          $('.next').removeClass('floating');
        });
        $(document).ready(function() {
            $.ajax({
                type:'POST',
                url:'save.php',
                data:{
                type:"pretest",
                act:"get",
                },
                success:function(data){
                    if ($.trim(data)){
                        $('.scroll').css('display', 'inline-block');
                        $('.result').css('display', 'inline-block');
                        $('.result').html(data);
                        $('.speechtext').html("Good job");
                        $('.primary').prop('disabled', true);
                    }
                }
            });
        });
    </script>
  </body>
</html>