<?php require('config.php')?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">

                                        <?php
                                            $msg = "";    
                                           
                                            if(isset($_POST['register'])){
                                                $email=$_POST['email'];
                                                $phone=$_POST['phone'];

                                                

                                                $duplicate=mysqli_query($conn,"SELECT * from `login` WHERE email='$email' OR phone='$phone'");

                                                if (mysqli_num_rows($duplicate) !== 0) {

                                                $msg = '<div class="alert alert-danger text-center" role="alert" id="user_already_effect"> Phone or Email id already exists </div>';


                                                }else{

                                                    $name = $_POST['name'];
                                                    $phone = $_POST['phone'];
                                                    $email = $_POST['email'];
                                                    $password = $_POST['password'];
    
                                                    $sql = mysqli_query($conn, "INSERT INTO `login`(`name`, `email`, `phone`, `password`) VALUES ('$name','$email', '$phone','$password')");
    
                                                    if($sql == true){
                                                        $msg = '<div class="alert alert-success">Thanks for Registration you can now login</div>';
                                                    }else{
                                                        $msg = '<div class="alert alert-danger">Opps something went wrong please try again after sometime</div>';
                                                    }

                                                   
                                                

                                            }


                                            }
                                        
                                        
                                        ?>


                                        <form method="POST" action="">
                                            <?php echo $msg;?>
                                            
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your Full name" name="name" />
                                                        <label for="inputFirstName">Full name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your Phone No." name="phone" />
                                                        <label for="inputLastName">Phone</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="Password" type="password" placeholder="Create a password" name="password" />
                                                        <label for="inputPassword">Password</label>
                                                        <span id="CheckPasswordMatch"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="ConfirmPassword" type="password" placeholder="Confirm password" />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <!-- <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html">Create Account</a></div> -->
                                                <div class="d-grid"><input type="submit" class="btn btn-primary btn-block" value="Create Account" name="register"></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>

        <script>
            $(document).ready(function () {
   $("#ConfirmPassword").on('keyup', function(){
    var password = $("#Password").val();
    var confirmPassword = $("#ConfirmPassword").val();

     if(password.length <= 5 && confirmPassword.length <= 5){
        $("#CheckPasswordMatch").html("Password length too small !").css("color","red");
    }else if (password !== confirmPassword)
        $("#CheckPasswordMatch").html("Password does not match !").css("color","red");
    else
        $("#CheckPasswordMatch").html("Password match !").css("color","green");
   });
});
        </script>
    </body>
</html>
