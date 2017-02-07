<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="hanvskun@hotmail.com">
    <title>control system</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/navgation.css" rel="stylesheet">
</head>
<body>
<?php
include dirname(__FILE__)."/../template/navgation.php";
?>
<div class="container">
    <ul class="nav nav-tabs">
        <li role="presentation"><a href="admin.php">add article</a></li>
        <li role="presentation" class="active"><a href="admin_update.php">update article</a></li>
        <li role="presentation" class="disabled"><a href="#">delete article</a></li>
    </ul>

    <h1>update an article</h1>
    <form class="form-horizontal" role="form">
        <div class="form-group input-group">
            <span class="input-group-addon" id="article-title">article title</span>
            <input type="text" class="form-control" placeholder="@example: First Blog" aria-describedby="article-title">
        </div>
        <div class="form-group input-group">
            <span class="input-group-addon" id="article-author">article author</span>
            <input type="text" class="form-control" placeholder="@example: Me_Kun_Han" aria-describedby="article-author">
        </div>
        <div class="form-group input-group">
            <span class="input-group-addon" id="article-author-url">article author url</span>
            <input type="text" class="form-control" placeholder="@example: https://exampe.com/aboutme" aria-describedby="article-author-url">
        </div>
        <div class="form-group input-group">
            <span class="input-group-addon" id="article-content">aritcle content</span>
            <input type="text" class="form-control" placeholder="@example: exampel of content" aria-describedby="article-content">
        </div>
        <div class="form-group input-group">
            <span class="input-group-addon" id="article-picture-url">article picture url</span>
            <input type="text" class="form-control" placeholder="@example: https://picture.url.com/url" aria-describedby="article-picture-url">
        </div>
        <div class="form-group input-group">
            <span class="input-group-addon" id="article-url">aritcle url</span>
            <input type="text" class="form-control" placeholder="@example: https://blog.com/blog" aria-describedby="article-url">
        </div>
        <div class="form-group input-group">
            <span class="input-group-addon" id="article-keywords">article key words</span>
            <input type="text" class="form-control" placeholder="@exampel: key,words" aria-describedby="article-keywords">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">submit</button>
        </div>
    </form>
</div>
<?php
include dirname(__FILE__)."/../template/footer.php";
?>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
