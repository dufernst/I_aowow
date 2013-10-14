<?php /* Smarty version 2.6.26, created on 2013-10-14 05:13:45
         compiled from spell.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'spell.tpl', 11, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->assign('iconlist1', '1'); ?>
<?php $this->assign('iconlist2', '1'); ?>
<div id="main">
	<div id="main-precontents"></div>
	<div id="main-contents" class="main-contents">

		<script type="text/javascript">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/allcomments.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/allscreenshots.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			var g_pageInfo = {type: <?php echo $this->_tpl_vars['page']['type']; ?>
, typeId: <?php echo $this->_tpl_vars['page']['typeid']; ?>
, name: '<?php echo ((is_array($_tmp=$this->_tpl_vars['spell']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
'};
			g_initPath(<?php echo $this->_tpl_vars['page']['path']; ?>
);
		</script>

		<table class="infobox">
			<tr><th><?php echo $this->_config[0]['vars']['Quick_Facts']; ?>
</th></tr>
			<tr><td>
				<div class="infobox-spacer"></div>
					<ul>
						<li>
							<div><?php echo $this->_config[0]['vars']['Level']; ?>
: <?php echo $this->_tpl_vars['spell']['level']; ?>
</div>
						</li>
					</ul>
				</td></tr>
			<tr><td><div class="infobox-spacer"></div><div id="infobox-sticky"></div></td></tr>
			<tr><th id="infobox-"><?php echo $this->_config[0]['vars']['Screenshots_tab']; ?>
</th></tr>
<tr><td><div class="infobox-spacer"></div><center><div id="infobox-sticky-ss"></div></center></td></tr>

		</table>

		<div class="text">
			<a href="http://www.wowhead.com/?<?php echo $this->_tpl_vars['query']; ?>
" class="button-red"><em><b><i>Wowhead</i></b><span>Wowhead</span></em></a>
			<h1><?php echo $this->_tpl_vars['spell']['name']; ?>
</h1>

			<div id="icon<?php echo $this->_tpl_vars['spell']['entry']; ?>
-generic" style="float: left"></div>
			<div id="tooltip<?php echo $this->_tpl_vars['spell']['entry']; ?>
-generic" class="tooltip" style="float: left; padding-top: 1px">
				<table><tr><td><?php echo $this->_tpl_vars['spell']['info']; ?>
</td><th style="background-position: top right"></th></tr><tr><th style="background-position: bottom left"></th><th style="background-position: bottom right"></th></tr></table>
			</div>
			<div style="clear: left"></div>

			<script type="text/javascript">
				ge('icon<?php echo $this->_tpl_vars['spell']['entry']; ?>
-generic').appendChild(Icon.create('<?php echo $this->_tpl_vars['spell']['icon']; ?>
', 2, 0, 0, <?php echo $this->_tpl_vars['spell']['stack']; ?>
));
				Tooltip.fix(ge('tooltip<?php echo $this->_tpl_vars['spell']['entry']; ?>
-generic'), 1, 1);
			</script>

			<?php if (isset ( $this->_tpl_vars['spell']['btt'] )): ?>
			<h3><?php echo $this->_config[0]['vars']['Aura']; ?>
</h3>
			<div id="btt<?php echo $this->_tpl_vars['spell']['entry']; ?>
" class="tooltip">
				<table><tr><td><?php echo $this->_tpl_vars['spell']['btt']; ?>
</td><th style="background-position: top right"></th></tr><tr><th style="background-position: bottom left"></th><th style="background-position: bottom right"></th></tr></table>
			</div>
			<script type="text/javascript">
				Tooltip.fixSafe(ge('btt<?php echo $this->_tpl_vars['spell']['entry']; ?>
'), 1, 1)
			</script>
			<?php endif; ?>

<?php if ($this->_tpl_vars['spell']['reagents']): ?><?php if ($this->_tpl_vars['spell']['tools']): ?><div style="float: left; margin-right: 75px"><?php endif; ?>
					<h3><?php echo $this->_config[0]['vars']['Reagents']; ?>
</h3>
					<table class="iconlist">
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['spell']['reagents']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
						<tr><th align="right" id="iconlist-icon<?php echo $this->_tpl_vars['iconlist1']++; ?>
"></th><td><span class="q<?php echo $this->_tpl_vars['spell']['reagents'][$this->_sections['i']['index']]['quality']; ?>
"><a href="?item=<?php echo $this->_tpl_vars['spell']['reagents'][$this->_sections['i']['index']]['entry']; ?>
"><?php echo $this->_tpl_vars['spell']['reagents'][$this->_sections['i']['index']]['name']; ?>
</a></span></td></tr>
<?php endfor; endif; ?>
					</table>
					<script type="text/javascript">
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['spell']['reagents']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
						ge('iconlist-icon<?php echo $this->_tpl_vars['iconlist2']++; ?>
').appendChild(g_items.createIcon(<?php echo $this->_tpl_vars['spell']['reagents'][$this->_sections['i']['index']]['entry']; ?>
, 0, <?php echo $this->_tpl_vars['spell']['reagents'][$this->_sections['i']['index']]['count']; ?>
));
<?php endfor; endif; ?>
					</script>
<?php if ($this->_tpl_vars['spell']['tools']): ?></div><?php endif; ?><?php endif; ?>
<?php if ($this->_tpl_vars['spell']['tools']): ?><?php if ($this->_tpl_vars['spell']['reagents']): ?><div style="float: left"><?php endif; ?>
					<h3><?php echo $this->_config[0]['vars']['Tools']; ?>
</h3>
					<table class="iconlist">
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['spell']['tools']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
						<tr><th align="right" id="iconlist-icon<?php echo $this->_tpl_vars['iconlist1']++; ?>
"></th><td><span class="q1"><a href="?item=<?php echo $this->_tpl_vars['spell']['tools'][$this->_sections['i']['index']]['entry']; ?>
"><?php echo $this->_tpl_vars['spell']['tools'][$this->_sections['i']['index']]['name']; ?>
</a></span></td></tr>
<?php endfor; endif; ?>
					</table>
					<script type="text/javascript">
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['spell']['tools']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
						ge('iconlist-icon<?php echo $this->_tpl_vars['iconlist2']++; ?>
').appendChild(g_items.createIcon(<?php echo $this->_tpl_vars['spell']['tools'][$this->_sections['i']['index']]['entry']; ?>
, 0, 1));
<?php endfor; endif; ?>
					</script>
<?php if ($this->_tpl_vars['spell']['reagents']): ?></div><?php endif; ?><?php endif; ?>

			<div class="clear"></div>
			<h3><?php echo $this->_config[0]['vars']['Spell_Details']; ?>
</h3>

			<table class="grid" id="spelldetails">
				<colgroup>
					<col width="8%" />
					<col width="42%" />
					<col width="50%" />
				</colgroup>
				<tr>
					<td colspan="2" style="padding: 0; border: 0; height: 1px"></td>
					<td rowspan="5" style="padding: 0; border-left: 3px solid #404040">
						<table class="grid" style="border: 0">
						<tr>
							<td style="height: 0; padding: 0; border: 0" colspan="2"></td>
						</tr>
						<tr>
							<th style="border-left: 0; border-top: 0"><?php echo $this->_config[0]['vars']['Duration']; ?>
</th>
							<td width="100%" style="border-top: 0"><?php echo $this->_tpl_vars['spell']['duration']; ?>
</td>
						</tr>
						<tr>
							<th style="border-left: 0"><?php echo $this->_config[0]['vars']['school']; ?>
</th>
							<td><?php echo $this->_tpl_vars['spell']['school']; ?>
</td>
						</tr>
						<tr>
							<th style="border-left: 0"><?php echo $this->_config[0]['vars']['Mechanic']; ?>
</th>
							<td><?php if (isset ( $this->_tpl_vars['spell']['mechanic'] )): ?><?php echo $this->_tpl_vars['spell']['mechanic']; ?>
<?php else: ?><span class="q0">n/a</span><?php endif; ?></td>
						</tr>
						<tr>
							<th style="border-bottom: 0; border-left: 0"><?php echo $this->_config[0]['vars']['Dispel_type']; ?>
</th>
							<td><?php if (isset ( $this->_tpl_vars['spell']['dispel'] )): ?><?php echo $this->_tpl_vars['spell']['dispel']; ?>
<?php else: ?><span class="q0">n/a</span><?php endif; ?></td>
						</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th style="border-top: 0"><?php echo $this->_config[0]['vars']['cost']; ?>
</th>
					<td style="border-top: 0"><?php if (isset ( $this->_tpl_vars['spell']['manacost'] )): ?><?php echo $this->_tpl_vars['spell']['manacost']; ?>
 <?php echo $this->_config[0]['vars']['manas']; ?>
<?php else: ?><?php echo $this->_config[0]['vars']['None']; ?>
<?php endif; ?></td>
				</tr>
				<tr>
					<th><?php echo $this->_config[0]['vars']['range']; ?>
</th>
					<td><?php echo $this->_tpl_vars['spell']['range']; ?>
 <?php echo $this->_config[0]['vars']['yards']; ?>
 <small>(<?php echo $this->_tpl_vars['spell']['rangename']; ?>
)</small></td>
				</tr>
				<tr>
					<th><?php echo $this->_config[0]['vars']['Cast_time']; ?>
</th>
					<td><?php echo $this->_tpl_vars['spell']['casttime']; ?>
</td>
				</tr>
				<tr>
					<th><?php echo $this->_config[0]['vars']['Cooldown']; ?>
</th>
					<td><?php if (isset ( $this->_tpl_vars['spell']['cooldown'] )): ?><?php echo $this->_tpl_vars['spell']['cooldown']; ?>
 <?php echo $this->_config[0]['vars']['seconds']; ?>
<?php else: ?><span class="q0">n/a</span><?php endif; ?></td>
				</tr>
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['spell']['effect']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
				<tr>
					<th><?php echo $this->_config[0]['vars']['Effect']; ?>
 #<?php echo $this->_sections['i']['index']+1; ?>
</th>
					<td colspan="3" style="line-height: 17px">
						<?php echo $this->_tpl_vars['spell']['effect'][$this->_sections['i']['index']]['name']; ?>


						<small>
						<?php if (isset ( $this->_tpl_vars['spell']['effect'][$this->_sections['i']['index']]['object'] )): ?><br><?php echo $this->_config[0]['vars']['Object']; ?>
: <a href=?object=<?php echo $this->_tpl_vars['spell']['effect'][$this->_sections['i']['index']]['object']['entry']; ?>
><?php echo $this->_tpl_vars['spell']['effect'][$this->_sections['i']['index']]['object']['name']; ?>
</a><?php endif; ?>
						<?php if (isset ( $this->_tpl_vars['spell']['effect'][$this->_sections['i']['index']]['value'] )): ?><br><?php echo $this->_config[0]['vars']['Value']; ?>
: <?php echo $this->_tpl_vars['spell']['effect'][$this->_sections['i']['index']]['value']; ?>
<?php endif; ?>
						<?php if (isset ( $this->_tpl_vars['spell']['effect'][$this->_sections['i']['index']]['radius'] )): ?><br><?php echo $this->_config[0]['vars']['Radius']; ?>
: <?php echo $this->_tpl_vars['spell']['effect'][$this->_sections['i']['index']]['radius']; ?>
 <?php echo $this->_config[0]['vars']['yards']; ?>
<?php endif; ?>
						<?php if (isset ( $this->_tpl_vars['spell']['effect'][$this->_sections['i']['index']]['interval'] )): ?><br><?php echo $this->_config[0]['vars']['Interval']; ?>
: <?php echo $this->_tpl_vars['spell']['effect'][$this->_sections['i']['index']]['interval']; ?>
 <?php echo $this->_config[0]['vars']['seconds']; ?>
<?php endif; ?>
						</small>
<?php if (isset ( $this->_tpl_vars['spell']['effect'][$this->_sections['i']['index']]['spell'] )): ?>
						<table class="icontab">
							<tr>
								<th id="icontab-icon1"></th>
								<td><a href="?spell=<?php echo $this->_tpl_vars['spell']['effect'][$this->_sections['i']['index']]['spell']['entry']; ?>
"><?php echo $this->_tpl_vars['spell']['effect'][$this->_sections['i']['index']]['spell']['name']; ?>
</a></td>
								<th></th><td></td>
							</tr>
						</table>
						<script type="text/javascript">
							ge('icontab-icon1').appendChild(g_spells.createIcon(<?php echo $this->_tpl_vars['spell']['effect'][$this->_sections['i']['index']]['spell']['entry']; ?>
, 1, 0));
						</script>
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['spell']['effect'][$this->_sections['i']['index']]['item'] )): ?>
						<table class="icontab">
							<tr>
								<th id="icontab-icon1"></th><td><span class="q<?php echo $this->_tpl_vars['spell']['effect'][$this->_sections['i']['index']]['item']['quality']; ?>
"><a href="?item=<?php echo $this->_tpl_vars['spell']['effect'][$this->_sections['i']['index']]['item']['entry']; ?>
"><?php echo $this->_tpl_vars['spell']['effect'][$this->_sections['i']['index']]['item']['name']; ?>
</a></span></td>
								<th></th><td></td>
							</tr>
						</table>
						<script type="text/javascript">
							ge('icontab-icon1').appendChild(g_items.createIcon(<?php echo $this->_tpl_vars['spell']['effect'][$this->_sections['i']['index']]['item']['entry']; ?>
, 1, <?php echo $this->_tpl_vars['spell']['effect'][$this->_sections['i']['index']]['item']['count']; ?>
));
						</script>
<?php endif; ?>
					</td>
				</tr>
<?php endfor; endif; ?>
			</table>

						<script type="text/javascript">
			if(Browser.ie6)
				array_walk(gE(ge('spelldetails'), 'tr'), function(x) { if(x.parentNode.parentNode.className != 'icontab') { x.onmouseover = Listview.itemOver; x.onmouseout = Listview.itemOut }});
			</script>

			<h2><?php echo $this->_config[0]['vars']['Related']; ?>
</h2>

		</div>

		<div id="tabs-generic"></div>
		<div id="listview-generic" class="listview"></div>
<script type="text/javascript">
var tabsRelated = new Tabs({parent: ge('tabs-generic')});
<?php if (isset ( $this->_tpl_vars['spell']['taughtbynpc'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/creature_table.tpl', 'smarty_include_vars' => array('id' => 'taught-by-npc','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['spell']['taughtbynpc'],'name' => 'taughtby')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['spell']['taughtbyitem'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/item_table.tpl', 'smarty_include_vars' => array('id' => 'taught-by-item','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['spell']['taughtbyitem'],'name' => 'taughtby')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['spell']['taughtbyquest'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/quest_table.tpl', 'smarty_include_vars' => array('id' => 'taught-by-quest','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['spell']['taughtbyquest'],'name' => 'taughtby')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['spell']['questreward'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/quest_table.tpl', 'smarty_include_vars' => array('id' => 'reward-for-quest','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['spell']['questreward'],'name' => 'rewardfrom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['spell']['usedbynpc'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/creature_table.tpl', 'smarty_include_vars' => array('id' => 'used-by-npc','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['spell']['usedbynpc'],'name' => 'usedby')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['spell']['usedbyitem'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/item_table.tpl', 'smarty_include_vars' => array('id' => 'used-by-item','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['spell']['usedbyitem'],'name' => 'usedby')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['spell']['usedbyitemset'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/itemset_table.tpl', 'smarty_include_vars' => array('id' => 'itemsets','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['spell']['usedbyitemset'],'name' => 'usedby')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['spell']['contains'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/item_table.tpl', 'smarty_include_vars' => array('id' => 'contains','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['spell']['contains'],'name' => 'contains')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['spell']['seealso'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/spell_table.tpl', 'smarty_include_vars' => array('id' => 'see-also-ability','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['spell']['seealso'],'name' => 'seealso')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['spell']['criteria_of'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/achievement_table.tpl', 'smarty_include_vars' => array('id' => 'criteria-of','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['spell']['criteria_of'],'name' => 'criteriaof')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
new Listview({template: 'comment', id: 'comments', name: LANG.tab_comments, tabs: tabsRelated, parent: 'listview-generic', data: lv_comments});
new Listview({template: 'screenshot', id: 'screenshots', name: LANG.tab_screenshots, tabs: tabsRelated, parent: 'listview-generic', data: lv_screenshots});
tabsRelated.flush();
</script>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/contribute.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div class="clear"></div>
	</div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>