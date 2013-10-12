<?php

$profile_classes = array(
	1 => "<font color='#CD853F'>".LOCALE_WARRIOR."</font>",
	2 => "<font color='#FF6699'>".LOCALE_PALADIN."</font>",
	3 => "<font color='#33FF99'>".LOCALE_HUNTER."</font>",
	4 => "<font color='#FFFF99'>".LOCALE_ROGUE."</font>",
	5 => "<font color='white'>".LOCALE_PRIEST."</font>",
	6 => "<font color='#CD2626'>".LOCALE_DEATH_KNIGHT."</font>",
	7 => "<font color='#1F1FFF'>".LOCALE_SHAMAN."</font>",
	8 => "<font color='#66FFFF'>".LOCALE_MAGE."</font>",
	9 => "<font color='#9933CC'>".LOCALE_WARLOCK."</font>",
	11 => "<font color='#FF9933'>".LOCALE_DRUID."</font>"
);

$title_classes = array(
	1 => LOCALE_WARRIOR,
	2 => LOCALE_PALADIN,
	3 => LOCALE_HUNTER,
	4 => LOCALE_ROGUE,
	5 => LOCALE_PRIEST,
	6 => LOCALE_DEATH_KNIGHT,
	7 => LOCALE_SHAMAN,
	8 => LOCALE_MAGE,
	9 => LOCALE_WARLOCK,
	11 => LOCALE_DRUID
);

$profile_races = array(
	1 => LOCALE_HUMAN,
	2 => LOCALE_ORC,
	3 => LOCALE_DWARF,
	4 => LOCALE_NIGHT_ELF,
	5 => LOCALE_UNDEAD,
	6 => LOCALE_TAUREN,
	7 => LOCALE_GNOME,
	8 => LOCALE_TROLL,
	9 => LOCALE_GOBLIN,
	10 => LOCALE_BLOOD_ELF,
	11 => LOCALE_DRAENEI
);


$profile_professions = array(
	171 => LOCALE_ALCHEMY,
	164 => LOCALE_BLACKSMITHING,
	393 => LOCALE_SKINNING,
	333 => LOCALE_ENCHANTING,
	202 => LOCALE_ENGINEERING,
	197 => LOCALE_TAILORING,
	182 => LOCALE_HERBALISM,
	755 => LOCALE_JEWELCRAFTING,
	773 => LOCALE_INSCRIPTION,
	165 => LOCALE_LEATHERWORKING,
	186 => LOCALE_MINING
);
	
$items_slots = array(
	1	=> LOCALE_EQUIP_HEAD,
	2	=> LOCALE_EQUIP_NECK,
	3	=> LOCALE_EQUIP_SHOULDER,
	4 	=> LOCALE_EQUIP_SHIRT,
	5	=> LOCALE_EQUIP_CHEST,
	6	=> LOCALE_EQUIP_WAIST,
	7	=> LOCALE_EQUIP_LEGS,
	8	=> LOCALE_EQUIP_FEET,
	9	=> LOCALE_EQUIP_WRIST,
	10	=> LOCALE_EQUIP_HANDS,
	11	=> LOCALE_EQUIP_FINGER,
	12	=> LOCALE_EQUIP_TRINKET,
	13	=> LOCALE_EQUIP_ONEHAND,
	14	=> LOCALE_EQUIP_OFFHAND,
	15	=> LOCALE_EQUIP_RANGED,
	16	=> LOCALE_EQUIP_BACK,
	17	=> LOCALE_EQUIP_MAINHAND,
	18	=> LOCALE_EQUIP_BAG,
	19	=> LOCALE_EQUIP_TABARD,
	20	=> LOCALE_EQUIP_ROBE,
	21	=> LOCALE_EQUIP_MAINHAND,
	22	=> LOCALE_EQUIP_OFFHAND,
	24  => LOCALE_EQUIP_PROJECTILE,
	25  => LOCALE_EQUIP_THROWN
);

$slotmodificator = array(
    1  => 1.0000,
    2  => 0.5625,
    3  => 0.7500,
    5  => 1.0000,
    6  => 0.7500,
    7  => 1.0000,
    8  => 0.7500,
    9  => 0.5625,
    10  => 0.7500,
    11  => 0.5625,
    12  => 0.5625,
    13  => 0.5625,
    14  => 0.5625,
    15  => 0.5625,
    16  => 1.0000,
    17  => 1.0000,
    18  => 0.3164,
    21 => 2.0000,
    22 => 1.000,
    23 => 1.000,
    24 => 1.000,
    25 => 1.000
 );

$viewer_genders = array(
	1 => female,
	0 => male
);

$viewer_races = array(
	1 => human,
	2 => orc,
	3 => dwarf,
	4 => nightelf,
	5 => undead,
	6 => tauren,
	7 => gnome,
	8 => troll,
	9 => goblin,
	10 => bloodelf,
	11 => draenei
);

