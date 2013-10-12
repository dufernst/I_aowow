<?php /* Smarty version 2.6.26, created on 2013-10-11 18:00:53
         compiled from footer.tpl */ ?>
	<div id="footer">
<?php if (isset ( $this->_tpl_vars['mysql'] )): ?>
		<?php echo $this->_config[0]['vars']['Number_of_MySQL_queries']; ?>
: <?php echo $this->_tpl_vars['mysql']['count']; ?>
<br>
		<?php echo $this->_config[0]['vars']['Time_of_MySQL_queries']; ?>
: <?php echo $this->_tpl_vars['mysql']['time']; ?>

<?php endif; ?>
<?php 
include('/configs/tplconfig.php');
if ($debug == 1)
	{
		function GetMicroTime()
			{
				list($microseconds, $seconds) = explode(" ", microtime());
				return ((float)$microseconds + (float)$seconds);
			} 
		
		$nStartTime = GetMicroTime(); 
		$nEndTime = GetMicroTime();
		echo "<center><font color='grey'>";
		$szGeneratedTime = "Page generated in ".number_format(($nEndTime - $nStartTime), 6)." seconds.<br />";
		echo "$szGeneratedTime";
		echo "Used ".round(memory_get_peak_usage()/(1024*1024),3)." MB of RAM<br />";
		$Contents = ob_get_contents(); 
		echo "Total filesize: ".strlen($Contents)." bytes";
		echo "</font></center>";
	}
else
	{
		function GetMicroTime()
			{
				list($microseconds, $seconds) = explode(" ", microtime());
				return ((float)$microseconds + (float)$seconds);
			} 
		
		$nStartTime = GetMicroTime(); 
		$nEndTime = GetMicroTime();
		$szGeneratedTime = "Page generated in ".number_format(($nEndTime - $nStartTime), 6)." seconds.";
		echo "<!-- $szGeneratedTime -->\r\n";
		echo "<!-- Затрачено оперативной памяти ".round(memory_get_peak_usage()/(1024*1024),3)." MB -->\r\n";
		$Contents = ob_get_contents(); 
		echo "<!-- Общий размер файла: ".strlen($Contents)." байт -->";	
	}
 ?>
	<br>
	</div>
</div>
</div>
<script defer="defer"><?php if ($this->_tpl_vars['wh_ss']['status'] == 'false'): ?>
	load_ss();
<?php endif; ?></script>
<!--[if lte IE 6]></td><th class="ie6layout-th"></th></tr></table><![endif]-->
</body>
</html>