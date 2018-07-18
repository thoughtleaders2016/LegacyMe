<?php
/**
*	ThoughtLeaders  Technologies LLP
*	14/Jul/2018
*/
	require_once('./functions.php');
	//$data global
	
	switch($route){
		
		case 'REGISTER_USER':
			registerUser($conn,$data);
		break;
		case 'UPDATE_USER':
			updateUserProfile($conn,$data);
		break;
		

		case 'REGISTER_TRUSTEE_NOMINEE':
			registerTrusteeNominee($conn,$data);
		break;
		case 'UPDATE_TRUSTEE_NOMINEE':
			updateTrusteeNomineeProfile($conn,$data);
		break;


		case 'REGISTER_USER_LIFE_STATUS_VERIFICATION':
			registerUserLifeStatusVerification($conn,$data);
		break;
		case 'UPDATE_USER_LIFE_STATUS_VERIFICATION':
			updateUserLifeStatusVerification($conn,$data);
		break;


		case 'REGISTER_USER_TRUSTEE_POSTDEATH_LEGACY':
			registerUserTrusteePostDeathLegacy($conn,$data);
		break;
		case 'UPDATE_USER_TRUSTEE_POSTDEATH_LEGACY':
			updateUserTrusteePostDeathLegacy($conn,$data);
		break;


		case 'REGISTER_USER_TRUSTEE_POSTDEATH_SECURITY':
			registerUserTrusteePostDeathSecurity($conn,$data);
		break;
		case 'UPDATE_USER_TRUSTEE_POSTDEATH_SECURITY':
			updateUserTrusteePostDeathSecurity($conn,$data);
		break;


		case 'REGISTER_WILL_CATEGORIES_MASTERDATA':
			registerWillCategoriesMasterData($conn,$data);
		break;
		case 'UPDATE_WILL_CATEGORIES_MASTERDATA':
			updateWillCategoriesMasterData($conn,$data);
		break;


		case 'REGISTER_WILL_SUBCATEGORIES_MASTERDATA':
			registerWillSubcategoriesMasterData($conn,$data);
		break;
		case 'UPDATE_WILL_SUBCATEGORIES_MASTERDATA':
			updateWillSubcategoriesMasterdata($conn,$data);
		break;


		case 'REGISTER_WILL_EWILL_VERSION':
			registerWillEwillVersion($conn,$data);
		break;
		case 'UPDATE_WILL_EWILL_VERSION':
			updateWillEwillVersion($conn,$data);
		break;



		default:
			echo "Sorry Wrong Url";
		break;
	}