<?php


include('dbconnect.php');
session_start();
if(isset($_SESSION['uid'])){
    header('location:admin/admindash.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="stylelog.css">

</head>

<body>
    <?php
include ('dbconnect.php');
$err=$usernameErr=$passErr="";
$username=$pass="";
if(isset($_POST['login']))
{
	$useremail = $_POST['useremail'];
	$userpassword = md5($_POST['userpassword']);
	$query = "SELECT * FROM tbl_users WHERE email='$useremail' && setpw='$userpassword'";
	$run = mysqli_query($conn,$query);
	$row = mysqli_num_rows($run);
	if ($row<1)
	{
		?><script>
		alert('Invalid Login Credentials!');
		window.open('login.php','_self');
		</script>
		<?php
	}		
	else
	{
		$data=mysqli_fetch_assoc($run);
		$id = $data['id'];
		// echo"id = ".$id ; // to display the ID of respective admin from database.
		$_SESSION['uid']= $id ;
		header('location:admin/admindash.php'); //redirect
	}
}
?>
    <div class="whole">
        <div class="innerbox">
            <h1 style="color:crimson; text-align:center" class="head">Log in</h1>
            <form method="post" name="loginform" action="login.php" required autocomplete="off" class="textfield">
                <div class="text_field">
                    <input type="text" name="useremail" class="inputs inputtext"><label class="text">username</label>
                </div>
                <p>
                    <?php echo '<span style="color:red line-height:10px height:10px;">&nbsp;'.$usernameErr.'</span>' ?>
                </p>
                <div class="text_field">
                    <input type="password" name="userpassword" class="inputs inputps"><label class="text">password</label>
                </div>
                <p>
                    <?php echo '<span style="color:red line-height:10px height:10px;">&nbsp;'.$passErr.'</span>'?>
                </p>
                <div class="remember">
                    <input type="checkbox" id="login_check" class="login_check" <?php if(isset($_COOKIE['RememberMe'])
                        && $_COOKIE['RememberMe']==1){ ?> checked
                    <?php }?>>
                    <label for="login_check" class="loginchecklbl">Remember me</label>
                </div>
                <input class="submit" type="submit" value="Login" name="login">
                <div class="forgetp"><a>Forget your password? </a></div>
                <div class="query">
                    <span>Not registered?</span>
                    <span class="signuplink"><a href="reg.php">Register Now</a></span>
                </div>
            </form>
        </div>

    </div>
    <script type="text/javascript" src="form.js"></script>
</body>