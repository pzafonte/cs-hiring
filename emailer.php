<?php	
include("range.php");

session_start();
$flag = 0;
if (!isset($_SESSION["id_user"]) || (($_SESSION["level"] != 1) && $_SESSION["level"] != 2))
	header ("location: login.php");
if ((isset($_POST["body"])) && ($_POST["body"] != ""))
{
	include("databaseClass.php");
	switch ($_POST["to"])
	{
		case "1":
			$lvl = "level=3;";
			break;
		case "2":
			$lvl = "(level=0 OR level=3);";
			break;
		case "0":
		default:
			$lvl = "level=0;";
	}
	$headers = "From: 'SIT - Faculty Application Site' <no_reply@stevens.edu> \r\n";
	$db = new database();
	$sql = "SELECT name, surname, email FROM users WHERE id_user > ".$start_index." AND ".$lvl;
	$db->send_sql($sql);
	while ($row = $db->next_row())
	{
		$msg = "Dear ".$row[0]." ".$row[1].",\n".$_POST["body"];
		$email = $row[2];
		$subject = $_POST["subject"];
	//	echo "emailing $subject to $email:<BR>".nl2br($msg);
		mail($email, $subject, $msg, $headers);
		echo "<BR/><BR/>";
	}
	$flag = 1;
}
require("header.php");
if ($flag == 1)
	echo "<B>Email sent!</b>";
?>
<A href="./viewer.php">Back to the viewer</a>
<H2>Mass emailer!</H2>
<form action="emailer.php" method="POST">
	Select recipients:<BR/>
	<input type="radio" name="to" value="0" CHECKED/>Non-Invited Applicants
	<input type="radio" name="to" value="1" />Invited Applicants
	<input type="radio" name="to" value="2" />All Applicants
	<BR/>
	<BR/>Subject:<input type="text" name="subject" maxlength=40 size=40 value="[SIT Faculty Application]"/>
	<BR/><BR/>
	Dear [name] [surname],
	<TEXTAREA name="body" rows=20 cols=60></textarea>
	<input type="submit" name="go" value="Send"/> 
</form>
<?php
include("footer.php");
?>