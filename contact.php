<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Me</title>
<link rel="stylesheet" href="includes/style.css" type="text/css" media="screen"/>
</head>

<body>
<div id="header">
<h1>Contact Me</h1>
<?php #script contact.php
//check for from submission
if (isset($_POST['submitted'])) {

//minimal form validation
if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comments'])) {

//create the body
$body = "Name: {$_POST['name']}\n\nComments: {$_POST['comments']}";
//make it no longer than 70 characters long
$body = wordwrap($body, 70);

//send he email
mail('tefari.web@gmail.com' , 'Contact Form Submission', $body, "From: {$_POST['email']}");
//print a message
echo '<p>Thank you for contacting me. I will reply some day.<em></p>';
//clear $_POST (so that the form's not sticky):
$_POST = array ();
} else { 
echo '<p style="font-weight: bold; color: #C00">Please fill out the form completely. </p>';
}
}
//create the html form
?>

<p>Please fill out this form to contact me. </p>
<form action="contact.php" method="post">

<p>Name: <input type="text"name="name" size="30" maxlength="60" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>" /> </p><br />
<p>Email Address : <input type="text"name="email" size="30" maxlength="80" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" /> </p><br />
<p>Comments: <textarea name="comments" rows="5" cols="30" <?php if (isset($_POST['comments'])) echo $_POST['comments']; ?> /></textarea> </p><br />
<p><input type="submit" name="submit" value="Send" /> </p><br />
<input type="hidden" name="submitted" value="TRUE" /><br />
</form>
</body>
</html>
