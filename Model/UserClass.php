<?php
    require "DBClass.php";

    class User extends DBClass{
        protected $Id;
        protected $FName;
        protected $LName;
        protected $Password;

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


        public function InsertUser($fname,$lname,$password,$con)
        {
            $query="INSERT INTO `User`(`FName`, `LName`, `Password`) 
                    VALUES ('".$fname."','".$lname."','".$password."' )";

            $this->exec_query($query,$con);
            
        }


        public function DeleteUser($con,$id)
        {
            $query="DELETE FROM `User` WHERE ID='".$id."' ";
            return $query;
        }


        public function UpdateUser($con,$Id,$FName,$LName,$Password)
        {
            $query="UPDATE `User` SET `FName`='".$FName."'
                ,`LName`='".$LName."',`Password`='".$Password."'
                WHERE ID='".$Id."'  ";
            return $query;
        }

        public function SearchForUser($con)
        {
            $query="SELECT * FROM `User`";

            if (isset($_GET['Search']) ) {
            $search=mysqli_escape_string($this->con,$_GET['Search']);
            $query.=" WHERE FName LIKE '".$search."%'  ";
            }

            $this->exec_query($query,$con);

        }

        public function getUsers($con)
        {
            $query="SELECT * FROM `User`";
            $res=mysqli_query($con,$query);
            return $res;
        }





    }





?>