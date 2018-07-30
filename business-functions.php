<?php

/**
*	ThoughtLeaders  Technologies LLP
*	23/Jul/2018
*/



//page-3

/**
* fetchJournalCategories()-> GET_ALL_JOURNAL_CATEGORIES_MASTERDATA
* method - GET
* rootURL/GET_ALL_JOURNAL_CATEGORIES_MASTERDATA
* function fetchAllJournalCategoriesMasterdata($conn){
*		$r=mysqli_query($conn,"select jcm_id,jcm_name,jcm_desc from journal_categories_masterdata;");
*		$resp=array();
*		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
*		echo json_encode($resp);
*	}
*/


function fetchListJournalEntries($conn){
	
	$r=mysqli_query($conn,"select JE.*,JUTA.*,UTNA.* from journal_entries JE inner join journal_user_trustee_association JUTA on JE.je_id=JUTA.je_id inner join user_trustee_nominee_association UTNA on JUTA.utna_id=UTNA.utna_id where JE.u_id=".$_GET['id']);
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
		
}


function fetchListMemoryEntries($conn){
	
	$r=mysqli_query($conn,"select JE.*,JUTA.*,UTNA.* from journal_entries JE inner join journal_user_trustee_association JUTA on JE.je_id=JUTA.je_id inner join user_trustee_nominee_association UTNA on JUTA.utna_id=UTNA.utna_id where JE.je_is_memory=1 and JE.u_id=".$_GET['id']);
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
}


/**
*addJournalEntry()->REGISTER_JOURNAL_ENTRIES
*req->route_type->REGISTER_JOURNAL_ENTRIES
*method - POST
*function registerJournalEntries($conn,$data){
*		$r=mysqli_query($conn,"insert into journal_entries(u_id,jscm_id,j_id,je_text_type,je_img_type,je_vid_type,je_schedule_type,je_scheduled_date,je_smm_share,je_is_memory,je_created_at,je_updated_at) values(6,1,1,'url','url','url','I','2018-04-03','FB',0,now(),now());");
*		$status=0;
*		if($r>0) $status=1;
*		echo json_encode(array("status"=>$status));
*	}
*/









// page-4

/**
*addUserJournalEntry()->REGISTER_JOURNAL_USER_TRUSTEE_ASSOCIATION
*req->route_type->REGISTER_JOURNAL_USER_TRUSTEE_ASSOCIATION
*method - POST
*function registerJournalUserTrusteeAssociation($conn,$data){
*		$r=mysqli_query($conn,"insert into journal_user_trustee_association(je_id,u_id,utna_id,jmuta_updated_at) values(1,2,2,now());");
*		$status=0;
*		if($r>0) $status=1;
*		echo json_encode(array("status"=>$status));
*	}
*/



/**
*editUserJournalEntry()->UPDATE_JOURNAL_USER_TRUSTEE_ASSOCIATION
*req->route_type->UPDATE_JOURNAL_USER_TRUSTEE_ASSOCIATION
*method - POST
*function updateJournalUserTrusteeAssociation($conn,$data){
*		$r=mysqli_query($conn,"update journal_user_trustee_association set je_id=1,u_id=2,utna_id=2,jmuta_updated_at=now() where jmuta_id=".$data['id'].";");
*		$status=0;
*		if($r>0) $status=1;
*		echo json_encode(array("status"=>$status));
*	}
*/



/**
*scheduleJournalEntry() --Pending
*Job Scheduling / Triggers
*/







//page-5

/**
*fetchListJournalEntries()
*
*fetchListMemoryEntries()
*/







//page-7


