<?php
session_start();
if(isset($_SESSION['id']))
{
$connection=mysqli_connect("localhost","root","","dbms");

?>



<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title></title>
</head>
<body>
<font color="green" size="05" face="algerian">
    <h1 align="center">vehicle information</h1>
<br>
<br>
<form action="vehicle1.php" method="POST">

   <center>vehicle_type<input type="text" name="vtype"  ><br><br>
       vehicle_modelno<input type="text" name="vmodel" ><br><br>
       vehicle_manufacture<input type="text" name="vman"  ><br><br>
       vehicle_specification<input type="text" name="vspec"  ><br><br>
       vehicle_chassis_number<input type="text" name="vcn"  ><br><br>
       vehicle_fuel_capacity<input type="text" name="vfc"  ><br><br>
       vehicle_mileage<input type="text" name="vmi"  ><br><br>
       vehicle_horsepower<input type="text" name="vhp"  ><br><br>
       vehicle_images<input type="file" name="image"  ><br><br>
       <input type="submit"  name="submit" value="submit">
       <button><a href="home.php">BACK</a></button>





   </center></font>

</form>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
    <?php
}
else
{
    header('Location:login.php');
}
?>

