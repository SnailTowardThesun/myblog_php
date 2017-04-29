<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="hanvskun@hotmail.com">
    <title>home of blog</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/navgation.css" rel="stylesheet">
</head>
<body>
<?php  include dirname(__FILE__)."/template/navgation.php";?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 class="page-header">Blog Index</h1>
            <?php
            require_once dirname(__FILE__)."/vendor/autoload.php";
            include dirname(__FILE__)."/controller/article_controller.php";

            $loader = new Twig_Loader_Filesystem(dirname(__FILE__).'/template');
            $twig = new Twig_Environment($loader, array(
                array('debug' => true)
            ));

            $article_co = new article_controller();

            $page = 1;
            $total_page = $article_co->get_article_pages();
            if(empty($_GET['page'])||$_GET['page']<0){
                $page = 1;
            }else {
                $page = $_GET['page'];
            }

            echo $twig->render("index_content.php", array(
                    "articles" => $article_co->get_article_due_page($page)
            ));

            ?>
            <nav aria-label="...">
                <ul class="pager">
                    <?php
                    if ($page > 1) {
                        $pre = $page - 1;
                        echo "<li><a href=\"index.php?page=$pre\">Previous</a></li>";
                    } else {
                        echo "<li><a href=\"index.php\">Previous</a></li>";
                    }

                    if ($page < $total_page) {
                        $next = $page + 1;
                        echo "<li><a href=\"index.php?page=$next\">Next</a></li>";
                    } else {
                        echo "<li><a href=\"index.php?page=$page\">Next</a></li>";
                    }
                    ?>
                </ul>
            </nav>
        </div>
        <div class="col-md-4">
            <div class="well">
                <h4>Blog Search</h4>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for ...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            Search
                        </button>
                    </span>
                </div>
            </div>
            <div class="well">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="/view/category.php">C++</a>
                            </li>
                            <li><a href="/view/category.php">stream media</a>
                            </li>
                            <li><a href="/view/category.php">linux</a>
                            </li>
                            <li><a href="/view/category.php">web</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="/view/category.php">java</a>
                            </li>
                            <li><a href="/view/category.php">php</a>
                            </li>
                            <li><a href="/view/category.php">python</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include dirname(__FILE__)."/template/footer.php";?>

<script src="./js/jquery.js"></script>
<script src="./js/bootstrap.min.js"></script>
</body>
</html>
