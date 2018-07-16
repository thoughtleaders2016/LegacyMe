<?php
	if($_GET['type']=="GET_SLIDER_IMAGES"){
		//echo "get slider images";
		$r=mysqli_query($conn,"select *from user;");
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}
	
	if($_GET['type']=="GET_SLIDER_IMAGES2"){
		echo "get slider images2 ".$_GET['d'];
	}