﻿<?php
/* 
------------------
Language: English
------------------
*/

$lang = array();

$lang['PAGE_TITLE'] = '预测';

// Menu

$lang['MENU_HOME'] = '回家';
$lang['MENU_INTRODUCTION'] = '介绍';
$lang['MENU_BUG_REPORT'] = '漏洞反馈';
$lang['MENU_FAQ'] = '常见问题';
$lang['MENU_DOWNLOAD_INSTALL'] = '下载&安装';
$lang['MENU_STABLE_VERSION'] = '稳定版本';
$lang['MENU_NIGHTY_VERSION'] = '黑暗版';
$lang['MENU_API_REFERENCE'] = 'API参考';
$lang['MENU_INFO'] = '信息';
$lang['MENU_SPELL'] = '法术';
$lang['MENU_TUTORIAL'] = '教程';
$lang['MENU_GETTING_STARTED'] = '开始';
$lang['MENU_VIDEOS'] = '视频';

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

$lang['DOWNLOAD_DOWNLOAD'] = '下载';
$lang['DOWNLOAD_CHANGELOG'] = 'Changelog';
$lang['DOWNLOAD_KNOWN_ISSUES'] = 'Known Issues:';
$lang['DOWNLOAD_VERSION'] = '版本:';
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
			
// 5.Download Nighty

$lang['DOWNLOADN_DOWNLOAD'] = '下载';
$lang['DOWNLOADN_CHANGELOG'] = 'Changelog';
$lang['DOWNLOADN_KNOWN_ISSUES'] = 'Known Issues:';
$lang['DOWNLOADN_VERSION'] = '版本:';
$lang['DOWNLOADN_REPORT_BUG'] = 'Report bug';
$lang['DOWNLOADN_QUESTIONS1'] = 'If you have any question regarding this version or want to report a bug click';
$lang['DOWNLOADN_QUESTIONS2'] = 'here';
$lang['DOWNLOADN_QUESTIONS3'] = 'to send us a message.';

		// 5.1.Upcomming Updates
		$lang['DOWNLOADN_UPCOMMING_UPDATES'] = 'Upcomming Updates';
		$lang['DOWNLOADN_FEATURES'] = 'Características proxima versão';
		$lang['DOWNLOADN_TO_DO'] = 'To-do List';
		$lang['DOWNLOADN_U_LINE_1'] = 'Add Yasuo shield to Collision.';
		$lang['DOWNLOADN_U_LINE_2'] = 'Add better immune calculation, so the skillshot will shoot on the right moment/timing, it will be underway to the target and hit. The moment the target stops being immune.';
		$lang['DOWNLOADN_U_LINE_3'] = 'Finetune the algorithm for free users a bit.';
		$lang['DOWNLOADN_U_LINE_4'] = 'For users- Add custum delay menu to increase of decrease delay for their likings.';
		$lang['DOWNLOADN_U_TO_DO'] = 'No To-Do List yet';
		$lang['DOWNLOADN_U_SUGESTION'] = 'Suggestion';
		
		// 5.2.Current Version
		$lang['DOWNLOADN_CURRENT_VERSION'] = 'Current Version';
		$lang['DOWNLOADN_C_LINE_1'] = 'Fixed bugsplat on some scripts.';
		$lang['DOWNLOADN_C_LINE_2'] = 'You can disable menu and autoupdater at top of the file.';
		$lang['DOWNLOADN_C_LINE_3'] = 'And a little finetune';
		$lang['DOWNLOADN_C_DOWNLOAD'] = 'Download';
		$lang['DOWNLOADN_C_RELEASE_DATE'] = 'Release date: 09/07/2014';
		
		// 5.3.Old Versions
		$lang['DOWNLOADN_OLD_VERSIONS'] = 'Old Versions';
		$lang['DOWNLOADN_O_NO_ISSUES'] = 'No Known Issues yet.';
			
			// 5.3.1 Version 1.0
			$lang['DOWNLOADN_O_LINE1_1.0'] = 'Rewrote all the code.';
			$lang['DOWNLOADN_O_LINE2_1.0'] = 'Added 2 algorithms.';
			$lang['DOWNLOADN_O_LINE3_1.0'] = 'Added new Class "Prodiction". It should make the api usage as easy as possible.';
			$lang['DOWNLOADN_O_LINE4_1.0'] = 'Fixed the bug for close range less casting, should be as fast as long range.';
			$lang['DOWNLOADN_O_LINE5_1.0'] = 'This algorithm is not based anymore on OnNewWaypoint event. Instead it will always calculate the position. Should be much faster.';
			$lang['DOWNLOADN_O_LINE6_1.0'] = 'Better documentation (this website).';
			$lang['DOWNLOADN_O_LINE7_1.0'] = 'Added Wall controll.';
			$lang['DOWNLOADN_O_LINE8_1.0'] = 'Added Collision.';
			$lang['DOWNLOADN_RELEASE_1.0'] = 'Release date: 01/06/2014';
				
			// 5.3.2 Version 1.1
			$lang['DOWNLOADN_O_LINE1_1.1'] = 'Same release as for free versions. See Stable versions for more info.';
			$lang['DOWNLOADN_O_LINE2_1.1'] = 'Extra Donators Api.';
			$lang['DOWNLOADN_O_LINE3_1.1'] = '3 Algoritms.';
			$lang['DOWNLOADN_O_LINE4_1.1'] = 'Finetune mode, to improve overtime.';
			$lang['DOWNLOADN_RELEASE_1.1'] = 'Release date: 16/06/2014';
			
			// 5.3.3 Version 1.1a
			$lang['DOWNLOADN_O_LINE1_1.1a'] = 'Bug fixed, Updated free one as well.';
			$lang['DOWNLOADN_O_LINE2_1.1a'] = 'Fixed prediction wall bug.';
			$lang['DOWNLOADN_O_LINE3_1.1a'] = 'Fixed the NaN error';
			$lang['DOWNLOADN_RELEASE_1.1a'] = 'Release date: 16/06/2014';
			
			// 5.3.4 Version 1.2	
			$lang['DOWNLOADN_O_LINE1_1.2'] = 'Update for new patch.';
			$lang['DOWNLOADN_O_LINE2_1.2'] = 'GetPrediction bug fixed, return now always a pos.';
			$lang['DOWNLOADN_O_LINE3_1.2'] = 'Collision bug solved(I hope).';
			$lang['DOWNLOADN_O_LINE4_1.2'] = 'Intern code change.';
			$lang['DOWNLOADN_O_LINE5_1.2'] = 'Dynamic packet header changer.';
			$lang['DOWNLOADN_RELEASE_1.2'] = 'Release date: 07/07/2014';
			
			// 5.3.1 Version 1.3
			$lang['DOWNLOADN_O_LINE1_1.3'] = 'Fixed bug for free users, they could not use it.';
			$lang['DOWNLOADN_O_LINE2_1.3'] = 'Some code finetunes.';
			$lang['DOWNLOADN_RELEASE_1.3'] = 'Release date: 08/07/2014';
			
	
//$lang[''] =
?>