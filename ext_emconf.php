<?php

########################################################################
# Extension Manager/Repository config file for ext "jpfaq".
#
# Auto generated 07-10-2011 11:14
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'jpFAQ',
	'description' => 'Frequently Asked Questions with answers optional in categories. Since irFAQ does not seem to work correctly on TYPO3 4.4+ I created a new faq plugin with Extbase and jQuery.',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '1.1.2',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Jacco van der Post',
	'author_email' => 'jacco@typo3-webdesign.nl',
	'author_company' => 'iD Webdesign',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:49:{s:12:"ext_icon.gif";s:4:"3e67";s:17:"ext_localconf.php";s:4:"8172";s:14:"ext_tables.php";s:4:"9856";s:14:"ext_tables.sql";s:4:"6d7c";s:16:"kickstarter.json";s:4:"308b";s:12:"t3jquery.txt";s:4:"2a04";s:41:"Classes/Controller/CategoryController.php";s:4:"9613";s:41:"Classes/Controller/QuestionController.php";s:4:"4f36";s:33:"Classes/Domain/Model/Category.php";s:4:"8f9f";s:33:"Classes/Domain/Model/Question.php";s:4:"d603";s:48:"Classes/Domain/Repository/CategoryRepository.php";s:4:"01f9";s:48:"Classes/Domain/Repository/QuestionRepository.php";s:4:"fb65";s:36:"Configuration/FlexForms/flexform.xml";s:4:"dfaf";s:39:"Configuration/Kickstarter/settings.yaml";s:4:"70de";s:30:"Configuration/TCA/Category.php";s:4:"b179";s:30:"Configuration/TCA/Question.php";s:4:"bee2";s:38:"Configuration/TypoScript/constants.txt";s:4:"2907";s:34:"Configuration/TypoScript/setup.txt";s:4:"0931";s:40:"Resources/Private/Language/locallang.xml";s:4:"4315";s:75:"Resources/Private/Language/locallang_csh_tx_jpfaq_domain_model_category.xml";s:4:"7f2a";s:75:"Resources/Private/Language/locallang_csh_tx_jpfaq_domain_model_question.xml";s:4:"6045";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"c7b3";s:38:"Resources/Private/Layouts/default.html";s:4:"97f4";s:42:"Resources/Private/Partials/formErrors.html";s:4:"f5bc";s:51:"Resources/Private/Partials/Category/properties.html";s:4:"2e30";s:51:"Resources/Private/Partials/Question/formFields.html";s:4:"9ed4";s:51:"Resources/Private/Partials/Question/properties.html";s:4:"dd9a";s:46:"Resources/Private/Templates/Category/List.html";s:4:"fbb2";s:46:"Resources/Private/Templates/Category/Show.html";s:4:"823c";s:46:"Resources/Private/Templates/Question/Edit.html";s:4:"9793";s:46:"Resources/Private/Templates/Question/List.html";s:4:"f6c9";s:45:"Resources/Private/Templates/Question/New.html";s:4:"12db";s:46:"Resources/Private/Templates/Question/Show.html";s:4:"ad27";s:30:"Resources/Public/Css/jpfaq.css";s:4:"5b33";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:57:"Resources/Public/Icons/tx_jpfaq_domain_model_category.gif";s:4:"9218";s:57:"Resources/Public/Icons/tx_jpfaq_domain_model_question.gif";s:4:"d61e";s:32:"Resources/Public/Img/all_min.png";s:4:"aa70";s:33:"Resources/Public/Img/all_plus.png";s:4:"1261";s:28:"Resources/Public/Img/min.png";s:4:"aad5";s:29:"Resources/Public/Img/plus.png";s:4:"8d70";s:36:"Resources/Public/Js/jquery152.min.js";s:4:"e85a";s:35:"Tests/Domain/Model/CategoryTest.php";s:4:"cb5f";s:35:"Tests/Domain/Model/QuestionTest.php";s:4:"1b97";s:14:"doc/manual.sxw";s:4:"234c";s:28:"nbproject/project.properties";s:4:"8aec";s:21:"nbproject/project.xml";s:4:"ca8c";s:36:"nbproject/private/private.properties";s:4:"bda2";s:29:"nbproject/private/private.xml";s:4:"8db5";}',
	'suggests' => array(
	),
);

?>