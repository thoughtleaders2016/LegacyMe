<?php
/**
*	ThoughtLeaders  Technologies LLP
*	14/Jul/2018
*/
	//$data global
	if($type=="GET_SLIDER_IMAGES"){
		echo "post slider images 1 ".$data['type'];
		
	}
	
	if($type=="GET_SLIDER_IMAGES2"){
		//echo "post slider images2";
		$r=mysqli_query($conn,"select *from user;");
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}