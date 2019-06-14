<?php

$email = htmlspecialchars($_POST['email']);
$header = htmlspecialchars($_POST['header']);
$content = htmlspecialchars($_POST['content']);

if (mail($email, $header, $content, "From: deagl_dim@mail.ru"))
{
	echo "Отправлено";
}
else
{
	echo "Что-то пошло не так";
}