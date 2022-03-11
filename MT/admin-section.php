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
      <a class="navbar-brand bold w-50" href="admin-section.php"><img src="assets/img/logo-sm.png" class="navbar-logo" alt="">Math-Talino</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="admin-account.php">Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="admin-section.php">Section</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <?php session_start();
            echo $_SESSION['user'];?>
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
      <div>
        <div class="form-floating mb-3 w-25 filter" hidden>
            <input type="text" class="form-control" id="txtsearch" placeholder="Search">
            <label for="txtsearch">Search</label>
        </div>
        <a href='#' class='btn btns primary my-1 btnadd' style="floar:right" data-bs-toggle='modal' data-bs-target='#addAccount'>Add</a>
      </div>
      <!--Table-->  
      <div class="table-responsive table-wrapper">
          <table class="table">
            <thead class="table-dark">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Adviser</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody id="output" >
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal fade" id="addAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <div class="addacc">
                <form method="post" class="frm" action="adminProcess.php">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="name" autocomplete="off">
                    <label for="name">Name</label>
                  </div>
                  <div class="form-floating mb-3">
                    <select class="form-select" id="cbAdviser" name="cbAdviser" aria-label="Floating label select example">
                      <?php
                        require_once "config.php";
                        $sql = "SELECT * FROM tblaccounts where usertype='Teacher' order by username";
                        $result = mysqli_query($link, $sql);	
                        while($row = mysqli_fetch_array($result)){
                          $adviser = $row['username'];
                          echo "<option value='$adviser'>$adviser</option>";
                        }?>
                    </select>
                    <label for="cbUsertype">Adviser</label>
                  </div>
                  <div class="d-flex justify-content-center">
                    <div class="button">
                      <button class="btn btns secondary" type="button" name="btnclear" onclick="ClearFields();">Clear</button>
                      <button class="btn btns primary" type="submit" name="btnAddSec" id="btnAddSec">Save</button>
                    </div>
                  </div>
                </div>
              </form>
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
    <script>
      $(document).ready(function() {
        if ($("body").height() > $(window).height()) {
          $("#footer").css("position", "relative");
        }
        
      });
    </script>
    <script>
      $(document).ready(function(){
        $.ajax({
          type:'POST',
          url:'table.php',
          data:{
            table:"section",
            search:$('#txtsearch').val(),
          },
          success:function(data){
            $('#output').html(data);
          }
        });
        $('#cbUsertype').change(function(){
          if($('#cbUsertype').val()=="Student"){
            $('#section').css("display", "block");
          }
          else{
            $('#section').css("display", "none");
          }
        })

      });
    </script>
  </body>
</html>