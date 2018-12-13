<?PHP
	session_start();
	$error = "";
	if (isset($_POST["pass"]))
	{
		if ($_POST["pass"] == "")
			$error = "<FONT COLOR='red'>You may not log back into the system without a password.</FONT>";
		else
		{
			include ("databaseClass.php");
			$db = new database();
			$db->send_sql("SELECT id_user FROM users WHERE email='".$_POST["email"]."' AND pass='".sha1($_POST["pass"])."'");
			if ($db->num_rows() == 1)
			{
				$row = $db->next_row();
				$_SESSION["id_user"] = $row[0];
				header("location: viewer.php");
			}
			else
			{
				$error = "<FONT COLOR='red'>The email and password combination you provided\ndoes not match any of our records.</FONT>";
			}
		}
	}
	require("header.php");
?>
<form action="login.php" method="POST" name="form1">
<p>Use this form to review and update an application you have already submitted.</p>
<p>You must first log back into the system using the email and password that you provided when you originally submitted your application.</p>
<TABLE width=200>
<TR>
	<TD>
		Email:
	</TD>
	<TD>
		<input type="text" name="email" size="30" maxlength="50">
	</TD>
</TR>
<TR>
	<TD>
		Password:
	</TD>
	<TD>
		<input type="password" name="pass" size="30" maxlength="20">
	</TD>
</TR>
</table>
<?PHP echo $error; ?>
<BR>
<input type="submit" name="submit" value="Login" onclick="return checkForm()">
</form>
<br/>
<br/>
<p>
If you have not already done so, <A HREF="index.php">submit an application for a faculty position.</a></p>
<?PHP require("footer.php"); ?>