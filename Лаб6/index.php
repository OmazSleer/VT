<form action='index.php' method='post'>
<p><input placeholder='Ваш e-mail' type='text' name='e-mail' pattern="\w+(\.\w+)*@(\w+\.)+\w{2,5}"/></p>
<p><input placeholder='Ваш номер телефона' type='text' name='phone' pattern="\+?[0-9]+(-[0-9]+)*"/></p>
<p><input placeholder='Ваш id товара' type='text' name='id' pattern="[0-9]{3}"/></p>
<p><input placeholder='ваши пожелания' type='text' name='wishes' pattern="[A-Za-zА-Яа-яЁё]+"/></p>
<p><input type='submit'/></p>
</form>
<?php
echo "
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<!--[if lt IE 9]>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<![endif]-->
<title>Laba 2</title>
</head>";
echo "Спасибо за заказ";