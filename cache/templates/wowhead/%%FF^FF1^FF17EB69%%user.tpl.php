<?php /* Smarty version 2.6.26, created on 2013-10-12 01:44:01
         compiled from user.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div id="main">

			<div id="main-precontents"></div>
			<div id="main-contents" class="main-contents">
				<table class="infobox">
					<tr><th><?php echo $this->_config[0]['vars']['Quick_Facts']; ?>
</th></tr>
					<tr><td>
						<div class="infobox-spacer"></div>
						<ul>
							<li><div><?php echo $this->_config[0]['vars']['Joined']; ?>
: <?php echo $this->_tpl_vars['user']['joined']; ?>
</div></li>
							<li><div><?php echo $this->_config[0]['vars']['Lastvisit']; ?>
: <?php echo $this->_tpl_vars['user']['llogin']; ?>
</div></li>
							<li><div><?php echo $this->_config[0]['vars']['Reputation']; ?>
: <?php echo $this->_tpl_vars['reputation']['totalrep']; ?>
</div></li>
						</ul>
					</td></tr>
				</table>

				<div class="text">
					<div class="h1-icon">
<div class="iconmedium">
<ins style='background-image: url("/images/icons/medium/ability_warrior_innerrage.jpg");'></ins>
<del></del>
</div>
</div>
					<h1><?php echo $this->_tpl_vars['user']['profilename']; ?>
's Profile</h1>
					
					<div id="efhjkdsoicjx" class="left">
					<?php if ($this->_tpl_vars['event']['exdescimg'] == NULL): ?><?php else: ?><img alt="" style="float: right; margin: 0 0 10px 10px" src="/images/events/<?php echo $this->_tpl_vars['event']['exdescimg']; ?>
" width="35%"><?php endif; ?>
					<?php echo $this->_tpl_vars['event']['exdesc']; ?>

					</div>

					<h2><?php echo $this->_config[0]['vars']['Related']; ?>
</h2>
				</div>

				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'bricks/user/reputation.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>