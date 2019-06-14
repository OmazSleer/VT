<?php

$tmp = getdate();
$curr_date = date_create("$tmp[year]-$tmp[mon]-$tmp[mday]");
$date = date_create(htmlspecialchars($_POST['date']));
$tmp = $curr_date->diff($date);
echo "$tmp->y лет $tmp->m месяцев $tmp->d дней ";