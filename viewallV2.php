<?PHP
include("range.php");
if (isset($_GET["type"]) && ($_GET["type"] == 'T'))
   $type = 'T';
else
   $type = 'R';
	session_start();
	if (!isset($_SESSION["id_user"]) || (($_SESSION["level"] != 1) && ($_SESSION["level"] != 2)))
		header ("location: login.php");
require("header.php");
?>
<A HREF="viewer.php?type=<?php echo $type; ?>">Back to single person viewer.</A><BR>
View in groups of 20:
<?PHP
if ($type == 'R')
{
?>
<A HREF="viewallpp.php?view=ml" target=viewer>Machine Learning</A> | 
<!-- <A HREF="viewallpp.php?view=ss" target=viewer>Secure Systems</A> | -->
<A HREF="viewallpp.php?view=vg" target=viewer>Vision Graphics</A> | 
<!-- <A HREF="viewallpp.php?view=ese" target=viewer>Exp. Soft. Engineering</A> | 
<A HREF="viewallpp.php?view=net" target=viewer>Networking</A> | -->
<A HREF="viewallInvited.php" target=viewer>Invited Candidates</A> | 
<A HREF="viewallpp.php?view=oth" target=viewer>Other</A>
<?PHP }
?>
<BR><BR>
<A HREF="viewallV2.php?type=<?PHP echo $type; ?>&orderby=id_user">Order by application time</A><BR>
<TABLE border=1>
<TR>
	<TD><A HREF="viewallV2.php?type=<?PHP echo $type; ?>&orderby=name">Name</A></TD>
	<TD><A HREF="viewallV2.php?type=<?PHP echo $type; ?>&orderby=surname">Surname</A></TD>
<!--	<TD><A HREF="viewallV2.php?type=<?PHP echo $type; ?>&orderby=email">Email</A></TD> -->
	<TD width="200"><A HREF="viewallV2.php?type=<?PHP echo $type; ?>&orderby=affil">Current Affiliation</A></TD>
	<TD>Files</TD>
	<TD>Recommendations</TD>
