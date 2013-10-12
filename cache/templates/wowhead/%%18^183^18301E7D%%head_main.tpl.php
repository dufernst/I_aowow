<?php /* Smarty version 2.6.26, created on 2013-10-11 18:00:43
         compiled from head_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'head_main.tpl', 78, false),array('modifier', 'escape', 'head_main.tpl', 80, false),)), $this); ?>
	<title><?php echo $this->_tpl_vars['app_name']; ?>
 : <?php 

function array_random($arr, $num = 1) {
    shuffle($arr);
    
    $r = array();
    for ($i = 0; $i < $num; $i++) {
        $r[] = $arr[$i];
    }
    return $num == 1 ? $r[0] : $r;
}

$locale = $this->_tpl_vars['locale'];
if($locale == 8)
{ include('configs/phrases/ruru.php'); }
elseif ($locale == 0)
{ include('configs/phrases/enen.php'); }

print_r(array_random($titlephrases));
  ?></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf8">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
	<meta name="copyright" content="AOWOW 2013 <http://data.riverrise.net/>">
	<meta name="generator" content="<?php echo $this->_tpl_vars['GENERATOR_TAG']; ?>
">
	<link rel="SHORTCUT ICON" href="/images/favicon.ico" >
	<?php 
	$u_agent = $_SERVER['HTTP_USER_AGENT'];
	if(preg_match('/Opera/i',$u_agent))
	{	echo'<link rel="apple-touch-icon" href="/images/operalogo.png">';	}
	else
	{ 	echo'<link rel="apple-touch-icon-precomposed" href="/images/apple-touch-icon.png" />';	}
	 ?>
	<link rel="stylesheet" type="text/css" href="templates/wowhead/css/global.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" >
	<link rel="stylesheet" type="text/css" href="templates/wowhead/css/locale_<?php echo $this->_tpl_vars['language']; ?>
.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" >
	<link rel="stylesheet" type="text/css" href="templates/wowhead/css/home.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" >
	<!--[if IE]><link rel="stylesheet" type="text/css" href="templates/wowhead/css/global_ie.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" ><![endif]-->
	<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="templates/wowhead/css/global_ie6.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" ><![endif]-->
	<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="templates/wowhead/css/global_ie67.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" ><![endif]-->
<?php if ($this->_tpl_vars['page']['Book']): ?>
	<link rel="stylesheet" type="text/css" href="templates/wowhead/css/Book.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
">
<?php endif; ?>
<?php if ($this->_tpl_vars['page']['Mapper']): ?>
	<link href="templates/wowhead/css/Mapper.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" type="text/css" rel="stylesheet">
	<!--[if lte IE 6]><link href="templates/wowhead/css/Mapper_ie6.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" type="text/css" rel=stylesheet><![endif]-->
<?php endif; ?>
<?php if ($this->_tpl_vars['page']['Talent']): ?>
		<link rel="stylesheet" type="text/css" href="templates/wowhead/css/talentcalc.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" />
		<link rel="stylesheet" type="text/css" href="templates/wowhead/css/talent.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" />
		<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="templates/wowhead/css/TalentCalc_ie6.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="templates/wowhead/css/TalentCalc_ie67.css?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" /><![endif]-->
<?php endif; ?>
    <script type="text/javascript">
        var DOMAIN = "http://<?php echo $_SERVER['HTTP_HOST']; ?>
"; 
    </script>

	<script src="templates/wowhead/js/locale_<?php echo $this->_tpl_vars['language']; ?>
.js?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" type="text/javascript"></script>
	<script src="templates/wowhead/js/swfobject.js?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" type="text/javascript"></script>
	<script src="templates/wowhead/js/global.js?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" type="text/javascript"></script>
	<script src="templates/wowhead/js/Markup.js?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" type="text/javascript"></script>
<?php if ($this->_tpl_vars['page']['Mapper']): ?>
	<script src="templates/wowhead/js/Mapper.js?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" type="text/javascript"></script>
	<style type="text/css"><?php echo '.zone-picker { margin-left: 4px }'; ?>
</style>
<?php endif; ?>
<?php if ($this->_tpl_vars['page']['Book']): ?>
	<script src="templates/wowhead/js/Book.js?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" type="text/javascript"></script>
<?php endif; ?>
<?php if ($this->_tpl_vars['page']['Talent']): ?>
	<script src="?data=glyphs" type="text/javascript"></script>
	<script src="templates/wowhead/js/TalentCalc_<?php echo $this->_tpl_vars['language']; ?>
.js?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" type="text/javascript"></script>
	<script src="templates/wowhead/js/TalentCalc.js?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" type="text/javascript"></script>
	<script src="templates/wowhead/js/talent.js?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" type="text/javascript"></script>
<?php endif; ?>
<?php if ($this->_tpl_vars['page']['maps']): ?>
	<script src="templates/wowhead/js/maps.js?<?php echo $this->_tpl_vars['AOWOW_REVISION']; ?>
" type="text/javascript"></script>
<?php endif; ?>

	<script type="text/javascript">
		var g_serverTime = new Date('<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y/%m/%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y/%m/%d %H:%M:%S")); ?>
');
		g_locale = { id: <?php echo $this->_tpl_vars['locale']; ?>
, name: '<?php echo $this->_tpl_vars['language']; ?>
' };
<?php if ($this->_tpl_vars['user']): ?>g_user = { id: <?php echo $this->_tpl_vars['user']['id']; ?>
, name: '<?php echo ((is_array($_tmp=$this->_tpl_vars['user']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
', roles: <?php echo $this->_tpl_vars['user']['roles']; ?>
, permissions: <?php echo $this->_tpl_vars['user']['perms']; ?>
 };<?php endif; ?>
	</script>