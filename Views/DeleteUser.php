<?php
    require "../Model/UserClass.php";

    $model=new User();
        $con=$model->getConnectToDB();
        $id=filter_input(INPUT_GET,"id",FILTER_SANITIZE_NUMBER_INT);
        
        $query= $model->DeleteUser($con,$id);
        if (mysqli_query($con,$query)) {
            $l="Location: Users.php";
            $model->location($l);
            exit;
        }
        $model->disconnect($con);





?>