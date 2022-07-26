<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration </title>
    <link rel="stylesheet"  type="text/css" href="stylelog.css">
</head>
<body>
    
    <div class="whole">
        <div class="reg_box"style="height:440px">
            <h1 style="color:crimson; text-align:center" class="head">Registration</h1>
           <form method="post" action="reg.php"  autocomplete="off" class="main_reg" onsubmit="validate();" name="regform">
                <label class="name_lbl">Name</label><br/><input class="name" type="text" id="name"  name="name"><br/>
                <label class="phoneno_lbl">Phone Number</label><br/><input class="phoneno" type="text" id="phoneno"  name="phone"><span class="err two"></span><br/>
                <label class="email_lbl">Email Address</label><br/><input class="email" type="text" id="email" name="email" ><span class="err three"></span><br/>
                <label class="username_lbl">Username</label><br/><input class="username" type="text" id="username" name="username"><span class="err four"></span><br/> 
                <label class="setpw_lbl">Set Password</label><br/><input class="setpw" type="password" id="setpw"  name="password"><span class="err five"></span><br/>
                <label class="confirmpw_lbl">Confirm Password</label><br/><input class="confirmpw" type="password" id="confirmpw" name="cpassword" ><span class="err six"></span><br/>
                <br/>
                <p style="margin-top:5px; "> Already have an account? <a href="login.php" style="color: red;"> login now</a> 
                <br/><input type="submit" class="signup" value="Sign up" name="regform" style="width:100px; "  >
            </form>
        </div>
    </div> 
</body>

<?php 

include ('dbconnect.php');

if(isset($_POST['regform'])){


    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
}
$sql = "INSERT INTO tbl_users (name,usern,email,setpw,confirmpw,phoneno)
         VALUES ('$name','$username','$email','$password','$cpassword','$phone')";
         if (mysqli_query($conn, $sql)) {
            echo "New record created successfully !";
            header('location:admin/admindash.php');
            
            
         } else {
            echo "Error inserting data into database";
}

?>