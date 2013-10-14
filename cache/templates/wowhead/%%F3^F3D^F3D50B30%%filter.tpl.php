<?php /* Smarty version 2.6.26, created on 2013-10-14 04:25:47
         compiled from filter.tpl */ ?>
<div id="fi">
    <div class="block-bg">
        <div id="ad-content">
        </div>
    </div>
        <script type="text/javascript">//<![CDATA[ 
    <?php echo '
    Menu.modifyUrl(
        Menu.findItem(mn_database, [0]), { filter: \'+=si=-1\' }, { onAppendCollision: fi_mergeFilterParams, onAppendEmpty: fi_setFilterParams, menuUrl: Menu.getItemUrl(Menu.findItem(mn_database, [0])) });
'; ?>

//]]></script>



<form action="" method="get" name="fi" onsubmit="return fi_submit(this)" onreset="return fi_reset(this)">
<input type="hidden" name="items" value="filter" />
<div class="rightpanel">
<div style="float: left"><?php echo $this->_config[0]['vars']['Quality']; ?>
: </div><small><a href="javascript:;" onclick="document.forms['fi'].elements['qu[]'].selectedIndex = -1; return false" onmousedown="return false"><?php echo $this->_config[0]['vars']['Clear_filter']; ?>
</a></small>
<div class="clear"></div>
<select name="qu[]" size="8" multiple="multiple" class="rightselect" style="background-color: #181818">
<option value="0" class="q0"><?php echo $this->_config[0]['vars']['Poor']; ?>
</option>
<option value="1" class="q1"><?php echo $this->_config[0]['vars']['Common']; ?>
</option>
<option value="2" class="q2"><?php echo $this->_config[0]['vars']['Uncommon']; ?>
</option>
<option value="3" class="q3"><?php echo $this->_config[0]['vars']['Rare']; ?>
</option>
<option value="4" class="q4"><?php echo $this->_config[0]['vars']['Epic']; ?>
</option>
<option value="5" class="q5"><?php echo $this->_config[0]['vars']['Legendary']; ?>
</option>
<option value="6" class="q6"><?php echo $this->_config[0]['vars']['Artifact']; ?>
</option>
<option value="7" class="q7"><?php echo $this->_config[0]['vars']['Heirloom']; ?>
</option>
</select>
</div>

<div class="rightpanel2">
<div style="float: left"><?php echo $this->_config[0]['vars']['Slot']; ?>
: </div><small><a href="javascript:;" onclick="document.forms['fi'].elements['sl[]'].selectedIndex = -1; return false" onmousedown="return false"><?php echo $this->_config[0]['vars']['Clear_filter']; ?>
</a></small>
<div class="clear"></div>
<select name="sl[]" size="7" multiple="multiple" class="rightselect">
<option value="16"><?php echo $this->_config[0]['vars']['Back']; ?>
</option>
<option value="18"><?php echo $this->_config[0]['vars']['Bag']; ?>
</option>
<option value="5"><?php echo $this->_config[0]['vars']['Chest']; ?>
</option>
<option value="8"><?php echo $this->_config[0]['vars']['Feet']; ?>
</option>
<option value="11"><?php echo $this->_config[0]['vars']['Finger']; ?>
</option>
<option value="10"><?php echo $this->_config[0]['vars']['Hands']; ?>
</option>
<option value="1"><?php echo $this->_config[0]['vars']['Head']; ?>
</option>
<option value="23"><?php echo $this->_config[0]['vars']['Held_in_off_hand']; ?>
</option>
<option value="7"><?php echo $this->_config[0]['vars']['Legs']; ?>
</option>
<option value="21"><?php echo $this->_config[0]['vars']['Main_hand']; ?>
</option>
<option value="2"><?php echo $this->_config[0]['vars']['Neck']; ?>
</option>
<option value="22"><?php echo $this->_config[0]['vars']['Off_hand']; ?>
</option>
<option value="13"><?php echo $this->_config[0]['vars']['One_hand']; ?>
</option>
<option value="24"><?php echo $this->_config[0]['vars']['Projectile']; ?>
</option>
<option value="15"><?php echo $this->_config[0]['vars']['Ranged']; ?>
</option>
<option value="28"><?php echo $this->_config[0]['vars']['Relic']; ?>
</option>
<option value="14"><?php echo $this->_config[0]['vars']['Shield']; ?>
</option>
<option value="4"><?php echo $this->_config[0]['vars']['Shirt']; ?>
</option>
<option value="3"><?php echo $this->_config[0]['vars']['Shoulder']; ?>
</option>
<option value="19"><?php echo $this->_config[0]['vars']['Tabard']; ?>
</option>
<option value="25"><?php echo $this->_config[0]['vars']['Thrown']; ?>
</option>
<option value="12"><?php echo $this->_config[0]['vars']['Trinket']; ?>
</option>
<option value="17"><?php echo $this->_config[0]['vars']['Two_hand']; ?>
</option>
<option value="6"><?php echo $this->_config[0]['vars']['Waist']; ?>
</option>
<option value="9"><?php echo $this->_config[0]['vars']['Wrist']; ?>
</option>
</select>
</div>

<table>
<tr>
<td><?php echo $this->_config[0]['vars']['Item_name']; ?>
: </td>
<td colspan="2">&nbsp;<input type="text" name="na" size="30" /></td>
<td></td>
</tr><tr>
<td class="padded"><?php echo $this->_config[0]['vars']['Item_level']; ?>
: </td><td class="padded">&nbsp;<input type="text" name="minle" maxlength="3" class="smalltextbox2" /> - <input type="text" name="maxle" maxlength="3" class="smalltextbox2" /></td>
<td class="padded"><table><tr><td><?php echo $this->_config[0]['vars']['Item_required_level']; ?>
: </td><td>&nbsp;<input type="text" name="minrl" maxlength="2" class="smalltextbox" /> - <input type="text" name="maxrl" maxlength="2" class="smalltextbox" /></td></tr></table></td><td></td>
</tr><tr><td class="padded"><?php echo $this->_config[0]['vars']['Usable_by']; ?>
: </td><td class="padded">&nbsp;<select name="si" style="margin-right: 0.5em">
<option></option>
<option value="1"><?php echo $this->_config[0]['vars']['Alliance']; ?>
</option>
<option value="-1"><?php echo $this->_config[0]['vars']['Alliance_only']; ?>
</option>
<option value="2"><?php echo $this->_config[0]['vars']['Horde']; ?>
</option>
<option value="-2"><?php echo $this->_config[0]['vars']['Horde_only']; ?>
</option>
<option value="3"><?php echo $this->_config[0]['vars']['Both']; ?>
</option>
</select>
</td>
<td class="padded"><select name="ub">
<option></option>
<option value="6"><?php echo $this->_config[0]['vars']['Death_Knight']; ?>
</option>
<option value="11"><?php echo $this->_config[0]['vars']['Druid']; ?>
</option>
<option value="3"><?php echo $this->_config[0]['vars']['Hunter']; ?>
</option>
<option value="8"><?php echo $this->_config[0]['vars']['Mage']; ?>
</option>
<option value="2"><?php echo $this->_config[0]['vars']['Paladin']; ?>
</option>
<option value="5"><?php echo $this->_config[0]['vars']['Priest']; ?>
</option>
<option value="4"><?php echo $this->_config[0]['vars']['Rogue']; ?>
</option>
<option value="7"><?php echo $this->_config[0]['vars']['Shaman']; ?>
</option>
<option value="9"><?php echo $this->_config[0]['vars']['Warlock']; ?>
</option>
<option value="1"><?php echo $this->_config[0]['vars']['Warrior']; ?>
</option>
</select></td></tr><tr>
</table>



</div>



<div class="clear"></div><div class="padded"><?php echo $this->_config[0]['vars']['Item_group_by']; ?>
:
    <input type="radio" name="gb" value="" id="gb-none" checked="checked" /><label for="gb-none"><?php echo $this->_config[0]['vars']['No_groupping']; ?>
</label>
    <input type="radio" name="gb" value="1" id="gb-slot" /><label for="gb-slot"><?php echo $this->_config[0]['vars']['Slot']; ?>
</label>
    <input type="radio" name="gb" value="2" id="gb-level" /><label for="gb-level"><?php echo $this->_config[0]['vars']['Level']; ?>
</label>
    <input type="radio" name="gb" value="3" id="gb-source" /><label for="gb-source"><?php echo $this->_config[0]['vars']['Source']; ?>
</label>
</div><div class="clear"></div>
<div class="cata"><input type="checkbox" name="ec" value="1" ><?php echo $this->_config[0]['vars']['Exclude_cataclysm']; ?>
</div><div class="padded"></div>
<div class="mop"><input type="checkbox" name="em" value="1" ><?php echo $this->_config[0]['vars']['Exclude_pandaria']; ?>
</div><div class="padded"></div><br>
<input type="submit" value="<?php echo $this->_config[0]['vars']['Apply_filter']; ?>
" />

<input type="hidden" name="upg" />

<div class="pad"></div>

</form>
</div>