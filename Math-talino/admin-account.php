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
    <link href="http://fonts.cdnfonts.com/css/meticula" rel="stylesheet">
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
      <a class="navbar-brand bold w-50" href="admin-account.php"><img src="assets/img/logo-sm.png" class="navbar-logo" alt="">Math-Talino</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin-account.php">Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin-section.php">Section</a>
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
      <div class="output"></div>

      <div class="modal fade" id="addAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header" style="border:none;padding-bottom:0px;">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="addacc">
                <form method="post" class="frm" action="adminProcess.php">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off">
                    <label for="username">Username</label>
                    <p class="text-sm-start text-muted">Ex. delacruz_juan</p>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="password" name="password" placeholder="password" autocomplete="off">
                    <label for="password">Password</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="name" autocomplete="off">
                    <label for="name">Name</label>
                  </div>
                  <div class="form-floating mb-3" id="usertype">
                    <select class="form-select" id="cbUsertype" name="cbUsertype" aria-label="Floating label select example">
                      <option value="Teacher">Teacher</option>
                      <option value="Student">Student</option>
                    </select>
                    <label for="cbUsertype">Usertype</label>
                  </div>
                  <div class="form-floating mb-3" id="section" style="display:none">
                    <select class="form-select" id="cbSection" name="cbSection" aria-label="Floating label select example">
                      <?php
                        require_once "config.php";
                        $sql = "SELECT * FROM tblsection order by name";
                        $result = mysqli_query($link, $sql);	
                        while($row = mysqli_fetch_array($result)){
                          $_SERVER['sec'] = $row['name'];
                          $sec = $_SERVER['sec'];
                          echo "<option value='$sec'>$sec</option>";
                        }?>
                    </select>
                    <label for="cbUsertype">Section</label>
                  </div>
                  <div class="d-flex justify-content-center">
                    <div class="button">
                      <button class="btn btns secondary" type="button" name="btnclear" onclick="ClearFields();">Clear</button>
                      <button class="btn btns primary" type="submit" name="btnAddAcc" id="btnAddAcc">Save</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function() {
        $.ajax({
          type:'POST',
          url:'accs.php',
          success:function(data){
            $('.output').html(data);
         }
        });     
      });
    </script>
  </body>
</html>