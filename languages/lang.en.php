<?php
/* 
------------------
Language: English
------------------
*/

$lang = array();

$lang['PAGE_TITLE'] = 'Prodiction';

// Menu

$lang['MENU_HOME'] = 'Home';
$lang['MENU_INTRODUCTION'] = 'Introduction';
$lang['MENU_BUG_REPORT'] = 'Bugreport';
$lang['MENU_FAQ'] = 'FAQ';
$lang['MENU_DOWNLOAD_INSTALL'] = 'Download & Install';
$lang['MENU_STABLE_VERSION'] = 'Stable Version';
$lang['MENU_NIGHTY_VERSION'] = 'Nighty Version';
$lang['MENU_API_REFERENCE'] = 'Api Reference';
$lang['MENU_INFO'] = 'Info';
$lang['MENU_SPELL'] = 'Spell';
$lang['MENU_TUTORIAL'] = 'Tutorial';
$lang['MENU_GETTING_STARTED'] = 'Getting Started';
$lang['MENU_VIDEOS'] = 'Videos';

// 1.Introduction

$lang['INTRO_INTRO'] = 'This is api documentation for Prodiction wrote by klokje. Prodiction is a prediction library for BoL. It allows your scripts to predict the position of Heroes/Minions based on spell/time information. This document is composed of two parts:';
$lang['INTRO_USERS'] = 'Bol users';
$lang['INTRO_DEVS'] = 'Bol Devs';
$lang['INTRO_PARAGRAPH1'] = 'The first part consists of basic information of prodiction. What the features are. How to download/install Prodiction. What the changelogs are and what will be in next update.';
$lang['INTRO_PARAGRAPH2'] = 'The second part of this document consists of Api reference and examples. This is mostly done for devs to learn the Prodiction Api.';
$lang['INTRO_VERSION'] = 'This is a Api Document for Prodiction 1.0 (nighty*) or higher.';

// 2.Bugreport

$lang['BUG_ERROR'] = 'Error';
$lang['BUG_ERROR_REPORT'] = 'You can not report bugs yet, please report the bugs on the forum.';
$lang['BUG_BUG'] = 'Bug report';
$lang['BUG_LOGIN'] = 'Bol Login name:';
$lang['BUG_EMAIL'] = 'Email:';
$lang['BUG_VERSION'] = 'Prodiction Version';
$lang['BUG_INFO'] = 'Information:';
$lang['BUG_NAME'] = 'name';
$lang['BUG_YOUR_EMAIL'] = 'your@email.com';
$lang['BUG_PUT_HERE_YOUR_BUG_REPORT'] = 'Put here your bugreport';
$lang['BUG_SUBMIT_REPORT'] = 'Submit report';

// 3.FAQ

$lang['FAQ_FAQ'] = 'FAQ';
$lang['FAQ_ERROR'] = 'Error';
$lang['FAQ_QUESTION_1'] = 'What is Prodiction?';
$lang['FAQ_ANSWER_1'] = 'Prodiciton is a library that can predict position based on spell/time information. The scripts that wish to implement this will need to require this library.';
$lang['FAQ_QUESTION_2'] = '2. Is it bug free or is it fully done?';
$lang['FAQ_ANSWER_2'] = 'The basic functions and API of Prodiction are done, but there is still room for improvement, still add more stuff now and then.';

// 4.Download

