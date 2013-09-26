<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Calendar</title>
</head>

<body>
<form action="calendar.php" method="post">
<?php
$months = array (1=>'january','february','march','april','may','june','july','august','september','october','november','december');
$days = range (1, 31);
$years = range (2008, 2018);

echo '<select name="month">';
foreach ($months as $key => $value){
	echo "<option value=\"$key\">$value</option>\n";
}
echo '</select>';
echo '<select name="day">';
//foreach ($days as $value){
//	echo "<option value=\"$value\"$value</option>\n";
//}-->
for ($day = 1;$day <=31; $day++) {
	echo"<option value=\"$day\">$day</option>\n";
}
echo '</select>';

echo '<select name="year">';
//foreach ($years as $value){
//	echo "<option value=\"\$value\">$value</option>\n";
//}
for ($year=2008; $year<= 2018; $year++){
	echo "<option value=\"$value\">$year</option>\n";
}
echo '</select>';
?>
</body>
</html>