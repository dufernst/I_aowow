<?php /* Smarty version 2.6.26, created on 2013-10-11 18:08:30
         compiled from object.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'object.tpl', 11, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

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
, name: '<?php echo ((is_array($_tmp=$this->_tpl_vars['object']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
'};
				g_initPath(<?php echo $this->_tpl_vars['page']['path']; ?>
);
			</script>

<?php if (isset ( $this->_tpl_vars['object']['key'] ) || isset ( $this->_tpl_vars['object']['lockpicking'] ) || isset ( $this->_tpl_vars['object']['mining'] ) || isset ( $this->_tpl_vars['object']['herbalism'] ) || isset ( $this->_tpl_vars['wh_ss'] )): ?>
			<table class="infobox">
				<tr><th><?php echo $this->_config[0]['vars']['Quick_Facts']; ?>
</th></tr>
				<tr><td><div class="infobox-spacer"></div>
				<ul>
					<?php if (isset ( $this->_tpl_vars['object']['key'] )): ?><li><div><?php echo $this->_config[0]['vars']['Key']; ?>
: <a class="q<?php echo $this->_tpl_vars['object']['key']['quality']; ?>
" href="?item=<?php echo $this->_tpl_vars['object']['key']['id']; ?>
">[<?php echo $this->_tpl_vars['object']['key']['name']; ?>
]</a></div></li><?php endif; ?>
					<?php if (isset ( $this->_tpl_vars['object']['lockpicking'] )): ?><li><div><?php echo $this->_config[0]['vars']['Lockpickable']; ?>
 (<span class="tip" onmouseover="Tooltip.showAtCursor(event, '<?php echo $this->_config[0]['vars']['Required_lockpicking_skill']; ?>
', 0, 0, 'q')" onmousemove="Tooltip.cursorUpdate(event)" onmouseout="Tooltip.hide()"><?php echo $this->_tpl_vars['object']['lockpicking']; ?>
</span>)</div></li><?php endif; ?>
					<?php if (isset ( $this->_tpl_vars['object']['mining'] )): ?><li><div><?php echo $this->_config[0]['vars']['Mining']; ?>
 (<span class="tip" onmouseover="Tooltip.showAtCursor(event, '<?php echo $this->_config[0]['vars']['Required_mining_skill']; ?>
', 0, 0, 'q')" onmousemove="Tooltip.cursorUpdate(event)" onmouseout="Tooltip.hide()"><?php echo $this->_tpl_vars['object']['mining']; ?>
</span>)</div></li><?php endif; ?>
					<?php if (isset ( $this->_tpl_vars['object']['herbalism'] )): ?><li><div><?php echo $this->_config[0]['vars']['Herb']; ?>
 (<span class="tip" onmouseover="Tooltip.showAtCursor(event, '<?php echo $this->_config[0]['vars']['Required_herb_skill']; ?>
', 0, 0, 'q')" onmousemove="Tooltip.cursorUpdate(event)" onmouseout="Tooltip.hide()"><?php echo $this->_tpl_vars['object']['herbalism']; ?>
</span>)</div></li><?php endif; ?>
				</ul>
				</td></tr>
				<tr><th id="infobox-"><?php echo $this->_config[0]['vars']['Screenshots_tab']; ?>
</th></tr>
<tr><td><div class="infobox-spacer"></div><center><div id="infobox-sticky-ss"></div></center></td></tr>
			</table>
<?php endif; ?>

			<div class="text">
				<a href="javascript:;" class="button-red button-red-disabled"><em><b><i><?php echo $this->_config[0]['vars']['Viewer_3D']; ?>
</i></b><span><?php echo $this->_config[0]['vars']['Viewer_3D']; ?>
</span></em></a>
				<a href="javascript:;" class="button-red button-red-disabled"><em><b><i><?php echo $this->_config[0]['vars']['Compare']; ?>
</i></b><span><?php echo $this->_config[0]['vars']['Compare']; ?>
</span></em></a>
				<a href="javascript:;" class="button-red button-red-disabled"><em><b><i><?php echo $this->_config[0]['vars']['Find_better']; ?>
...</i></b><span><?php echo $this->_config[0]['vars']['Find_better']; ?>
...</span></em></a>
				<a href="http://www.wowhead.com/?<?php echo $this->_tpl_vars['query']; ?>
" class="button-red"><em><b><i>Wowhead</i></b><span>Wowhead</span></em></a>
				<h1><?php echo $this->_tpl_vars['object']['name']; ?>
</h1>

<?php if ($this->_tpl_vars['object']['position']): ?>
				<div><?php echo $this->_config[0]['vars']['This_Object_can_be_found_in']; ?>

<?php echo '<span id="locations">'; ?><?php $_from = $this->_tpl_vars['object']['position']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['zone'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['zone']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['zone']):
        $this->_foreach['zone']['iteration']++;
?><?php echo '<a href="javascript:;" onclick="myMapper.update('; ?>{<?php echo ''; ?><?php if ($this->_tpl_vars['zone']['atid']): ?><?php echo 'zone:'; ?><?php echo $this->_tpl_vars['zone']['atid']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['zone']['points']): ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo 'show:false'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['zone']['points']): ?><?php echo 'coords:['; ?><?php $_from = $this->_tpl_vars['zone']['points']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['point'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['point']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['point']):
        $this->_foreach['point']['iteration']++;
?><?php echo '['; ?><?php echo $this->_tpl_vars['point']['x']; ?><?php echo ','; ?><?php echo $this->_tpl_vars['point']['y']; ?><?php echo ','; ?>{<?php echo 'label:\'$<br><div class=q0><small>'; ?><?php echo $this->_config[0]['vars']['Respawn']; ?><?php echo ':'; ?><?php if (isset ( $this->_tpl_vars['point']['r']['h'] )): ?><?php echo ' '; ?><?php echo $this->_tpl_vars['point']['r']['h']; ?><?php echo ''; ?><?php echo $this->_config[0]['vars']['hr']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['point']['r']['m'] )): ?><?php echo ' '; ?><?php echo $this->_tpl_vars['point']['r']['m']; ?><?php echo ''; ?><?php echo $this->_config[0]['vars']['min']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['point']['r']['s'] )): ?><?php echo ' '; ?><?php echo $this->_tpl_vars['point']['r']['s']; ?><?php echo ''; ?><?php echo $this->_config[0]['vars']['sec']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['point']['events'] )): ?><?php echo '<br>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['point']['events'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?><?php echo ''; ?><?php endif; ?><?php echo '</small></div>\',type:\''; ?><?php echo $this->_tpl_vars['point']['type']; ?><?php echo '\''; ?>}<?php echo ']'; ?><?php if (! ($this->_foreach['point']['iteration'] == $this->_foreach['point']['total'])): ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ']'; ?><?php endif; ?><?php echo ''; ?>}<?php echo ');g_setSelectedLink(this, \'mapper\'); return false" onmousedown="return false">'; ?><?php echo $this->_tpl_vars['zone']['name']; ?><?php echo '</a>'; ?><?php if ($this->_tpl_vars['zone']['population'] > 1): ?><?php echo '&nbsp;('; ?><?php echo $this->_tpl_vars['zone']['population']; ?><?php echo ')'; ?><?php endif; ?><?php echo ''; ?><?php if (($this->_foreach['zone']['iteration'] == $this->_foreach['zone']['total'])): ?><?php echo '.'; ?><?php else: ?><?php echo ', '; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</span></div>'; ?>

				<div id="mapper-generic"></div>
				<div class="clear"></div>

				<script type="text/javascript">
					var myMapper = new Mapper({parent: 'mapper-generic', zone: '<?php echo $this->_tpl_vars['object']['position'][0]['atid']; ?>
'});
					gE(ge('locations'), 'a')[0].onclick();
				</script>

<?php else: ?>
				<?php echo $this->_config[0]['vars']['This_Object_cant_be_found']; ?>

<?php endif; ?>

<?php if (isset ( $this->_tpl_vars['object']['pagetext'] )): ?>
	<h3><?php echo $this->_config[0]['vars']['Object_Page_Content']; ?>
</h3>
	<div id="book-generic"></div>
	<?php echo '<script>new Book('; ?>{<?php echo ' parent: \'book-generic\', pages: ['; ?><?php $_from = $this->_tpl_vars['object']['pagetext']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['j'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['j']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['pagetext']):
        $this->_foreach['j']['iteration']++;
?><?php echo '\''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['pagetext'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?><?php echo '\''; ?><?php if (($this->_foreach['j']['iteration'] == $this->_foreach['j']['total'])): ?><?php echo ''; ?><?php else: ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ']'; ?>}<?php echo ')</script>'; ?>

<?php endif; ?>
				<h2><?php echo $this->_config[0]['vars']['Related']; ?>
</h2>

			</div>

			<div id="tabs-generic"></div>
			<div id="listview-generic" class="listview"></div>
<script type="text/javascript">
var tabsRelated = new Tabs({parent: ge('tabs-generic')});
<?php if (isset ( $this->_tpl_vars['object']['drop'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/item_table.tpl', 'smarty_include_vars' => array('id' => 'contains','name' => 'contains','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['object']['drop'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['object']['starts'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/quest_table.tpl', 'smarty_include_vars' => array('id' => 'starts','name' => 'starts','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['object']['starts'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['object']['ends'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/quest_table.tpl', 'smarty_include_vars' => array('id' => 'ends','name' => 'ends','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['object']['ends'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['object']['criteria_of'] )): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/achievement_table.tpl', 'smarty_include_vars' => array('id' => 'criteria-of','name' => 'criteriaof','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['object']['criteria_of'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
new Listview({template: 'comment', id: 'comments', name: LANG.tab_comments, tabs: tabsRelated, parent: 'listview-generic', data: lv_comments});
new Listview({template: 'screenshot', id: 'screenshots', name: LANG.tab_screenshots, tabs: tabsRelated, parent: 'listview-generic', data: lv_screenshots});
tabsRelated.flush();
ss_appendSticky();
</script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/contribute.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

			</div>
		</div>
	</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>