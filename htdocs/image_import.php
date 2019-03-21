<?php
$fileName = $_POST['fileName'];
$fileWithoutExt = basename($fileName, '.png');
$convertedFile = $fileWithoutExt . '.xml';
echo "<h2>$fileName</h2>";
echo "<h2>$fileWithoutExt</h2>";
$path = "/home/bitnami/htdocs/image_files/" . $fileName;
echo "<h2>$path</h2>";
chdir("/home/bitnami/audiveris/Audiveris/bin/");
echo getcwd() . "\n";
shell_exec("mv ".$path." ".$fileName);
shell_exec("./Audiveris -export -batch test ".$fileName);
shell_exec("mv /home/bitnami/.local/share/AudiverisLtd/audiveris/test/".$convertedFile."/home/bitnami/htdocs/mxl_files/".$convertedFile);
?>
