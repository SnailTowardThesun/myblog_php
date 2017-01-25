<?php

include "module/template/article_module.php";
include "../controller/db_controller.php";

class conf
{
    private $file_path;

    public function initialzie($path)
    {
        $this->file_path = $path;
    }

    public function get_db_username()
    {
        // TODO:FIXME: implement this function
        return "username";
    }

    public function get_db_password()
    {
        // TDDO:FIXME: implement this function
        return "password";
    }
}

class basic_controlller
{
    // the conf file
    private $conf;
    // the database operator
    private $db;

    public function __construct()
    {
        $this->conf = new conf();
        $this->conf->initialzie("blog.conf");

        $this->db = new db_operator();
        $this->db->initialize($this->conf->get_db_username(), $this->conf->get_db_password());
    }
}

class article_controller extends basic_controlller
{
    public function get_index_article()
    {
        // TODO:FIXME: checkout the articles in database.
        $article_list = array();

        for ($i = 0; $i < 10; $i++)
        {
            $article = new article_template_module();

            $article->initialize("title $i", "author $i", "author_url $i", "2017-01-10 19:00:0$i",
                "content $i", "images/sample.jpg", "url $i", array("key $i"));

            array_push($article_list, $article->dump_in_array());
        }
        return $article_list;
    }
}
