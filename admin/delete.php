<?php
$connection=mysqli_connect("localhost","root","","dbms");
$query="DELETE FROM `contact` WHERE id='$_GET[id]'";
$result=mysqli_query($connection,$query);
//echo "deleted successfully";
if($result)
{

    echo "
      <script>
      alert('DELETED SUCCESSFULly');
      window.location.href='feedback.php';
			</script>";
}
?>

?>