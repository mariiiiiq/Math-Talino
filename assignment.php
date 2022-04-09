<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="assets/img/logo-sm.ico" rel="icon">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Math-Talino</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light navbar-border">
    <div class="container-fluid mx-5">
      <a class="navbar-brand bold w-50" href="admin-account.php"><img src="assets/img/logo-sm.png" class="navbar-logo" alt="">Math-Talino</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarSupportedContent">
      <ul class="navbar-nav">
       <li class="nav-item">
          <a class="nav-link" aria-current="page" href="student.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="lessonlist.php">Lessons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="game.php">Games</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <?php session_start(); echo $_SESSION['user'];?>
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
        <h2 class="bold">Assignment</h2>
        <?php
            require_once "config.php";
            $sql = "SELECT * FROM tblaccounts WHERE username = '".$_SESSION['user']."'";
			$result = mysqli_query($link, $sql);
			$rows = mysqli_fetch_array($result);	
			if($rows){
                $query = "SELECT * FROM tblassignment where forsection='".$rows['section']."' order by id";
                if($r = mysqli_query($link, $query)){
                    if(mysqli_num_rows($r) > 0){
                        while($row = mysqli_fetch_array($r)){
                            $_SESSION['actid'] = $row['id'];
                            echo "<h6><a class='actlist p-2'href='activity/view.php?id=".$row['id']."'><i class='bi bi-pencil-square mx-2'></i>{$row['name']}</a></h6>";
                        }
                    }
                }
            }
        ?>
    </div>
    <div class="footer" id="footer">
      <div class="footercontent">
          &copy; Copyright <strong><span>Math-Talino</span></strong>. All Rights Reserved
      </div>
  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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