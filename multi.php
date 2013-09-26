<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Multidimensional Arrays</title>
</head>

<body>
<p> Some North American States, Provinces and Territories:</p>
<?php
$mexico = array(
'YU' => 'Yucatan',
'BC' => 'Baja California',
'OA' => 'Oaxaca'
);

$us = array(
'MD' => 'Maryland',
'IL' => 'Illinois',
'PA' => 'Pennsylvania',
'IA' => 'Iowa'
);

$canada = array(
'QC' => 'Quebec',
'AB' => 'Alberta',
'NT' => 'Northwest Territories',
'YT' => 'Yukon',
'PE' => 'Prince Edward Island'
);

$n_america = array(
'Mexico' =>$mexico,
'United States' => $us,
'Canada' => $canada
);

foreach ($n_america as $country => $list)
{
	echo "<h2>$country</h2><ul>";
	foreach ($list as $k => $v){
		echo "<li>$k - $v</li>\n";
	}
	echo'</ul>';
}
?>
</body>
</html>