/**
*addUserDream()->REGISTER_DREAM_ENTRIES
*req->route_type->REGISTER_DREAM_ENTRIES
*method - POST
*function registerDreamEntries($conn,$data){
*		$r=mysqli_query($conn,"insert into dream_entries(u_id,dcm_id,d_title,d_target_date,d_desc,d_img_type,d_vid_type,d_is_completed,d_privacy_level,d_inspirations,d_likes,d_created_at,d_updated_at) values(2,1,'text','2018-09-09','text text text','url','url',0,0,2,10,now(),now());");
*		$status=0;
*		if($r>0) $status=1;
*		echo json_encode(array("status"=>$status));
*	}
*
*
*req->route_type->REGISTER_DREAM_USER_TRUSTEE_ASSOCIATION

*function registerDreamUserTrusteeAssociation($conn,$data){
*		$r=mysqli_query($conn,"insert into dream_user_trustee_association(de_id,u_id,utna_id,duta_updated_at) values(1,2,2,now());");
*		$status=0;
*		if($r>0) $status=1;
*		echo json_encode(array("status"=>$status));
*	}
*/


/**
*editUserDream()->UPDATE_DREAM_ENTRIES
*req->route_type->UPDATE_DREAM_ENTRIES
*method - POST
*function updateDreamEntries($conn,$data){
*		$r=mysqli_query($conn,"update dream_entries set u_id=2,dcm_id=1,d_title='text',d_target_date='2018-09-09',d_desc='text text text',d_img_type='url',d_vid_type='url',d_is_completed=1,d_privacy_level=1,d_inspirations=1,d_likes=1,d_updated_at=now() where de_id=".$data['id'].";");
*		$status=0;
*		if($r>0) $status=1;
*		echo json_encode(array("status"=>$status));
*	}
*
*
*req->route_type->UPDATE_DREAM_USER_TRUSTEE_COMMENTS

*function updateDreamUserTrusteeComments($conn,$data){
*		$r=mysqli_query($conn,"update dream_user_trustee_comments set de_id=1,u_id=2,utna_id=2,dutc_comments='text text text',dutc_updated_at=now() where dutc_id=".$data['id'].";");
*		$status=0;
*		if($r>0) $status=1;
*		echo json_encode(array("status"=>$status));
*	}
*Note - if Privacy is not personal
*/









//Page-8

/**
*fetchUserAllDreams()->GET_ALL_DREAM_ENTRIES
*rootURL/GET_ALL_DREAM_ENTRIES
*method - GET
*function fetchAllDreamEntries($conn){
*		$r=mysqli_query($conn,"select de_id,u_id,dcm_id,d_title,d_target_date,d_desc,d_img_type,d_vid_type,d_is_completed,d_privacy_level,d_inspirations,d_likes,d_created_at,d_updated_at from dream_entries;");
*		$resp=array();
*		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
*		echo json_encode($resp);
*	}
*	
*rootURL/GET_ALL_DREAM_USER_TRUSTEE_ASSOCIATION
*function fetchAllDreamUserTrusteeAssociation($conn){
*		$r=mysqli_query($conn,"select duta_id,de_id,u_id,utna_id,duta_updated_at from dream_user_trustee_association;");
*		$resp=array();
*		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
*		echo json_encode($resp);
*	}
*
*rootURl/GET_ALL_DREAM_USER_TRUSTEE_COMMENTS
*function fetchAllDreamUserTrusteeComments($conn){
*		$r=mysqli_query($conn,"select dutc_id,de_id,u_id,utna_id,dutc_comments,dutc_updated_at from dream_user_trustee_comments;");
*		$resp=array();
*		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
*		echo json_encode($resp);
*	}	
*/     



function fetchUserCompletedDreams($conn){
	$r=mysqli_query($conn,"select *from dream_entries de inner join dream_categories_masterdata dcm on de.dcm_id=dcm.dcm_id where de.d_target_date<now() and de.u_id=".$_GET['id'].";");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
}


/**
*computeUserDreamCompletionQuotient() -- Pending
*
*fetchUserYouTubeStream() -- Pending
*/








//Page-9

