<?php
    session_start();
    require "../Model/AdminClass.php";


    if (! isset($_SESSION['ID'])) {
        header("Location: ../Views/Login.php");
        exit;
    }

    $con=mysqli_connect("localhost","root","","gymdb");
    $id=$_SESSION['ID'];
    $query="SELECT * FROM `Admin` where ID != '".$id."' ";
    if (isset($_GET['Search'])) {
        $search=mysqli_escape_string($con,$_GET['Search']);
        $query="SELECT * FROM `Admin` WHERE FName LIKE '".$search."%'  ";
    }
    $res=mysqli_query($con,$query);
    
    
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

    
        
    
    <!-- Team -->
    <section class="site-section border-bottom" id="next">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
          
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Meet Team</h2>
            <a href="AddAdmin.php" >
              <button class="btn btn-info" style="margin-bottom: 25px;">
                Add new admin
              </button>
            </a>
            <form action="" method="get">
                <input type="text" name="Search"  placeholder="Search for admins" style="width: 60%;border: none;border-bottom: 1px solid #999;padding: 6px 30px;font-family: Poppins;box-sizing: border-box;">
                <button type="submit" class="btn btn-dark">
                    <img src="../Styles/images/search.png" alt="Search" style="width: 20px; ;">
                </button>
            </form>

            
          </div>
        </div>
        <div class="row">
          

          <?php
             while ($row=mysqli_fetch_assoc($res)) {
          ?>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="../Styles/images/us.png" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3><?= $row['FName']." ".$row['LName'] ?></h3>
                <span class="position">Admin</span>
                
              </div>
              <div>
                 <a href="http:DeleteAdmin.php?id=<?= $row['ID']?> ">
                    <button name="Delete" class="btn-danger" style="border-radius: 15%; margin-left: 254px;margin-top: -70px;">
                        Delete
                    </button>
                </a>
              </div>
              <div>
                 <a href="UpdateAdmin.php?id=<?= $row['ID']?> ">
                    <button name="Update" class="btn-success" style="border-radius: 15%; margin-left: 254px;margin-top: -32px;">
                        Update
                    </button>
                </a>
              </div>

            </div>
          </div>
                <?php
                }
                mysqli_free_result($res);
                //$model->disconnect($con);
                mysqli_close($con);
                ?>
            
          
        </div>
      </div>
    </section>
          
    

    
    
    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#about-section" class="smoothscroll">Terms</a></li>
                  <li><a href="#about-section" class="smoothscroll">Policy</a></li>
                  <li><a href="#about-section" class="smoothscroll">About Us</a></li>
                  <li><a href="#services-section" class="smoothscroll">Services</a></li>
                  <li><a href="#testimonials-section" class="smoothscroll">Testimonials</a></li>
                  <li><a href="#contact-section" class="smoothscroll">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3 footer-social">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              <p>Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
                with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
              </p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        
            </div>
          </div>
          
        </div>
      </div>
    </footer>

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

 