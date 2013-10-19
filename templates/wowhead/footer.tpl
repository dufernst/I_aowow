	<div id="footer">
{if isset($mysql)}
		{#Number_of_MySQL_queries#}: {$mysql.count}<br>
		{#Time_of_MySQL_queries#}: {$mysql.time}
{/if}
{php}
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
{/php}
	<br>
	</div>
</div>
</div>
<script defer="defer">{if $wh_ss.status == 'false'}
	load_ss();
{/if}</script>
<!--[if lte IE 6]></td><th class="ie6layout-th"></th></tr></table><![endif]-->
</body>
</html>
