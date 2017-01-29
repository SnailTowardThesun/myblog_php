# modules passed to database

## module of article
module of article

```
create table article (uuid char(32), title varchar(100), author varchar(100), author_url varchar(255), publish_time datetime, content varchar(255), picture_url varchar(255), url varchar(255), key_words varchar(255))
```

|name|type|condition|instruction|
|---|---|---|---|
|uuid|char(32)|not null|the foreign key|
|title|varchar(100)|not null|title of artcile|
|author|varchar(100)|not null|default is Han|
|author_url|varchar(255)|not null|default is contact.php|
|publish_time|datetime|not null||
|content|varchar(255)|not null||
|picture_url|varchar(255)|not null|default is sample.jpg|
|url|varchar(255)|not null|
|key_words|varchar(255)|not null|need to be parsed into array|

## module of comment
module of comment

```
create table comment(uuid char(32), author varchar(100), email varchar(255), comment varchar(255), ip varchar(15), publish_time datetime)
```

|name|type|condition|instruction|
|---|---|---|---|
|uuid|char(32)|not null|foreign key|
|author|varchar(100)|can be null|the author of comment|
|email|varchar(255)|can be null|the email of author|
|comment|varchar(255)|not null|limited into 255|
|ip|varcahr(15)|not null|the ip of author|
|publish_time|datetime|not null|time of publish|
