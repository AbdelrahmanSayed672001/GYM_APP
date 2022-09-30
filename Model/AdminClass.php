<?php 
    require "../Model/DBClass.php";
    

    class AdminClass extends DBClass{
        protected $Id;
        protected $FName;
        protected $LName;
        protected $Password;
        //protected $Gender;
        //protected $ProfileImg;

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
        
        
        // public function uploadImg($avatar)
        // {
        //     $dir=$_SERVER['DOCUMENT_ROOT'].'/Uploads';
        //     //$avatar='';

        //     if ($_FILES['avatar']['error']==UPLOAD_ERR_OK) {
        //         # code...
        //         $temp_name=$_FILES['avatar']['tmp_name'];
        //         $avatar=basename($_FILES['avatar']['name']);
        //         move_uploaded_file($temp_name,"/dir/$avatar");
        //     }
        // }

        public function InsertAdmin($fname,$lname,$password,$con)
        {
            $query="INSERT INTO `Admin`(`FName`, `LName`, `Password`) 
                    VALUES ('".$fname."','".$lname."','".$password."' )";

            $this->exec_query($query,$con);
            
        }


        public function Login($con,$fname,$password)
        {
            
            $query="SELECT * FROM `admin` WHERE FName= '".$fname."' 
                AND Password= '".$password."' ";

            $res=$this->exec_query($query,$con);
            //$res=mysqli_query($con,$query);
            return $res;

        }

        
            public function DeleteAdmin($con,$id)
            {
                $query="DELETE FROM `Admin` WHERE ID='".$id."' ";
                //$del=$this->exec_query($query,$con);
                return $query;
            }


        public function UpdateAdmin($con,$Id,$FName,$LName,$Password)
        {
            $query="UPDATE `Admin` SET `FName`='".$FName."'
                ,`LName`='".$LName."',`Password`='".$Password."'
                WHERE ID='".$Id."'  ";
            
            //$this->exec_query($query,$con);
            return $query;
        }


        public function SearchForAdmin($con)
        {
            $query="SELECT * FROM `Admin`";

            if (isset($_GET['Search']) ) {
            $search=mysqli_escape_string($this->con,$_GET['Search']);
            $query.=" WHERE FName LIKE '".$search."%'  ";
            }

            $this->exec_query($query,$con);

        }

        public function getAdmins($con)
        {
            $query="SELECT * FROM `Admin`";
            $res=mysqli_query($con,$query);
            //$row=mysqli_fetch_assoc($res);
            return $res;
        }

        




    }


?>