<?php
$file = fopen("test.txt","r");
echo   fread($file);
// echo fwrite($file,"Hello World. Testing!");
// fclose($file);
?>