/**
*fetchAllUsersDreamPool()->GET_ALL_DREAM_ENTRIES
*rootURL/GET_ALL_DREAM_ENTRIES
*method - GET
*function fetchAllDreamEntries($conn){
*		$r=mysqli_query($conn,"select de_id,u_id,dcm_id,d_title,d_target_date,d_desc,d_img_type,d_vid_type,d_is_completed,d_privacy_level,d_inspirations,d_likes,d_created_at,d_updated_at from dream_entries;");
*		$resp=array();
*		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
*		echo json_encode($resp);
*	}
*	
*	
*rootURL/GET_ALL_DREAM_USER_TRUSTEE_ASSOCIATION
*function fetchAllDreamUserTrusteeAssociation($conn){
*		$r=mysqli_query($conn,"select duta_id,de_id,u_id,utna_id,duta_updated_at from dream_user_trustee_association;");
*		$resp=array();
*		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
*		echo json_encode($resp);
*	}	
*
*
*rootURL/GET_ALL_DREAM_USER_TRUSTEE_COMMENTS
*function fetchAllDreamUserTrusteeComments($conn){
*		$r=mysqli_query($conn,"select dutc_id,de_id,u_id,utna_id,dutc_comments,dutc_updated_at from dream_user_trustee_comments;");
*		$resp=array();
*		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
*		echo json_encode($resp);
*	}	
*
*
*rootURL/GET_ALL_DREAM_USER_TRUSTEE_INSPIRED	
*function fetchAllDreamUserTrusteeInspired($conn){
*		$r=mysqli_query($conn,"select duti_id,de_id,u_id,utna_id,duti_updated_at from dream_user_trustee_inspired;");
*		$resp=array();
*		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
*		echo json_encode($resp);
*	}
*	
*rootURl/GET_ALL_DREAM_USER_TRUSTEE_LIKES
*function fetchAllDreamUserTrusteeLikes($conn){
*		$r=mysqli_query($conn,"select dutl_id,de_id,u_id,utna_id,dutl_updated_at from dream_user_trustee_likes;");
*		$resp=array();
*		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
*		echo json_encode($resp);
*	}
*	
*/


/**
*markDreamAsInspirational() -- Pending
*
*markDreamAsLiked() -- Pending

*makeDreamReplica() -- Pending
*/





//page-11
/**
*fetchListOfRealEstateProperties()->GET_ALL_WILL_EWILL_VERSION
*rootURL/GET_ALL_WILL_EWILL_VERSION
*method - GET
*function fetchAllWillEwillVersion($conn){
*		$r=mysqli_query($conn,"select wev_id,u_id,utna_id1,utna_id2,wev_version_no,wev_location_url,wev_description,wev_creation_completed_time,wev_creation_saved_time from will_ewill_version;");
*		$resp=array();
*		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
*		echo json_encode($resp);
*	}
*	
*
*rootURL/GET_ALL_WILL_REALESTATE
*	function fetchAllWillRealEstate($conn){
*		$r=mysqli_query($conn,"select wre_id,u_id,wscm_id,utna_id,wev_id,wre_name,wre_address,wre_property_share,wre_created_at, wre_updated_at from will_realestate;");
*		$resp=array();
*		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
*		echo json_encode($resp);
*	}
*/


/**
*addRealEstateProperty()->REGISTER_WILL_EWILL_VERSION
*req->routytype->REGISTER_WILL_EWILL_VERSION
*method - POST
*function registerWillEwillVersion($conn,$data){
*		$r=mysqli_query($conn,"insert into will_ewill_version(u_id,utna_id1,utna_id2,wev_version_no,wev_location_url,wev_description,wev_creation_completed_time,wev_creation_saved_time) values(2,2,2,00000,'text','text','2018-01-03','2018-01-03');");
*		$status=0;
*		if($r>0) $status=1;
*		echo json_encode(array("status"=>$status));
*	}
	
	

*req->route_type->REGISTER_WILL_REALESTATE
*function registerWillRealEstate($conn,$data){
*		$r=mysqli_query($conn,"insert into will_realestate(u_id,wscm_id,utna_id,wev_id,wre_name,wre_address,wre_property_share,wre_created_at,wre_updated_at) values(2,1,2,1,'text','Kolkata','20%',now(),now());");
*		$status=0;
*		if($r>0) $status=1;
*		echo json_encode(array("status"=>$status));
*	}
*/



