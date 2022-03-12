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
       .bi-patch-question, .bi-caret-right-fill{
          color: #3066a0;
          font-size: 1.5rem;
        }
        body{
          text-align:justify;
        }
        .numbers{
          background-color:#77a7d8;
          padding:10px;
          float:right;
          border-radius: 3px;
        }
        
        .pic{
          margin:auto;
          width:70%;
        }
        .rachel{
          
          width:100px;
          margin-top:-100px;
          margin-left: -60px;
        }
        @media only screen and (max-width: 576px) { 
    
        .q{
          margin-top:-50px;
          margin-left: 230px;
        }

        .pic{
          display:block;
          width: 100%;
        }
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light navbar-border">
    <div class="container-fluid mx-5">
      <a class="navbar-brand bold w-50" href="admin-account.php"><img src="../assets/img/logo-sm.png" class="navbar-logo" alt="">Math-Talino</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarSupportedContent">
      <ul class="navbar-nav">
       <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../student.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../lessonlist.php">Lessons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../game.php">Games</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['user'];?>
          </a>
          <ul class="dropdown-menu drop-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item text-danger" href="index.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container-fluid p-5">
      <!--content here-->
      <div class="">
        <h3>Lesson 2.1 : <b>Finding the Common Factors and the
        Greatest Common Factor of Two Numbers</b></h3>
        <p>Let us start learning the new concept with the help of this story problem. Read the story problem.
        </p>     

        <img src = "../assets/img/rachel.jpg" class="w-100">
        
      </div>
      <div class="">
        <p>What is asked in the Problem?<br>
          <span><i class="bi bi-patch-question mx-2 ps-4"></i>The greatest number of vases that Rachel will use.
          What are the given facts that can help you solve the problem?
          </span>
        </p>
        <p>What are the given facts that can help you solve the problem?<br>
          <span><i class="bi bi-patch-question mx-2 ps-4"></i>10 red roses, 12 pink roses.</span>
        </p>
        <p>What can you say about Rachel? What kind of person is she?<br>
          <span><i class="bi bi-patch-question mx-2 ps-4"></i>Nancy is grateful to have her teachers.
          She is thoughtful.</span>
        </p>
      </div>
      <div>
      <p>Try to answer the problem. Have patience and have fun!<br>
        <p class="bold">We will find out on the next part of this module whether you
        answered the problem properly and correctly. 
        </p>
          <div>
            <p>What is It<br>
            <h6 class="bold">This problem is about finding the greatest common factor
            because it requires us to find the greatest quantity of equal groups
            that we can make with the red and pink roses.
            <p class="pt-5">
            <h4 class="bold">Greatest Common Factor</h4> (GCF) is the biggest factor or
              number common to the given numbers.
            </p>
            <h5>You can find the answer to the given problem using different
              methods.
            </h5>
          </div>
        
          <div class="row">
            <div class="col-3 pic">
              <img src = "../assets/img/method1.png" class="w-100" style="floart:right;"> 
            </div>
            <div class="col pt-3">
              <h5 class="bold pt-5">Study the Solution</h5>
              <h6 class="bold ">Arrange the factors from the smallest to biggest.</h6>
            
              <span><i class="bi bi-caret-right-fill"></i><b>Factors of 8:</b>   <u>1, 2, 4 and 8</u></span>     
              <p><span><i class="bi bi-caret-right-fill"></i><b>Factors of 12:</b>   <u>1, 2, 4, 6 and 12</u></span>
              
              <h6 class="bold pt-2">Find the common factor/s of 8 and 12.</h6>
            
              <span><i class="bi bi-caret-right-fill"></i><b>Factors of 8:</b>   <u>1, 2, 4 and 8</u></span>
              <p><span><i class="bi bi-caret-right-fill"></i><b>Factors of 12:</b>   <u>1, 2, 4, 6 and 12</u></span>
              <h5 class="bold pt-3">Greates Common Factors:  <u> 1, 2, and 4</u></h5>  
              <h6>Get the Greatest Common Factor (GCF) of 8 and 12</h6>
              <h5 class="bold pt-5">Greatest Common Factor (GCF):   <u> 4</u></h5>              
            </div>
          </div>
        </div>

      <div>
        <p class="">In the next 2 ways of finding the greatest common factor of
        two numbers, it is important for you to know how to write a
        number as a product of its prime factors</p>
        <p class="">When a composite number is written as a product of all of its
        prime factors, we have the <b>Prime Factorization</b> of the number. </p>
        <p class="">For example, the number 16 can be written as a product of
        its prime factors as: 16 = 2 x 2 x 2 x 2. </p>
        <p class="bold">Examine how we arrived at the given prime factors using 2 ways.</p>
      </div>
      
      <div>
        <div class="">
          <img src = "../assets/img/factortree.png" class="w-100">
          <p class=""> <h5> The expression "2 x 2 x 2 x 2" is said to be the <b>Prime
          Factorization</b> of 16. </h5> </p>
          <p class=""> <h5>Let us now solve the problem in What’s New using Prime
          Factorization. </h5></p>
       </div> 
     </div> 

      <div class="row">
        <div class="col-7">
          <img src = "../assets/img/method2.png" class="w-100"> 
        </div>
        <div class="col">
          <h6 class="bold pt-5">List down the prime factors of 8 and 12.</h6>            
          <span><i class="bi bi-patch-question mx-2 ps-4"></i>8 = 2 x 2 x 2</span>     
          <p><span><i class="bi bi-patch-question mx-2 ps-4"></i>12 = 2 x 2 x 3</span><p>             
          <h6 class="bold pt-5">Find the common factor/s of 8 and 12.</h6>            
          <span><i class="bi bi-patch-question mx-2 ps-4"></i>8 = 2 x 2 x 2</span>     
          <p><span><i class="bi bi-patch-question mx-2 ps-4"></i>12 = 2 x 2 x 3</span><p>                      
          <h6 class="bold pt-5">Greatest Common Factor (GCF):   <u> 4</u></h6> 
        </div>       
      </div>

      <div class="row">
          <img src = "../assets/img/method3.png" class="pic w-50">
          <h5 class="bold">Greatest Common Factor (GCF):   <u> 4</u></h5>
          <h5>Therefore, 4 is the greatest possible number of vases that
          Nancy can use.</h5>  
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
     function lbl(value){
            if(value!="")
            {
                document.getElementById("lblselect").style.WebkitTransform = "translateY(-19px)"; 
            }
            else{
            }
        }
    $(document).ready(function() {
        if ($("body").height() > $(window).height()) {
            $("#footer").css("position", "relative");
        }
    });
    </script>
  </body>
</html>
