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
    <style>
        body {
            background-image: url('assets/img/bg.png');
            background-size: cover;
            background-position: 50% 0;
        }
    </style>
  </head>
  <body>
    <div class="container-fluid px-5">
        <section id="welcome">
            <div class="container-fluid">
                <div class="row py-5">
                    <div class="col-md-7 d-md-flex flex-md-column justify-content-center align-items-stretch pt-5 order-2 order-md-1" data-aos="fade-up">
                        <img src="assets/img/logo-lg.png" class="img-fluid px-5 logo-lg" alt="">
                        <h5 class="bold">A Mathematics Online Courseware for Elementary Students</h5>
                        <div>
                        <button class="btn btns primary mb-5" type="submit" data-bs-toggle="modal" data-bs-target="#frmlogin">
                        Login</button>
                        </div>
                    </div>
                    <div class="col-md-5 d-md-flex flex-md-column align-items-stretch order-1 order-md-2 justify-content-center" data-aos="fade-up">
                        <img src="assets/img/kid-in-monitor.png" class="img-fluid kid" style="display:block;"alt="">
                    </div>
                </div> 
            </div>
        </section>
        <!-- Login Modal-->
        <div class="modal fade" id="frmlogin" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <img src="assets/img/logo-sm.png" class="modal-logo" alt="">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="loginform">
                        <div class="modal-body">
                                <div class="">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off">
                                        <label for="username">Username</label>
                                        </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
                                        <label for="password">Password</label>
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