/**
*editRealEstateProperty()->UPDATE_WILL_EWILL_VERSION
*req->route_type->UPDATE_WILL_EWILL_VERSION
*method -POST
*function updateWillEwillVersion($conn,$data){
*		$r=mysqli_query($conn,"update will_ewill_version set u_id=2,utna_id1=2,utna_id2=2,wev_version_no=12345,wev_location_url='text',wev_description='text',wev_creation_completed_time='2018-01-03',wev_creation_saved_time='2018-01-03' where wev_id=".$data['id'].";");
*		$status=0;
*		if($r>0) $status=1;
*		echo json_encode(array("status"=>$status));
*	}
*	
*	
*req->route_type->UPDATE_WILL_REALESTATE
*function updateWillRealEstate($conn,$data){
*		$r=mysqli_query($conn,"update will_realestate set u_id=2,wscm_id=1,utna_id=2,wev_id=1,wre_name='text1',wre_address='text1',wre_property_share='30%',wre_updated_at=now() where wre_id=".$data['id'].";");
*		$status=0;
*		if($r>0) $status=1;
*		echo json_encode(array("status"=>$status));
*	}	
*
*/



//page-12
/**

fetchListOfFinancialInstruments()->GET_ALL_WILL_EWILL_VERSION
rootURL/GET_ALL_WILL_EWILL_VERSION
method - GET
function fetchAllWillEwillVersion($conn){
		$r=mysqli_query($conn,"select wev_id,u_id,utna_id1,utna_id2,wev_version_no,wev_location_url,wev_description,wev_creation_completed_time,wev_creation_saved_time from will_ewill_version;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}
	
rootURL/GET_ALL_WILL_FINANCE
function fetchAllWillFinance($conn){
		$r=mysqli_query($conn,"select wf_id,u_id,wscm_id,utna_id,wev_id,wf_name,wf_demat,wf_portfolio_no,wf_bank_name,wf_created_at,wf_updated_at from will_finance;");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}
*/

function fetchWillFinanceByType($conn){
	$r=mysqli_query($conn,"select wf_id,u_id,wscm_id,utna_id,wev_id,wf_name,wf_demat,wf_portfolio_no,wf_bank_name,wf_created_at,wf_updated_at from will_finance where wscm_id=".$_GET['id'].";");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
}



/**
addFinancialInstrument()->REGISTER_WILL_EWILL_VERSION
rootURL->route_type->REGISTER_WILL_EWILL_VERSION
function registerWillEwillVersion($conn,$data){
		$r=mysqli_query($conn,"insert into will_ewill_version(u_id,utna_id1,utna_id2,wev_version_no,wev_location_url,wev_description,wev_creation_completed_time,wev_creation_saved_time) values(2,2,2,00000,'text','text','2018-01-03','2018-01-03');");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

rootURL->route_type->REGISTER_WILL_FINANCE
function registerWillFinance($conn,$data){
		$r=mysqli_query($conn,"insert into will_finance (u_id,wscm_id,utna_id,wev_id,wf_name,wf_demat,wf_portfolio_no,wf_bank_name,wf_created_at,wf_updated_at) values(2,1,2,1,'text','text','text','text',now(),now());");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}
*/


/**
editFinancialInstrument()->UPDATE_WILL_EWILL_VERSION
function updateWillEwillVersion($conn,$data){
		$r=mysqli_query($conn,"update will_ewill_version set u_id=2,utna_id1=2,utna_id2=2,wev_version_no=12345,wev_location_url='text',wev_description='text',wev_creation_completed_time='2018-01-03',wev_creation_saved_time='2018-01-03' where wev_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}

/UPDATE_WILL_FINANCE
function updateWillFinance($conn,$data){
		$r=mysqli_query($conn,"update will_finance set u_id=2,wscm_id=1,utna_id=2,wev_id=1,wf_name='text1',wf_demat='text2',wf_portfolio_no='text3',wf_bank_name='text4',wf_updated_at=now() where wf_id=".$data['id'].";");
		$status=0;
		if($r>0) $status=1;
		echo json_encode(array("status"=>$status));
	}
*/



