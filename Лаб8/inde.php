<?php

define("fileName", "counter.txt");
if (file_exists(fileName))
{
	$counter = file_get_contents(fileName);
	echo "Вы ".++$counter."-й посетитель сайта";
	file_put_contents(fileName, $counter);
}
else
{
	echo "Вы 1-й посетитель сайта";
	file_put_contents(fileName, 1);
}