<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form FeedBack</title>

<style type="text/css" title="text/css" media="all">
.error {
	font-weight: bold;
	color: #C00
}
</style>
</head>

<body>
<?php #script  - handle_form.php
//create a shorthand for the form data
/*$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$comments = $_REQUEST['comments'];*/

/*not used
$_REQUEST['age'];
$_REQUEST['gender'];
$_REQUEST['submit'];
*/

/*if (isset($_REQUEST['gender'])) {
	$gender = $_REQUEST['gender'];
} else {
	$gender = NULL;
}*/

if (!empty($_REQUEST['name'])) {
	$name = $_REQUEST['name'];
} else {
	$name = NULL;
	echo '<p> class="error">You forget to enter your email name!</p>';
}

if (!empty($_REQUEST['email'])) {
	$email = $_REQUEST['email'];
} else {
	$email = NULL;
	echo '<p> class="error">You forget to enter your email address!</p>';
}

if (!empty($_REQUEST['comments'])) {
	$comments = $_REQUEST['comments'];
} else {
	$comments = NULL;
	echo '<p> class="error">You forget to enter your email comments!</p>';
}
//print the submitted information:
echo "<p>Thank you, <b>$name</b>, for the following comments:<br />
<tt>$comments</tt></p>
<p>We will reply to you at <i>$email</i>.</p>\n";
//print a message based upon the gender value:

if (isset($_REQUEST['gender'])){
	$gender = $_REQUEST['gender'];
if ($gender == 'M') {
	echo '<p><b>Good day, Sir!</b></p>';
} elseif ($gender == 'F') {
	echo '<p><b>Good day, Madam!</b></p>';
} else /*($gender == NULL)*/{ //no gender selected
$gender = NULL;
echo '<p class="error">Gender should bo either "M" or "F"!</p>';
}
}
 else { //$_REQUEST['gender']is not set.
//$gender = NULL;
echo '<p class="error">You forget to select your gender!</p>';
}
//if everything is OK, print the message

if ($name && $email && $gender && $comments) {
	echo"<p>Thank you, <b>$name</b>, for the following comments:<br />
	<tt>$comments</tt></p>
	<p>We will reply to you at <i>$email</i>.</p>\n";
} else { //missing  form value
echo '<p class="error">Please go back and fill out the form again.</p>';
}


?>


</body>
</html>