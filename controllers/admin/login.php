<?php
/*
 * controllers/admin/login.php
 */

If ($_SERVER['REQUEST_METHOD'] == 'POST')	{
 		If ($_POST['password'] == "1234")	{
 		$_SESSION['valid'] = "Yes";
 		$login = "<p>click <a href='admin.php'>here</a> to continue</p>";
 		//return $login;
 		header("Location: admin.php");
 		}
 }

if($_SESSION['valid'] != "Yes") {

	$login = "<form method='post' action='admin.php'>
			<p><label>Password <input type='password' name='password'></label></p>
			<p><input type='submit'><p>
			</form></br>";
			
	return $login;
			
}