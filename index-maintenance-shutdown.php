<?PHP require("header.php");
?>
<SCRIPT LANGUAGE=JavaScript>
	function passCheck()
	{
		var ret = true;
		if (document.form1.pass.value == "")
		{
			 ret = confirm("Warning: You are strongly advised to create a password when creating your profile\nIf you do not enter a password, you will not be able to edit your profile after it has been submitted\nPlease confirm that you do NOT want a password.");
		}
		if (document.form1.pass.value != document.form1.pass2.value)
		{
			alert("Sorry, the password you entered does not match the password\nyou created for your profile, please try again.");
			form1.pass2.value = "";
			form1.pass2.focus();
			ret = false;
		}
		return ret;
	}
		
	function emailCheck()
	{
		if (document.form1.email.value == "")
		{
			alert("You must enter an email address\nso we have a way of contacting you.");
			return false;
		}
		// REG EXP WILL GO HERE
		return true;
	}
	function checkForm()
	{
		if (document.form1.name.value == "")
		{
			alert("You must enter a first name.");
			return false;
		}
		if (document.form1.surname.value == "")
		{
			alert("You must enter a surname.");
			return false;
		}
		if (!emailCheck())
			return false;
		if (document.form1.tel.value == "")
		{
			alert("You must enter a telephone number.");
			return false;
		}
		if (!passCheck())
			return false;
		return true;
	}		
			
</SCRIPT>
<p>
Please fill in the form below to submit your application for a computer science faculty position:
</p>
<p>
        <b>Note:</b> Providing a password will allow you to subsequently edit your application, by logging back into the application site using the email and password you provided when you initially registered and submitted your application.
</P>
<form action="register.php" method="POST" name="form1" enctype="multipart/form-data">
<p>
<TABLE width=600>
<TR>
	<TD>
		First Name:
	</TD>
	<TD>
		<input type="text" name="name" size="30" maxlength="30">
	</TD>
</TR>
<TR>
	<TD>
		Last Name:
	</TD>
	<TD>
		<input type="text" name="surname" size="30" maxlength="30">
	</TD>
</TR>
<TR>
	<TD>
		Telephone:
	</TD>
	<TD>
		<input type="text" name="tel" size="30" maxlength="15">
	</TD>
</TR>
<tr>
<td>
        Research Area(s): <br/>&nbsp;<br/>&nbsp;
</td>
<td>
<input type="checkbox" name="ss" value=1>Secure Systems<br/>
<input type="checkbox" name="ml" value=1>Machine Learning<br/>
<input type="checkbox" name="vg" value=1>Vision-based Medical Imaging
</td>
</tr>
        <tr><td>&nbsp;</td></tr>
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
<TR>
	<TD>
		Verify Password:
	</TD>
	<TD>
		<input type="password" name="pass2" size="30" maxlength="20" onblur="passCheck()">
	</TD>
</TR>
        <tr><td>&nbsp;</td></tr>
<TR>
	<TD>
        Curriculum Vitae:
	</TD>
	<TD>
		<input type="file" name="cv">
	</TD>
        <td>  (PDF or TEXT) </td>
</TR>
<TR>
	<TD>
        Research Statement:
	</TD>
	<TD>
		<input type="file" name="rs">
	</TD>
        <td>  (PDF or TEXT) </td>
</TR>
<TR>
	<TD>
        Teaching Statement:
	</TD>
	<TD>
		<input type="file" name="ts">
	</TD>
        <td>  (PDF or TEXT) </td>
</TR>
</table>
</p>
<p>
Mailing Address:<BR/>
<textarea name="address" cols=60 rows=6></textarea><BR/>
<br/>
<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
<br/>
<input type="submit" name="submit" value="Submit Application" onclick="return checkForm()">
</p>
</form>
<p>
Have you already applied?  You can review your application by <A HREF="login.php">logging back in.</A></p>
<?PHP require("footer.php"); ?>