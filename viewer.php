<?PHP
include("range.php");

if ($typeofsearch == 'B')
{
	if (isset($_GET["type"]) && ($_GET["type"] == 'T'))
	   $type = 'T';
	else
	   $type = 'R';
}
else
	$type = $typeofsearch;

	session_start();
	if (!isset($_SESSION["id_user"]))
		header ("location: login.php");
	else
	{
			include("databaseClass.php");
			$db = new database();
			$db->send_sql("SELECT * FROM users WHERE id_user='".$_SESSION["id_user"]."'");
			$row = $db->next_row();
			$_SESSION["name"] = rawurldecode($row[1]);
			$_SESSION["surname"] = rawurldecode($row[2]);
			$_SESSION["phone"] = $row[3];
			$_SESSION["email"] = $row[4];
			$_SESSION["address"] = $row[6];
			$_SESSION["level"] = $row[7];
			$_SESSION["ss"] = ($row[8]==1)?"checked":"";
			$_SESSION["vg"] = ($row[9]==1)?"checked":"";
			$_SESSION["ml"] = ($row[10]==1)?"checked":"";
			$_SESSION["ese"] = ($row[20]==1)?"checked":"";
			$_SESSION["net"] = ($row[21]==1)?"checked":"";
			$_SESSION["oth"] = ($row[22]==1)?"checked":"";
			$_SESSION["affil"] = $row[14];
			$_SESSION["hash"] = $row[25];
			if ($row[7] == 0)
			   $type = $row[26];
			$_SESSION["usertype"] = $type;
	}
	require("header.php");
?>
<SCRIPT LANGUAGE=JavaScript>
var userArray = new Array();
var disable = true;
var yourId = <?PHP echo $_SESSION["id_user"]; ?>;
function updateFields()
{
	var list = document.form1.applicants;
	var i = list.options[list.selectedIndex].value;
	if (i < 0)
		document.form1.reset();
	else
	{
		document.form1.name.value = userArray[i][1];
		document.form1.date.value = userArray[i][12];
		document.form1.schedule.value = unescape(userArray[i][13]);
		document.form1.link.value = unescape(userArray[i][11]);
		document.form1.affil.value = userArray[i][10];
		document.form1.surname.value = userArray[i][2];
		document.form1.tel.value = userArray[i][3];
		document.form1.email.value = userArray[i][4];
		document.form1.address.value = unescape(userArray[i][5]);
		document.form1.id.value = userArray[i][0];
		document.form1.status.value = userArray[i][14];
		if (yourId != userArray[i][0])
			document.form1.submit.disabled = disable;
		else
			document.form1.submit.disabled = false;
		if (document.form1.level.type == "hidden")
			document.form1.level.value = userArray[i][6];
		else
			document.form1.level.selectedIndex = userArray[i][6];
		if (userArray[i][7] == '0')
			document.form1.ss.checked = false;
		else
			document.form1.ss.checked = true;
		if (userArray[i][8] == '0')
			document.form1.vg.checked = false;
		else
			document.form1.vg.checked = true;
		if (userArray[i][9] == '0')
			document.form1.ml.checked = false;
		else
			document.form1.ml.checked = true;
		if (userArray[i][15] == '0')
			document.form1.ese.checked = false;
		else
			document.form1.ese.checked = true;
		if (userArray[i][16] == '0')
			document.form1.net.checked = false;
		else
			document.form1.net.checked = true;
		if (userArray[i][17] == '0')
			document.form1.oth.checked = false;
		else
			document.form1.oth.checked = true;

		document.links["viewfiles"].href = "viewfiles.php?id=" + userArray[i][0];
	}
}
	function emailCheck()
	{
		if (document.form1.email.value == "")
		{
			alert("You MUST enter an email address.");
			return false;
		}
		// REG EXP WILL GO HERE
		return true;
	}
	
	function enableEmail()
	{
		if (document.form1.email.disabled == true)
		{
			var answer = confirm("Are you sure you want to change your email address? This is used as your username.");
			if (answer)
			{
				document.form1.email.disabled = false;
				document.form1.button.disabled = true;
			}
		}
	}
	
	function checkForm()
	{
		document.form1.email.disabled = false;
		if (document.form1.deleteCheck.checked == true)
		{
			var del = confirm("You are about to DELETE the user. Are you sure?");
			if (del)
			{
				document.form1.action = "delete.php";
			}
			else
				return false;
		}
		if (document.form1.name.value == "")
		{
			alert("You MUST enter a name.");
			return false;
		}
		if (document.form1.surname.value == "")
		{
			alert("You MUST enter a surname.");
			return false;
		}
		if (!emailCheck())
			return false;
		if (document.form1.tel.value == "")
		{
			alert("You MUST enter a telephone number.");
			return false;
		}
		
		return true;
	}		
			

