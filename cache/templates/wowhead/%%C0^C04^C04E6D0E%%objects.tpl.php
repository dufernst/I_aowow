<?php /* Smarty version 2.6.26, created on 2013-10-13 05:13:02
         compiled from objects.tpl */ ?>
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
);
				</script>

				<div id="lv-objects" class="listview"></div>

				<script type="text/javascript">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/object_table.tpl', 'smarty_include_vars' => array('id' => 'objects','data' => $this->_tpl_vars['data'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
				</script>

				<div class="clear"></div>
			</div>
		</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>