function userinfo($query)
{
	global $cDB, $profile_classes, $profile_races, $viewer_genders, $viewer_races, $title_classes;
	
	$rows = $cDB->select('
				SELECT guid, account, name, class, race, gender, level
				FROM characters
				WHERE
					guid=?
			',
			$query
	);
	foreach($rows as $row)
	{
		$profile['guid'] = $row['guid'];
		$profile['account'] = $row['account'];
		$profile['name'] = $row['name'];
		$profile['class'] = $profile_classes[$row['class']];
		$profile['tclass'] = $title_classes[$row['class']];
		$profile['race'] = $profile_races[$row['race']];
		$profile['level'] = $row['level'];
		$profile['vwgender'] = $viewer_genders[$row['gender']];
		$profile['vwrace'] = $viewer_races[$row['race']];
	}
return $profile;
}


function userprofs($query)
{
	global $cDB, $profile_professions, $query;
	
	$rows = $cDB->select('
				SELECT skill, value
				FROM character_skills
				WHERE
					guid=? AND
					skill IN (171, 164, 333, 393, 202, 197, 182, 755, 773, 165, 186)
		', $query
	);
	$j=0;
	foreach($rows as $row)
	{	
		$j++;
		$profession[$j]['id'] = $row['skill'];
		$profession[$j]['name'] = $profile_professions[$row['skill']];
		$profession[$j]['value'] = $row['value'];
		$profession[$j]['maxskill'] = "450";
		$profession[$j]['percentage'] = round($profession[$j]['value'] / $profession[$j]['maxskill'] * 100,0);
	}
	return $profession;
}

function citems($query)
{

	global $cDB, $rDB, $items_slots, $gsmodificator, $slotmodificator, $AoWoWconf, $query;

	$rows = $cDB->select('
			SELECT DISTINCT ci.guid AS guid, ci.bag AS bag, ci.slot, waw.InventoryType AS slot, 
			ci.item AS item, ii.itemEntry AS entry, ii.owner_guid AS owner, 
			wit.name AS name, wit.ItemLevel AS ilvl, wit.Quality AS quality, 
			wit.displayid AS displayid, wai.iconname AS icon, ct.entry as creature, ct.name as dropby
			FROM character_inventory ci
			LEFT JOIN item_instance ii ON ci.guid=ii.owner_guid
			JOIN '.$AoWoWconf['mangos']['db'].'.aowow_items waw ON ii.itemEntry=waw.entry
			JOIN '.$AoWoWconf['mangos']['db'].'.item_template wit ON ii.itemEntry=wit.entry
			JOIN '.$AoWoWconf['mangos']['db'].'.aowow_icons wai ON wit.displayid=wai.id
			JOIN '.$AoWoWconf['mangos']['db'].'.creature_loot_template clt ON ii.itemEntry=clt.item
			JOIN '.$AoWoWconf['mangos']['db'].'.creature_template ct ON clt.entry=ct.lootid
			WHERE
				ii.owner_guid = ?
				AND
				waw.InventoryType > 0
				AND bag = 0
			GROUP BY wit.name
			ORDER BY CASE waw.InventoryType
				WHEN 1 THEN 1
				WHEN 2 THEN 2
				WHEN 3 THEN 3
				WHEN 16 THEN 4
				WHEN 5 THEN 5
				WHEN 4 THEN 6
				WHEN 20 THEN 7
				WHEN 19 THEN 8
				WHEN 9 THEN 9
				WHEN 10 THEN 10
				WHEN 6 THEN 11
				WHEN 7 THEN 12
				WHEN 8 THEN 13
				WHEN 11 THEN 14
				WHEN 12 THEN 15
				WHEN 13 THEN 16
				WHEN 14 THEN 17
				WHEN 22 THEN 18
				WHEN 17 THEN 19
				WHEN 21 THEN 20
				WHEN 15 THEN 21
				WHEN 24 THEN 22
				WHEN 25 THEN 23
			END',
			$query
	);
	$j=0;
	foreach($rows AS $row)
	{
		$j++;
		$inventory[$j]['guid'] = $row['owner'];
		$inventory[$j]['slot'] = $row['slot'];
		$inventory[$j]['slotname'] = $items_slots[$row['slot']];
		$inventory[$j]['item'] = $row['item'];
		$inventory[$j]['entry'] = $row['entry'];
		$inventory[$j]['ilvl'] = $row['ilvl'];
		$inventory[$j]['name'] = $row['name'];
		$inventory[$j]['quality'] = $row['quality'];
		$inventory[$j]['icon'] = "<img src='/images/icons/tiny/".strtolower($row['icon']).".gif'>";
		$inventory[$j]['displayid'] = $row['displayid'];
		$slot = $row['slot'];
		$inventory[$j][$slot]['disp3d'] = $row['displayid'];
		if($row['dropby'] == NULL)
			{ 
				$inventory[$j]['dropby'] = "This item is from quest or it may be bought from vendor";
			}
		else
			{
				$inventory[$j]['dropby'] = str_replace (array("(1)", "(2)", "(3)"), LOCALE_HEROIC, $row['dropby']);
			}
		$inventory[$j]['creature'] = $row['creature'];


		$scale = 1.8618;

        if($inventory[$j]['ilvl'] > 120)
        {
        	$inventory[$j]['gearscore'] = floor($inventory[$j]['ilvl'] * $slotmodificator[$inventory[$j]['slot']] * $scale * 1.356);
        }
        elseif($inventory[$j]['ilvl'] <= 120)
        {
        	$inventory[$j]['gearscore'] = floor($inventory[$j]['ilvl'] * $slotmodificator[$inventory[$j]['slot']] * $scale);
        }
	}
	return $inventory;
}

?>