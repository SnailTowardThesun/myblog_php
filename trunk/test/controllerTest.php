<?php
use PHPUnit\Framework\TestCase;
require dirname(__FILE__)."/../controller/article_controller.php";

class confTest extends TestCase
{
    public function testConfInitialize()
    {
        $this->assertTrue(true);

        $conf = new conf();
        $this->assertTrue($conf->initialzie(dirname(__FILE__)."/../blog.conf"));

        $this->assertTrue($conf->get_db_password() != null);
        $this->assertTrue($conf->get_db_username() != null);
        $this->assertTrue($conf->get_db_host() != null);
        $this->assertTrue($conf->get_db_name() != null);
    }
}