</SCRIPT>

<?PHP
if (($_SESSION["level"]) == 2)
{
	echo "<script language=\"javaScript\">\n";
	echo "disable = false;";
	echo "</script>";			
}

	$name = $_SESSION["name"];
	$surname = $_SESSION["surname"];
	$email = $_SESSION["email"];
	$phone = $_SESSION["phone"];
	$address = $_SESSION["address"];
	$ss = $_SESSION["ss"];
	$vg = $_SESSION["vg"];
	$ml = $_SESSION["ml"];
	$ese = $_SESSION["ese"];
	$net = $_SESSION["net"];
	$oth = $_SESSION["oth"];
	$affil = $_SESSION["affil"];
	
?>

<form action="update.php" method="POST" name="form1">
<?PHP
if ($_SESSION["level"] == 1 || $_SESSION["level"] == 2)
{
	$totalapps = 0;
	$totalusers = 0;
	$db = new database();
	echo "<SELECT NAME='applicants' SIZE=1 onChange='return updateFields()'>\n";
	echo "<OPTION value='-1'>Choose an Applicant\n";
	echo "<OPTION value='-2'>===================\n";
	echo "<OPTION value='-3'>&nbsp;\n";

	$db->send_sql("SELECT * FROM users WHERE (((id_user >= ".$start_index.") AND (id_user < ".$end_index.")) AND type='".$type."') OR (level > 0) ORDER BY surname");
	$i = 0;
	while ($row = $db->next_row())
	{
		$totalusers++;
		if ($row[7] < 1)
			$totalapps++;
		echo "<script language=\"javaScript\">\n";
		echo "userArray[".$i."]=new Array('".$row[0]."','".addslashes(rawurldecode($row[1]))."','".addslashes(rawurldecode($row[2]))."','".rawurldecode($row[3])."','".$row[4]."','".stripslashes($row[6])."','".$row[7]."','".$row[8]."','".$row[9]."','".$row[10]."','".$row[14]."','".$row[16]."','".$row[17]."','".$row[18]."','".$row[19]."','".$row[20]."','".$row[21]."','".$row[22]."');\n";
		echo "</script>";
		echo "<option value='".$i++."'>".rawurldecode($row[2])." ".rawurldecode($row[1])."\n";
	}
	echo "</SELECT><BR>";
	
}
?>
<p>
<?PHP
if ($_SESSION["level"] == 1 || $_SESSION["level"] == 2)
{
	echo "Viewing the applicants for ";
	if ($type == 'T')
	   echo "a Teaching Position.<BR/><A href='viewer.php?type=R'>Click here for Research Positions</a><BR/>";
	else
	   echo "a Research Position.<BR/><A href='viewer.php?type=T'>Click here for Teaching Positions</a><BR/>";
	echo  "<BR/><A HREF=\"viewallV2.php\">View All Research Applicants</A><BR>";
	echo  "<A HREF=\"viewallV2.php?type=T\">View All Teaching Faculty Applicants</A><BR>";
	echo  "<A HREF=\"viewallInvited.php\">View All Invited Applicants</A><BR>";
	echo  "<A HREF=\"emailer.php\">Mass email applicants</A><BR>";
	echo "There are a total of ".$totalusers." users registered, with ".$totalapps." applicants.<BR>";
}
?>
<BR><BR>
Application Data:
<TABLE width=200>
<TR>
	<TD>
		Name:
	</TD>
	<TD>
		<input type="text" name="name" size="30" maxlength="30" value="<?PHP echo $name?>">
	</TD>
</TR>
<TR>
	<TD>
		Surname:
	</TD>
	<TD>
		<input type="text" name="surname" size="30" maxlength="30" value="<?PHP echo $surname?>">
	</TD>
