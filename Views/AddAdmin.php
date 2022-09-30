<?php
    session_start();
    require "../Model/AdminClass.php";


    if (! isset($_SESSION['ID'])) {
        header("Location: ../Views/Login.php");
        exit;
    }

    // // $model=new AdminClass();
    // // $con=$model->getConnectToDB();
    // // $res=$model->getAdmins($con);
    // // $rows =mysqli_fetch_assoc($res);


    // $con=mysqli_connect("localhost","root","","gymdb");
    // $id=$_SESSION['ID'];
    // $query="SELECT * FROM `Admin` where ID != '".$id."' ";
    // if (isset($_GET['Search'])) {
    //     $search=mysqli_escape_string($con,$_GET['Search']);
    //     $query="SELECT * FROM `Admin` WHERE FName LIKE '".$search."%'  ";
    // }
    // $res=mysqli_query($con,$query);
    


    
?>



<html>
    <header>
        <title>GYM APP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="../Styles/fontsHomePage/icomoon/style.css">

        <link rel="stylesheet" href="../Styles/cssHomePage/bootstrap.min.css">
        <link rel="stylesheet" href="../Styles/cssHomePage/jquery-ui.css">
        <link rel="stylesheet" href="../Styles/cssHomePage/owl.carousel.min.css">
        <link rel="stylesheet" href="../Styles/cssHomePage/owl.theme.default.min.css">
        <link rel="stylesheet" href="../Styles/cssHomePage/owl.theme.default.min.css">

        <link rel="stylesheet" href="../Styles/cssHomePage/jquery.fancybox.min.css">

        <link rel="stylesheet" href="../Styles/cssHomePage/bootstrap-datepicker.css">

        <link rel="stylesheet" href="../Styles/fontsHomePage/flaticon/font/flaticon.css">

        <link rel="stylesheet" href="../Styles/cssHomePage/aos.css">

        <link rel="stylesheet" href="../Styles/cssHomePage/style.css">


        <link rel="stylesheet" href="../Styles/css/style.css">
        
    </header>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


        <div id="overlayer"></div>
        <div class="loader">
        <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
        </div>
        </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="Home.php" class="h2 mb-0">GYM<span class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="Home.php" class="nav-link">Home</a></li>
                <li><a href="Admin.php" class="nav-link">Admins</a></li>
                <li><a href="Users.php" class="nav-link">Users</a></li>
                <li><a href="Clients.php" class="nav-link">Clients</a></li>
                <li><a href="Logout.php" class="nav-link">Logout</a></li>

              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
     
    <div class="site-blocks-cover overlay" style="background-image: url(../Styles/imagesHomePage/header.jpg);" data-aos="fade" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">

          
          <div class="col-md-10 mt-lg-5 text-center">
            <div class="single-text owl-carousel">
              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">Welcome <?= $_SESSION['FNAME']." ".$_SESSION['LNAME'] ; ?> </h1>
                <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">It is time to work</p>
                <div data-aos="fade-up" data-aos-delay="100">
                  <a href="#" target="_blank" class="btn  btn-primary mr-2 mb-2">Get In Touch</a>
                </div>
              </div>


            </div>
          </div>
            
        </div>
      </div>

      <a href="#next" class="mouse smoothscroll">
        <span class="mouse-icon">
          <span class="mouse-wheel"></span>
        </span>
      </a>
    </div>  
     
    
<div class="main">

<!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Add new Admin</h2>
                    <form method="POST" action="../Controller/AddAdminController.php" class="register-form" id="register-form">
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="FName" id="FName" placeholder="First name" required="" />
                        </div>
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="LName" id="LName" placeholder="Last name" required="" />
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="Password" id="Password" placeholder="Password should be greater than 4 characters" required="" />
                            <?php 
                                
                            ?>
                        </div>
                        <!-- <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="file" name="avatar" id="avatar" />
                        </div> -->
                        
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </section>


</div>
    
          
    

    
    
    


  </div> <!-- .site-wrap -->

  <script src="../Styles/jsHomePage/jquery-3.3.1.min.js"></script>
  <script src="../Styles/jsHomePage/jquery-ui.js"></script>
  <script src="../Styles/jsHomePage/popper.min.js"></script>
  <script src="../Styles/jsHomePage/bootstrap.min.js"></script>
  <script src="../Styles/jsHomePage/owl.carousel.min.js"></script>
  <script src="../Styles/jsHomePage/jquery.countdown.min.js"></script>
  <script src="../Styles/jsHomePage/jquery.easing.1.3.js"></script>
  <script src="../Styles/jsHomePage/aos.js"></script>
  <script src="../Styles/jsHomePage/jquery.fancybox.min.js"></script>
  <script src="../Styles/jsHomePage/jquery.sticky.js"></script>
  <script src="../Styles/jsHomePage/isotope.pkgd.min.js"></script>

  
  <script src="../Styles/jsHomePage/main.js"></script>

  

    </body>  

    


</html>