//page-13
/*
*fetchListOfBankSafeAccounts()
*	rootURL->route_type->GET_ALL_WILL_EWILL_VERSION
*addBankSafeAccount()
*	rootURL->route_type->REGISTER_WILL_FINANCE
*editBankSafeAccount()
*	rootURL->route_type->UPDATE_WILL_FINANCE



//page-14
/**
*fetchListOfLoanAccounts()->FETCH_WILL_LOAN_BY_TYPE
*/
function fetchAllWillLoansByType($conn){
		$r=mysqli_query($conn,"select wl_id,u_id,wscm_id,utna_id,wev_id,wl_loan_no,wl_bank_name,wl_total_amt,wl_outstanding_amt,wl_created_at,wl_updated_at from will_loans where wscm_id=".$_GET['id'].";");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}


/**
*addLoanAccount()->REGISTER_WILL_LOANS / REGISTER_WILL_EWILL_VERSION
*editLoanAccount() -> UPDATE_WILL_LOANS / UPDATE_WILL_EWILL_VERSION
*/


//page-15
/**
*fetchListOfVehicles() -> GET_ALL_WILL_VEHICLES_BY_TYPE
*/
function fetchAllWillVehiclesByType($conn){
		$r=mysqli_query($conn,"select wv_id,u_id,wscm_id,utna_id,wev_id,wv_vrn,wv_vt,wv_created_at,wv_updated_at from will_vehicles where wscm_id=".$_GET['id'].";");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}

/**
*addVehicle() -> REGISTER_WILL_VEHICLES
*editVehicle() -> UPDATE_WILL_VEHICLES
*/




//page-16
/**
*fetchListOfCashCharityOptions() -> GET_ALL_WILL_CASH_CHARITY_BY_TYPE
*/
function fetchAllWillCashCharityByType($conn){
		$r=mysqli_query($conn,"select wcc_id,u_id,wscm_id,utna_id,wcc_creditor_debtor_name,wcc_amount,wcc_charitable_inst,wcc_purpose,wcc_created_at,wcc_updated_at from will_cash_charity where wscm_id=".$_GET['id'].";");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}


/**
*addCashCharityOption() -> REGISTER_WILL_EWILL_VERSION / REGISTER_WILL_CASH_CHARITY
*editCashCharityOption() -> UPDATE_WILL_EWILL_VERSION / UPDATE_WILL_CASH_CHARITY
*/







//page-17
/**
*fetchListOfInsuranceSchemes() -> GET_ALL_WILL_INSURANCES_BY_ID
*/

function fetchAllWillInsurancesByType($conn){
		$r=mysqli_query($conn,"select wi_id,u_id,wscm_id,utna_id,wev_id,wi_in,wi_it,wi_ci,wi_created_at,wi_updated_at from will_insurances where wscm_id=".$_GET['id'].";");
		$resp=array();
		while($row=mysqli_fetch_assoc($r))$resp[]=$row;
		echo json_encode($resp);
	}
	
/**
*addInsuranceScheme() -> REGISTER_WILL_EWILL_VERSION / REGISTER_WILL_INSURANCE
*editInsuranceScheme() -> UPDATE_WILL_EWILL_VERSION / UPDATE_WILL_INSURANCE
*/



//page-19
//Pending

//page-20 -> PENDING
/**
*addUserProfile() -> REGISTER_USER
*editUserProfile() -> UPDATE_USER
*addUserLifeStatusVerification() -> pending
*edituserLifeStatusVerification() -> pending
*/


//page-21
//Pending