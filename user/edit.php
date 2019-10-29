<?php
$email=$_POST['email'];
$phone=$_POST['phone'];
$id=$_POST['id'];
$connection=mysqli_connect("localhost","root","","dbms");
/*if($connection)
{
    echo "connected";
}*/

$sql="UPDATE `user` SET User_email='$email',`User_phone_no`='$phone' WHERE id='$id'";
$result=mysqli_query($connection,$sql);
print_r($result);
if($result)
{
    session_start();
    $_SESSION['email']=$email;
    echo"<script> alert('success');</script>";
    echo "<script>   window.location.href='home.php';</script>";

}
else{
    echo"<script> alert('unsuccess');</script>";
    echo "<script>   window.location.href='home.php';</script>";

}



?>