<div class="text">
<h2>{#Contribute#}</h2>
</div>
<div id="tabs_contribute-generic" style="width: 50%"></div>
<div class="text" style="margin-right: 310px">
	<div class="tabbed-contents" style="clear: none">
		<div id="tab-add-your-comment" style="display: none">
		{#Comment_add_data_1#}:<ul>
		<li><div>{#Comment_add_data_2#}</div></li>
		<li><div>{#Comment_add_data_3#}</div></li>
		<li><div>{#Comment_add_data_4#}</div></li>
		<li><div>{#Comment_add_data_5#}</div></li></ul>
			<form name="addcomment" action="?comment=add&amp;type={$page.type}&amp;typeid={$page.typeid}" method="post" onsubmit="return co_validateForm(this)">
				<div id="replybox-generic" style="display: none">
					{#Replying_to_comment_by#} <span></span>. &nbsp;<a href="javascript:;" onclick="co_cancelReply()">{#Cancel#}</a>
					<div class="pad"></div>
				</div>
				<div id="funcbox-generic"></div>
				<script type="text/javascript">Listview.funcBox.coEditAppend(ge('funcbox-generic'), {ldelim}body: ''{rdelim}, 1)</script>
				<div class="pad"></div>
				<input type="submit" value="{#Submit#}"></input>
				<input type="hidden" name="replyto" value=""></input>
			</form>
		</div>
    <div id="tab-submit-a-screenshot" style="display: none">

{#Screenshots_help#}

<ul>
<li><div>{#Screenshots_prefered#}</div></li>
<li><div>{#Screenshots_quality#}</div></li>
</ul>

<form action="?screenshot=add&amp;type={$page.type}&amp;typeid={$page.typeid}" method="post" enctype="multipart/form-data" onsubmit="return ss_validateForm(this)">

<input type="file" name="screenshotfile" /><br />
<small>{#Screenshots_info#}</small>

<div class="pad"></div>
<input type="submit"  />

<div class="pad3"></div>
<small class="q0">{#Screenshots_mod#}</small>

</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	var tabsContribute = new Tabs({ldelim}parent: ge('tabs_contribute-generic'){rdelim});
	tabsContribute.add(LANG.tab_addyourcomment, {ldelim}id: 'add-your-comment'{rdelim});
	tabsContribute.add(LANG.tab_submitascreenshot, {ldelim}id: 'submit-a-screenshot'{rdelim});
	tabsContribute.flush();
</script>

<div class="clear"></div>
