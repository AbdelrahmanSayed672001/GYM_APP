


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../Styles/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../Styles/css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" action="../Controller/Register.php" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="FName" id="FName" placeholder="Your first name" required="" />
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="LName" id="LName" placeholder="Your last name" required="" />
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
                    <div class="signup-image">
                        <figure><img src="../Styles/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="../Views/Login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>


    </div>

    <!-- JS -->
    <script src="../Styles/vendor/jquery/jquery.min.js"></script>
    <script src="../Styles/js/main.js"></script>
</body>
</html>

