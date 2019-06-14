<?php
echo "<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<!--[if lt IE 9]>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<![endif]-->
<title>Laba 2</title>
</head>";
echo "<table border = 1>";
for ($i=0; $i < 1000; $i++)
{
	if (($i+1) % 5 == 0)
		echo "<tr bgcolor='blue'><td>kek</td></tr>";
	else
		echo "<tr><td>kek</td></tr>";
}
echo "</table>";

?>
