<?php
require_once('includes/allreputation.php');
$smarty->config_load($conf_file, 'about');

global $page;
$page = array(
	'Mapper' => false,
	'Book' => false,
	'Title' => 'About',
	'tab' => 0,
	'type' => 0,
	'typeid' => '',
	'username' => $_SESSION['username'],
	'path' => path(2,0)
);
$smarty->assign('page', $page);
// --Передаем данные шаблонизатору--
// Количество MySQL запросов
$smarty->assign('mysql', $DB->getStatistics());
$smarty->assign('reputation', getreputation($page['username']));
switch($_REQUEST['about'])
{
	case 'privacy':
		$smarty->display('about_privacy.tpl');
		break;
	case 'tos':
		$smarty->display('about_tos.tpl');
		break;
	default:
		$smarty->display('about.tpl');
		break;
}
?>