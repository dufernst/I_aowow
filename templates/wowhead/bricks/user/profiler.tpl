</div>
<div id="tabs_contribute-generic" style="width: 50%"></div>
	<div class="tabbed-contents" style="clear: none">
		<div id="tab-gear-summary" style="display: none">
			{if isset($profile.inventory)}
			<table width="100%" class="grid_profiler">
			<th align="left">Name</th>
			<th>Item Level</th>
			<th>Slot</th>
			<th>Source</th>
			<th>Gear Score</th>
			{foreach from=$profile.inventory item="inv"}
			<tr><td><a href="/?item={$inv.entry}" rel="item={$inv.entry}" style="text-decoration: none;">
				{if $inv.quality == 0}
				<font color="grey">{$inv.icon}  {$inv.name}</font>
				{elseif $inv.quality == 1}
				<font color="white">{$inv.icon}  {$inv.name}</font>
				{elseif $inv.quality == 2}
				<font color="green">{$inv.icon} {$inv.name}</font>
				{elseif $inv.quality == 3}
				<font color="blue">{$inv.icon}  {$inv.name}</font>
				{elseif $inv.quality == 4}
				<font color="purple">{$inv.icon}  {$inv.name}</font>
				{elseif $inv.quality == 5}
				<font color="orange">{$inv.icon}  {$inv.name}</font>
				{elseif $inv.quality == 6}
				<font color="red">{$inv.icon}  {$inv.name}</font>
				{elseif $inv.quality == 7}
				<font color="gold">{$inv.icon}  {$inv.name}</font>
				{/if} </a></td> <td align="center"> {$inv.ilvl} </td> <td align="center"> {$inv.slotname} </td><td align="center"> <a href="/?npc={$inv.creature}">{$inv.dropby}</a> </td> <td align="center"> {$inv.gearscore} </td></tr>
			{/foreach}
			</table>
			{else}
			<table width="100%" class="grid_profiler">
			<th align="left">Name</th>
			<th>Item Level</th>
			<th>Slot</th>
			<th>Gear Score</th>
			<tr><td colspan="4"><center><b>Character has no gear equiped</center></b></td></tr>
			</table>
			{/if}
</div>
<div id="tab-quests" style="display: none">
<b>Overall Progress</b>
<div id="progressbar"><div style="width: {if $profile.questp <= 10}10{elseif $profile.questp >= 10}{$profile.questp}{/if}%">{$profile.qcomp} / {$profile.aquests}</div></div>
</div>

</div>
<script type="text/javascript">
	var tabsContribute = new Tabs({ldelim}parent: ge('tabs_contribute-generic'){rdelim});
	tabsContribute.add(LANG.tab_gear, {ldelim}id: 'gear-summary'{rdelim});
	tabsContribute.add(LANG.tab_quests, {ldelim}id: 'quests'{rdelim});
	tabsContribute.flush();
</script>

<div class="clear"></div>