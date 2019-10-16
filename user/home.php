<?php
session_start();
if(isset($_SESSION['email']))
{
?>
    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style1.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
   <!--navbar-->
   <nav class=" navbar navbar-expand-md navbar-light bg-dark fixed-top"  >
       <a class="navbar-brand" href="#">
          <!-- <img src="images/image2.jpg" width="30" height="30" alt="">-->
           <i class="fas fa-child text-warning fa-3x"></i>
       </a>
       <button type="button" class="navbar-toggler bg-light" data-toggle="collapse"
               data-target="#nav"><span class="navbar-toggler-icon"></span>

       </button>
       <div class="collapse navbar-collapse justify-content-between" id="nav">
           <ul class="navbar-nav">
               <li class="nav-item"><a class="nav-link text-light text-uppercase
        font-weight-bold px-3"  href="#">Home</a></li>
               <li class="nav-item"><a class="nav-link text-light text-uppercase
          font-weight-bold px-3 " href="#">Services</a></li>

               <li class="nav-item"><a  class="nav-link text-light
          text-uppercase font-weight-bold px-3"href="#">Vehicles</a></li>
               <li class="nav-item"><a  class="nav-link text-light
          text-uppercase font-weight-bold px-3"href="#">Contact</a></li>
           </ul>
           <form class="form-inline ml-3">
              <!-- <div class="input-group">
                   <input type="text" class="form-control" placeholder="search">-->
               <a href="logout.php" class="btn btn-dark btn-lg px-4 ml-3">LOGOUT</a>
              <!-- <button><a href="logout.php">logout</a> </button>-->
                   <div class="input-group-append">
                       <?php
                       $connection=mysqli_connect("localhost","root","","dbms");
                       $sessionvar=$_SESSION['email'];
                       $sql="SELECT * FROM user where User_email='$sessionvar'";
                       $result=mysqli_query($connection,$sql);

                       if($result->num_rows>0) {



                           while ($row = mysqli_fetch_assoc($result)) {
                               ?>


                               <a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-dark btn-lg px-4 ml-3">
                                  EDIT
                               </a>

                               <?php
                           }
                       }
                       ?>
                   </div>

       </div>

       </form>
       </div>
   </nav>
   <!--nabvar-->

   <!--banner-->

   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
       <div class="carousel-inner">
           <div class="carousel-item active">
               <img src="images/bgd41.jpg" class="d-block w-100" alt="...">
           </div>
           <div class="carousel-item">
               <img src="images/bgd11.jpg" class="d-block w-100" alt="...">
           </div>
           <div class="carousel-item">
               <img src="images/bgd31.jpg" class="d-block w-100" alt="...">
           </div>
       </div>
       <!--<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
       </a>-->
   </div>
   <div class="main-text hidden-xs ">
       <div>
           <div  class="row justify-content-center
  align-items-center" style="height:100vh" >
               <!--<center><h1 style="padding-bottom: 000px" class="text-warning display-2 font-weight-bold">
                           VEHICLE MANAGEMENT SYSTEM</h1></center>-->
           </div>
           <!--  <h3>

                 Lorem ipsum dolor sit amet, consectetur adipiscing elit.

                 copied from - https://bootsnipp.com/snippets/featured/carousel-static-headline-caption
             </h3>
             <div class="">
                 <a class="btn btn-clear btn-sm btn-min-block" href="http://www.jquery2dotnet.com/">Login</a><a class="btn btn-clear btn-sm btn-min-block"
                                                                                                                href="http://www.jquery2dotnet.com/">Registration</a></div>-->
       </div>
   </div>
   </div>
   <!--end of banner-->

   <!--skills-->
   <section class="bg-light p-5">
       <div class="container-fulid">
           <!--tittle-->
           <div class="row">
               <div class="col text-center mb-3">
                   <h1 class="text-warning display-2 font-weight-bold">SALES</h1>
                   <p class="lead text-info">Great Prices. Great Vehicles. Great Service.</p>

               </div>

           </div>
           <!-- end of tittle-->

           <!--vehicles-->
           <!-- end of tittle-->
           <div class="row">
               <div class="col-lg-3 col-sm-6">
                   <img src="images/image3.jpg" class="img-thumbnail">
                   <h2 class="my-3 text-warning"><a href="vinfo.php?id=1">Project One</a></h2>
                   <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                       adipisicing elit. Deleniti, consequuntur?</p>
               </div>
               <div class="col-lg-3 mt-3 col-sm-6">
                   <img src="images/image1.jpg" class="img-thumbnail">
                   <h2 class="my-3 text-warning"><a href=vinfo.php?id=2">Project One</a></h2>
                   <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                       adipisicing elit. Deleniti, consequuntur?</p>
               </div>
               <div class="col-lg-3 mt-4 col-sm-6">
                   <img src="images/image2.jpg" class="img-thumbnail">
                   <h2 class="my-3 text-warning"><a href="vinfo.php?id=14">Project One</a></h2>
                   <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                       adipisicing elit. Deleniti, consequuntur?</p>
               </div>
               <div class="col-lg-3 mt-5 col-sm-6">
                   <img src="images/image4.jpg" class="img-thumbnail">
                   <h2 class="my-3 text-warning"><a href="vinfo.php?id=15">Project One</a></h2>
                   <p class="text-muted">Lorem ipsum dolor sit amet, consectetur
                       adipisicing elit. Deleniti, consequuntur?</p>
               </div>
           </div>
       </div>
   </section>

   <!--end of project-->
   <section class="bg-light p-5">
       <div class="container-fulid">
           <!--tittle-->
           <div class="row">
               <div class="col text-center mb-3">
                   <h1 class="text-warning display-2 font-weight-bold">SERVICES</h1>
                   <p class="lead text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste suscipit qui aliquam.</p>
               </div>

           </div>
           <div class="row text-center">
               <div class="col-lg-4 col-sm-10 mx-auto mb-5">
                   <i class="fas fa-desktop fa-6x text-warning mb-3"></i>
                   <h1 class="text-secondary">Development</h1>
                   <p class="text-muted my-4">With our experience from the world of sports car series production, we can support you at every stage
                       of the entire product development process: from the concept phase to series production.  </p>
                   <a href="#" class="btn btn-outline-warning">Learn More</a>
               </div>

               <div class="col-lg-4 col-sm-10 mx-auto mb-5">
                   <i class="far fa-edit fa-6x text-warning mb-3"></i>
                   <h1 class="text-secondary">Design</h1>
                   <p class="text-muted my-4"> the process of developing the appearance, and to some extent the ergonomics, of motor vehicles,
                       including automobiles, motorcycles, trucks, buses, coaches, and vans.</p>
                   <a href="#" class="btn btn-outline-warning">Learn More</a>
               </div>
               <div class="col-lg-4 col-sm-10 mx-auto mb-5">
                   <i class="fas fa-cogs fa-6x text-warning mb-3"></i>
                   <h1 class="text-secondary">Creativity</h1>
                   <p class="text-muted my-4">Creativity does not just happen. It is a cognitive process that produces new ideas or transforms old ideas
                       into updated concepts, according to Brussels Free University psychology professor Liane Gabora</p>
                   <a href="#" class="btn btn-outline-warning">Learn More</a>
               </div>

           </div>
       </div>
   </section>
   <!--manfactures-->
   <section class="bg-secondary p-2 p-sm-5">
       <div class="container-fulid">
           <!--tittle-->
           <div class="row">
               <div class="col text-center mb-3">
                   <h1 class="text-warning display-2">Team</h1>
                   <p class="lead text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste suscipit qui aliquam.</p>
               </div>

           </div>
           <!-- end of tittle-->


           <div class="row">
               <div class="col-lg-4 col-sm-10 mx-auto mb-4">
                   <div class="card">
                       <img src="images/image1.jpg" class="card-img-top">
                       <div class="card-body">
                           <div class="card-tittle">
                               <h3 class="text-muted">Michael</h3>
                           </div>
                           <div class="card-subtittle">
                               <p class="lead text-secondary">Lorem ipsum dolor sit amet.</p>
                           </div>
                           <div class="text-right">
                               <a href="#">
                                   <i class="fab fa-facebook fa-2x mx-2 text-primary"></i>
                               </a>
                               <a href="#">
                                   <i class="fab fa-twitter fa-2x mx-2 text-info"></i>
                               </a>
                               <a href="#">
                                   <i class="fab fa-youtube fa-2x mx-2 text-danger"></i>
                               </a>

                           </div>

                       </div>

                   </div>
               </div>
               <div class="col-lg-4  col-sm-10 mx-auto mb-4">
                   <div class="card">
                       <img src="images/image2.jpg" class="card-img-top">
                       <div class="card-body">
                           <div class="card-tittle">
                               <h3 class="text-muted">Jack</h3>
                           </div>
                           <div class="card-subtittle">
                               <p class="lead text-secondary">Lorem ipsum dolor sit amet.</p>
                           </div>
                           <div class="text-right">
                               <a href="#">
                                   <i class="fab fa-facebook fa-2x mx-2 text-primary"></i>
                               </a>
                               <a href="#">
                                   <i class="fab fa-twitter fa-2x mx-2 text-info"></i>
                               </a>
                               <a href="#">
                                   <i class="fab fa-youtube fa-2x mx-2 text-danger"></i>
                               </a>

                           </div>

                       </div>

                   </div>
               </div>
               <div class="col-lg-4  col-sm-10 mx-auto mb-4">
                   <div class="card">
                       <img src="images/image3.jpg" class="card-img-top">
                       <div class="card-body">
                           <div class="card-tittle">
                               <h3 class="text-muted">Ann</h3>
                           </div>
                           <div class="card-subtittle">
                               <p class="lead text-secondary">Lorem ipsum dolor sit amet.</p>
                           </div>
                           <div class="text-right">
                               <a href="#">
                                   <i class="fab fa-facebook fa-2x mx-2 text-primary"></i>
                               </a>
                               <a href="#">
                                   <i class="fab fa-twitter fa-2x mx-2 text-info"></i>
                               </a>
                               <a href="#">
                                   <i class="fab fa-youtube fa-2x mx-2 text-danger"></i>
                               </a>

                           </div>

                       </div>

                   </div>
               </div>

           </div>
       </div>
   </section>
   <section class="bg-light p-5 ">
       <div class="container-fulid">
           <!--tittle-->
           <div class="row">
               <div class="col text-center mb-3">
                   <h1 class="text-warning display-2">Contact us</h1>
                   <p class="lead text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                       Iste suscipit qui aliquam.</p>
               </div>

           </div>
           <!-- end of tittle-->
           <div class="row justify-content-center">
               <div class="col-lg-6 col-sm-10 col-md-8">
                   <div class="text-center text-secondary">
                       <h2>Got Question ?</h2>
                       <p>Stay Connected</p>
                   </div>
                   <form class="text-muted" action="contact.php" method="GET">
                       <div class="form-group">
                           <label for="name">Name</label>
                           <input type="text" class="form-control" name="name">
                       </div>
                       <div class="form-group">
                           <label for="email">Email</label>
                           <input type="email" class="form-control" name="email" >
                       </div>
                       <div class="form-group">
                           <label for="message">Message</label>
                           <textarea class="form-control" rows="3" name="message"></textarea>
                       </div>
                       <button class="btn btn-outline-warning btn-block" type="submit">
                           Submit Question
                       </button>
                   </form>

               </div>


           </div>

       </div>
   </section>

   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
    <?php
}
else{
    echo "<script>   window.location.href='index.php';</script>";

}
?>