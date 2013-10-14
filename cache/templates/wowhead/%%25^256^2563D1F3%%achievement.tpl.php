<?php /* Smarty version 2.6.26, created on 2013-10-13 07:34:25
         compiled from achievement.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'achievement.tpl', 11, false),)), $this); ?>
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
, name: '<?php echo ((is_array($_tmp=$this->_tpl_vars['achievement']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
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
							<li><div><?php echo $this->_config[0]['vars']['Points']; ?>
: <span class="moneyachievement tip" onmouseover="Listview.funcBox.moneyAchievementOver(event)" onmousemove="Tooltip.cursorUpdate(event)" onmouseout="Tooltip.hide()"><?php echo $this->_tpl_vars['achievement']['points']; ?>
</span></div></li>
							<li><div><?php echo $this->_config[0]['vars']['Side']; ?>
: <?php echo $this->_tpl_vars['achievement']['side']; ?>
</div></li>
						</ul>
					</td></tr>
<?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['achievement']['series']): ?><?php echo '<tr><th>'; ?><?php echo $this->_config[0]['vars']['Series']; ?><?php echo '</th></tr><tr><td><div class="infobox-spacer"></div><table class="series">'; ?><?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['achievement']['series']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php echo '<tr><th>'; ?><?php echo $this->_sections['i']['index']+1; ?><?php echo '.</th><td>'; ?><?php if (( $this->_tpl_vars['achievement']['series'][$this->_sections['i']['index']]['id'] == $this->_tpl_vars['achievement']['id'] )): ?><?php echo '<b>'; ?><?php echo $this->_tpl_vars['achievement']['series'][$this->_sections['i']['index']]['name']; ?><?php echo '</b>'; ?><?php else: ?><?php echo '<div><a href="?achievement='; ?><?php echo $this->_tpl_vars['achievement']['series'][$this->_sections['i']['index']]['id']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['achievement']['series'][$this->_sections['i']['index']]['name']; ?><?php echo '</a></div>'; ?><?php endif; ?><?php echo '</td></tr>'; ?><?php endfor; endif; ?><?php echo '</table></td></tr>'; ?><?php endif; ?><?php echo ''; ?>
				</table>

				<div class="text">

					<a href="javascript:;" class="button-red" onclick="this.blur(); g_getIngameLink('ffffff00','achievement:<?php echo $this->_tpl_vars['achievement']['id']; ?>
:&quot;..UnitGUID(&quot;player&quot;)..&quot;:0:0:0:0:0:0:0:0', '<?php echo ((is_array($_tmp=$this->_tpl_vars['achievement']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
')"><em><b><i>Link</i></b><span>Link</span></em></a>
					<div id="h1-icon-generic" class="h1-icon"></div>
					<a href="http://www.wowhead.com/?<?php echo $this->_tpl_vars['query']; ?>
" class="button-red"><em><b><i>Wowhead</i></b><span>Wowhead</span></em></a>
					<h1 class="h1-icon"><?php echo $this->_tpl_vars['achievement']['name']; ?>
</h1>
					<script type="text/javascript">
					ge('h1-icon-generic').appendChild(Icon.create('<?php echo ((is_array($_tmp=$this->_tpl_vars['achievement']['iconname'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
', 1));
					</script>

					<?php echo $this->_tpl_vars['achievement']['description']; ?>


					<h3><?php echo $this->_config[0]['vars']['Criteria']; ?>
<?php if ($this->_tpl_vars['achievement']['count']): ?> &ndash; <small><b><?php echo $this->_config[0]['vars']['Requires']; ?>
 <?php echo $this->_tpl_vars['achievement']['count']; ?>
 <?php echo $this->_config[0]['vars']['out_of']; ?>
 <?php echo $this->_tpl_vars['achievement']['total_criterias']; ?>
</b></small><?php endif; ?></h3>

					<div style="float: left; margin-right: 25px">
					<table class="iconlist">
					<?php echo ''; ?><?php $_from = $this->_tpl_vars['achievement']['criterias']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['criterias'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['criterias']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['cr']):
        $this->_foreach['criterias']['iteration']++;
?><?php echo '<tr><th'; ?><?php if ($this->_tpl_vars['cr']['icon']): ?><?php echo ' align="right" id="iconlist-icon'; ?><?php echo $this->_tpl_vars['cr']['icon']; ?><?php echo '"'; ?><?php endif; ?><?php echo '>'; ?><?php echo ''; ?><?php if (! $this->_tpl_vars['cr']['icon'] && ( $this->_tpl_vars['cr']['link'] || $this->_tpl_vars['cr']['standard'] )): ?><?php echo '<ul><li><var>&nbsp;</var></li></ul>'; ?><?php endif; ?><?php echo '</th><td>'; ?><?php if ($this->_tpl_vars['cr']['link']): ?><?php echo '<a href="'; ?><?php echo $this->_tpl_vars['cr']['link']['href']; ?><?php echo '"'; ?><?php if ($this->_tpl_vars['cr']['link']['quality']): ?><?php echo ' class="q'; ?><?php echo $this->_tpl_vars['cr']['link']['quality']; ?><?php echo '"'; ?><?php endif; ?><?php echo '>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['cr']['link']['text'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?><?php echo '</a> '; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php echo $this->_tpl_vars['cr']['extra_text']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['user']['roles'] > 0): ?><?php echo ' <small title="'; ?><?php echo $this->_config[0]['vars']['Criteria_id_type_id']; ?><?php echo ' '; ?><?php echo $this->_tpl_vars['cr']['type']; ?><?php echo '" class="q0">['; ?><?php echo $this->_tpl_vars['cr']['id']; ?><?php echo ']</small>'; ?><?php endif; ?><?php echo '</td></tr>'; ?><?php echo ''; ?><?php if (($this->_foreach['criterias']['iteration']-1)+1 == round ( count ( $this->_tpl_vars['achievement']['criterias'] ) / 2 )): ?><?php echo '</table></div><div style="float: left"><table class="iconlist">'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?>

					</table>
					</div>

					<?php echo '<script type="text/javascript">'; ?><?php $_from = $this->_tpl_vars['achievement']['icons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ic']):
?><?php echo 'ge(\'iconlist-icon'; ?><?php echo $this->_tpl_vars['ic']['itr']; ?><?php echo '\').appendChild('; ?><?php echo $this->_tpl_vars['ic']['type']; ?><?php echo '.createIcon('; ?><?php echo $this->_tpl_vars['ic']['id']; ?><?php echo ', 0, '; ?><?php if ($this->_tpl_vars['ic']['count'] > 0): ?><?php echo ''; ?><?php echo $this->_tpl_vars['ic']['count']; ?><?php echo ''; ?><?php else: ?><?php echo '0'; ?><?php endif; ?><?php echo '));'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</script>'; ?>



					<div style="clear: left"></div>

<?php if ($this->_tpl_vars['achievement']['reward']): ?>
					<h3><?php echo $this->_config[0]['vars']['Rewards']; ?>
</h3>

					<ul>
					<li><div><?php echo $this->_tpl_vars['achievement']['reward']; ?>
</div></li>
					</ul>
<?php endif; ?>

					<h2><?php echo $this->_config[0]['vars']['Related']; ?>
</h2>

				</div>

				<div id="tabs-generic"></div>
				<div id="listview-generic" class="listview"></div>
<script type="text/javascript">
var tabsRelated = new Tabs({parent: ge('tabs-generic')});
<?php if ($this->_tpl_vars['achievement']['see_also']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/achievement_table.tpl', 'smarty_include_vars' => array('id' => 'see-also','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['achievement']['see_also'],'name' => 'seealso')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<?php if ($this->_tpl_vars['achievement']['criteria_of']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/achievement_table.tpl', 'smarty_include_vars' => array('id' => 'criteria-of','tabsid' => 'tabsRelated','data' => $this->_tpl_vars['achievement']['criteria_of'],'name' => 'criteriaof')));
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
			</div>
		</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>