<?php
$url = $_POST['url'];
$title = $_POST['title'];
$output = shell_exec('node test.js '.$url);
$afterID = strstr($output, 'id:'); // As of PHP 5.3.0
$start = strpos($afterID,'\'')+1;
$id = substr($afterID,$start,24);
$myfile = fopen("song_data.txt", "a+") or die("Unable to open file!");
fwrite($myfile,$title.",".$id."\n");
fclose($myfile);

echo $id; // prints name
echo "<pre>$output</pre>";
?>
