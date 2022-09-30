<?php
    require "../Model/ClientClass.php";
    
    
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        $model=new Client();
        
        $con=$model->getConnectToDB();

        $fname=mysqli_escape_string($con,$_POST['FName']);
        $lname=mysqli_escape_string($con,$_POST['LName']);
        $age=mysqli_escape_string($con,$_POST['Age']);
        
        $locate="Location: ../Views/Clients.php";
        $model->InsertClient($fname,$lname,$age,$con);
        $model->location($locate);
        

        $model->disconnect($con);
        
    }
    


?>