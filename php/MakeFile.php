<?php
$FileName = $_POST['module'];

$myfile = fopen('../Modules/' . $FileName . '.php' , 'w') or die("Unable to open file!");
$content = "<?php require 'Module_File.php'; ?>";
fwrite($myfile, $content);
fclose($myfile);

header('Location: ../Admin.html');
?>