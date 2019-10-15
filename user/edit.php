<?php
$email=$_POST['email'];
$id=$_POST['id'];
$connection=mysqli_connect("localhost","root","","dbms");
/*if($connection)
{
    echo "connected";
}*/

$sql="UPDATE `user` SET User_email='$email' WHERE id='$id'";
$result=mysqli_query($connection,$sql);
print_r($result);
if($result)
{
    echo"<script> alert('success');</script>";
    echo "<script>   window.location.href='home.php';</script>";

}
else{
    echo"<script> alert('unsuccess');</script>";
    echo "<script>   window.location.href='home.php';</script>";

}



?>