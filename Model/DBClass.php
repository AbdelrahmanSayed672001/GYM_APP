<?php
    class DBClass{
        //protected $con;
        protected $host;
        protected $username;
        protected $pass;
        protected $DBName;

        public function __construct($host,$username,$pass,$DBName) {
            //$this->con = $con;
            $this->host=$host;
            $this->username=$username;
            $this->pass=$pass;
            $this->DBName=$DBName;
        }
        
        public function failConnectionToDB($con)
        {
            if (! $con) {
                # code...
                return true;
            }
            //else return $this->con;
        }
        public function getConnectToDB()
        {
            $con=mysqli_connect($this->host,$this->username,
                                     $this->pass,$this->DBName);
            if ($this->failConnectionToDB($con)) {
                return "Failed to connect";
            }
            else {
                return $con;
            }
            
        }

        
        public function disconnect($con)
        {
            mysqli_close($con);
            exit;
        }
        
        
        




    }

?>