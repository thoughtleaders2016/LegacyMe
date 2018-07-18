<?php
/**
*	ThoughtLeaders  Technologies LLP
*	14/Jul/2018
*/

	/*USER*/

	function registerUser($conn,$data){
		$r=mysqli_query($conn,"INSERT INTO user(u_name, u_phone_no, u_date_of_birth, u_date_of_death, u_is_married, u_password, u_email, u_address, u_profession, u_profession_subcategory, u_otp_status, u_temp_otp, u_profile_pic, u_is_life_status_check_enabled, u_created_at, u_updated_at) VALUES ('Test', '8293266759', '2018-07-04 00:00:00', '2018-07-17 00:00:00', '1', '123456', 'test@gmail.com', 'Kolkata', 'Businessman', 'Food', '1', '154852', 'profile.jpg', '1', '2018-07-08 00:00:00', '2018-07-18 00:00:00');");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateUserProfile($conn,$data){
		$r=mysqli_query($conn,"update user set u_name='text1',u_phone_no='0000000000',u_date_of_birth='2000-03-16',u_date_of_death='2000-03-16',u_is_married=0,u_password='123',u_email='text@gmail.com',u_address='Kolkata',u_profession='Xyz',u_profession_subcategory='xyz',u_otp_status=0,u_temp_otp='125123',u_profile_pic='2.png',u_is_life_status_check_enabled=0,u_updated_at=now() where u_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteUser($conn){
		$r=mysqli_query($conn,"delete from user where u_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllUser($conn){
		$r=mysqli_query($conn,"select u_id,u_name,u_phone_no,u_date_of_birth,u_date_of_death,u_is_married,u_password,u_email,u_address,u_profession,u_profession_subcategory,u_otp_status,u_temp_otp,u_profile_pic,u_is_life_status_check_enabled,u_created_at,u_updated_at from user;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}



	/*USER_TRUSTEE_NOMINEE_ASSOCIATION*/

	function registerTrusteeNominee($conn,$data){
		$r=mysqli_query($conn,"insert into user_trustee_nominee_association(utna_type,u_id,utna_name,utna_phone_no,utna_temp_otp,utna_verification_status,utna_is_executor,utna_created_at,utna_updated_at) values('T',6,'text','0000000000','123456',0,1,now(),now());");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateTrusteeNomineeProfile($conn,$data){
		$r=mysqli_query($conn,"update user_trustee_nominee_association set utna_type='S',u_id=6,utna_name='text1',utna_phone_no='0000000000',utna_temp_otp='159862',utna_verification_status=1,utna_is_executor=1,utna_updated_at=now() where utna_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteTrusteeNominee($conn){
		$r=mysqli_query($conn,"delete from user_trustee_nominee_association where utna_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllTrusteeNominee($conn){
		$r=mysqli_query($conn,"select utna_id,utna_type,u_id,utna_name,utna_phone_no,utna_temp_otp,utna_verification_status,utna_is_executor,utna_created_at,utna_updated_at from user_trustee_nominee_association;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}



/*USER_LIFE_STATUS_VERIFICATION*/

function registerUserLifeStatusVerification($conn,$data){
		$r=mysqli_query($conn,"insert into user_life_status_verification(u_id,uslv_regular_checkin,uslv_first_fail_safe,uslv_second_fail_safe,uslv_alert_nominee,uslv_verification_option,uslv_created_at,uslv_updated_at) values (1,12345,12345,12345,00000,'E',now(),now());");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateUserLifeStatusVerification($conn,$data){
		$r=mysqli_query($conn,"update user_life_status_verification set u_id=2,uslv_regular_checkin=12345,uslv_first_fail_safe=12345,uslv_second_fail_safe=12345,uslv_alert_nominee=00000,uslv_verification_option='E',uslv_updated_at=now() where ulsv_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteUserLifeStatusVerification($conn){
		$r=mysqli_query($conn,"delete from user_life_status_verification where ulsv_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllUserLifeStatusVerification($conn){
		$r=mysqli_query($conn,"select ulsv_id,u_id,uslv_regular_checkin,uslv_first_fail_safe,uslv_second_fail_safe,uslv_alert_nominee,uslv_verification_option,uslv_created_at,uslv_updated_at from user_life_status_verification;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}




/*USER_TRUSTEE_POSTDEATH_LEGACY*/

	function registerUserTrusteePostDeathLegacy($conn,$data){
		$r=mysqli_query($conn,"insert into user_trustee_postdeath_legacy(u_id,utna_id,utpl_asset_id,utpl_asset_type,utpl_created_at,utpl_updated_at) values(1,1,1,'J',now(),now());");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateUserTrusteePostDeathLegacy($conn,$data){
		$r=mysqli_query($conn,"update user_trustee_postdeath_legacy set u_id=2,utna_id=2,utpl_asset_id=1,utpl_asset_type='J',utpl_updated_at=now() where utpl_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteUserTrusteePostDeathLegacy($conn){
		$r=mysqli_query($conn,"delete from user_trustee_postdeath_legacy where utpl_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllUserTrusteePostDeathLegacy($conn){
		$r=mysqli_query($conn,"select utpl_id,u_id,utna_id,utpl_asset_id,utpl_asset_type,utpl_created_at,utpl_updated_at from user_trustee_postdeath_legacy;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}




/*USER_TRUSTEE_POSTDEATH_SECURITY*/

	function registerUserTrusteePostDeathSecurity($conn,$data){
		$r=mysqli_query($conn,"insert into user_trustee_postdeath_security(u_id,utna_id,trustee_nominee_verfication_password,user_verfication_password,vault_open_status,utps_created_at,utps_updated_at) values(2,2,'1234','1233','Y',now(),now());");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateUserTrusteePostDeathSecurity($conn,$data){
		$r=mysqli_query($conn,"update user_trustee_postdeath_security set u_id=2,utna_id=2,trustee_nominee_verfication_password='1234',user_verfication_password='1234',vault_open_status='N',utps_updated_at=now() where utps_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteUserTrusteePostDeathSecurity($conn){
		$r=mysqli_query($conn,"delete from user_trustee_postdeath_security where utps_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllUserTrusteePostDeathSecurity($conn){
		$r=mysqli_query($conn,"select utps_id,u_id,utna_id,trustee_nominee_verfication_password,user_verfication_password,vault_open_status,utps_created_at,utps_updated_at from user_trustee_postdeath_security;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}




/*WILL_CATEGORIES_MASTERDATA*/

	function registerWillCategoriesMasterData($conn,$data){
		$r=mysqli_query($conn,"insert into will_categories_masterdata(wcm_name,wcm_desc) values('text','text text');");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateWillCategoriesMasterData($conn,$data){
		$r=mysqli_query($conn,"update will_categories_masterdata set wcm_name='text',wcm_desc='text text' where wcm_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteWillCategoriesMasterData($conn){
		$r=mysqli_query($conn,"delete from will_categories_masterdata where wcm_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllWillCategoriesMasterData($conn){
		$r=mysqli_query($conn,"select wcm_id,wcm_name,wcm_desc from will_categories_masterdata;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}



/*WILL_SUBCATEGORIES_MASTERDATA*/

	function registerWillSubcategoriesMasterData($conn,$data){
		$r=mysqli_query($conn,"insert into will_subcategories_masterdata(wcm_id,wscm_name,wscm_desc) values(1,'text','text');");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateWillSubcategoriesMasterdata($conn,$data){
		$r=mysqli_query($conn,"update will_subcategories_masterdata set wcm_id=1,wscm_name='text',wscm_desc='text' where wscm_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteWillSubcategoriesMasterdata($conn){
		$r=mysqli_query($conn,"delete from will_subcategories_masterdata where wscm_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllWillSubcategoriesMasterdata($conn){
		$r=mysqli_query($conn,"select wscm_id,wcm_id,wscm_name,wscm_desc from will_subcategories_masterdata;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}




/*WILL_EWILL_VERSION*/

	function registerWillEwillVersion($conn,$data){
		$r=mysqli_query($conn,"insert into will_ewill_version(u_id,utna_id1,utna_id2,wev_version_no,wev_location_url,wev_description,wev_creation_completed_time,wev_creation_saved_time) values(2,2,2,00000,'text','text','2018-01-03','2018-01-03');");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateWillEwillVersion($conn,$data){
		$r=mysqli_query($conn,"update will_ewill_version set u_id=2,utna_id1=2,utna_id2=2,wev_version_no=12345,wev_location_url='text',wev_description='text',wev_creation_completed_time='2018-01-03',wev_creation_saved_time='2018-01-03' where wev_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteWillEwillVersion($conn){
		$r=mysqli_query($conn,"delete from will_ewill_version where wev_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllWillEwillVersion($conn){
		$r=mysqli_query($conn,"select wev_id,u_id,utna_id1,utna_id2,wev_version_no,wev_location_url,wev_description,wev_creation_completed_time,wev_creation_saved_time from will_ewill_version;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}