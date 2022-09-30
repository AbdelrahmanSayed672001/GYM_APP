<?php
    
    require "../Model/AdminClass.php";

    // $model=new AdminClass();
    // $con=$model->getConnectToDB();

    $con=mysqli_connect("localhost","root","","gymdb");

    $id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

    // if ($_SERVER["REQUEST_METHOD"]=="GET") {
    //     # code...
    //     $q="SELECT * FROM `admin` WHERE ID= '".$id."' ";
    //     $result=mysqli_query($con,$q);
    //     $row=mysqli_fetch_assoc($result);
    //     echo "Hello ".$row['FName'];
    // }
    
    if ($_SERVER["REQUEST_METHOD"]=="POST" ) {    
        $fname=mysqli_escape_string($con,$_POST["FName"] );
        $lname=mysqli_escape_string($con,$_POST["LName"]);
        $password=mysqli_escape_string($con,$_POST["Password"]);

        $query="UPDATE `admin` SET `FName`='".$fname."',`LName`='".$lname."'
            ,`Password`='".$password."' WHERE ID= '".$id."' ";
        // $query=$model->UpdateAdmin($con,$id,$fname,$lname,$password);
        if (mysqli_query($con,$query)) {
            // $l="Location:../Views/Admin.php";
            // $model->location($l);

            header("Location:../Views/Admin.php");
        }
        
    }
    //mysqli_free_result($result);
    mysqli_close($con);
    //$model->disconnect($con);

?>