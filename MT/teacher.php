<?php
 session_start();
  if(!isset($_SESSION['user'])){
    header('Location: index.php');
  }
?>
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
    <link href="assets/img/logo-sm.ico" rel="icon">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Math-Talino</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-border">
    <div class="container-fluid mx-5">
      <a class="navbar-brand bold w-50" href="teacher.php"><img src="assets/img/logo-sm.png" class="navbar-logo" alt="">Math-Talino</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="teacher">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Lessons</a>
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
      <?php
        require_once "config.php";
        $sql = "SELECT * FROM tblsection WHERE adviser='".$_SESSION['user']."' order by name";
        if($result = mysqli_query($link, $sql)){
          if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
              $sec=$row['name'];
              echo "<p><h5>$sec<a href='#addact".$sec."' class='btn primary' style='float:right;' data-bs-toggle='modal'>Add Activity</a></h5>";
              $query = "SELECT * FROM tblactivity WHERE forsection='".$sec."' order by id";
              if($r = mysqli_query($link, $query)){
                if(mysqli_num_rows($r) > 0){
                  while($rows = mysqli_fetch_array($r)){
                    echo "<h6><a class='actlist p-2'href='activity/view.php?id=".$rows['id']."'><i class='bi bi-pencil-square mx-2'></i>{$rows['name']}</a></h6>";
                  }
                }
              }
              ?>
              </p>
              <!-- Add quiz Modal -->
              <div class="modal fade" id="addact<?php echo $sec; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <form method="post" action="activity.php">
                      <input value="<?php echo $sec; ?>" id="txtsecname" name="txtsecname" hidden></input>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="txtactname" name="txtactname" placeholder="Activity Name" autocomplete="off">
                        <label for="txtactname">Activity Name</label>
                      </div>
                        <div class="form-floating">
                          <textarea class="form-control" placeholder="Description" id="txtdesc" name="txtdesc" style="height: 100px" autocomplete="off"></textarea>
                          <label for="txtdesc">Description</label>
                        </div>
                        <div class="d-flex justify-content-center">
                          <div class="button pt-2">
                              <button class="btn btns primary" type="submit" name="btnAdd" id="btnAdd">Add</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            }
          }
        }
      ?>
    <div class="footer" id="footer">
      <div class="footercontent">
          &copy; Copyright <strong><span>Math-Talino</span></strong>. All Rights Reserved
      </div>
  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function() {
        if ($("body").height() > $(window).height()) {
          $("#footer").css("position", "relative");
        }
      });
    </script>
  </body>
</html>