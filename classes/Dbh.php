<?php

class Dbh
{
    protected $hostname = "localhost";
    protected $username = "root";
    protected $dbname = "zuriphp";
    protected $password = "";

    public function connect()
    {

        $conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);

        if ($conn->connect_error) {
            die("<h1>Database connection failed</h1>");
        }
        // echo "connection successfull";
        return $this->conn = $conn;
    }
}
// to test if the connection is successful
// $db = new Dbh();
// print_r($db);
