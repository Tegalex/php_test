<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simple Html Form</title>
</head>

<body>
<form action = "handle_form.php" method="post">
<fieldset><legend>Enter  your information in the form below</legend>
<p><b>Name:</b><input type="text" name="name" size="20" maxlength="40" /></p>
<p><b>Email Address:</b><input type="text" name="email" size="40" maxlength="60" /></p>
<p><b>Gender:</b><input type="radio" name="gender" value="M"/> <input type="radio" name="gender" value="F" />Female</p>

<p><b>Age: </b>
<select name="age">
<option value="0-29">Under 30</option>
<option value="30-60">Between 30 and 60</option>
<option value="60+">Over 60</option>
</select></p>

<p><b>Comments:</b><textarea name="comments" rows="3" cols="40"></textarea></p>
</fieldset>

<div align="center"><input type="submit" name"submit" value="Submit My Information" /></div>
</form>


</body>
</html>