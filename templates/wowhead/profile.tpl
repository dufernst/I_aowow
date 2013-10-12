{include file='header.tpl'}
		<div id="main">
			<div id="main-precontents"></div>
			<div id="main-contents" class="main-contents">

			<table class="infobox">
				<tr><th>{#Quick_Facts#}</th></tr>
				<tr><td><div class="infobox-spacer"></div>
					<ul>
						<li><div>Item Level: 
							{foreach from=$profile.inventory item="il"}
								{assign var="sumilvl" value="`$sumilvl+$il.ilvl`"}
							{/foreach}<span class="tip" id="infobox-details"
							onmouseover="Tooltip.showAtCursor(event, '{#Ilvl_desc#}', 0, 0, 0)"
							onmousemove="Tooltip.cursorUpdate(event)"
							onmouseout="Tooltip.hide()">{math equation="$sumilvl / x | ceil" x=$profile.inventory|@count}</span>
							{assign var="sumilvl" value=0}</div></li>
						<li><div>Gear Score:
						{foreach from=$profile.inventory item="gs"}
								{assign var="sumgs" value="`$sumgs+$gs.gearscore`"}
							{/foreach}<span class="tip" id="infobox-details"
							onmouseover="Tooltip.showAtCursor(event, '{#Gs_desc#}', 0, 0, 0)"
							onmousemove="Tooltip.cursorUpdate(event)"
							onmouseout="Tooltip.hide()">{$sumgs/1.7|ceil}</span>
							{assign var="sumgs" value=0}
						</div></li> 
						<li><div>Achievements: {$profile.achievements}</div></li>
						{if $profile.profession == NULL}
						<br />
						<hr>
						{#No_prof#}
						{else}
						<center><h3>{#Professions#}</h3></center>
						{if isset($profile.profession.1)}<center>{$profile.profession.1.name}</center>
						<div id="progressbar"><div style="text-align: center; width: {$profile.profession.1.percentage}%">{$profile.profession.1.value}</div></div>{/if}
						
						{if isset($profile.profession.2)}<center>{$profile.profession.2.name}</center>
						<div id="progressbar"><div style="width: {$profile.profession.2.percentage}%">{$profile.profession.2.value}</div></div>{/if}
						
						{if isset($profile.profession.3)}<center>{$profile.profession.3.name}</center>
						<div id="progressbar"><div style="width: {$profile.profession.3.percentage}%">{$profile.profession.3.value}</div></div>{/if}
						
						{if isset($profile.profession.4)}<center>{$profile.profession.4.name}</center>
						<div id="progressbar"><div style="width: {$profile.profession.4.percentage}%">{$profile.profession.4.value}</div></div>{/if}
						
						{if isset($profile.profession.5)}<center>{$profile.profession.5.name}</center>
						<div id="progressbar"><div style="width: {$profile.profession.5.percentage}%">{$profile.profession.5.value}</div></div>{/if}
						{/if}
					</ul>
				</td></tr>
			</table>
				<div class="text">
			<b><font size="4px">{$profile.user.name}</font></b><br />
			<font color="grey">{if $profile.guild.name == NULL} <span class="tip" id="infobox-details"
							onmouseover="Tooltip.showAtCursor(event, '{#Nig_desc#}', 0, 0, 0)"
							onmousemove="Tooltip.cursorUpdate(event)"
							onmouseout="Tooltip.hide()">{#Not_in_guild#}</span> {else} < {$profile.guild.name} > {/if}</font>
			<br />
			Level {$profile.user.level} {$profile.user.race} {$profile.user.class}
			<br />
			<br />
			{if $profile.is_connected == true}
			<object type="application/x-shockwave-flash" data="http://wow.zamimg.com/modelviewer/ZAMviewerfp11.swf" width="450" height="450" id="dsjkgbdsg2346" style="visibility: visible;">

   			<param name="quality" value="high">

		    <param name="allowscriptaccess" value="always">

		    <param name="allowfullscreen" value="true">

		    <param name="menu" value="false">

		    <param name="bgcolor" value="#8b8682">

		    <param name="wmode" value="gpu">

		    <param name="flashvars" value="model={$profile.user.vwrace}{$profile.user.vwgender}&amp;modelType=16&amp;contentPath=http://wow.zamimg.com/modelviewer/&amp;equipList={foreach from=$profile.inventory item="3d"}{if $3d.slot ne '18' and $3d.slot ne '24' and $3d.slot ne '11' and $3d.slot ne '12' and $3d.slot ne '25'}{$3d.slot},{$3d.displayid},{/if}{/foreach}30,0">

			</object>
			{else}
			<center><h3>Wowhead Model Viewer is not availible at the moment<br />Come back later if you want to see 3D model of your character</h3></center>
			{/if}
			<br /><br /><br />
{include file="bricks/user/profiler.tpl"}
				<div class="clear"></div>
			</div>
		</div>
</div>
{include file='footer.tpl'}