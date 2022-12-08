<?php
/*$_POST = json_decode(file_get_contents('php://input'), true);
$script=$_POST["script"];
$uname=$_POST["username"];*/
$uname=$_GET["username"];
$p=file_get_contents('php://input');
$file = fopen('./text/'.$uname.".txt", "w") or die("Unable to open file!");
//fwrite($file, $script);
fwrite($file, $p);
fclose($file);
//echo "baapaaay(saved)script:".$_POST["script"].",uname:".$_POST["username"];

echo "baapaaay(saved)script:".$p.",uname:".$uname;
?>
