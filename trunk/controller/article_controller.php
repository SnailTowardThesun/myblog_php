<?php

require_once dirname(__FILE__)."/../module/template/article_module.php";
require_once dirname(__FILE__)."/../controller/db_controller.php";

class conf
{
    private $file_path;
    private $conf_data;

    public function initialzie($path)
    {
        $this->file_path = $path;
        $content = file_get_contents($this->file_path);

        if ($content == false)
        {
            log("read message from conf file failed.");
            return false;
        }

        $this->conf_data = json_decode($content);
        if ($this->conf_data == null)
        {
            log("decode conf data from json failed.");
            return false;
        }

        return true;
    }

    public function get_db_host()
    {
        if ($this->conf_data == null)
        {
            return null;
        }

        return $this->conf_data->database_host;
    }

    public function get_db_name()
    {
        if ($this->conf_data == null)
        {
            return null;
        }

        return $this->conf_data->database_name;
    }

    public function get_db_username()
    {
        if ($this->conf_data == null)
        {
            return null;
        }

        return $this->conf_data->database_username;
    }

    public function get_db_password()
    {
        if ($this->conf_data == null)
        {
            return null;
        }

        return $this->conf_data->database_password;
    }
}

class basic_controlller
{
    // the conf file
    public $conf;
    // the database operator
    public $db;

    public function __construct()
    {
        $this->conf = new conf();
        $this->conf->initialzie(dirname(__FILE__)."/../blog.conf");

        $this->db = new db_operator();
        $this->db->initialize($this->conf->get_db_username(), $this->conf->get_db_password(), $this->conf->get_db_host(), $this->conf->get_db_name());
    }
}

class article_controller extends basic_controlller
{
    public function get_all_articles()
    {
        $sql = "select * from article";
        $articles = $this->db->do_sql($sql);
        if ($articles == null)
        {
            log("fail to get all articles");
            return null;
        }

        $article_list = array();

        while (($row = mysqli_fetch_array($articles)) != null)
        {
            $article = new article_template_module();
            $article->initialize($row['title'], $row['author'], $row['author_url'], $row['publish_time'], $row['content'],
                'images/'.$row['picture_url'], $row['url'], explode(',', $row['key_words']));

            array_push($article_list, $article->dump_in_array());
        }

        $this->db->close();
        return $article_list;

    }
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
