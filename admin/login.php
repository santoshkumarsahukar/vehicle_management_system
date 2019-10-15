<?php
session_start();
if(!isset($_SESSION['id']))
{
    ?>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <!------ Include the above in your HEAD tag ---------->

    <!DOCTYPE html>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8"/>
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <link rel="stylesheet" type="text/css"
              href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
              rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="formvalid.js"></script>
        <script type="text/javascript">
            (function () {
                'use strict';
                window.addEventListener('load', function () {
                    var form = document.getElementById('needs-validation');
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                }, false);
            })();
        </script>
    </head>
    <body>

    <font color="#8b0000" size="4" face="Elephant">
        <br>
        <br>
        <h1 align="center">ADMIN LOGIN</h1>
        <br>
        <br>

       <center><form action="login1.php" method="POST" autocomplete="on">
        ADMIN_ID <input type="text" name="id">
            <br>
            <br>
            ADMIN_PASSWORD<input type="password" name="password">
               <br>
               <br>
               <input type="submit" value="submit">
               <br>
               <br>
               <button><a href="http://localhost/dbmsproject/user/index.php">switch user</a></button>

        </font>

     </form></center>


    </body>
    </html>
<?php
    }
    else
        {
            echo "window.href.location='home.php";
        }
    ?>

