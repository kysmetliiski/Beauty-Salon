<?php 

class Model
{
    
    public $servername;
    public $username;
    public $password;
    public $database;
    public $connection;

    

    function __construct()
    {
        $this->servername = "127.0.0.1";
        $this->username = "root";
        $this->password = "veselin7";
        $this->database = "beauty_schema";
        try 
            {
                $this->connection = new PDO("mysql:host=".($this->servername).";dbname=".($this->database), $this->username, $this->password);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } 
         catch(PDOException $e)
            {
                echo "Connection failed: " . $e->getMessage();
            }
    }

    function fetch($query,$params)
    {
        $stmt = $this->connection->prepare($query); 
        $stmt->execute($params); 
        return $stmt->fetch();
        
    }

    
    function fetchAll($query,$params)
    {
        $stmt = $this->connection->prepare($query); 
        $stmt->execute($params); 
        return $stmt->fetchAll();
        
    }
    function datasave($query,$params)
    {
			return $this->$connection->prepare($query)->execute($params);
    }


    function getRecords()
    {
        
    }

}


?>