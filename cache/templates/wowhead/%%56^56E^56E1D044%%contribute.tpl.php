<?php /* Smarty version 2.6.26, created on 2013-10-13 07:38:32
         compiled from bricks/contribute.tpl */ ?>
<div class="text">
<h2><?php echo $this->_config[0]['vars']['Contribute']; ?>
</h2>
</div>
<div id="tabs_contribute-generic" style="width: 50%"></div>
<div class="text" style="margin-right: 310px">
	<div class="tabbed-contents" style="clear: none">
		<div id="tab-add-your-comment" style="display: none">
		<?php echo $this->_config[0]['vars']['Comment_add_data_1']; ?>
:<ul>
		<li><div><?php echo $this->_config[0]['vars']['Comment_add_data_2']; ?>
</div></li>
		<li><div><?php echo $this->_config[0]['vars']['Comment_add_data_3']; ?>
</div></li>
		<li><div><?php echo $this->_config[0]['vars']['Comment_add_data_4']; ?>
</div></li>
		<li><div><?php echo $this->_config[0]['vars']['Comment_add_data_5']; ?>
</div></li></ul>
			<form name="addcomment" action="?comment=add&amp;type=<?php echo $this->_tpl_vars['page']['type']; ?>
&amp;typeid=<?php echo $this->_tpl_vars['page']['typeid']; ?>
" method="post" onsubmit="return co_validateForm(this)">
				<div id="replybox-generic" style="display: none">
					<?php echo $this->_config[0]['vars']['Replying_to_comment_by']; ?>
 <span></span>. &nbsp;<a href="javascript:;" onclick="co_cancelReply()"><?php echo $this->_config[0]['vars']['Cancel']; ?>
</a>
					<div class="pad"></div>
				</div>
				<div id="funcbox-generic"></div>
				<script type="text/javascript">Listview.funcBox.coEditAppend(ge('funcbox-generic'), {body: ''}, 1)</script>
				<div class="pad"></div>
				<input type="submit" value="<?php echo $this->_config[0]['vars']['Submit']; ?>
"></input>
				<input type="hidden" name="replyto" value=""></input>
			</form>
		</div>
    <div id="tab-submit-a-screenshot" style="display: none">

<?php echo $this->_config[0]['vars']['Screenshots_help']; ?>


<ul>
<li><div><?php echo $this->_config[0]['vars']['Screenshots_prefered']; ?>
</div></li>
<li><div><?php echo $this->_config[0]['vars']['Screenshots_quality']; ?>
</div></li>
</ul>

<form action="?screenshot=add&amp;type=<?php echo $this->_tpl_vars['page']['type']; ?>
&amp;typeid=<?php echo $this->_tpl_vars['page']['typeid']; ?>
" method="post" enctype="multipart/form-data" onsubmit="return ss_validateForm(this)">

<input type="file" name="screenshotfile" /><br />
<small><?php echo $this->_config[0]['vars']['Screenshots_info']; ?>
</small>

<div class="pad"></div>
<input type="submit"  />

<div class="pad3"></div>
<small class="q0"><?php echo $this->_config[0]['vars']['Screenshots_mod']; ?>
</small>

</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	var tabsContribute = new Tabs({parent: ge('tabs_contribute-generic')});
	tabsContribute.add(LANG.tab_addyourcomment, {id: 'add-your-comment'});
	tabsContribute.add(LANG.tab_submitascreenshot, {id: 'submit-a-screenshot'});
	tabsContribute.flush();
</script>

<div class="clear"></div>