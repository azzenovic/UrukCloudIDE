<?php
session_start();
file_name=$_GET['filename'];
require_once(__DIR__.'/../../../vendor/autoload.php');
use UrukCloudIDE\Controller\Project_Controller;
use UrukCloudIDE\Controller\File_Controller;
$project= new Project_Controller();
$file= new File_Controller();
$file->deletefile_action($file_id,$file_name,$_SESSION['login'],$_SESSION['project']);
?>
