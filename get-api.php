<?php
/**
*	ThoughtLeaders  Technologies LLP
*	14/Jul/2018
*/

	require_once('./functions.php');
	$route=isset($_GET['route_type'])?$_GET['route_type']:'WRONG_URL';
	
	switch($route){
		
		case 'GET_ALL_USER':
			fetchAllUser($conn);
		break;
		case 'DELETE_USER':
			deleteUser($conn);
		break;

		case 'GET_ALL_TRUSTEE_NOMINEE':
			fetchAllTrusteeNominee($conn);
		break;
		case 'DELETE_TRUSTEE_NOMINEE':
			deleteTrusteeNominee($conn);
		break;

		case 'GET_ALL_USER_LIFE_STATUS_VERIFICATION':
			fetchAllUserLifeStatusVerification($conn);
		break;
		case 'DELETE_USER_LIFE_STATUS_VERIFICATION':
			deleteUserLifeStatusVerification($conn);
		break;

		case 'GET_ALL_USER_TRUSTEE_POSTDEATH_LEGACY':
			fetchAllUserTrusteePostDeathLegacy($conn);
		break;
		case 'DELETE_USER_TRUSTEE_POSTDEATH_LEGACY':
			deleteUserTrusteePostDeathLegacy($conn);
		break;

		case 'GET_ALL_USER_TRUSTEE_POSTDEATH_SECURITY':
			fetchAllUserTrusteePostDeathSecurity($conn);
		break;
		case 'DELETE_USER_TRUSTEE_POSTDEATH_SECURITY':
			deleteUserTrusteePostDeathSecurity($conn);
		break;

		case 'GET_ALL_WILL_CATEGORIES_MASTERDATA':
			fetchAllWillCategoriesMasterData($conn);
		break;
		case 'DELETE_WILL_CATEGORIES_MASTERDATA':
			deleteWillCategoriesMasterData($conn);
		break;

		case 'GET_ALL_WILL_SUBCATEGORIES_MASTERDATA':
			fetchAllWillSubcategoriesMasterdata($conn);
		break;
		case 'DELETE_WILL_SUBCATEGORIES_MASTERDATA':
			deleteWillSubcategoriesMasterdata($conn);
		break;

		case 'GET_ALL_WILL_EWILL_VERSION':
			fetchAllWillEwillVersion($conn);
		break;
		case 'DELETE_WILL_EWILL_VERSION':
			deleteWillEwillVersion($conn);
		break;


		default:
			echo "Sorry Wrong Url";
		break;
	}