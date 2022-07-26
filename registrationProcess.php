<?php
//include db connection file
include('connect.php');
$select=mysqli_query($conn,"SELECT * FROM 'user_details' where email='$email' AND password='$pass'") or die('query failed');
if(mysqli_num_rows($select)>0){
    $msg="user already exist";
    $_SESSION['message']=$msg;
    echo '<script>window.location="http://localhost/finalproject/reg.php";</script>';
}
else{
$sql = "INSERT INTO `users`( `name`, `email`,`username`, `mobile`, `password`)
        VALUES ('$name','$email','$username','$mobile','$pass');";
if(mysqli_query($conn, $sql)){
    $_SESSION['value']=1;
    $_SESSION['uid']=$data['id'];
    $_SESSION['uname']=$data['username'];
    $_SESSION['email']=$data['email'];
    echo '<script>window.location="http://localhost/finalproject/index.php";</script>';
    exit();

}
}
