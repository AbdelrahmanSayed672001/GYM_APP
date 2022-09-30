<?php
    require "DBClass.php";

    class Client extends DBClass{
        protected $Id;
        protected $FName;
        protected $LName;
        protected $Age;
    
        public function __construct() {
            

            global $host,$username,$pass,$DBName;
            $host="Localhost";
            $username="root";
            $pass="";
            $DBName="gymdb";

            parent ::__construct($host,$username,$pass,$DBName);
            parent ::getConnectToDB();
        }

        public function location($locate)
        {
            return header($locate);
        }

        public function exec_query($query,$con)
        {
            $res=mysqli_query($con,$query);
            
                return $res;
            
        }


        public function InsertClient($fname,$lname,$age,$con)
        {
            $query="INSERT INTO `Client`(`FName`, `LName`, `Age`) 
                    VALUES ('".$fname."','".$lname."','".$age."' )";

            $this->exec_query($query,$con);
            
        }


        public function DeleteClient($con,$id)
        {
            $query="DELETE FROM `Client` WHERE ID='".$id."' ";
            return $query;
        }



        public function UpdateClient($con,$Id,$FName,$LName,$Age)
        {
            $query="UPDATE `Client` SET `FName`='".$FName."'
                ,`LName`='".$LName."',`Password`='".$Age."'
                WHERE ID='".$Id."'  ";
            
            //$this->exec_query($query,$con);
            return $query;
        }


        public function SearchForClient($con)
        {
            $query="SELECT * FROM `Client`";

            if (isset($_GET['Search']) ) {
            $search=mysqli_escape_string($this->con,$_GET['Search']);
            $query.=" WHERE FName LIKE '".$search."%'  ";
            }

            $this->exec_query($query,$con);

        }

        public function getClient($con)
        {
            $query="SELECT * FROM `Client`";
            $res=mysqli_query($con,$query);
            //$row=mysqli_fetch_assoc($res);
            return $res;
        }
    
    
    
    }
    



?>