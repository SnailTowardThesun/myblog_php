<?php

class db_operator
{
    private $username;
    private $password;

    public function initialize($usr_name, $password)
    {
        $this->username = $usr_name;
        $this->password = $password;
    }

    public function is_connected()
    {
        // TODO:FIXME: implement this function
        return true;
    }

    private function connect()
    {
        // TODO:FIXME: implement this functhion
        return true;
    }

    private function disconnect()
    {
        // TODO:FIXME: implement this function
        if ($this->is_connected()) {
            return true;
        }

        return true;
    }

    private function do_sql($sql)
    {
        // TODO:FIXME: implement this function
        if ($sql == null)
        {
            return null;
        }

        return true;
    }
}