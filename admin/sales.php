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

    $sql="SELECT * FROM sales;";
    $result=mysqli_query($connection,$sql);
    $resultcheck=mysqli_num_rows($result);

    //SELECT `User_id`, `User_name`, `User_email`, `User_address`, `User_phone_no`, `User_password` FROM `user` WHERE 1
    if($resultcheck>0)
    {
    ?>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">sales_id</th>
            <th scope="col">user_id</th>
            <th scope="col">vehicle_id</th>
            <th scope="col">order_date</th>
            
        </tr>
        </thead>


        <?php
        while($row=mysqli_fetch_assoc($result))
        {
            ?>

            <tr>
                <th scope="col"><?php echo $row['sales_id'];?></th>
                <td><?php echo $row['user_id'];?></td>
                <td><?php echo $row['veh_id'];?></td>
                <td><?php echo $row['order_date'];?></td>

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

