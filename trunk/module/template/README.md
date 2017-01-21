# modules passed to template file
there are many template files in this project. Though we use twig to achive the template, but we use a json string to make it to be recorded.

## passing to index content
```
{
    "articles": [
        {
            "title": "article",
            "author": "author",
            "publish_time": "2017-01-18 19:00:00",
            "content": "first artile",
            "url": "http: //xxx.xxx.xxx",
            "key_words": [
                "python",
                "java",
                "php"
            ]
        },
        {
            "title": "article",
            "author": "author",
            "publish_time": "2017-01-1819: 00: 00",
            "content": "firstartile",
            "url": "http: //xxx.xxx.xxx",
            "key_words": [
                "python",
                "java",
                "php"
            ]
        }
    ]
}
```
