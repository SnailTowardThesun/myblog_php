<?php

$raw_data = file_get_contents('php://input');
if (!empty($raw_data))
{
    echo "ready to write";
    $file_path = dirname(__FILE__)."/github.log";

    $file = fopen($file_path, "a");

    fwrite($file, $raw_data);

    fclose($file);
}
else
{
    echo "write nothing";
}

