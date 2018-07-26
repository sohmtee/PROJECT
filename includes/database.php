

<?php
    class Database{
        public $connect;
// Using OOP to create Database 

    public function db_connect($db){//creates connection to a database
        $this->connect = mysqli_connect("localhost","root", "", $db);
        if(!$this->connect){
            die("connection error: " . mysqli_connect_error());
        }
    }

    public function query($sql){
        $rs = mysqli_query($this->connect, $sql);
        if(!$rs){
            die("Query Error: " . mysqli_error($this->connect));
        }echo "Connection Successful";
        return $rs;
    }

    public function fetch_data($rs){
        $outp = mysqli_fetch_assoc($rs);
        return $outp;
    }
}
    $db = new Database(); //$db is an instance of the database class
    
?>

















