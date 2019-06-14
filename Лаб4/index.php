<form action="index.php" method="post">
<p><textarea name="text"></textarea></p>
<p><input type="submit"/></p>
</form>
<?php
function handler($matches)
{
	
}
echo "<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<!--[if lt IE 9]>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<![endif]-->
<title>Laba 4</title>
</head>
</html>";

$text = htmlspecialchars($_POST['text']);
if ($text != "")
{
	//if (preg_match("/^\w+(\.\w+)*@(\w+\.)+\w{2,5}$/", $getemail))
	$text = preg_replace_callback("/\w+(\.\w+)*@(\w+\.)+\w{2,5}/", 
	function ($matches)
	{
		return "<a href='mailto:$matches[0]'>$matches[0]</a>";
	},
	$text);
	echo $text;
}
?>
