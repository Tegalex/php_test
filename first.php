<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Basic PHP Page</title>
</head>

<body>
<p>This is a standard HTML </p>
<p> After, I use construct echo():</p>
<?php
echo 'This was generated using PHP!';
?>
<?php
echo '<p>Hello, <b>world</b>!</p>';
echo '<p>This sentence is</p> 
<p>printed over two lines.</p>';
?>
<?php
$file = $_SERVER['SCRIPT_FILENAME'];
$user = $_SERVER['HTTP_USER_AGENT'];
$server = $_SERVER['SERVER_SOFTWARE'];
$first_name = 'Haruki';
$last_name = 'Murakami';
$book = 'Kafka on the Shore';
$city = 'Seattle';
$state = 'Washington';
$address = $city.', '.$state.' 98191';
$num = strlen('some string');

//numbers
$quantity = 30;
$price = 119.95;
$taxrate = .05; //5% sales tax
$total = $quantity * $price;
$total = $total + ($total*$taxrate); //calculate and add the tax
$total = number_format($total, 2);
define ('TODAY', 'AUGUST 28, 2007');

//print the user's information:
echo "<p>You are viewing this page using: <br /> <b>$user</b></p>\n";
echo "<p>This server is running: <br /><b>$server</b></p>\n";
echo "<p>You are running the files: <br />$file</b></p>\n";
echo "<p>The book <em>$book</em> was written by $first_name $last_name.</p>";
echo "<p>$address</p>\n";
echo "<p>$num</p>";
echo '<p>You are purchasing <b>' . $quantity . '</b> widget(s) at a cost of <b>$' . $price . '</b> each. With tax, the total comes to <b>$'. $total . '</b>.</p>';
echo '<p>Today is '.TODAY. '.<br />This server is runnign version <b>' .PHP_VERSION. '</b> of PHP on the <b>' .PHP_OS. '</b> operating system.</p>';
echo "print this {$_SERVER['HTTP_HOST']}\n<br />";
echo "print this {$_SERVER['SERVER_PORT']}\n<br />";
echo "print this {$_SERVER['HTTP_CONNECTION']}\n<br />";
//echo "print this {$_SERVER['']}\n<br />";
 print_r($_GET);
 if($_GET["a"] === "") echo "a is an empty string\n";
 if($_GET["a"] === false) echo "a is false\n";
 if($_GET["a"] === null) echo "a is null\n";
 if(isset($_GET["a"])) echo "a is set\n";
 if(!empty($_GET["a"])) echo "a is not empty";
 
 echo $_COOKIE["user"];
 print_r ($_COOKIE);

?>

</body>
</html>