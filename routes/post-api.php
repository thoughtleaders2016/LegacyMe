<?php
/**
*	ThoughtLeaders  Technologies LLP
*	14/Jul/2018
*/
	require_once('./functions.php');
	require_once('./business-functions.php');
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

		case 'REGISTER_WILL_REALESTATE':
			registerWillRealEstate($conn,$data);
		break;
		case 'UPDATE_WILL_REALESTATE':
			updateWillRealEstate($conn,$data);
		break;

		case 'REGISTER_WILL_FINANCE':
			registerWillFinance($conn,$data);
		break;
		case 'UPDATE_WILL_FINANCE':
			updateWillFinance($conn,$data);
		break;

		case 'REGISTER_WILL_LOANS':
			registerWillLoans($conn,$data);
		break;
		case 'UPDATE_WILL_LOANS':
			updateWillLoans($conn,$data);
		break;

		case 'REGISTER_WILL_BANKS_SAFES':
			registerWillBanksSafes($conn,$data);
		break;
		case 'UPDATE_WILL_BANKS_SAFES':
			updateWillBanksSafes($conn,$data);
		break;

		case 'REGISTER_WILL_VEHICLES':
			registerWillVehicles($conn,$data);
		break;
		case 'UPDATE_WILL_VEHICLES':
			updateWillVehicles($conn,$data);
		break;

		case 'REGISTER_WILL_INSURANCES':
			registerWillInsurances($conn,$data);
		break;
		case 'UPDATE_WILL_INSURANCES':
			updateWillInsurances($conn,$data);
		break;

		case 'REGISTER_WILL_CASH_CHARITY':
			registerWillCashCharity($conn,$data);
		break;
		case 'UPDATE_WILL_CASH_CHARITY':
			updateWillCashCharity($conn,$data);
		break;

		case 'REGISTER_JOURNAL_CATEGORIES_MASTERDATA':
			registerJournalCategoriesMasterdata($conn,$data);
		break;
		case 'UPDATE_JOURNAL_CATEGORIES_MASTERDATA':
			updateJournalCategoriesMasterdata($conn,$data);
		break;

		case 'REGISTER_JOURNAL_CATEGORIES_MASTERDATA':
			registerJournalCategoriesMasterdata($conn,$data);
		break;
		case 'UPDATE_JOURNAL_CATEGORIES_MASTERDATA':
			updateJournalCategoriesMasterdata($conn,$data);
		break;	

		case 'REGISTER_JOURNAL_SUBCATEGORIES_MASTERDATA':
			registerJournalSubCategoriesMasterdata($conn,$data);
		break;
		case 'UPDATE_JOURNAL_SUBCATEGORIES_MASTERDATA':
			updateJournalSubCategoriesMasterdata($conn,$data);
		break;

		case 'REGISTER_JOURNAL':
			registerJournal($conn,$data);
		break;
		case 'UPDATE_JOURNAL':
			updateJournal($conn,$data);
		break;

		case 'REGISTER_JOURNAL_ENTRIES':
			registerJournalEntries($conn,$data);
		break;
		case 'UPDATE_JOURNAL_ENTRIES':
			updateJournalEntries($conn,$data);
		break;

		case 'REGISTER_JOURNAL_USER_TRUSTEE_ASSOCIATION':
			registerJournalUserTrusteeAssociation($conn,$data);
		break;
		case 'UPDATE_JOURNAL_USER_TRUSTEE_ASSOCIATION':
			updateJournalUserTrusteeAssociation($conn,$data);
		break;

		case 'REGISTER_DREAM_CATEGORIES_MASTERDATA':
			registerDreamCategoriesMasterdata($conn,$data);
		break;
		case 'UPDATE_DREAM_CATEGORIES_MASTERDATA':
			updateDreamCategoriesMasterdata($conn,$data);
		break;
		
		case 'REGISTER_DREAM_ENTRIES':
			registerDreamEntries($conn,$data);
		break;
		case 'UPDATE_DREAM_ENTRIES':
			updateDreamEntries($conn,$data);
		break;

		case 'REGISTER_DREAM_USER_TRUSTEE_ASSOCIATION':
			registerDreamUserTrusteeAssociation($conn,$data);
		break;
		case 'UPDATE_DREAM_USER_TRUSTEE_ASSOCIATION':
			updateDreamUserTrusteeAssociation($conn,$data);
		break;

		case 'REGISTER_DREAM_USER_TRUSTEE_INSPIRED':
			registerDreamUserTrusteeInspired($conn,$data);
		break;
		case 'UPDATE_DREAM_USER_TRUSTEE_INSPIRED':
			updateDreamUserTrusteeInspired($conn,$data);
		break;

		case 'REGISTER_DREAM_USER_TRUSTEE_LIKES':
			registerDreamUserTrusteeLikes($conn,$data);
		break;
		case 'UPDATE_DREAM_USER_TRUSTEE_LIKES':
			updateDreamUserTrusteeLikes($conn,$data);
		break;	

		case 'REGISTER_DREAM_USER_TRUSTEE_COMMENTS':
			registerDreamUserTrusteeComments($conn,$data);
		break;
		case 'UPDATE_DREAM_USER_TRUSTEE_COMMENTS':
			updateDreamUserTrusteeComments($conn,$data);
		break;

		default:
			echo "Sorry Wrong Url";
		break;
	}