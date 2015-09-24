<?php
$dirPath = getcwd();
include_once ($dirPath.'/FileClass.php');

$fileObj = new FileClass();
echo $fileObj->getName();

?>

