<?php /* Smarty version 2.6.26, created on 2013-10-11 18:00:43
         compiled from main.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
 "http://www.w3.org/TR/html4/loose.dtd">
<head>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'head_main.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<style type="text/css">
<?php echo '
        .top { margin-left: auto; margin-right: auto; max-width: 1240px; min-width: 998px; }
		.menu-buttons a { border-color: black }
		.news { position: relative; text-align: left; width: 415px; height: 191px; margin: 30px auto 0 auto; background: url(/images/'; ?>
<?php echo $this->_tpl_vars['language']; ?>
<?php echo '/mainpage-bg-news.png) no-repeat }
		.news-list { padding: 26px 0 0 26px; margin: 0 }
		.news-list li { line-height: 2em }
		.news-img1 { position: absolute; left: 60px; top: 155px; width: 172px; height: 17px }
		.news-img2 { position: absolute; left: 246px; top: 48px; width: 145px; height: 127px }
		.news-talent { position: absolute; left: 240px; top: 29px; width: 152px; height: 146px }
'; ?>

	</style>
</head>
<body>
	<div id="layers"></div>

    <div class="top">
     <div id="toplinks" class="toplinks"><?php if ($this->_tpl_vars['user']): ?> <?php echo $this->_config[0]['vars']['Greetings']; ?>
, <a href="?user=<?php echo $this->_tpl_vars['user']['name']; ?>
"><?php echo $this->_tpl_vars['user']['name']; ?>
</a>|<a href="?account=signout"><?php echo $this->_config[0]['vars']['Sign_out']; ?>
</a><?php else: ?><a href="?account=signin"><?php echo $this->_config[0]['vars']['Sign_in']; ?>
</a> |<a href="?account=signup"><?php echo $this->_config[0]['vars']['Sign_up']; ?>
</a>        <?php endif; ?>
| <a href="/?feedback"  id="toplinks-feedback"><?php echo $this->_config[0]['vars']['Feedback']; ?>
</a> |<a href="javascript:;" id="toptabs-menu-language"><?php echo $this->_config[0]['vars']['Language']; ?>
 <small>&#9660;</small></a>
						<script type="text/javascript">g_initHeaderMenus()</script>
       <script type="text/javascript">g_initHeaderMenus()</script>
     </div>
    </div>


	<div id="home">

		
		<div class="pad"></div>
<br>
		<div class="home-search" id="home-search">
		<form name="searchform" method="get" action="." onsubmit="if(trim(this.elements[0].value) == '') return false">
			<input name="search" type="text" id="kghjklvhj43v6" >
		<a href="javascript:;" onclick="document.searchform.submit();"></a></form>
		</div>
		
		<script type="text/javascript">var _ = ge('kghjklvhj43v6'); LiveSearch.attach(_); _.focus();</script>
<br>
		<h1><?php echo $this->_tpl_vars['title']; ?>
</h1>
		<span id="h43jv6jk346" class="menu-buttons"></span>
		<script type="text/javascript">
			Menu.addButtons(ge('h43jv6jk346'), mn_path);
		</script>

<br><br><br>
<center><?php echo $this->_config[0]['vars']['Tooltips_mainpage']; ?>
  <a href="/?powered"><?php echo $this->_config[0]['vars']['Tooltips_mainpage_more']; ?>
</a></center><br>
<center><?php echo $this->_config[0]['vars']['Gatherer_desk']; ?>
 <a href="/?gdb" target="_blank" onClick="popupWin = window.open(this.href, 'Gatherer_FreedomHead', 'location,width=400,height=300,top=0'); popupWin.focus(); return false;"><?php echo $this->_config[0]['vars']['Gatherer_generate']; ?>
</a></center>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "newsbox.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>		

	</div>
	
	<div id="footer">
	</div>
	<noscript><div id="noscript-bg"></div><div id="noscript-text"><b><?php echo $this->_config[0]['vars']['js_err']; ?>
</div></noscript>
	<script type="text/javascript">DomContentLoaded.now()</script>
</body>
</html>