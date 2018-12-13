<?PHP

  session_start();
  $_SESSION["level"] = 0;
  if (!isset($_GET["hash"]))
  	header("location: index.php");
  $hash = $_GET["hash"];
  $_SESSION["verify"] = $hash;
  include ("databaseClass.php");
  require("header.php");	
  $db = new database();
  $db->send_sql("SELECT name, surname FROM users WHERE hash = '".$hash."' order by id_user desc");
  if ($db->num_rows() < 1)
  {
  	echo "User not found!";
  }
  else
  {
  	$row = $db->next_row();
  	$name = stripslashes(rawurldecode($row[0]));
  	$lname = stripslashes(rawurldecode($row[1]));
?>
<SCRIPT LANGUAGE=JavaScript>
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
		var rec = document.form1.rec.value;
		if ((rec == "") || (rec.substr(rec.length - 4) != ".pdf"))
		{
			alert ("You must provide a recommendation letter in pdf.");
			return false;
		}
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
		if (!fileCheck())
			return false;
		return true;
	}
			
</SCRIPT>
<p>
Please fill in the form below to submit a recommendation letter for <B><?PHP echo $name." ".$lname; ?></B>:
</p>

<form action="recupload.php" method="POST" name="form1" enctype="multipart/form-data">
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
		Email:
	</TD>
	<TD>
		<input type="text" name="email" size="30" maxlength="50">
	</TD>
</TR>
<TR>
	<TD>
		Affiliation:
	</TD>
	<TD>
		<input type="text" name="aff" size="30" maxlength="50">
	</TD>
</TR>
<TR>
	<TD>
		Position:
	</TD>
	<TD>
		<input type="text" name="pos" size="30" maxlength="20">
	</TD>
</TR>
<TR>
	<TD>
        Recommendation:
	</TD>
	<TD>
		<input type="file" name="rec">
	</TD>
        <td>  (PDF files only) </td>
</TR>
</table>
<br/>
<input type="hidden" name="hash" value="<?PHP echo $hash; ?>">
<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
<input type="submit" name="submit" value="Submit Recommendation" onclick="return checkForm()">
</p>
</form>
<?PHP }
 require("footer.php"); ?>