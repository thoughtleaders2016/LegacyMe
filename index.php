<?php
/**
*	ThoughtLeaders  Technologies LLP
*	14/Jul/2018
*/
require_once('./config/access-control.php');
require_once('./config/db-config.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$data = json_decode( file_get_contents('php://input'),true );
	$route=isset($data['route_type'])?$data['route_type']:'WRONG_URL';
	require_once('./routes/post-api.php');
}

if($_SERVER['REQUEST_METHOD'] == 'GET'){
	require_once('./routes/get-api.php');
}