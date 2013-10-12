<?php
require_once('includes/allreputation.php');
require_once('includes/alllocales.php');
$query = $_GET["profile"];
require_once('includes/allprofiles.php');
require_once('configs/tplconfig.php');
$smarty->config_load($conf_file, 'profile');

				
$profile['user'] = userinfo($query);
$profile['inventory'] = citems($query);
$profile['profession'] = userprofs($query);
$profile['achievements'] = $cDB->selectCell('SELECT COUNT(*) FROM character_achievement WHERE guid=?', $query);
$profile['guild']['guid'] = $cDB->selectCell('SELECT guildid FROM guild_member WHERE guid=?', $profile['user']['guid']);
$profile['guild']['name'] = $cDB->selectCell('SELECT name FROM guild WHERE guildid=?', $profile['guild']['guid']);
$url = "http://wowhead.com";
if($viewer == 1)
{
	$profile['is_connected'] = is_connected();
}
else
{
	$profile['is_connected'] = false;
}
$profile['qcomp'] = $cDB->selectCell('SELECT COUNT(*) FROM character_queststatus WHERE guid=? and status IN(0,1,3)', $query);
$profile['aquests'] = $DB->selectCell('SELECT COUNT(Id)
		FROM quest_template
		WHERE
			Title NOT IN ("","----","?????")
			AND Title NOT LIKE "<DEPRECATED>%"
			AND Title NOT LIKE "<NYI>%"
			AND Title NOT LIKE "<nyi>%"
			AND Title NOT LIKE "<TEST>%"
			AND Title NOT LIKE "<TXT>%"
			AND Title NOT LIKE "<UNUSED%"
			');
$profile['questp'] = round(($profile['qcomp'] / $profile['aquests']) * 100,2);
global $page;
$page = array(
	'Mapper' => false,
	'Book' => false,
	'Title' => $profile['user']['name'].' ('.$profile['user']['level'].' '.$profile['user']['tclass'].')',
	'tab' => 0,
	'type' => 0,
	'typeid' => 0,
	'username' => $_SESSION['username'],
	'path' =>  ''
);


$smarty->assign('page', $page);
$smarty->assign('mysql', $DB->getStatistics());
$smarty->assign('reputation', getreputation($page['username']));
$smarty->assign('profiler', $profiler);
$smarty->assign('profile', $profile);
global $AoWoWconf, $rDB;
$getuserguid = $rDB->selectCell('SELECT id FROM account WHERE username=?', $_SESSION['username']);
if($AoWoWconf['oprofiles'] == true)
{
	$smarty->display('profile.tpl');
}
elseif($profile['user']['account'] == $getuserguid)
{
	$smarty->display('profile.tpl');
}
elseif($AoWoWconf['oprofiles'] == false)
{
	$smarty->display('pprofile.tpl');
}

?>