</TR>
<TR>
	<TD>
		<input type="button" value="Edit Email" name="button" onclick="return enableEmail()">
	</TD>
	<TD>
		<input type="text" name="email" size="30" maxlength="50" disabled  value="<?PHP echo $email?>">
	</TD>
</TR>
<TR>
	<TD>
		Telephone:
	</TD>
	<TD>
		<input type="text" name="tel" size="30" maxlength="15" value="<?PHP echo $phone?>">
	</TD>
</TR>
<TR>
	<TD>
		Affiliation:
	</TD>
	<TD>
		<input type="text" name="affil" size="30" maxlength="64" value="<?PHP echo $affil?>">
	</TD>
</TR>
</table>
</p>
<p>
Mailing Address:<BR/>
<textarea name="address" cols=60 rows=6><?PHP echo rawurldecode($address)?></textarea></p>
<p>
<?PHP
if ($type == 'R')
{
?>
Research Area(s):<br/>
<!--<input type="checkbox" name="ml" value=1 <?PHP echo $ml; ?>>Machine Learning<br/>-->
<input type="checkbox" name="ss" value=1 <?PHP echo $ss; ?>>Computer Security<BR/><!-- And Cryptography<BR/> -->
<input type="checkbox" name="vg" value=1 <?PHP echo $vg; ?>>Visual Computing<br/>
<!-- <input type="checkbox" name="ese" value=1 <?PHP echo $ese; ?>>Experimental Software Engineering<BR/> -->
<input type="checkbox" name="net" value=1 <?PHP echo $net; ?>>Big Data<br/>
<input type="checkbox" name="oth" value=1 <?PHP echo $oth; ?>>Other<br/>
<br/>
<?PHP } ?>
<!-- <A HREF="viewfiles.php?id=<?PHP echo $_SESSION["id_user"]; ?>" target="popup" name="viewfiles">View Files</A> -->
<BR><BR>
<input type="hidden" name="id" value=<?PHP echo $_SESSION["id_user"]; ?>>
<?PHP if ($_SESSION["level"] == 2 || $_SESSION["level"] == 1)
	{
		if ($_SESSION["level"] == 1)
			$disabled_tag = "disabled";
		else
			$disabled_tag = "";
		echo "User Level/Invitation Status: ";	
		echo "<SELECT NAME='level' SIZE=1 ".$disabled_tag.">\n";
		echo "<OPTION value='0'>User\n";
		echo "<OPTION value='1'>Admin\n";
		echo "<OPTION value='2' SELECTED>Super-Admin\n";
		echo "<OPTION value='3'>Invited User\n";
		echo "</SELECT><BR><BR>\n";
		echo "Use this section only for Invited Candidates:<BR>\n";
	
	echo "<BR>Date: <input type='text' name='date' size=20 maxlength=20 ".$disabled_tag.">\n";
	echo "<BR>Link: http://www.cs.stevens.edu/about/seminars/<input type='text' name='link' size=50 maxlength=100 ".$disabled_tag.">\n";
	echo "<BR>Status:<input type='text' name='status' size=50 maxlength=100  ".$disabled_tag."/><BR>";
	echo "<BR>Schedule:<BR><textarea name='schedule' cols=60 rows=6 ".$disabled_tag."></textarea><BR><BR>";
		echo "<input type='checkbox' name='deleteCheck' value=1 ".$disabled_tag.">CHECK HERE TO DELETE THE USER<BR>\n</br>";
	}
	else
	{
		echo "<A HREF='updatefiles.php'>Update/Verify Uploaded Files</A><br/><BR/>";
		echo "In order to receive applications, have your recommenders submit using the following link:<BR>";
		echo "https://www.stevens.edu/compsci/search/recommend.php?hash=".$_SESSION["hash"]."<BR>";
		echo "<input type='hidden' name='level' value=".$_SESSION["level"].">";
	}
?>
<BR/>
<input type="reset" name="cancel" value="Cancel Changes">
<input type="submit" name="submit" value="Update Application" onclick="return checkForm()">
</p>
</form>
<p>
<CENTER>
<b><A HREF="logout.php">LOG OUT</A></b>
</CENTER>
</p>
<p>&nbsp;</p>
<p>If you are experiencing any issues, please <A HREF="mailto:pzafonte@stevens.edu">email the webmaster</A>.</p>

<?PHP require("footer.php"); ?>
