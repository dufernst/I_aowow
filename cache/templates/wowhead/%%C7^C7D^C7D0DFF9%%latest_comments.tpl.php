<?php /* Smarty version 2.6.26, created on 2013-10-14 04:09:45
         compiled from latest_comments.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'latest_comments.tpl', 22, false),array('modifier', 'date_format', 'latest_comments.tpl', 26, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="main">
	<div id="main-precontents"></div>
	<div id="main-contents" class="main-contents">
		<script type="text/javascript">
			g_initPath(<?php echo $this->_tpl_vars['page']['path']; ?>
)
		</script>
		<div class="text">
			<div class="h1-links"></div>
			<h1><?php echo $this->_config[0]['vars']['Latest_Comments']; ?>
</h1>
		</div>
		<div id="lv-comments" class="listview"></div>
		<script type="text/javascript">
			<?php echo 'new Listview('; ?>{<?php echo 'template: \'commentpreview\', id: \'comments\', data: ['; ?><?php $_from = $this->_tpl_vars['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['number'] => $this->_tpl_vars['comment']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ''; ?>{<?php echo 'id:'; ?><?php echo $this->_tpl_vars['comment']['id']; ?><?php echo ',type:'; ?><?php echo $this->_tpl_vars['comment']['type']; ?><?php echo ',typeId:'; ?><?php echo $this->_tpl_vars['comment']['typeID']; ?><?php echo ',subject:\''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?><?php echo '\',preview:\''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['preview'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?><?php echo '\',user:\''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['user'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?><?php echo '\',rating: '; ?><?php echo $this->_tpl_vars['comment']['rating']; ?><?php echo ',date:\''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y/%m/%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y/%m/%d %H:%M:%S")); ?><?php echo '\',elapsed:'; ?><?php echo $this->_tpl_vars['comment']['elapsed']; ?><?php echo ',purged:'; ?><?php echo $this->_tpl_vars['comment']['purged']; ?><?php echo ',deleted:0'; ?>}<?php echo ''; ?><?php if (($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?><?php echo ''; ?><?php else: ?><?php echo ','; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ']'; ?>}<?php echo ');'; ?>

		</script>
		<div class="clear"></div>
	</div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>