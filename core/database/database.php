<?php
//This project was build by HasanOfficial27

class Database{

    private $host = "localhost";
    private $user = "hasan";
    private $pwd = "hasan-db27";
    private $db_name = "note";

    public $connect = null;

    public function __construct(){
        $this->connect = mysqli_connect($this->host, $this->user, $this->pwd, $this->db_name);
        if($this->connect->connect_error){
            echo "Fail ".$this->connect->connect_error;
        }
    }

    public function __destruct(){
        $this->closeConnection();
    }

    protected function closeConnection(){
        if($this->connect != null){
            $this->connect->close();
            $this->connect = null;
        }
    }
    

}


?>