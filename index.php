<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Form</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
      
        <link rel="stylesheet" href="style.css">
    </head>
    <style>

    body{
        background-image: url('uploads/bookbg1.png')
      
    }


    .login-form-3 .btnSubmit {
    font-weight:bolder;
    color: white;
    background-color:#87541f;
    width: 60%;
    text-shadow: 0px 1px 1px black;
    box-shadow: -3px 4px 10px 0px black;
}
.login-form-3 .btnSubmit:hover{
    color: #87541f;
    background-color:white;
}

.login-form-3 h3 {
    text-align: center;
    color: white;
    text-shadow: 5px 6px 6px black;
    
    font-size:40px;
    width:bolder;
}

.login-form-1 h3 {
    text-align: center;
    color: #8e581c;
    font-weight:bolder;
    text-shadow: 5px 6px 12px #515151;
    font-size:40px;
}

.login-form-3 {
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(250, 223, 170, 100%), 0 9px 26px 0 rgba(250, 223, 170, 100%);
}
.icons{
    font-size: 1rem;
    margin-left: 1.5rem;
    color: var(--black);
    cursor: pointer;
    margin-top:2rem;

}

    </style>
    <body >
  
    
<?php
 $emailmsg="";
 $pasdmsg="";
 $msg="";

 $ademailmsg="";
 $adpasdmsg="";


 if(!empty($_REQUEST['ademailmsg'])){
    $ademailmsg=$_REQUEST['ademailmsg'];
 }

 if(!empty($_REQUEST['adpasdmsg'])){
    $adpasdmsg=$_REQUEST['adpasdmsg'];
 }

 if(!empty($_REQUEST['emailmsg'])){
    $emailmsg=$_REQUEST['emailmsg'];
 }

 if(!empty($_REQUEST['pasdmsg'])){
  $pasdmsg=$_REQUEST['pasdmsg'];
}

if(!empty($_REQUEST['msg'])){
    $msg=$_REQUEST['msg'];
 }

 ?>

<div class ="icons">
    <a href="../index2.php" class="fa-solid fa-house"style="font-size: 2rem;color: #dbb87d;"> Home</a>
    
    
     </div>

<div class="container login-container">

<div class="row"><h4 style="color: red;margin-left: 30rem;"><?php echo $msg?></h4></div>
            <div class="row">
 
                <div class="col-md-6 login-form-3">
                    <h3>Admin Login</h3>
                    <form action="loginadmin_server_page.php" method="get">
                        <div class="form-group">
                        <input type="text" class="form-control" name="login_email" placeholder="Your Email *" value="" style="border-color: black;"/>

                        </div><br>
                        <label style="color: red;text-shadow: 0 0 black; font-size: 20px;"><?php echo $ademailmsg ?></label>
                        
                        <div class="form-group">
                            <input type="password" class="form-control" name="login_pasword"  placeholder="Your Password *" value=""style="border-color: black;" />
                        </div>
                        <label style="color: red;text-shadow: 0 0 black; font-size: 20px;"><?php echo $adpasdmsg ?></label>
                        <div class="form-group"><br><br>
                        <input type="submit" class="btnSubmit" value="Login" style="border-color: black;">

                        </div>
                        <!-- <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div> -->
                    </form>
                </div>
                <div class="col-md-6 login-form-1">
                    <h3>General Login</h3>
                    <form action="login_server_page.php" method="get">
                        <div class="form-group">
                        <input type="text" class="form-control" name="login_email" placeholder="Your Email *" value="" style="border-color: black;"/>

                        </div><br>
                        <label style="color: red; text-shadow: 0 0 black;font-size: 20px;"><?php echo $emailmsg ?></label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="login_pasword"  placeholder="Your Password *" value=""style="border-color: black;" />
                        </div>
                        <label style="color: red;text-shadow: 0 0 black; font-size: 20px;"><?php echo $pasdmsg ?></label>
                        <div class="form-group"><br><br>
                        <input type="submit" class="btnSubmit" value="Login" style="border-color: black;">

                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
      

        
        



        <script src="" async defer></script>
    </body>
</html>