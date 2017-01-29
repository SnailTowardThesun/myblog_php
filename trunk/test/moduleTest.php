<?php
use PHPUnit\Framework\TestCase;

require_once dirname(__FILE__)."/../module/template/article_module.php";

class articleModule extends TestCase
{
    public function testDumpInArray()
    {
        $title = "testArticle";
        $author = "testAuthor";
        $author_url = "http://test.author.com";
        $publish_time = "2017-01-10 19:00:00";
        $content = "this is content of test article";
        $picture_url = "http://test.picture.com";
        $url = "http://test.article.com";
        $key_words = array(
            "key",
            "words",
            "test"
        );

        $test_info = new article_template_module();

        $test_info->initialize($title, $author, $author_url, $publish_time, $content, $picture_url, $url, $key_words);

        $ary = $test_info->dump_in_array();

        $this->assertTrue($ary["title"] == $title);
        $this->assertTrue($ary["author"] == $author);
        $this->assertTrue($ary["author_url"] == $author_url);
        $this->assertTrue($ary["publish_time"] == $publish_time);
        $this->assertTrue($ary["content"] == $content);
        $this->assertTrue($ary["picture_url"] == $picture_url);
        $this->assertTrue($ary["url"] == $url);
        $this->assertTrue($ary["key_words"] == $key_words);
    }
}