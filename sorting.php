<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sorting Arrays</title>
</head>

<body>
<table border="0" cellspacing="3" cellpadding="3" align="center">
<tr>
<td><h2>Rating</h2></td>
<td><h2>Title</h2></td>
</tr>

<?php
//create the array
$movies = array (
10=>'casablanca',
9=>'to kill a Mockingbird',
2=>'the english patient',
8=>'stranger than fiction',
5=>'story of the weeping camel',
7=>'donnie darko'
);
echo '<tr><td colspan="2"><b>In their original order:</b></td></tr>';
foreach ($movies as $key => $value) {
	echo "<tr><td>$key</td>
	<td>$value</td></tr>\n";
}

//display the movies sorted by title:
asort($movies);
echo '<tr><td colspan="2"><b>Sorted by title:</b></td></tr>';
foreach($movies as $key => $value){
	echo "<tr><td>$key</td>
	<td>$value</td></tr>\n";
}

ksort($movies);
echo '<tr><td colspan="2"><b>Sorted by rating:</b></td></tr>';
foreach($movies as $key => $value){
	echo "<tr><td>$key</td>
	<td>$value</td></tr>\n";
}
?>
</body>
</html>