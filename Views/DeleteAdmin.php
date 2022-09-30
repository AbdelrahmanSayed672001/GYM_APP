<?php
    require "../Model/AdminClass.php";

    

    
        $model=new AdminClass();
        $con=$model->getConnectToDB();
        $id=filter_input(INPUT_GET,"id",FILTER_SANITIZE_NUMBER_INT);
        
        $query= $model->DeleteAdmin($con,$id);
        if (mysqli_query($con,$query)) {
            $l="Location: Admin.php";
            $model->location($l);
            exit;
        }
        $model->disconnect($con);
    

?>