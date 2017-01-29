<?php

class db_operator
{
    private $host;
    private $database_name;
    private $username;
    private $password;
    private $conn;
    private $result;
    private $is_connected;

    public function __construct()
    {
        $this->is_connected = false;
    }

    public function initialize($usr_name, $password, $host, $db_name)
    {
        $this->host = $host;
        $this->database_name = $db_name;
        $this->username = $usr_name;
        $this->password = $password;
    }

    // the result need to be released.
    public function do_sql($sql)
    {
        if ($sql == null)
        {
            return null;
        }

        if (!$this->is_connected)
        {
            $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database_name);
            if ($this->conn->connect_errno)
            {
                $err = $this->conn->connect_errno;
                log("connect to mysql database failed. err is $err");
                return null;
            }
            $this->is_connected = true;
        }

        $this->result = mysqli_query($this->conn, $sql);
        if ($this->conn->connect_errno)
        {
            $err = $this->conn->connect_errno;
            log("query database failed. err is $err");
            return null;
        }

        return $this->result;
    }

    // close the connection
    public function close()
    {
        mysqli_free_result($this->result);
        mysqli_close($this->conn);

        $this->is_connected = false;
    }
}