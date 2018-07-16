<?php 
require_once('access-control.php');
$target_path = "./res/images/";
$file_name=uniqid().".jpg";
$target_path=$target_path.$file_name;
if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path))
	echo json_encode(array("status"=>1,"file_name"=>$file_name));
else
    echo json_encode(array("status"=>0,"file_name"=>""));