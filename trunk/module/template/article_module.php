<?php

class article_info_module
{

    // title of article
    private $title;
    // author of article
    private $author;
    // the url of page for the author of article
    private $author_url;
    // the publish time of article
    private $publish_time;
    // the content of article
    private $content;
    // the url of picture of article
    private $picture_url;
    // the url of article
    private $url;
    // key words for article
    private $key_words;

    public function initialize($title, $author, $author_url, $publish_time, $content, $picture_url, $url, $key_words)
    {
        $this->title = $title;
        $this->author = $author;
        $this->author_url = $author_url;
        $this->publish_time = $publish_time;
        $this->content = $content;
        $this->picture_url = $picture_url;
        $this->url = $url;
        $this->key_words = $key_words;
    }

    public function dump_in_json()
    {
        // TODO:FIXME: implemet this function
    }

    public function dump_in_array()
    {
        return array(
            "title" => $this->title,
            "author" => $this->author,
            "author_url" => $this->author_url,
            "publish_time" => $this->publish_time,
            "content" => $this->content,
            "picture_url" => $this->picture_url,
            "url" => $this->url,
            "key_words" => $this->key_words
        );
    }

}