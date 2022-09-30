<?php
    require "../Model/AdminClass.php";
    session_start();

    if ($_SERVER['REQUEST_METHOD']=="GET" ) {
        $model=new AdminClass();
        $con= $model->getConnectToDB();

        $model->SearchForAdmin($con);
    }

?>