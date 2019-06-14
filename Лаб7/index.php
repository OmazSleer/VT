<?php
$name = htmlspecialchars($_POST['name']);
$value = htmlspecialchars($_POST['value']);
$delete = htmlspecialchars($_POST['delete']);
if ($name != "")
{
	if ($delete == "on")
		unset($_COOKIE[$name]);
	else 
		setcookie($name,$value,time() + (1000000));
}
echo "
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<!--[if lt IE 9]>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<![endif]-->
<title>Laba 7</title>
</head>
<form action='index.php' method='post'>
<p><input placeholder='Название куки' type='text' name='name'/></p>
<p><input placeholder='значение' type='text' name='value'/></p>
<p>Удалить: <input type='checkbox' name='delete'/></p>
<p><input type='submit'/></p>
</form>";