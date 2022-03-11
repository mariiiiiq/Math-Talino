<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="../assets/img/logo-sm.ico" rel="icon">
    <link href="../assets/css/style.css" rel="stylesheet">
    <title>Math-Talino</title>
    <style>
        .txtdrag{
            width:50px;
            
        }
        .dropzone{
            width: 50px;
            display: inline-block;
            border: 1px solid black;
            text-align: center;
        }
        .ans{
            margin-top: 5px;
        }
        .card{
          background-color: #9fd0e7;
        }
        .asd{
          display:inline-block;
        }
        .thinkowl{
          position:absolute;
          width: 400px;
          margin-top: -150px;
          margin-left: 150px;
          z-index:-1;
        }
        </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-border">
    <div class="container-fluid mx-5">
      <a class="navbar-brand bold w-50" href="pre-test.php"><img src="../assets/img/logo-sm.png" class="navbar-logo" alt="">Math-Talino</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../lessonlist.php">Lessons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../game.php">Games</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <?php session_start();
            echo $_SESSION['user'];?>
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
    <div class="container-fluid p-5">
      <!--content here-->
      <h5>Let us try to see what you know about prime and composite numbers.</h5>
      <h6>Drag <u class="bold">P</u> if the number is prime and <u class="bold">C</u> if the number is composite.</h6> 
      <div>
        <div class="row draggable-items">
          <div class="col">
            <h2 class="text-center"><span class="bold" draggable="true" id="P"><u>P</u></span></h2>
          </div>
          <div class="col">
            <h2 class=""><span class="bold" draggable="true" id="C"><u>C</u></span></h2>
          </div>
          <div class="col-6">
            
          </div>
        </div>
        <div class="row mt-3 ">
          <div class="box col-md-5">
            <div class="card pb-4">
              <div class="row pt-3 ps-3 my-3 dropzones">
                <div class="col ps-5">
                  <ol id="txt">
                    <li class="ans"> 3&nbsp;&nbsp;&nbsp;= <input class="dropzone" id="num1"></input><span class="asd" id="chck1"></span></li>
                    <li class="ans"> 5&nbsp;&nbsp;&nbsp;= <input class="dropzone" id="num2"></input><span class="asd" id="chck2"></span></li>
                    <li class="ans"> 9&nbsp;&nbsp;&nbsp;= <input class="dropzone" id="num3"></input><span class="asd" id="chck3"></span></li>
                    <li class="ans"> 12&nbsp;&nbsp;= <input class="dropzone" id="num4"></input><span class="asd" id="chck4"></span></li>
                    <li class="ans"> 15&nbsp;&nbsp;= <input class="dropzone" id="num5"></input><span class="asd" id="chck5"></span></li>
                  </ol>
                </div>
                <div class="col">
                  <ol id="txt2" start="6">
                    <li class="ans"> 13&nbsp;&nbsp;= <input class="dropzone" id="num6"></input><span class="asd" id="chck6"></span></li>
                    <li class="ans"> 24 = <input class="dropzone" id="num7"></input><span class="asd" id="chck7"></span></li>
                    <li class="ans"> 25 = <input class="dropzone" id="num8"></input><span class="asd" id="chck8"></span></li>
                    <li class="ans"> 36 = <input class="dropzone" id="num9"></input><span class="asd" id="chck9"></span></li>
                    <li class="ans"> 47 = <input class="dropzone" id="num10"></input><span class="asd" id="chck10"></span></li>
                  </ol>
                </div>
              </div>
              <div class="d-flex justify-content-center">
                <div class="button">
                  <button class="btn primary px-4 py-2 " type="button" name="btnSubmit" id="btnSubmit">Submit</button>
                </div>
              </div>
            </div>
          </div>
          <div class="box col-md-6">
            <img src = "../assets/img/thinkowl.png" class="thinkowl">
            <p id="output"></p>
            <a href="lesson1.php" class="btn primary" style="float:right;margin-top:200px;">Lesson 1</a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer" id="footer">
      <div class="footercontent">
          &copy; Copyright <strong><span>Math-Talino</span></strong>. All Rights Reserved
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../assets/js/pre-test.js"></script>
    <script>
      $(document).ready(function() {
        if ($("body").height() > $(window).height()) {
          $("#footer").css("position", "relative");
        }
        
      });
      $(document).ready(function () {
          $.ajax({
              type: "POST",
              url: "save.php",
              dataType: "text",
              success: function (data) {
                $('#demo').val(data);
                if($('#demo').val()!=""){
                  $('#output').html(data);
                  $("#btnSubmit").attr("disabled", true);
                }
              }
          });
      });
    </script>
  </body>
</html>