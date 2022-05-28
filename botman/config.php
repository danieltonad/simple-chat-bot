<?php

require 'emulator.php';


class controler extends tools
{
    private $conn;
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "chatbot";
    private $tools;

    function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password,$this->database);
        $this->tools = new tools();
    }

    function __destruct()
    {
        $this->conn->close();
    }


    function insert($sql)
    {
        $result = $this->conn->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function getData($sql)
    {
        $result = $this->conn->query($sql,MYSQLI_USE_RESULT);
        if ($result) {
            $rows = $result->num_rows;

            if ($rows > -1) {
                
                return $result;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }


    // Number of rows
    function getNoRow($sql)
    {
        $result = $this->conn->query($sql);
        if ($result) {
            $row =  $result->num_rows;
            $result->free();
            return $row;
        } else {
            return false;
        }
    }


    // check query
    function check($sql)
    {
        $result = $this->conn->query($sql);
        if ($result) {
            $numb =  $result->num_rows;
            if ($numb > 0) {
                $result->free();
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function uniqueId( $len, $table, $sub = '0', $key = 'id')
    {
        if ($sub == '0') {
            $sub = mt_rand(1, 9);
            $sub = "$sub";
        }
        
        $id = $this->tools->genId($len,$sub);
        $try = $this->check("SELECT * FROM '$table' WHERE $key ='$id' ");
        
        if($try) {
            $this->uniqueId( $sub, $len, $table, $key);
        } else {
            return $id;
        }
    }


    function uniqueTransId($len, $table, $dem, $key = 'id')
    {
        $id = $this->tools->genTransId($len,$dem);
        $try = $this->check("SELECT * FROM '$table' WHERE $key ='$id' ");
        if ($try) {
            $this->genTransId($len);
        } else {
            return $id;
        }
    }


    
}





#config Admin
// $db = new controler();
// $id = '1310';
// $pwd = md5("soladan2000");
// $date = time();
// $do = $db->insert( "INSERT INTO prox_admin(id,_password,logger) VALUES('$id','$pwd','$date')");
// var_dump($do);




?>