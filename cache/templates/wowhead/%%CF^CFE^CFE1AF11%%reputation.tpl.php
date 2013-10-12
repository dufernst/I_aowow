<?php /* Smarty version 2.6.26, created on 2013-10-12 01:44:01
         compiled from bricks/user/reputation.tpl */ ?>
<?php if ($this->_tpl_vars['user']): ?>
<div id="tabs_contribute-generic" style="width: 50%"></div>
<div class="text" style="margin-right: 310px">
	<div class="tabbed-contents" style="clear: none">
		<div id="tab-reputation-history" style="display: none">
		<table width="100%">
		<th width="60%"><?php echo $this->_config[0]['vars']['Reputation_action']; ?>
</th>
		<th width="15%" align="left"><?php echo $this->_config[0]['vars']['Reputation_amount']; ?>
</th>
		<th width="25%" align="left"><?php echo $this->_config[0]['vars']['Reputation_date']; ?>
</th>
		<?php $_from = $this->_tpl_vars['user']['reputation']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
		<tr><td width="60%">
		<?php if ($this->_tpl_vars['row']['reason'] == 1): ?>
		Registering an account
		<?php elseif ($this->_tpl_vars['row']['reason'] == 2): ?>
		Daily visit
		<?php elseif ($this->_tpl_vars['row']['reason'] == 3): ?>
		Posting a comment
		<?php elseif ($this->_tpl_vars['row']['reason'] == 4): ?>
		Your comment was voted up (each upvote)
		<?php elseif ($this->_tpl_vars['row']['reason'] == 5): ?>
		Submitting a screenshot
		<?php elseif ($this->_tpl_vars['row']['reason'] == 6): ?>
		Submitting a guide (approved)
		<?php elseif ($this->_tpl_vars['row']['reason'] == 7): ?>
		Earning a <font color="brown">Copper</font> <a href="/?website-achievements">website achievement</a>
		<?php elseif ($this->_tpl_vars['row']['reason'] == 8): ?>
		Earning a Silver <a href="/?website-achievements">website achievement</a>
		<?php elseif ($this->_tpl_vars['row']['reason'] == 9): ?>
		Earning a <font color="gold">Gold</font> <a href="/?website-achievements">website achievement</a>
		<?php endif; ?>
		</td><td width="15%"><font color="green">+<?php echo $this->_tpl_vars['row']['reputation']; ?>
</font></td><td width="25%"> <?php echo $this->_tpl_vars['row']['date']; ?>
</td></tr>
		<?php endforeach; endif; unset($_from); ?>
		</table>
		</div>
		

<div id="tab-characters" style="display: none">

