<?php 
class ConnectDB{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $name = DB_NAME;
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host,$this->user,$this->pass,$this->name);
    }
    public function select($sql)
    {
        $data = null;
        $res = $this ->conn->query($sql);
        if($res->num_rows >0)
        {
            while($row = $res->fetch_assoc())
            {
                $data[] = $row;
            }
            return $data;
        }   
    }
     public function excute($sql)
     {
        $res = $this->conn->query($sql);
        if($res)
        {
            return true;
        } else {
            return false;
        }
     }



}
?>