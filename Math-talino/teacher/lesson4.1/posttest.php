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
            <li class="breadcrumb-item active">Lesson 4.1</li>
            <li class="breadcrumb-item"><a href="../lesson4/objective.php">Objective</a></li>
            <li class="breadcrumb-item"><a href="pretest.php">Pre-Test</a></li>
            <li class="breadcrumb-item"><a href="drill.php">Drill</a></li>
            <li class="breadcrumb-item"><a href="lesson.php">Lesson</a></li>
            <li class="breadcrumb-item"><a href="lesson1.php">Lesson Video</a></li>
            <li class="breadcrumb-item"><a href="lesson1.php">Conclusion</a></li>
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
                            <h6 class="title text-center">Let us try to see what you know about the new lesson.</h6>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                        <h6 class="text-center">Identify the given numbers as proper fraction, improper fraction or mixed number.</h6>
                        </th>
                    </tr>
                </table>
                <div class="row px-4">
                  <div class="col-md">
                    1. <div class="fraction"><span class="numerator">1</span><span class="denominator">3</span></div>
                    <fieldset id="num1">
                      <label class="prop1"><input type="radio" name="num1" id="prop1" value="Proper">Proper</label><br>
                      <label class="imp1"><input type="radio" name="num1" id="imp1" value="Improper">Improper</label><br>
                      <label class="m1"><input type="radio" name="num1" id="m1" value="Mixed">Mixed</label>
                    <fieldset>
                  </div>
                  <div class="col-md">
                    2. <div class="fraction"><span class="numerator">7</span><span class="denominator">4</span></div>
                    <fieldset id="num2">
                      <label class="prop2"><input type="radio" name="num2" id="prop2" value="Proper">Proper</label><br>
                      <label class="imp2"><input type="radio" name="num2" id="imp2" value="Improper">Improper</label><br>
                      <label class="m2"><input type="radio" name="num2" id="m2" value="Mixed">Mixed</label>
                    <fieldset>
                  </div>
                  <div class="col-md">
                    3. <div class="fraction"><span class="numerator">9</span><span class="denominator">12</span></div>
                    <fieldset id="num3">
                      <label class="prop3"><input type="radio" name="num3" id="prop3" value="Proper">Proper</label><br>
                      <label class="imp3"><input type="radio" name="num3" id="imp3" value="Improper">Improper</label><br>
                      <label class="m3"><input type="radio" name="num3" id="m3" value="Mixed">Mixed</label>
                    <fieldset>
                  </div>
                  <div class="col-md">
                    4. <div class="fraction"><span class="numerator">15</span><span class="denominator">6</span></div>
                    <fieldset id="num4">
                      <label class="prop4"><input type="radio" name="num4" id="prop4" value="Proper">Proper</label><br>
                      <label class="imp4"><input type="radio" name="num4" id="imp4" value="Improper">Improper</label><br>
                      <label class="m4"><input type="radio" name="num4" id="m4" value="Mixed">Mixed</label>
                    <fieldset>
                  </div>
                  <div class="col-md">
                    5. 2<div class="fraction"><span class="numerator">5</span><span class="denominator">10</span></div>
                    <fieldset id="num5">
                      <label class="prop5"><input type="radio" name="num5" id="prop5" value="Proper">Proper</label><br>
                      <label class="imp5"><input type="radio" name="num5" id="imp5" value="Improper">Improper</label><br>
                      <label class="m5"><input type="radio" name="num5" id="m5" value="Mixed">Mixed</label>
                    <fieldset>
                  </div>
                </div>
                <div class="row px-4">
                  <div class="col-md">
                    6. <div class="fraction"><span class="numerator">2</span><span class="denominator">4</span></div>
                    <fieldset id="num6">
                      <label class="prop6"><input type="radio" name="num6" id="prop6" value="Proper">Proper</label><br>
                      <label class="imp6"><input type="radio" name="num6" id="imp6" value="Improper">Improper</label><br>
                      <label class="m6"><input type="radio" name="num6" id="m6" value="Mixed">Mixed</label>
                    <fieldset>
                  </div>
                  <div class="col-md">
                    7. <div class="fraction"><span class="numerator">5</span><span class="denominator">2</span></div>
                    <fieldset id="num7">
                      <label class="prop7"><input type="radio" name="num7" id="prop7" value="Proper">Proper</label><br>
                      <label class="imp7"><input type="radio" name="num7" id="imp7" value="Improper">Improper</label><br>
                      <label class="m7"><input type="radio" name="num7" id="m7" value="Mixed">Mixed</label>
                    <fieldset>
                  </div>
                  <div class="col-md">
                    8. <div class="fraction"><span class="numerator">10</span><span class="denominator">13</span></div>
                    <fieldset id="num8">
                      <label class="prop8"><input type="radio" name="num8" id="prop8" value="Proper">Proper</label><br>
                      <label class="imp8"><input type="radio" name="num8" id="imp8" value="Improper">Improper</label><br>
                      <label class="m8"><input type="radio" name="num8" id="m8" value="Mixed">Mixed</label>
                    <fieldset>
                  </div>
                  <div class="col-md">
                    9. 1<div class="fraction"><span class="numerator">1</span><span class="denominator">2</span></div>
                    <fieldset id="num9">
                      <label class="prop9"><input type="radio" name="num9" id="prop9" value="Proper">Proper</label><br>
                      <label class="imp9"><input type="radio" name="num9" id="imp9" value="Improper">Improper</label><br>
                      <label class="m9"><input type="radio" name="num9" id="m9" value="Mixed">Mixed</label>
                    <fieldset>
                  </div>
                  <div class="col-md">
                    10. <div class="fraction"><span class="numerator">6</span><span class="denominator">9</span></div>
                    <fieldset id="num10">
                      <label class="prop10"><input type="radio" name="num10" id="prop10" value="Proper">Proper</label><br>
                      <label class="imp10"><input type="radio" name="num10" id="imp10" value="Improper">Improper</label><br>
                      <label class="m10"><input type="radio" name="num10" id="m10" value="Mixed">Mixed</label>
                    <fieldset>
                  </div>
                </div>
                
              </div>
        </div>
    </div>
    <a href="activity.php" class="title btnback btn btns">Back</a>
    <a href="../lesson4/objective.php" class="title btnnext btn btns">Lesson 4</a>
</div>
<img src="../../assets/img/objleaves2.png" class="objl2" alt="">

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
            var id;
            const key = ['Proper', 'Improper', 'Proper', 'Improper', 'Mixed', 'Proper', 'Improper', 'Proper', 'Mixed', 'Proper'];
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