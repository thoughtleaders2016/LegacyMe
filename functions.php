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




	/*WILL_REALESTATE*/

	function registerWillRealEstate($conn,$data){
		$r=mysqli_query($conn,"insert into will_realestate(u_id,wscm_id,utna_id,wev_id,wre_name,wre_address,wre_property_share,wre_created_at,wre_updated_at) values(2,1,2,1,'text','Kolkata','20%',now(),now());");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateWillRealEstate($conn,$data){
		$r=mysqli_query($conn,"update will_realestate set u_id=2,wscm_id=1,utna_id=2,wev_id=1,wre_name='text1',wre_address='text1',wre_property_share='30%',wre_updated_at=now() where wre_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteWillRealEstate($conn){
		$r=mysqli_query($conn,"delete from will_realestate where wre_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllWillRealEstate($conn){
		$r=mysqli_query($conn,"select wre_id,u_id,wscm_id,utna_id,wev_id,wre_name,wre_address,wre_property_share,wre_created_at, wre_updated_at from will_realestate;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}




/*WILL_FINANCE*/

	function registerWillFinance($conn,$data){
		$r=mysqli_query($conn,"insert into will_finance (u_id,wscm_id,utna_id,wev_id,wf_name,wf_demat,wf_portfolio_no,wf_bank_name,wf_created_at,wf_updated_at) values(2,1,2,1,'text','text','text','text',now(),now());");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateWillFinance($conn,$data){
		$r=mysqli_query($conn,"update will_finance set u_id=2,wscm_id=1,utna_id=2,wev_id=1,wf_name='text1',wf_demat='text2',wf_portfolio_no='text3',wf_bank_name='text4',wf_updated_at=now() where wf_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteWillFinance($conn){
		$r=mysqli_query($conn,"delete from will_finance where wf_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllWillFinance($conn){
		$r=mysqli_query($conn,"select wf_id,u_id,wscm_id,utna_id,wev_id,wf_name,wf_demat,wf_portfolio_no,wf_bank_name,wf_created_at,wf_updated_at from will_finance;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}




/*WILL_LOANS*/

	function registerWillLoans($conn,$data){
		$r=mysqli_query($conn,"insert into will_loans (u_id,wscm_id,utna_id,wev_id,wl_loan_no,wl_bank_name,wl_total_amt,wl_outstanding_amt,wl_created_at,wl_updated_at) values(2,1,2,1,'0123612','SBI','32000','12300',now(),now());");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateWillLoans($conn,$data){
		$r=mysqli_query($conn,"update will_loans set u_id=2,wscm_id=1,utna_id=2,wev_id=1,wl_loan_no='0123654',wl_bank_name='PNB',wl_total_amt='23000', wl_outstanding_amt='13000',wl_updated_at=now() where wl_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteWillLoans($conn){
		$r=mysqli_query($conn,"delete from will_loans where wl_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllWillLoans($conn){
		$r=mysqli_query($conn,"select wl_id,u_id,wscm_id,utna_id,wev_id,wl_loan_no,wl_bank_name,wl_total_amt,wl_outstanding_amt,wl_created_at,wl_updated_at from will_loans;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}




/*WILL_BANKS_SAFES*/

	function registerWillBanksSafes($conn,$data){
		$r=mysqli_query($conn,"insert into will_banks_safes (u_id,wscm_id,utna_id,wev_id,wbs_ban,wbs_bn,wbs_ln,wbs_created_at,wbs_updated_at) values (2,1,2,1,'012598745','HDFC','5101236',now(),now());");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateWillBanksSafes($conn,$data){
		$r=mysqli_query($conn,"update will_banks_safes set u_id=2,wscm_id=1,utna_id=2,wev_id=1,wbs_ban='32150612',wbs_bn='SBI',wbs_ln='85120236',wbs_updated_at=now() where wbs_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteWillBanksSafes($conn){
		$r=mysqli_query($conn,"delete from will_banks_safes where wbs_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllWillBanksSafes($conn){
		$r=mysqli_query($conn,"select wbs_id,u_id,wscm_id,utna_id,wev_id,wbs_ban,wbs_bn,wbs_ln,wbs_created_at,wbs_updated_at from will_banks_safes;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}




/*WILL_VEHICLES*/

	function registerWillVehicles($conn,$data){
		$r=mysqli_query($conn,"insert into will_vehicles(u_id,wscm_id,utna_id,wev_id,wv_vrn,wv_vt,wv_created_at,wv_updated_at)values(2,1,2,1,'02J02LH00','Car',now(),now());");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateWillVehicles($conn,$data){
		$r=mysqli_query($conn,"update will_vehicles set u_id=2,wscm_id=1,utna_id=2,wev_id=1,wv_vrn='HBG012594L',wv_vt='Car',wv_updated_at=now() where wv_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteWillVehicles($conn){
		$r=mysqli_query($conn,"delete from will_vehicles where wv_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllWillVehicles($conn){
		$r=mysqli_query($conn,"select wv_id,u_id,wscm_id,utna_id,wev_id,wv_vrn,wv_vt,wv_created_at,wv_updated_at from will_vehicles;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}




/*WILL_INSURANCES*/

	function registerWillInsurances($conn,$data){
		$r=mysqli_query($conn,"insert into will_insurances(u_id,wscm_id,utna_id,wev_id,wi_in,wi_it,wi_ci,wi_created_at,wi_updated_at) values(2,1,2,1,'1235K12','Life Insurance','text',now(),now());");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateWillInsurances($conn,$data){
		$r=mysqli_query($conn,"update will_insurances set u_id=2,wscm_id=1,utna_id=2,wev_id=1,wi_in='0125423',wi_it='Health Insurance',wi_ci='text',wi_updated_at=now() where wi_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteWillInsurances($conn){
		$r=mysqli_query($conn,"delete from will_insurances where wi_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllWillInsurances($conn){
		$r=mysqli_query($conn,"select wi_id,u_id,wscm_id,utna_id,wev_id,wi_in,wi_it,wi_ci,wi_created_at,wi_updated_at from will_insurances;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}




/*WILL_CASH_CHARITY*/

	function registerWillCashCharity($conn,$data){
		$r=mysqli_query($conn,"insert into will_cash_charity(u_id,wscm_id,utna_id,wcc_creditor_debtor_name,wcc_amount,wcc_charitable_inst,wcc_purpose,wcc_created_at,wcc_updated_at) values(2,1,2,'text','0000000','text','text',now(),now());");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateWillCashCharity($conn,$data){
		$r=mysqli_query($conn,"update will_cash_charity set u_id=2,wscm_id=1,utna_id=2,wcc_creditor_debtor_name='text',wcc_amount='000001',wcc_charitable_inst='text',wcc_purpose='text',wcc_updated_at=now() where wcc_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteWillCashCharity($conn){
		$r=mysqli_query($conn,"delete from will_cash_charity where wcc_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllWillCashCharity($conn){
		$r=mysqli_query($conn,"select wcc_id,u_id,wscm_id,utna_id,wcc_creditor_debtor_name,wcc_amount,wcc_charitable_inst,wcc_purpose,wcc_created_at,wcc_updated_at from will_cash_charity;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}






	/*JOURNAL_CATEGORIES_MASTERDATA*/

	function registerJournalCategoriesMasterdata($conn,$data){
		$r=mysqli_query($conn,"insert into journal_categories_masterdata(jcm_name,jcm_desc) values('text','text text text');");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateJournalCategoriesMasterdata($conn,$data){
		$r=mysqli_query($conn,"update journal_categories_masterdata set jcm_name='text',jcm_desc='text text text' where jcm_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteJournalCategoriesMasterdata($conn){
		$r=mysqli_query($conn,"delete from journal_categories_masterdata where jcm_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllJournalCategoriesMasterdata($conn){
		$r=mysqli_query($conn,"select jcm_id,jcm_name,jcm_desc from journal_categories_masterdata;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}





/*JOURNAL_SUBCATEGORIES_MASTERDATA*/

	function registerJournalSubCategoriesMasterdata($conn,$data){
		$r=mysqli_query($conn,"insert into journal_subcategories_masterdata(jscm_name,jscm_desc) values('text','text text text');");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateJournalSubCategoriesMasterdata($conn,$data){
		$r=mysqli_query($conn,"update journal_subcategories_masterdata set jscm_name='text',jscm_desc='text text text' where jscm_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteJournalSubCategoriesMasterdata($conn){
		$r=mysqli_query($conn,"delete from journal_subcategories_masterdata where jscm_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllJournalSubCategoriesMasterdata($conn){
		$r=mysqli_query($conn,"select jscm_id,jscm_name,jscm_desc from journal_subcategories_masterdata;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}




/*JOURNAL*/

	function registerJournal($conn,$data){
		$r=mysqli_query($conn,"insert into journal(j_name,j_desc) values('text','text text text');");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateJournal($conn,$data){
		$r=mysqli_query($conn,"update journal set j_name='text',j_desc='text text text' where j_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteJournal($conn){
		$r=mysqli_query($conn,"delete from journal where j_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllJournal($conn){
		$r=mysqli_query($conn,"select j_id,j_name,j_desc from journal;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}




/*JOURNAL_ENTRIES*/

	function registerJournalEntries($conn,$data){
		$r=mysqli_query($conn,"insert into journal_entries(u_id,jscm_id,j_id,je_text_type,je_img_type,je_vid_type,je_schedule_type,je_scheduled_date,je_smm_share,je_is_memory,je_created_at,je_updated_at) values(6,1,1,'url','url','url','I','2018-04-03','FB',0,now(),now());");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateJournalEntries($conn,$data){
		$r=mysqli_query($conn,"update journal_entries set u_id=2,jscm_id=1,j_id=1,je_text_type='url',je_img_type='url',je_vid_type='url',je_schedule_type='I',je_scheduled_date='2018-04-03',je_smm_share='FB',je_is_memory=0,je_updated_at=now() where je_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteJournalEntries($conn){
		$r=mysqli_query($conn,"delete from journal_entries where je_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllJournalEntries($conn){
		$r=mysqli_query($conn,"select je_id,u_id,jscm_id,j_id,je_text_type,je_img_type,je_vid_type,je_schedule_type,je_scheduled_date,je_smm_share,je_is_memory,je_created_at,je_updated_at from journal_entries;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}



/*JOURNAL_USER_TRUSTEE_ASSOCIATION*/

	function registerJournalUserTrusteeAssociation($conn,$data){
		$r=mysqli_query($conn,"insert into journal_user_trustee_association(je_id,u_id,utna_id,jmuta_updated_at) values(1,2,2,now());");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateJournalUserTrusteeAssociation($conn,$data){
		$r=mysqli_query($conn,"update journal_user_trustee_association set je_id=1,u_id=2,utna_id=2,jmuta_updated_at=now() where jmuta_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteJournalUserTrusteeAssociation($conn){
		$r=mysqli_query($conn,"delete from journal_user_trustee_association where jmuta_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllJournalUserTrusteeAssociation($conn){
		$r=mysqli_query($conn,"select jmuta_id,je_id,u_id,utna_id,jmuta_updated_at from journal_user_trustee_association;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}



/*DREAM_CATEGORIES_MASTERDATA*/

	function registerDreamCategoriesMasterdata($conn,$data){
		$r=mysqli_query($conn,"insert into dream_categories_masterdata(dcm_name,dcm_desc) values('text','text');");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateDreamCategoriesMasterdata($conn,$data){
		$r=mysqli_query($conn,"update dream_categories_masterdata set dcm_name='text',dcm_desc='text' where dcm_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteDreamCategoriesMasterdata($conn){
		$r=mysqli_query($conn,"delete from dream_categories_masterdata where dcm_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllDreamCategoriesMasterdata($conn){
		$r=mysqli_query($conn,"select dcm_id,dcm_name,dcm_desc from dream_categories_masterdata;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}




/*DREAM_ENTRIES*/

	function registerDreamEntries($conn,$data){
		$r=mysqli_query($conn,"insert into dream_entries(u_id,dcm_id,d_title,d_target_date,d_desc,d_img_type,d_vid_type,d_is_completed,d_privacy_level,d_inspirations,d_likes,d_created_at,d_updated_at) values(2,1,'text','2018-09-09','text text text','url','url',0,0,2,10,now(),now());");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateDreamEntries($conn,$data){
		$r=mysqli_query($conn,"update dream_entries set u_id=2,dcm_id=1,d_title='text',d_target_date='2018-09-09',d_desc='text text text',d_img_type='url',d_vid_type='url',d_is_completed=1,d_privacy_level=1,d_inspirations=1,d_likes=1,d_updated_at=now() where de_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteDreamEntries($conn){
		$r=mysqli_query($conn,"delete from dream_entries where de_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllDreamEntries($conn){
		$r=mysqli_query($conn,"select de_id,u_id,dcm_id,d_title,d_target_date,d_desc,d_img_type,d_vid_type,d_is_completed,d_privacy_level,d_inspirations,d_likes,d_created_at,d_updated_at from dream_entries;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}



/*DREAM_USER_TRUSTEE_ASSOCIATION*/

	function registerDreamUserTrusteeAssociation($conn,$data){
		$r=mysqli_query($conn,"insert into dream_user_trustee_association(de_id,u_id,utna_id,duta_updated_at) values(1,2,2,now());");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateDreamUserTrusteeAssociation($conn,$data){
		$r=mysqli_query($conn,"update dream_user_trustee_association set de_id=1,u_id=2,utna_id=2,duta_updated_at=now() where duta_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteDreamUserTrusteeAssociation($conn){
		$r=mysqli_query($conn,"delete from dream_user_trustee_association where duta_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllDreamUserTrusteeAssociation($conn){
		$r=mysqli_query($conn,"select duta_id,de_id,u_id,utna_id,duta_updated_at from dream_user_trustee_association;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}







/*DREAM_USER_TRUSTEE_INSPIRED*/

	function registerDreamUserTrusteeInspired($conn,$data){
		$r=mysqli_query($conn,"insert into dream_user_trustee_inspired(de_id,u_id,utna_id,duti_updated_at) values(1,2,2,now());");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateDreamUserTrusteeInspired($conn,$data){
		$r=mysqli_query($conn,"update dream_user_trustee_inspired set de_id=1,u_id=2,utna_id=2,duti_updated_at=now() where duti_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteDreamUserTrusteeInspired($conn){
		$r=mysqli_query($conn,"delete from dream_user_trustee_inspired where duti_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllDreamUserTrusteeInspired($conn){
		$r=mysqli_query($conn,"select duti_id,de_id,u_id,utna_id,duti_updated_at from dream_user_trustee_inspired;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}





/*DREAM_USER_TRUSTEE_LIKES*/

	function registerDreamUserTrusteeLikes($conn,$data){
		$r=mysqli_query($conn,"insert into dream_user_trustee_likes(de_id,u_id,utna_id,dutl_updated_at) values(1,2,2,now());");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateDreamUserTrusteeLikes($conn,$data){
		$r=mysqli_query($conn,"update dream_user_trustee_likes set de_id=1,u_id=2,utna_id=2,dutl_updated_at=now() where dutl_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteDreamUserTrusteeLikes($conn){
		$r=mysqli_query($conn,"delete from dream_user_trustee_likes where dutl_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllDreamUserTrusteeLikes($conn){
		$r=mysqli_query($conn,"select dutl_id,de_id,u_id,utna_id,dutl_updated_at from dream_user_trustee_likes;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}



/*DREAM_USER_TRUSTEE_COMMENTS*/

	function registerDreamUserTrusteeComments($conn,$data){
		$r=mysqli_query($conn,"insert into dream_user_trustee_comments(de_id,u_id,utna_id,dutc_comments,dutc_updated_at) values(1,2,2,'text text text',now());");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

	
	function updateDreamUserTrusteeComments($conn,$data){
		$r=mysqli_query($conn,"update dream_user_trustee_comments set de_id=1,u_id=2,utna_id=2,dutc_comments='text text text',dutc_updated_at=now() where dutc_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function deleteDreamUserTrusteeComments($conn){
		$r=mysqli_query($conn,"delete from dream_user_trustee_comments where dutc_id=".$_GET['id']);
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}


	function fetchAllDreamUserTrusteeComments($conn){
		$r=mysqli_query($conn,"select dutc_id,de_id,u_id,utna_id,dutc_comments,dutc_updated_at from dream_user_trustee_comments;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}