<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Article</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/navgation.css" rel="stylesheet">
</head>
<body>
<?php
include dirname(__FILE__)."/../template/navgation.php";
include dirname(__FILE__)."/../vendor/autoload.php";
?>

<div class="container">
    <?php
    $file_path = dirname(__FILE__)."/../blog/" . $_GET["name"];
    $content = file_get_contents($file_path);
    if (empty($content)) {
        echo "no article in this area";
    } else {
        $Parsedown = new Parsedown();
        echo $Parsedown->text($content);
    }
    ?>
</div>

<?php
include dirname(__FILE__)."/../template/footer.php";
?>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
