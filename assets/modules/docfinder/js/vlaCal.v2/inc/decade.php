<?php
	include_once("vars.php");
	
	// decades from $vlaCalFirstYear to $vlaCalLastYear (each row: first and last year shown, outside years included)
	$decadeAr	= array();
	for($dy = $vlaCalFirstYear; $dy + 11 <= $vlaCalLastYear + 1; $dy += 10) $decadeAr[] = array($dy, $dy + 11);

	$ts 		= vlaCalInt("ts", time());
	$ts_year	= date("Y", $ts);
	$decade		= $decadeAr[sizeof($decadeAr)-1];
	
	foreach($decadeAr as $d) {
		if($ts_year == $decadeAr[sizeof($decadeAr)-1][1] || $ts_year > $d[0] && $ts_year < $d[1] || $ts_year == $decadeAr[0][0]) {
			$decade = $d;
			break;
		}
	}
	
	$y_ts		= vlaCalPost("parent") == "year" ? mktime(1, 1, 1, 1, 1, date("Y", $ts)) : ""; //Selected year timestamp
	$m_ts		= vlaCalInt("m_ts", "");
	
	$c_ts 		= mktime(1, 1, 1, 1, 1, date("Y"));	//Timestamp current year
		
	$pr_ts		= mktime(1, 1, 1, 1, 1, $ts_year - 10);
	$nx_ts		= mktime(1, 1, 1, 1, 1, $ts_year + 10);
	
	//Fix for border years to decade errors
	if($ts_year == $decadeAr[sizeof($decadeAr)-1][1]) {
		$decade = $decadeAr[sizeof($decadeAr)-1];
		$pr_ts	= mktime(1, 1, 1, 1, 1, $ts_year - 11);
	} else if($ts_year == $decadeAr[0][0]) $nx_ts = mktime(1, 1, 1, 1, 1, $ts_year + 11);
?>
<table class="year" cellpadding="0" summary="{'ts': '<?php echo $ts?>', 'pr_ts': '<?php echo $pr_ts?>', 'nx_ts': '<?php echo $nx_ts;?>', 'label': '<?php echo ($decade[0]+1).' - '.($decade[1]-1)?>', 'current': 'decade'<?php echo ($decade == $decadeAr[0] ? ", 'hide_left_arrow': '1'" : '').($decade == $decadeAr[sizeof($decadeAr)-1] ? ", 'hide_right_arrow': '1'" : '')?>}">
<?php
	//Add years
	$year = $decade[0];
	for($i = 0; $i < 3; $i++) {
		echo "\t<tr>";
		for($y = 0; $y < 4; $y++) {
			$i_ts = mktime(1, 1, 1, 1, 1, $year);
			
			if($i == 0 && $y == 0 || $i == 2 && $y == 3) echo '<td ts="'.$i_ts.'" m_ts="'.$m_ts.'" class="outsideYear">'.$year.'</td>';
			else echo '<td ts="'.$i_ts.'" m_ts="'.$m_ts.'" class="'.($y_ts == $i_ts ? 'selected' : '').($c_ts == $i_ts ? 'current' : '').'">'.$year.'</td>';
			
			$year++;
		}
		echo "</tr>\n";
	}
?>
</table>