$lang['DOWNLOAD_DOWNLOAD'] = 'Download';
$lang['DOWNLOAD_CHANGELOG'] = 'Changelog';
$lang['DOWNLOAD_KNOWN_ISSUES'] = 'Known Issues:';
$lang['DOWNLOAD_VERSION'] = 'Version:';
$lang['DOWNLOAD_QUESTIONS1'] = 'If you have any question regarding this version or want to report a bug click';
$lang['DOWNLOAD_QUESTIONS2'] = 'here';
$lang['DOWNLOAD_QUESTIONS3'] = 'to send us a message.';

		// 4.1.Upcomming Updates
		$lang['DOWNLOAD_UPCOMMING_UPDATES'] = 'Upcomming Updates';
		$lang['DOWNLOAD_FEATURES'] = 'Características proxima versão';
		$lang['DOWNLOAD_TO_DO'] = 'To-do List';
		$lang['DOWNLOAD_U_LINE_1'] = 'Add Yasuo shield to Collision.';
		$lang['DOWNLOAD_U_LINE_2'] = 'Add better immune calculation, so the skillshot will shoot on the right moment/timing, it will be underway to the target and hit. The moment the target stops being immune.';
		$lang['DOWNLOAD_U_LINE_3'] = 'Finetune the algorithm for free users a bit.';
		$lang['DOWNLOAD_U_LINE_4'] = 'For users- Add custum delay menu to increase of decrease delay for their likings.';
		$lang['DOWNLOAD_U_TO_DO'] = 'No To-Do List yet';
		$lang['DOWNLOAD_U_SUGESTION'] = 'Suggestion';
		
		// 4.2.Current Version
		$lang['DOWNLOAD_CURRENT_VERSION'] = 'Current Version';
		$lang['DOWNLOAD_C_LINE_1'] = 'Fixed bugsplat on some scripts.';
		$lang['DOWNLOAD_C_LINE_2'] = 'You can disable menu and autoupdater at top of the file.';
		$lang['DOWNLOAD_C_LINE_3'] = 'And a little finetune';
		$lang['DOWNLOAD_C_DOWNLOAD'] = 'Download';
		$lang['DOWNLOAD_C_RELEASE_DATE'] = 'Release date: 09/07/2014';
		
		// 4.3.Old Versions
		$lang['DOWNLOAD_OLD_VERSIONS'] = 'Old Versions';
			
			// 4.3.1 Version 0.3
			$lang['DOWNLOAD_O_WARNING_0.3'] = 'This version is not supported anymore. Will get update soon after 1.0 release to the donators. This version is still stable.';
			
			// 4.3.2 Version 1.1
			$lang['DOWNLOAD_O_LINE1_1.1'] = 'Rewrote all the code.';
			$lang['DOWNLOAD_O_LINE1_1.1'] = 'Added new Class "Prodiction". It should make the api usage as easy as possible.';
			$lang['DOWNLOAD_O_LINE1_1.1'] = 'Fixed the bug for close range less casting, should be as fast as long range';
			$lang['DOWNLOAD_O_LINE1_1.1'] = 'This algorithm is not based anymore on OnNewWaypoint event. Instead it will always calculate the position. Should be much faster.';
			$lang['DOWNLOAD_O_LINE1_1.1'] = 'Better documentation.';
			$lang['DOWNLOAD_O_LINE1_1.1'] = 'Added Wall controll.';
			$lang['DOWNLOAD_O_LINE1_1.1'] = 'Added Collision.';
			$lang['DOWNLOAD_O_LINE1_1.1'] = 'Better Dash control';
			$lang['DOWNLOAD_O_LINE1_1.1'] = 'New Api added. see here http://www.api-docs.com/prodiction/prodiction.php';
			$lang['DOWNLOAD_RELEASE_1.1'] = 'Release date: 16/06/2014';
			
			// 4.3.3 Version 1.1a
			$lang['DOWNLOAD_O_LINE1_1.1a'] = 'Fixed prediction wall bug.';
			$lang['DOWNLOAD_O_LINE2_1.1a'] = 'Fixed the NaN error';
			$lang['DOWNLOAD_O_LINE3_1.1a'] = 'Change Algoritm 1 a bit. Will be more 1.0 version again.';
			$lang['DOWNLOAD_O_LINE4_1.1a'] = 'Auto Update was wrong, now  enabled for all new versions.';
			$lang['DOWNLOAD_RELEASE_1.1a'] = 'Release date: 16/06/2014';
			
			// 4.3.4 Version 1.2	
			$lang['DOWNLOAD_O_LINE1_1.2'] = 'Update for new patch.';
			$lang['DOWNLOAD_O_LINE2_1.2'] = 'GetPrediction bug fixed, return now always a pos.';
			$lang['DOWNLOAD_O_LINE3_1.2'] = 'Collision bug solved(I hope).';
			$lang['DOWNLOAD_O_LINE4_1.2'] = 'intern code change.';
			$lang['DOWNLOAD_O_LINE5_1.2'] = 'Dynamic packet header changer.';
			$lang['DOWNLOAD_RELEASE_1.2'] = 'Release date: 07/07/2014';
			
			// 4.3.1 Version 1.3
			$lang['DOWNLOAD_O_LINE1_1.3'] = 'Fixed bug for free users, they coudnt use it.';
			$lang['DOWNLOAD_O_LINE2_1.3'] = 'Some code finetunes.';
			$lang['DOWNLOAD_RELEASE_1.3'] = 'Release date: 08/07/2014';
			
	
//$lang[''] =
?>