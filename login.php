<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet"  type="text/css" href="stylelog.css">
   
</head>
<body>
<?php
include ('dbconnect.php');
$err=$usernameErr=$passErr="";
$username=$pass="";
 if(isset($_POST['submit']))
{      
        $username=$_POST['username'];
        $pass= $_POST['password'];
    if (empty($username)) {
        $usernameErr = "Name is required";
        $err = 1;
    } else {
        if (!preg_match("/^[a-zA-Z ]*$/", $username)) {
            $usernameErr = "Only letters and white space allowed";
            $err = 1;
        }
    }

    if (empty($pass)) {
        $passErr = "Password is required";
        $err = 1;
    }
    if(isset($_POST['login_check']) && $_POST['login_check']=='1'){
            setcookie("RememberMe","1",time()+86400,"/");
        }

    if($err!='1'){
            include('loginProcess.php');
        }
}
?>
    <div class="whole">
        <div class="innerbox">
            <h1 style="color:crimson; text-align:center" class="head">Log in</h1>
            <form method="post"name="loginform" action="login.php" required autocomplete="off" class="textfield">
                <div class="text_field">
                   <input type="text" name="username" class="inputs inputtext"><label class="text">username</label>
                 </div>
                 <p><?php echo '<span style="color:red line-height:10px height:10px;">&nbsp;'.$usernameErr.'</span>' ?></p>
               <div class="text_field">
                   <input type="password" name="password" class="inputs inputps"><label class="text">password</label>
                </div >
                <p><?php echo '<span style="color:red line-height:10px height:10px;">&nbsp;'.$passErr.'</span>'?></p>
                <div class="remember">
                    <input type="checkbox" id="login_check" class="login_check" <?php if(isset($_COOKIE['RememberMe']) && $_COOKIE['RememberMe']==1){ ?> checked <?php }?>>
                    <label for="login_check" class="loginchecklbl">Remember me</label>
                </div>
                <input class="submit" type="submit" value="Login" name="submit">
                <div class="forgetp"><a>Forget your password? </a></div>
                    <div class="query">
                    <span >Not registered?</span>
                    <span class="signuplink" ><a href="reg.php">Register Now</a></span>
                </div>
            </form>
        </div>
        
    </div>
    <script type="text/javascript" src="form.js"></script>
</body>