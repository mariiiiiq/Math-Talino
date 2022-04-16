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
    <link href="assets/img/logo-sm.ico" rel="icon">
    <link href="assets/css/s.css" rel="stylesheet">
    <link href="assets/css/mobile.css" rel="stylesheet">
    <title>Math-Talino</title>
  </head>
  <body>
    <img src="assets/img/clouds.png" class="clouds " style=""alt="">
    <img src="assets/img/way.png" class="way" style=""alt="">
    <img src="assets/img/grass.png" class="grass" style=""alt="">  
    <img src="assets/img/tree.png" class="tree" style=""alt="">
    <img src="assets/img/treeright.png" class="rtree" style=""alt="">
    
        <div style="text-align:center;">
            <img src="assets/img/logo-lg.png" class="img-fluid px-5 logo-lg" alt="">
        </div>
        <h3 class="title tlt" style="text-align:center;">A Mathematics Online Courseware for Elementary Students</h3>
        <div class="pst">
            <img src="assets/img/post.png" class="post" style=""alt="">
            <img src="assets/img/lightpost.png" class="post light" style=""alt="" data-bs-toggle="modal" data-bs-target="#frmlogin">
        </div>
        <div class="container-fluid px-5">
        <!-- Login Modal -->
        <div class="modal fade" id="frmlogin" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header" style="border:none;padding-bottom:0px;">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="loginform">
                        <div class="modal-body">
                            <div class="">
                                <div style="display: inline-block; text-align:center;">
                                    <img src="assets/img/llano.png" class="img-fluid w-25" alt="">
                                    <img src="assets/img/logo-sm.png" class="img-fluid w-25" alt="">
                                </div>
                                <div class="form-floating mt-2 mb-3">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off">
                                    <label for="username">Username</label>
                                    </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
                                    <label for="password">Password</label>
                                    <i class="bi bi-eye-fill passeye" id="eye" onclick="passToggle()"></i> 
                                </div>
                                <p class="text-danger" id="inputerror" name="inputerror">&nbsp;</p>
                                <div class="d-flex justify-content-center mt-1">
                                    <button class="btn btns secondary" type="button" name="btnclear" onclick="ClearFields();">Clear</button>
                                    <button class="btn btns primary" name="btnlogin" id="btnlogin">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        function ClearFields() {
            document.getElementById("username").value = "";
            document.getElementById("password").value = "";
        }
        var state = false;
        function passToggle(){
            if(state){
                document.getElementById("password").setAttribute("type", "password");
                document.getElementById("eye").style.color="#7a797e";
                state = false;
            }
            else{
                document.getElementById("password").setAttribute("type", "text");
                document.getElementById("eye").style.color="#74a3d7";
                state = true;
            }
        }
        var el = document.getElementById("password");
        el.addEventListener("keydown", function(event) {
            if (event.key === "Enter") {
            document.getElementById("btnlogin").click();
            }
        });
        $('#btnlogin').click(function(){
            var $usr = $('#username').val();
            var $pss = $('#password').val();
            if($usr == "" || $pss ==""){
                $('#inputerror').html("Fill up the fields!");
            }
            else{
                $.ajax({
                    type:'POST',
                    url:'process.php',
                    data:{
                        login:"true",
                        username:$usr,
                        password:$('#password').val(),
                    },
                    success:function(data){
                    $('#inputerror').html(data);
                    }
                });                
            }        
        });
    </script>
  </body>
</html>