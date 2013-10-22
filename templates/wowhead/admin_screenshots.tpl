{include file='header.tpl'}
		<div id="main">

			<div id="main-precontents"></div>
			<div id="main-contents" class="main-contents">
			<table table="100%">
			<tr>
			{foreach name=foo from=$screens key=number item=screenshot}
			<td><center><img src="../images/screenshots/thumb/{$screenshot.body}" alt="Posted at {$screenshot.date}"><br />By <a href="?user={$screenshot.user}">{$screenshot.user}</a><br />
			<a href="/?admin=approve&id={$screenshot.id}">Approve</a> | <a href="/?admin=disprove&id={$screenshot.id}">Disprove</a></td>
				{if $smarty.foreach.foo.last}{else}{/if}
			{/foreach}
			</tr>
			</table>
		<div class="clear"></div>
	</div>
</div>
</div>
{include file='footer.tpl'}