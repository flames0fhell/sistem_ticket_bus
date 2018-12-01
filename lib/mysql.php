<?php 
class DB  
{
    protected $host = "localhost";
    protected $user = "root";
    protected $pass = "";
    protected $database = "stmi";

    public $connection;

    public function connect(){
        $this->connection = null;

        $connect = mysql_connect(
            $this->host,
            $this->user,
            $this->pass
        );
        if($connect){
            echo "connected";
        }else{
            print_r(mysql_error());
        }
    }
}
