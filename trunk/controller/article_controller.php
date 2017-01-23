<?php

include "module/template/article_module.php";

function get_article()
{
    // TODO:FIXME: checkout the articles in database.

    $article_list = array();

    for ($i = 0; $i < 10; $i++)
    {
        $article = new article_info_module();

        $article->initialize("title $i", "author $i", "author_url $i", "2017-01-10 19:00:0$i",
            "content $i", "picture_url $i", "url $i", array("key $i"));

        array_push($article_list, $article->dump_in_array());
    }
    return $article_list;
}