<?PHP
if ($type=='R')
{
?>	<TD><A HREF="viewallV2.php?type=<?PHP echo $type; ?>&orderby=ml">Machine Learning</A><BR>
	<A HREF="viewallV2.php?type=<?PHP echo $type; ?>&orderby=ss">Secure Systems</A><BR>
	<A HREF="viewallV2.php?type=<?PHP echo $type; ?>&orderby=vg">Vision Graphics</A><BR>
	<A HREF="viewallV2.php?type=<?PHP echo $type; ?>&orderby=ese">Exp. Soft. Engineering</A><BR>
	<A HREF="viewallV2.php?type=<?PHP echo $type; ?>&orderby=net">Networking</A><BR>
	<A HREF="viewallV2.php?type=<?PHP echo $type; ?>&orderby=oth">Other</A><BR>
	<A HREF="viewallV2.php?type=<?PHP echo $type; ?>">View All</A><BR>
	</TD>
<?php } ?>
</TR>
<?PHP
	$total = 0;
	$numss = 0;
	$numvg = 0;
	$numot = 0;
	$numese = 0;
	$numnet = 0;
	$numml = 0;
	include("databaseClass.php");
	$db = new database();
	$sql = "SELECT * FROM users WHERE id_user >= ".$start_index." AND id_user < ".$end_index." AND type='".$type."'";
	if (isset($_GET["orderby"]))
	{
		switch ($_GET["orderby"])
		{
			case "ss":
			case "vg":
			case "ml":
			case "ese":
			case "net":
			case "oth":
				$sql .= " AND ".$_GET["orderby"]."='1' ORDER BY surname";
				break;
			default:
				$sql .= " ORDER BY ".$_GET["orderby"];
		}
	}
	else
		$sql .= " ORDER BY surname";
	$res = $db->send_sql($sql);
	while ($row = mysql_fetch_row($res))
	{
		if (($row[7] == 0) || ($row[7] == 3))
		{
			$total++;
			echo "<TR>";
			echo "<TD>";
			if ($row[7] == 3)
				echo "<FONT color=red>INVITED</font><BR>";
			echo rawurldecode($row[1])."</TD><TD>".rawurldecode($row[2])."</TD><TD>";
			// $row[4]."</TD><TD>"
			echo $row[14]."</TD><TD>";


//////////// OLD FILES HANDLER
/*			if ($row[11] != "0")
				echo "<A HREF='./files/".$row[4]."/".$row[11]."' target=files>CV</A><BR>";
			if ($row[13] != "0")
				echo "<A HREF='./files/".$row[4]."/".$row[13]."' target=files>RS</A><BR>";
			if ($row[12] != "0")
				echo "<A HREF='./files/".$row[4]."/".$row[12]."' target=files>TS</A><BR>";
*/
			$db->send_sql("SELECT id_file, type FROM files WHERE id_user='".$row[0]."'");
			if ($db->num_rows() > 0)
			{
				while ($file = $db->next_row())
				{
					if ($file[1] == "RS" && $type == 'T')
					   $file[1] = 'CL';
					echo "<A HREF='download.php?fid=".$file[0]."'>".$file[1]."</A><BR/>";
				}
			}
			else
				echo "No files uploaded";
			echo "</TD><TD>";
		 	$db->send_sql("SELECT id_recom, rname, rlname, remail, rjob, rpos FROM recommendations WHERE hash='".$row[25]."'");
		 	if ($db->num_rows() > 0)
		 	{
		 		while ($recom = $db->next_row())
		 		{
				  echo "<A HREF='mailto:".$recom[3]."'>".stripslashes(rawurldecode($recom[1]))." ".stripslashes(rawurldecode($recom[2]))."</A> (<A HREF='download.php?id=".$recom[0]."'>".rawurldecode($recom[5])." at ".rawurldecode($recom[4])."</A>)<BR/>";
		 		}
		 	}
		 	else
		 		echo "No Recommendations Available";

// OLD RECOMMENDATION HANDLER
/*			if ($row[15] == "")
				echo "N/A";
			else
			{
				$files = explode("|",$row[15]);
				foreach ($files as $file)
				{
					echo "<A HREF='./files/recommendations/".$row[4]."/".$file."' target=files>".$file."</A><BR>";
				
				}
			}
*/
			echo "</TD>";
		if ($type == 'R')
		{
			echo "<TD>";
			if ($row[10] == 1)
			{
				echo "Machine Learning<BR>";
				$numml++;
			}
			if ($row[8] == 1)
			{	echo "Secure Systems<BR>";
				$numss++;
			}
			if ($row[9] == 1)
			{
				echo "Vision Graphics";
				$numvg++;
			}
			if ($row[20] == 1)
			{	echo "Exp. Soft. Engineering<BR>";
				$numese++;
			}
			if ($row[21] == 1)
			{	echo "Networking<BR>";
				$numnet++;
			}
			if ($row[22] == 1)
			{	echo "Other<BR>";
				$numot++;
			}
			echo "</TD>";
		}
		echo "</TR>";
		}
	}
	echo "</TABLE><BR>TOTAL APPLICANTS: ".$total."<BR>";
if ($type == 'R')
{
	echo $numml." for Machine Learning<BR>";
	echo $numss." for Secure Systems<BR>";
	echo $numvg." for Computer Systems Biology<BR>";
	echo $numese." for Experimental Software Engineering<BR>";
	echo $numnet." for Networking<BR>";
	echo $numot." for Other<BR>";
	$_SESSION["numss"] = $numss;
	$_SESSION["numml"] = $numml;
	$_SESSION["numvg"] = $numvg;
	$_SESSION["numese"] = $numese;
	$_SESSION["numnet"] = $numnet;
	$_SESSION["numoth"] = $numot;
}
	
	require("footer.php");
?>
