<?php
/**
*	ThoughtLeaders  Technologies LLP
*	14/Jul/2018
*/

	require_once('./functions.php');
	require_once('./business-functions.php');
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

		case 'GET_ALL_WILL_REALESTATE':
			fetchAllWillRealEstate($conn);
		break;
		case 'DELETE_WILL_REALESTATE':
			deleteWillRealEstate($conn);
		break;

		case 'GET_ALL_WILL_FINANCE':
			fetchAllWillFinance($conn);
		break;
		case 'DELETE_WILL_FINANCE':
			deleteWillFinance($conn);
		break;

		case 'GET_ALL_WILL_LOANS':
			fetchAllWillLoans($conn);
		break;
		case 'DELETE_WILL_LOANS':
			deleteWillLoans($conn);
		break;

		case 'GET_ALL_WILL_BANKS_SAFES':
			fetchAllWillBanksSafes($conn);
		break;
		case 'DELETE_WILL_BANKS_SAFES':
			deleteWillBanksSafes($conn);
		break;

		case 'GET_ALL_WILL_VEHICLES':
			fetchAllWillVehicles($conn);
		break;
		case 'DELETE_WILL_VEHICLES':
			deleteWillVehicles($conn);
		break;

		case 'GET_ALL_WILL_INSURANCES':
			fetchAllWillInsurances($conn);
		break;
		case 'DELETE_WILL_INSURANCES':
			deleteWillInsurances($conn);
		break;

		case 'GET_ALL_WILL_CASH_CHARITY':
			fetchAllWillCashCharity($conn);
		break;
		case 'DELETE_WILL_CASH_CHARITY':
			deleteWillCashCharity($conn);
		break;		

		case 'GET_ALL_JOURNAL_CATEGORIES_MASTERDATA':
			fetchAllJournalCategoriesMasterdata($conn);
		break;
		case 'DELETE_JOURNAL_CATEGORIES_MASTERDATA':
			deleteJournalCategoriesMasterdata($conn);
		break;
		
		case 'GET_ALL_JOURNAL_SUBCATEGORIES_MASTERDATA':
			fetchAllJournalSubCategoriesMasterdata($conn);
		break;
		case 'DELETE_JOURNAL_SUBCATEGORIES_MASTERDATA':
			deleteJournalSubCategoriesMasterdata($conn);
		break;

		case 'GET_ALL_JOURNAL':
			fetchAllJournal($conn);
		break;
		case 'DELETE_JOURNAL':
			deleteJournal($conn);
		break;

		case 'GET_ALL_JOURNAL_ENTRIES':
			fetchAllJournalEntries($conn);
		break;
		case 'DELETE_JOURNAL_ENTRIES':
			deleteJournalEntries($conn);
		break;

		case 'GET_ALL_JOURNAL_USER_TRUSTEE_ASSOCIATION':
			fetchAllJournalUserTrusteeAssociation($conn);
		break;
		case 'DELETE_JOURNAL_USER_TRUSTEE_ASSOCIATION':
			deleteJournalUserTrusteeAssociation($conn);
		break;

		case 'GET_ALL_DREAM_CATEGORIES_MASTERDATA':
			fetchAllDreamCategoriesMasterdata($conn);
		break;
		case 'DELETE_DREAM_CATEGORIES_MASTERDATA':
			deleteDreamCategoriesMasterdata($conn);
		break;

		case 'GET_ALL_DREAM_ENTRIES':
			fetchAllDreamEntries($conn);
		break;
		case 'DELETE_DREAM_ENTRIES':
			deleteDreamEntries($conn);
		break;

		case 'GET_ALL_DREAM_USER_TRUSTEE_ASSOCIATION':
			fetchAllDreamUserTrusteeAssociation($conn);
		break;
		case 'DELETE_DREAM_USER_TRUSTEE_ASSOCIATION':
			deleteDreamUserTrusteeAssociation($conn);
		break;

		case 'GET_ALL_DREAM_USER_TRUSTEE_INSPIRED':
			fetchAllDreamUserTrusteeInspired($conn);
		break;
		case 'DELETE_DREAM_USER_TRUSTEE_INSPIRED':
			deleteDreamUserTrusteeInspired($conn);
		break;

		case 'GET_ALL_DREAM_USER_TRUSTEE_LIKES':
			fetchAllDreamUserTrusteeLikes($conn);
		break;
		case 'DELETE_DREAM_USER_TRUSTEE_LIKES':
			deleteDreamUserTrusteeLikes($conn);
		break;

		case 'GET_ALL_DREAM_USER_TRUSTEE_COMMENTS':
			fetchAllDreamUserTrusteeComments($conn);
		break;
		case 'DELETE_DREAM_USER_TRUSTEE_COMMENTS':
			deleteDreamUserTrusteeComments($conn);
		break;


		case 'FETCH_LIST_JOURNAL_ENTRIES':
			fetchListJournalEntries($conn);
		break;

		case 'FETCH_LIST_MEMORY_ENTRIES':
			fetchListMemoryEntries($conn);
		break;
		
		case 'FETCH_USER_COMPLETED_DREAMS':
			fetchUserCompletedDreams($conn);
		break;
		

		
		default:
			echo "Sorry Wrong Url";
		break;
	}