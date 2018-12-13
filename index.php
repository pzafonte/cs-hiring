<?php
session_start();
$_SESSION["verify"] = "wroshyr";
include("header.php");
?>
<SCRIPT LANGUAGE="JavaScript">
//	alert('here2');
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
 
	function fileCheck() 
	{ 
		var cv = document.form1.cv.value; 
		var ts = document.form1.ts.value; 
		var rs = document.form1.rs.value; 
		var cl = document.form1.rs.value; 
		if ((cv == "") || (cv.substr(cv.length - 4) != ".pdf")) 
		{ 
			alert ("You must provide a CV in pdf format."); 
			return false; 
		} 
		if ((rs== "") || (rs.substr(rs.length - 4) != ".pdf")) 
		{ 
			alert ("You must provide a Research Statement in pdf format."); 
			return false; 
		} 
		if ((ts == "") || (kc.substr(ts.length - 4) != ".pdf")) 
		{ 
			alert ("You must provide a Teaching Statement in pdf format."); 
			return false; 
		} 
		if ((cl == "") || (kc.substr(cl.length - 4) != ".pdf")) 
		{ 
			alert ("You must provide a Cover Letter in pdf format."); 
			return false; 
		} 
		return true; 
	}	 
 
	function checkForm() 
	{ 
//	alert("here");
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
                if (!fileCheck()) 
                        return false; 
		if (!passCheck()) 
			return false; 
		alert("Your application will now be submitted. You can use the password created to do updates. You will receive an email with instructions on how to submit recommendation letter. Thank you.");
		return true; 
	}		 
			 
</SCRIPT>
<h5 class="body">CS Department Job Application</h5>
<p> 
Please fill in the form below to submit your application for a computer science faculty position: 
</p> 
<p>In order to upload recommendation letters, you will be receiving an email upon application with a link that your recommenders may follow to access the appropriate form. The same instructions will be explained when you successfully apply through this page.</p>
<p> 
        <b>Note:</b> Providing a password will allow you to subsequently edit your application, by logging back into the application site using the email and password you provided when you initially registered and submitted your application. 
</P> 
<form action="register.php" method="POST" name="form1" enctype="multipart/form-data" onsubmit="return checkForm()"> 
<p> 
<TABLE width=600> 
<TR> 
	<TD> 
		First Name: 
	</TD> 
	<TD> 
		<input type="text" required name="name" size="30" maxlength="30"> 
	</TD> 
</TR> 
<TR> 
	<TD> 
		Last Name: 
	</TD> 
	<TD> 
		<input type="text" required name="surname" size="30" maxlength="30"> 
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
<!-- <input type="checkbox" name="ml" value=1>Machine Learning<br/> -->
<input type="checkbox" name="ss" value=1>Computer Security<br/> <!--Secure Systems And Cryptography<br/> --> 
<input type="checkbox" name="vg" value=1>Visual Computing<br/> <!-- Computer Vision and graphics -->
<!-- <input type="checkbox" name="ese" value=1>Experimental Software Engineering<br/> -->
<input type="checkbox" name="net" value=1>Big Data<br/> <!-- formerly networking -->
<input type="checkbox" name="oth" value=1>Other 
</td> 
</tr> 
        <tr><td>&nbsp;</td></tr> 
<TR> 
	<TD> 
		Email: 
	</TD> 
	<TD> 
		<input type="text" required name="email" size="30" maxlength="50"> 
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
        Cover Letter: 
	</TD> 
	<TD> 
		<input type="file" name="cl"> 
	</TD> 
        <td>  (PDF only) </td> 
</TR> 
<TR> 
	<TD> 
        Curriculum Vitae: 
	</TD> 
	<TD> 
		<input type="file" name="cv"> 
	</TD> 
        <td>  (PDF only) </td> 
</TR> 
<TR> 
	<TD> 
        Research Statement: 
	</TD> 
	<TD> 
		<input type="file" name="rs"> 
	</TD> 
        <td>  (PDF only) </td> 
</TR> 
<TR> 
	<TD> 
        Teaching Statement: 
	</TD> 
	<TD> 
		<input type="file" name="ts"> 
	</TD> 
        <td>  (PDF only) </td> 
</TR> 
</table> 
</p> 
<p>Letters of recommendation: after you submit your application a URL will be generated and displayed.  Please save this URL and give it to those writing letters for you.  They will be able to securely upload their letters to that URL, and the letters will be automatically associated with your application.  If you misplace the URL, it can be retrieved by once you re-login to your account here.</p>
<p> 
Postal Address:<BR/> 
<textarea name="address" cols=60 rows=6></textarea><BR/> 
<br/> 
<input type="hidden" name="MAX_FILE_SIZE" value="30000" /> 
<!-- 
Gender: <BR/> 
<input type="radio" name="gender" value="F">Female<BR/> 
<input type="radio" name="gender" value="M">Male<BR/> 
<BR/><BR/> 
Racial/Ethnic Heritage: (Check only one) Stevens Institute of Technology is required under CFR 41 of the Department of  
Labor to give all applicants the opportunity to self-identify. This information will not in no way affect your applicat 
ion for employment.<BR/> 
<input type="radio" name="eth" value='W'><B>White (Not of Hispanic origin)</B> - All persons having origins in any of t 
he original people of Europe, North Africa or the Middle East<BR/> 
<input type="radio" name="eth" value='B'><B>Black (Not of Hispanic origin)</B> - All persons having origins in any of t 
he Black racial groups of Africa<BR/> 
<input type="radio" name="eth" value='H'><B>Hispanic</B> - All persons of Mexican, Puerto Rican, Cuban, Central or Sout 
h American or other Spanish culture or origin, regardless of race.<BR/> 
<input type="radio" name="eth" value='A'><B>Asian or Pacific Islander</B> - All persons having origins in any of the or 
iginal peoples of the Far East, Southeast Asia, the Indian Subcontinent or the Pacific Islands. This area includes, for 
 example, China, India, Japan, Korea, the Philippine Islands and Samoa<BR/> 
<input type="radio" name="eth" value='I'><B>American Indian or Alaskan Native</B> - All persons having origins in any o 
f the original peoples of North America and who maintain cultural indentification through tribal affiliation or communi 
ty recognition.<BR/> 
<BR/> 
<br/> 
Stevens Institute of Technology is an Equal Opportunity Employer committed to the policies and principles of Non-Discri 
mination and Affirmative Action (AA).  To implement these policies and to respond to federal affirmative action recordk 
eeping and reporting requirements, it is important that the following information be gathered from all applicants.  Pro 
viding this information is optional.  Failure to submit data will not in any way affect your application for employment 
.  The information provided will remain confidential and be used primarily for government reporting purposes. 
--> 
<br/> 
<input type="submit" name="submit" value="Submit Application" onclick="return checkForm()"> 
</p> 
</form> 
<p> 
Have you already applied?  You can review your application by <A HREF="login.php">logging back in.</A></p> 
<?PHP include("footer.php"); ?>
