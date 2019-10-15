<?php
session_start();
if(isset($_SESSION['id']))
{
$connection=mysqli_connect("localhost","root","","dbms");

?>

<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body>

<?php

$sql="SELECT * FROM vehicle;";
$result=mysqli_query($connection,$sql);
//$resultcheck=mysqli_num_rows($result);

//SELECT `User_id`, `User_name`, `User_email`, `User_address`, `User_phone_no`, `User_password` FROM `user` WHERE 1
if($result->num_rows>0)
{
?>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">vehicle_id</th>
        <th scope="col">vehicle_type</th>
        <th scope="col">vehicle_manufacture</th>
        <th scope="col">vehicle_modelno</th>
        <th scope="col">vehicle_specification</th>
        <th scope="col">chassis_number</th>
        <th scope="col">fuel_capacity</th>
        <th scope="col">mileage</th>
        <th scope="col">horsepower</th>
        <th scope="col">images</th>
    </tr>
    </thead>


    <?php
    while($row=mysqli_fetch_assoc($result))
    {
        ?>

        <tr>
            <th scope="col"><?php echo $row['veh_id'];?></th>
            <td><?php echo $row['veh_type'];?></td>
            <td><?php echo $row['veh_manufacture'];?></td>
            <td><?php echo $row['veh_model_no'];?></td>
            <td><?php echo $row['veh_spec'];?></td>
            <td><?php echo $row['chassis_number'];?></td>
            <td><?php echo $row['fuel_capacity'];?></td>
            <td><?php echo $row['mileage'];?></td>
            <td><?php echo $row['horsepower'];?></td>
            <td><?php echo $row['Images'];?></td>
        </tr>

        <?php
    }
    }
    else
    {

        echo "<h1><center>No Data Found!!!!!!</center></h1>";
    }
    ?>

</table>
<a href="home.php">
    <button class="btn-primary" value="logout">BACK</button>

</body>
</html>






    <?php
}
else
{
    header('Location:login.php');
}
?>

