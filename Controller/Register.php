<?php
    require "../Model/AdminClass.php";
    
    
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        $model=new AdminClass();
        
        $con=$model->getConnectToDB();

        $fname=mysqli_escape_string($con,$_POST['FName']);
        $lname=mysqli_escape_string($con,$_POST['LName']);
        $password=mysqli_escape_string($con,$_POST['Password']);
        
        
        
        if (strlen($password) < 4) {
            $invalid="Password should be greater than 4 characters";
            echo $invalid;
            header("Location:../Views/SignUp.php");
            
        }else {
            $locate="Location: ../Views/Login.php";
            $model->InsertAdmin($fname,$lname,$password,$con);
            $model->location($locate);
        }

        $model->disconnect($con);
        
    }
    


?>