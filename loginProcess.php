<?php
//include db connection file

include('connect.php');
$pass= md5($pass);
$sql="SELECT * from users where username='$username' && password='$pass';";
$result= mysqli_query($conn,$sql);
if($result->num_rows>0){
    $data= $result->fetch_assoc();
    $_SESSION['value']=1;
    $_SESSION['uid']=$data['id'];
    $_SESSION['uname']=$data['username'];
    $_SESSION['email']=$data['email'];
     header('Location:http://localhost/finalproject/index.php');
}
else{
    $_SESSION['error']='Invalid Username or password';
    header('Location:http://localhost/finalproject/login.php');
}
?>