<table width="100%">
<th><?php echo $this->_config[0]['vars']['Characters_name']; ?>
</th>
<th><?php echo $this->_config[0]['vars']['Characters_faction']; ?>
</th>
<th><?php echo $this->_config[0]['vars']['Characters_race']; ?>
</th>
<th><?php echo $this->_config[0]['vars']['Characters_class']; ?>
</th>
<th><?php echo $this->_config[0]['vars']['Characters_level']; ?>
</th>
<th><?php echo $this->_config[0]['vars']['Characters_ping']; ?>
</th>
<th><?php echo $this->_config[0]['vars']['Characters_status']; ?>
</th>
<?php $_from = $this->_tpl_vars['user']['characters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['char']):
?>
<tr><td align="center"><?php echo $this->_tpl_vars['char']['name']; ?>
</td><td align="center">
<?php if ($this->_tpl_vars['char']['race'] == 1 || 3 || 4 || 7 || 11): ?>
<?php echo $this->_config[0]['vars']['Alliance']; ?>

<?php else: ?>
<?php echo $this->_config[0]['vars']['Horde']; ?>

<?php endif; ?>
</td><td align="center">
<?php if ($this->_tpl_vars['char']['race'] == 1): ?>
<?php echo $this->_config[0]['vars']['Human']; ?>

<?php elseif ($this->_tpl_vars['char']['race'] == 2): ?>
<?php echo $this->_config[0]['vars']['Orc']; ?>

<?php elseif ($this->_tpl_vars['char']['race'] == 3): ?>
<?php echo $this->_config[0]['vars']['Dwarf']; ?>

<?php elseif ($this->_tpl_vars['char']['race'] == 4): ?>
<?php echo $this->_config[0]['vars']['Night_elf']; ?>

<?php elseif ($this->_tpl_vars['char']['race'] == 5): ?>
<?php echo $this->_config[0]['vars']['Undead']; ?>

<?php elseif ($this->_tpl_vars['char']['race'] == 6): ?>
<?php echo $this->_config[0]['vars']['Tauren']; ?>

<?php elseif ($this->_tpl_vars['char']['race'] == 7): ?>
<?php echo $this->_config[0]['vars']['Gnome']; ?>

<?php elseif ($this->_tpl_vars['char']['race'] == 8): ?>
<?php echo $this->_config[0]['vars']['Troll']; ?>

<?php elseif ($this->_tpl_vars['char']['race'] == 9): ?>
<?php echo $this->_config[0]['vars']['Goblin']; ?>

<?php elseif ($this->_tpl_vars['char']['race'] == 10): ?>
<?php echo $this->_config[0]['vars']['Blood_elf']; ?>

<?php elseif ($this->_tpl_vars['char']['race'] == 11): ?>
<?php echo $this->_config[0]['vars']['Draenei']; ?>

<?php endif; ?>
</td><td align="center">
<?php if ($this->_tpl_vars['char']['class'] == 1): ?>
<?php echo $this->_config[0]['vars']['Warrior']; ?>

<?php elseif ($this->_tpl_vars['char']['class'] == 2): ?>
<?php echo $this->_config[0]['vars']['Paladin']; ?>

<?php elseif ($this->_tpl_vars['char']['class'] == 3): ?>
<?php echo $this->_config[0]['vars']['Hunter']; ?>

<?php elseif ($this->_tpl_vars['char']['class'] == 4): ?>
<?php echo $this->_config[0]['vars']['Rogue']; ?>

<?php elseif ($this->_tpl_vars['char']['class'] == 5): ?>
<?php echo $this->_config[0]['vars']['Priest']; ?>

<?php elseif ($this->_tpl_vars['char']['class'] == 6): ?>
<?php echo $this->_config[0]['vars']['Death_Knight']; ?>

<?php elseif ($this->_tpl_vars['char']['class'] == 7): ?>
<?php echo $this->_config[0]['vars']['Shaman']; ?>

<?php elseif ($this->_tpl_vars['char']['class'] == 8): ?>
<?php echo $this->_config[0]['vars']['Mage']; ?>

<?php elseif ($this->_tpl_vars['char']['class'] == 9): ?>
<?php echo $this->_config[0]['vars']['Warlock']; ?>

<?php elseif ($this->_tpl_vars['char']['class'] == 11): ?>
<?php echo $this->_config[0]['vars']['Druid']; ?>

<?php endif; ?>
</td><td align="center"><?php echo $this->_tpl_vars['char']['level']; ?>
</td><td align="center"><?php echo $this->_tpl_vars['char']['latency']; ?>
 ms</td><td align="center"><?php if ($this->_tpl_vars['char']['online'] == 0): ?><font color="red">Offline</font><?php else: ?><font color="green">Online</font><?php endif; ?></td></tr>
<?php endforeach; endif; unset($_from); ?>
</table>
		</div>



	</div>
</div>
<script type="text/javascript">
	var tabsContribute = new Tabs({parent: ge('tabs_contribute-generic')});
	tabsContribute.add(LANG.tab_reputation, {id: 'reputation-history'});
	tabsContribute.add(LANG.tab_characters, {id: 'characters'});
	tabsContribute.flush();
</script>

<div class="clear"></div>
<?php else: ?>
<?php endif; ?>