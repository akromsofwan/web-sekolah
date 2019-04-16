<?php
$month= date ("m");
$year=date("Y");
$day=date("d");
$endDate=date("t",mktime(0,0,0,$month,$day,$year));
echo '<table align="center" border="0" cellpadding=5 cellspacing=5 style=""><tr><td align=center>';
echo "Today : ".date("d F Y ",mktime($day,$month,$year));

echo '</td></tr></table>';
echo '<table class="table-responsive" align="center" border="0" cellpadding=6 cellspacing=0 style="border:1px solid #CCCCCC">
<tr bgcolor="#EFEFEF">
<td align=center><font color=red>Ahad</font></td>
<td align=center>Senin</td>
<td align=center>Selasa</td>
<td align=center>Rabu</td>
<td align=center>Kamis</td>
<td align=center>Jumat</td>
<td align=center>Sabtu</td>
</tr>';
	

	

$s=date ("w", mktime (0,0,0,$month,1,$year));

	for ($ds=1;$ds<=$s;$ds++) {
		echo "<td style=\"font-family:arial;color:#B3D9FF\" align=center valign=middle bgcolor=\"#FFFFFF\"></td>";
	}

	
	for ($d=1;$d<=$endDate;$d++) 
		{
		if (date("w",mktime (0,0,0,$month,$d,$year)) == 0) 
		{
			echo "<tr>"; 
		}
		
			$fontColor="#000";

		if (date("D",mktime (0,0,0,$month,$d,$year)) == "Sun") 
		{ 
			$fontColor="red"; 
		}

			echo "<td style=\"font-family:arial;color:#333333\" align=center valign=middle> <span style=\"color:$fontColor\">$d</span></td>";

		if (date("w",mktime (0,0,0,$month,$d,$year)) == 6) 
		{
			echo "</tr>"; 
		}
		}

echo '</table>'; 
?>