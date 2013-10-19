<?php
global $AoWoWconf;
date_default_timezone_set('Europe/London');

// -- MaNGOS Database --
$AoWoWconf['mangos']['host']	 = '127.0.0.1';
$AoWoWconf['mangos']['user']	 = 'root';
$AoWoWconf['mangos']['pass']	 = 'ascent';
$AoWoWconf['mangos']['db']		 = 'aowow_db';
$AoWoWconf['mangos']['aowow']	 = 'aowow_'; // AoWoW table prefix
$AoWoWconf['mangos']['aowow_db'] = 'aowow_db'; // AoWoW DB
// -- Realmd Database --
$AoWoWconf['realmd']['host']	= '127.0.0.1';
$AoWoWconf['realmd']['user']	= 'root';
$AoWoWconf['realmd']['pass']	= 'ascent';
$AoWoWconf['realmd']['db']		= 'realmd';
// -- Characters Database -- currently unused
$AoWoWconf['characters']['host']	= '127.0.0.1';
$AoWoWconf['characters']['user']	= 'root';
$AoWoWconf['characters']['pass']	= 'ascent';
$AoWoWconf['characters']['db']		= 'characters';
// -- Site Configuration --
// Title of the website
$AoWoWconf['aowow']['name'] = 'Data Base';
// Skin, only 'wowhead' is supported currently
$AoWoWconf['aowow']['template'] = 'wowhead';
// Time to keep cache in seconds (Default: 1 week)
$AoWoWconf['aowow']['cache_time'] = (60*60*24*7);
// Default locale
$AoWoWconf['locale'] = 0;
// Allow account creating
$AoWoWconf['register'] = false;
// Used with register, account expansion
$AoWoWconf['expansion'] = 2;
// Limit of some SQL queries
$AoWoWconf['limit'] = 300;
// Disable cache, show smarty console panel
$AoWoWconf['debug'] = true;
// Sharing option (true | false)
$AoWoWconf['share'] = true;
// Updater option (true | false)
$AoWoWconf['updater'] = true;
// Consecutive visits counter (true | false) WARNING!!! HEAVY SCRIPT
$AoWoWconf['consecutive'] = true;
// Show characters to other users (It's like you can view only your characters)
$AoWoWconf['oprofiles'] = false;
// Map object grouping factor. Meters = 10^param.
// 0 to disable.
// 1 is default and highly recommended.
// Do not use float values or values > 3.
$AoWoWconf['map_grouping'] = 1;
?>