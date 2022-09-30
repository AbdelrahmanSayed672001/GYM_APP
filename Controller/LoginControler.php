<?php
    require "../Model/AdminClass.php";
    session_start();

    if ($_SERVER['REQUEST_METHOD']=="POST") {
        $model=new AdminClass();

        $con=$model->getConnectToDB();

        $fname=mysqli_escape_string($con,$_POST['FName']);
        $password=mysqli_escape_string($con,$_POST['Password']);
        $locate="Location: ../Views/Home.php";

        $res=$model->Login($con,$fname,$password);

        if ($row=mysqli_fetch_assoc($res)) {
            $_SESSION['ID']=$row['ID'];
            $_SESSION['FNAME']=$row['FName'];
            $_SESSION['LNAME']=$row['LName'];
            $_SESSION['PASSWORD']=$row['Password'];
            $model->location($locate);
        }
        else {
            $l="Location: ../Views/Login.php";
            $model->location($l);
        }

        mysqli_free_result($res);
        $model->disconnect($con);


    }
    

?>