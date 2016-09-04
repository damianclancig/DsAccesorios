<?php
	if((isset($row['novedad']) and $row['novedad']=="SI") or (isset($row['predeterminada']) and $row['predeterminada']=="SI"))
	{
		$color = ' bgcolor="#FEFFBC" id="'.$g.'" onMouseOver="Color(\'#FEFF64\', \''.$g.'\');" onMouseOut="Color(\'#FEFFBC\', \''.$g++.'\');"';
		$flag=1;
	}
	elseif($flag==1)
	{
		$color = ' bgcolor="#FFFFFF" id="'.$g.'" onMouseOver="Color(\'#FFEAC0\', \''.$g.'\');" onMouseOut="Color(\'#FFFFFF\', \''.$g++.'\');"';
		$flag=0;
	}
	else
	{
		$color = ' bgcolor="#FFF9EC" id="'.$g.'" onMouseOver="Color(\'#FFEAC0\', \''.$g.'\');" onMouseOut="Color(\'#FFF9EC\', \''.$g++.'\');"';
		$flag=1;
	}
?>