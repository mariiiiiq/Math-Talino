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
    <link href="../assets/img/logo-sm.ico" rel="icon">
    <link href="../assets/css/style.css" rel="stylesheet">
    <title>Math-Talino</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light navbar-border">
    <div class="container-fluid mx-5">
      <a class="navbar-brand bold w-50" href="#"><img src="../assets/img/logo-sm.png" class="navbar-logo" alt="">Math-Talino</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
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
      <?php
      if(isset($_GET['id'])){
        require_once "../config.php";
        $sql = "SELECT * FROM tblactivity WHERE id='".$_GET['id']."'";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    echo "<h3>".$row['name']."</h3>";
                    echo "<p>".$row['description']."</p>";
                }
            }
        }
      }
      else{
          echo "asdasd";
      }
      $sql = "SELECT * FROM tblaccounts WHERE username = '".$_SESSION['user']."'";
			$result = mysqli_query($link, $sql);
			$rows = mysqli_fetch_array($result);	
			if($rows){
        if($rows['usertype'] == "Teacher"){
          echo "see students uploaded files";
        }
        elseif($rows['usertype'] == "Student"){?>
          <button type="button" class="btn btns primary" data-bs-toggle="modal" data-bs-target="#upload">
          upload your file here
          </button>
          
          <div class="uploadedfiles"></div>
          <?php
        }
        else{
          echo "Error";
        }
      }
      ?>
      
      <div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="addacc">
                    <form method="post" class="frm" action="upload.php" enctype="multipart/form-data">
                      <div class="uploadfilearea">
                        <input type="text" name="actid" value="<?php echo $_GET['id'];?>" hidden></input>
                        <input type="file" id="browseFile" name="browseFile"  hidden ></input>
                        <p style="line-height: 200px;" id="drg">Drag me!</p>
                      </div>
                      <div class="d-flex justify-content-center">
                        <div class="button mt-3">
                          <button class="btn btns secondary" type="button" name="btnclear" onclick="ClearFields();">Clear</button>
                          <button class="btn btns primary" type="submit" name="btnUpload" id="btnUpload">Save</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
    </div>
    <div class="footer" id="footer">
      <div class="footercontent">
          &copy; Copyright <strong><span>Math-Talino</span></strong>. All Rights Reserved
      </div>
  </div>
    <!-- Optional JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../assets/js/upload.js"></script>
    <script>
      $(document).ready(function() {
        if ($("body").height() > $(window).height()) {
          $("#footer").css("position", "relative");
        }
      });
    $(document).ready(function(){  
      let browseFile = document.getElementById("browseFile");
      $('.uploadfilearea').click( function(){  
        browseFile.click();
      });  
      $(browseFile).change(function(){  
          if(browseFile.value){
            var file = document.getElementById("browseFile").files[0].name;
            Type(file);
            
          }
      });  
      $('.uploadfilearea').on('dragover', function(){  
           $(this).addClass('file_drag_over');  
           return false;  
      });  
      $('.uploadfilearea').on('dragleave', function(){  
           $(this).removeClass('file_drag_over');  
           return false;  
      });  
      $('.uploadfilearea').on('drop', function(e){  
        e.preventDefault();
        $(this).removeClass('file_drag_over');
        let file = e.originalEvent.dataTransfer.files[0];
        var files = e.originalEvent.dataTransfer.files;
        for(var i = 0; i < files.length; i++)
        {
          alert('drop');
          browseFile.files = e.originalEvent.dataTransfer.files;
          $(browseFile).change();
        }
      });
 }); 
    </script>
  </body>
</html>