<?php #script - register.php

$page_title = 'Register';

include ('includes/header.html');
 
 //check if the form has been submitted
 
if (isset($_POST['submitted'])) {
$errors = array(); //initialize an error array

//check for a first name
if (empty($_POST['first_name'])) {
 $errors = 'You forgot to enter your first name.';
 } else {
 $fn = trim($_POST['first_name']);
 }
 
 //check for a last name
 if (empty($_POST['last_name'])) {
 $errors = 'You forgot to enter your last name.'
 } else {
 $ln = trim($_POST['last_name']);
 }
 
 //check for an email address
 if (empty($_POST['email'])) {
 $errors = 'You forgot to enter your email address.';
 } else {
 $e = trim($_POST['email']);
 }
 
 //check for a password and match against the confirmed password
 if (!empty($_POST['pass1'])) {
 if ($_POST['pass1'] != $_POST['pass2']) {
 $errors = 'Your password did not match the confirmed password.';
 } else {
 $p= trim($_POST['pass1']);
 }
 } else {
 $errors = 'You forgot to enter your password.';
 }
 
 if (empty($errors)) { //if everything's ok
 //register the user in the database
 
 require_once ('../mysqli_connect.php'); //connect to the db
 //make the query
 $q = "INSERT INTO users(first_name, last_name, email, pass, registration_date) VALUES ('$fn', '$ln', '$e', SHA1('$p'), NOW())";
 $r = @mysqli_query ($dbc, $q); //run the query
 if ($r) { //if it run ok
 //print a message
 echo '<h1> thank you!</h1>
 <p>you are now registered. in chapter 11 you will actually be able to log in! </p><p><br /></p>';
 } else { //if it did not run ok
 //public message
 echo'<h1>System error</h1>
 <p class="error"> you could not be registered due to a system error. we apologize for any inconvenience.</p>';
 
 
 //debugging message
 echo '<p>' . mysqli_error($dbc) . '<br /> <br />Query: ' .$q . '</p>';
 } //end of if ($r ) if.
 mysqli_close($dbc); //close the database connection
 //include the footer and quit the script
 include('includes/footer.html');
 ehit();
 } else { //report the errors
 echo '<h1>Error!</h1>
 <p class=""error>the following error(s) occurred:<br />';
 foreach ($errors as $msg) { //print each error
 echo " - $msg<br />\n";
 }
 
 echo'</p><p>please try again.</p><p><br /></p>';
 } //end of if (empty($errors)) if.
 
 <h1>register</h1>
 <form action="register.php" method="post">
 <p>first name: <input type="text" name="first_name" size="15" max_length="20" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>" /></p>
 <p>last name: <input type="text" name="last_name" size="15" max_length="40" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>" /></p> 
  <p>email address: <input type="text" name="email" size="20" max_length="80" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" /></p> 
 <p>password: <input type="password" name="pass1" size="10" max_length="20" /></p> 
  <p>confirm password: <input type="password" name="pass2" size="10" max_length="20" /></p> 
<p><input type="submit" name="submit" value="register" /><p>
<input type="hidden" name="submitted" value="TRUE" /
</form>
<?php
include ('includes/footer.html');
?>