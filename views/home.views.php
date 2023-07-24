<?php

    require 'controller/insert.php';
    // require 'controller/fetching.php'
    // if(!$_SESSION['login']['email']){
    //     header("location:/login");
    // }
?>

<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Paper Dashboard 2 by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" /> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/paper-dashboard.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="homePage.css">
    <script src="https://kit.fontawesome.com/f117ba3f27.js" crossorigin="anonymous"></script>
     <!-- Latest compiled and minified CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar">
            <div class="logo " style="background-color: blue;">
                <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                </a>
                <a href="https://www.creative-tim.com" class="simple-text logo-normal">
                    <div class="logo-image-big">
                     <img src="images/Logo.svg">
                   </div>
                </a>
            </div>

            <div class="sidebar-wrapper" style="background-color:blue;">

                <ul class="nav">
                    <?php foreach($data as $datas):?>
                        <form action="/fetching" method="POST">    
                            <li>
                                <button  class="btn" style="background-color:white;"value="<?php echo $datas['id']?>" name="list" type="submit"><?php echo $datas['name'] ?></button>
                            </li>
                        </form>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
        <form action="/fetching" method="POST">            
                <button type="submit" name="<?php echo $_SESSION['btnName'];?>" value="<?php echo $_SESSION['id']?>"><?php echo $_SESSION['btnName'];?>(<?php echo $count;?>)</button>
        </form>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:;"></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group my-19">
                                <input type="search" id="search" value="" class="form-control search" placeholder="Search Your Journals" style="width:600px ;">
                            </div>
                        </form>
                        <form action="/open" method="POST"  class="col-2 mx-100">
                            <button class="btn btn-primary btn-sm" >Add Project</button>
                        </form>
                        <form action="/logout" method="POST">

                        <button class="btn btn-primary">LOGOUT</button>

                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link btn-magnify" href="javascript:;">
                                    <i class="nc-icon nc-layout-11"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Stats</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content ">
            <div class="container">
            <h6 class="mb-0">
                <form action="/fetching" method="POST">            
                    <button type="submit" class="btn btn-danger btn-sm" name="<?php echo $_SESSION['btnName'];?>" value="<?php echo $_SESSION['id']?>"><?php echo $_SESSION['btnName'];?>(<?php echo $count;?>)</button>

                 </form>
                </h6>
                    <!-- </div> --> 
                </div>
                <!-- <div class="py-3 mb-4 shadow-5m bg-light bg-gradient border-top"> -->
                 <div class="container">
                        <h6 class="mb-0">
                        <form action="/pop-up" method="POST">
                            <button type="submit" name="adding" class="btn btn-info btn-sm" value="<?php echo $_SESSION['id']?>">Add Task</button>
                            </form>
                        </h6>
                    <!-- </div> --> 
                </div>

            <?php foreach($_SESSION['single'] as $datum):?>
                    <form action="/decription" method="post">
                        <ul>
                            <li><?php echo $datum['name'];?></li>
                            <li><?php echo $datum['assigning_person'];?></li>
                        </ul>
                         <button type="submit" class="edit" name="edit" value="<?php echo $datum['id'];?>">Read more...</button>
                    </form>             
                <!-- </div>             -->
            <?php endforeach;?>


            </div>
         
    
            <!--   Core JS Files   -->
            <!-- <script src="../assets/js/core/jquery.min.js"></script>
            <script src="../assets/js/core/popper.min.js"></script>
            <script src="../assets/js/core/bootstrap.min.js"></script>
            <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script> -->
            <!--  Google Maps Plugin    -->
            <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
            <!-- Chart JS -->
            <!-- <script src="../assets/js/plugins/chartjs.min.js"></script> -->
            <!--  Notifications Plugin    -->
            <!-- <script src="../assets/js/plugins/bootstrap-notify.js"></script> -->
            <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
            <!-- <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script> -->
            <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
            <!-- <script src="../assets/demo/demo.js"></script> -->
            <!-- <script>
                $(document).ready(function () {
                    // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
                    demo.initChartsPages();
                });
            </script> -->
            <script src="homePage.js"></script>
</body>

</html>













     <!-- <form action="/fetching" method="POST">            
                <button type="submit" name="<?php echo $_SESSION['btnName'];?>" value="<?php echo $_SESSION['id']?>"><?php echo $_SESSION['btnName'];?>(<?php echo $count;?>)</button>

        </form>
        <form action="/pop-up" method="POST">

            <button type="submit" name="adding" value="<?php echo $_SESSION['id']?>">Add Task</button>
        </form>
        <?php foreach($_SESSION['single'] as $datum):?>
           

           <form action="/decription" method="post">
            <div class="cards">

                <ul>
                    <li><?php echo $datum['name'];?></li>
                    <li><?php echo $datum['assigning_person'];?></li>
                </ul>
                <button type="submit" class="edit" name="edit" value="<?php echo $datum['id'];?>">Read more...</button>
            </div>
              
            </form>
              
  
           
            <?php endforeach;?>

    </div>
</div>
    
</div>
</body>
</html>
































   


                  
                    