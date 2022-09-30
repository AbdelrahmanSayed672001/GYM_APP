<?php
    require "../Model/ClientClass.php";

    $model=new Client();
        $con=$model->getConnectToDB();
        $id=filter_input(INPUT_GET,"id",FILTER_SANITIZE_NUMBER_INT);
        
        $query= $model->DeleteClient($con,$id);
        if (mysqli_query($con,$query)) {
            $l="Location: Clients.php";
            $model->location($l);
            exit;
        }
        $model->disconnect($con);





?>