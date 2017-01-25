<?php

class article_db_module
{
    // uuid of article
    private $uuid;
    // title of article
    private $title;
    // author of aritcle
    private $author;
    // the url of page of the author article
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

    public function initialize($uuid, $title, $author, $author_url, $publish_time, $content, $picture_url, $url, $key_word)
    {
        $this->uuid = $uuid;
        $this->title = $title;
        $this->author = $author;
        $this->author_url = $author_url;
        $this->publish_time = $publish_time;
        $this->content = $content;
        $this->picture_url = $picture_url;
        $this->url = $url;
        $this->key_words = $key_word;
    }
}

class comment_db_module
{
    // uuid of article
    private $uuid;
    // the author of comment
    private $author;
    // the email of author
    private $email;
    // the comment
    private $comment;
    // the ip of author
    private $ip;

    public function initialize($uuid, $author, $email, $comment, $ip)
    {
        $this->uuid = $uuid;
        $this->author = $author;
        $this->email = $email;
        $this->comment = $comment;
        $this->ip = $ip;
    }
}