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
        // TODO:FIXME: implemat this function
        return true;
    }

    private function connect()
    {
        return true;
    }

    private function do_sql($sql)
    {
        if ($sql == null)
        {
            return null;
        }

        return true;
    }
}