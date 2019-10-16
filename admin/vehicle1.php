<?php
if (isset($_POST['submit']))
{
    $vtype = $_POST['vtype'];
    $vmodel = $_POST['vmodel'];
    $vman = $_POST['vman'];
    $vspec = $_POST['vspec'];
    $vcn = $_POST['vcn'];
    $vfc = $_POST['vfc'];
    $vmi = $_POST['vmi'];
    $vhp = $_POST['vhp'];
    $image=$_FILES['image']['name'];
    $temp=$_FILES['image']['tmp_name'];
    $target="images1/".$image;
    move_uploaded_file($temp, $target);
    $connection = mysqli_connect("localhost", "root", "", "dbms");

    $query = "INSERT INTO `vehicle`(`veh_type`, `veh_manufacture`, `veh_model_no`, `veh_spec`, `chassis_number`, `fuel_capacity`, `mileage`, `horsepower`, `Image`) 
      VALUES('$vtype','$vmodel','$vman','$vspec','$vcn','$vfc','$vmi','$vhp','$image');";
    $result = mysqli_query($connection, $query);
    if ($result)
    {
        echo "<script>alert('success');</script>";
    }
    else {
        echo "<script>alert('unsuccess');</script>";
        }
}










?>