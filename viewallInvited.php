<?PHP
	session_start();
	if (!isset($_SESSION["id_user"]) || (($_SESSION["level"] != 1) && ($_SESSION["level"] != 2)))
		header ("location: login.php");
require("header.php");
?>
<A HREF="viewer.php">Back to single person viewer.</A><BR>
<TABLE border=1>
<TR>
	<TD width=60><A HREF="viewallInvited.php?orderby=name">Name</A></TD>
	<TD width=60><A HREF="viewallInvited.php?orderby=surname">Surname</A></TD>
<!--	<TD><A HREF="viewallInvited.php?orderby=email">Email</A></TD> -->
	<TD width="50"><A HREF="viewallInvited.php?orderby=affil">Current Affiliation</A></TD>
	<TD width=50>Files</TD>
	<TD width="50">Recommendations</TD>
	<TD width=100><A HREF="viewallInvited.php?orderby=ss">Secure Systems</A><BR>
	<A HREF="viewallInvited.php?orderby=ml">Machine Learning</A><BR>
	<A HREF="viewallInvited.php?orderby=vg">Computer Vision & Graphics</A><BR>
	<A HREF="viewallInvited.php?orderby=other">Other</A><BR>
	<A HREF="viewallInvited.php">View All</A><BR>
	</TD>
	<TD width=75><A HREF="viewallInvited.php?orderby=date">Visit</A></td>
	<TD width=75><A HREF="viewallInvited.php?orderby=comment">Comments</A></td>
	<TD width=300>Status</td>
</TR>
<?PHP
	$total = 0;
	$numss = 0;
	$numvg = 0;
	$numot = 0;
	$numml = 0;
	$sortcomment = 0;
	$comments = array();	
	$people = array();
	include("databaseClass.php");
	$db = new database();
	//GATHERING OF COMMENT TIMES
	$sql = "SELECT u.id_user, c.comment_time FROM users AS u, comments AS c WHERE u.id_user = c.to_id ORDER BY id_user";
	$db->send_sql($sql);
	while ($row = $db->next_row())
	{
		$comments[$row[0]] = substr($row[1], 0, 19);
	}
	/////////////////////////////
	$sql = "SELECT * FROM users";
	if (isset($_GET["orderby"]))
	{
		switch ($_GET["orderby"])
		{
			case "ss":
			case "vg":
			case "ml":
				$sql .= " WHERE ".$_GET["orderby"]."='1' AND level='3' ORDER BY surname";
				break;
			case "other":
				$sql .= " WHERE ss='0' AND vg='0' AND ml='0' AND level='3' ORDER BY surname";
				break;
			case "comment":
				$sortcomment = 1;
				$sql .= " WHERE level='3'";
				break;
			default:
				$sql .= " WHERE level='3' ORDER BY ".$_GET["orderby"];
		}
	}
	else
		$sql .= " WHERE level='3' ORDER BY surname";
	$res = $db->send_sql($sql);
	while ($row = mysql_fetch_row($res))
	{
			$people[$total][0] = "<TR><TD>".rawurldecode($row[1])."</TD><TD>".rawurldecode($row[2])."</TD><TD>".$row[14]."</TD><TD>";
			$db->send_sql("SELECT id_file, type FROM files WHERE id_user='".$row[0]."'");
			if ($db->num_rows() > 0)
			{
				while ($file = $db->next_row())
				{
					$people[$total][0] .= "<A HREF='download.php?fid=".$file[0]."'>".$file[1]."</A><BR/>";
				}
			}
			else
				$people[$total][0] .= "No files uploaded";
			$people[$total][0] .= "</TD><TD>";
		 	$db->send_sql("SELECT id_recom, rname, rlname, remail, rjob, rpos FROM recommendations WHERE hash='".$row[25]."'");
		 	if ($db->num_rows() > 0)
		 	{
		 		while ($recom = $db->next_row())
		 		{
				  $people[$total][0] .= "<A HREF='mailto:".$recom[3]."'>".rawurldecode($recom[1])." ".rawurldecode($recom[2])."</A> (<A HREF='download.php?id=".$recom[0]."'>".rawurldecode($recom[5])." at ".rawurldecode($recom[4])."</A>)<BR/>";
		 		}
		 	}
		 	else
		 		$people[$total][0] .= "No Recommendations Available";

/////////////////// OLD CRAP
/*
			if ($row[11] != "0")
				$people[$total][0] .= "<A HREF='./files/".$row[4]."/".$row[11]."' target=files>CV</A><BR>";
			if ($row[13] != "0")
				$people[$total][0] .=  "<A HREF='./files/".$row[4]."/".$row[13]."' target=files>RS</A><BR>";
			if ($row[12] != "0")
				$people[$total][0] .=  "<A HREF='./files/".$row[4]."/".$row[12]."' target=files>TS</A><BR>";
			$people[$total][0] .= "</TD><TD>";
			if ($row[15] == "")
				$people[$total][0] .= "N/A";
			else
			{
				$files = explode("|",$row[15]);
				foreach ($files as $file)
				{
					$people[$total][0] .= "<A HREF='./files/recommendations/".$row[4]."/".$file."' target=files>".$file."</A><BR>";
				
				}
			}
*/
			$people[$total][0] .= "</TD><TD>";
			if ($row[8] == 1)
			{	$people[$total][0] .= "Secure Systems<BR>";
				$numss++;
			}
			if ($row[9] == 1)
			{
				$people[$total][0] .= "Vision/Graphics<BR>";
				$numvg++;
			}
			if ($row[10] == 1)
			{
				$people[$total][0] .= "Machine Learning";
				$numml++;
			}
			if (($row[8] + $row[9] + $row[10]) == 0)
			{
				$people[$total][0] .= "Other";
				$numot++;
			}
			$people[$total][0] .= "</TD><TD>Date: ".$row[17]."<BR><A HREF=\"../about/seminars/".$row[16]."\" target='visit'>Talk Announcement</a><BR>";
			$people[$total][0] .= "<A HREF='checkSchedule.php?id=".$row[0]."' target='visit'>Schedule</a><BR></TD><TD>";
			
			$people[$total][0] .= "<A HREF='comments.php?id=".$row[0]."' target='visit'>View/Add Comments</a>";
			if (isset($comments[$row[0]]))
			{
				$people[$total][0] .= "<BR>Last comment posted on: ".$comments[$row[0]];
				$people[$total][1] = $comments[$row[0]];
			}
			else
			{
				$people[$total][0] .= "<BR>No comments posted yet";
				$people[$total][1] = $comments[$row[0]];
			}
			$people[$total][0] .= "</TD><TD>".$row[19];
			$people[$total++][0] .= "</TD></TR>";
	}
	if ($sortcomment == 1)
		uasort($people, 'sortByComment');
	foreach ($people as $elem)
		echo $elem[0]."\n";
	echo "</TABLE><BR>TOTAL APPLICANTS: ".$total."<BR>";
//	echo $numss." for Secure Systems<BR>";
	echo $numml." for Machine Learning<BR>";
	echo $numvg." for Vision / Graphics<BR>";
	echo $numot." for Other<BR>";
	$_SESSION["numss"] = $numss;
	$_SESSION["numml"] = $numml;
	$_SESSION["numvg"] = $numvg;
	$_SESSION["numot"] = $numot;
	
	function sortByComment($a, $b)
	{
		return (strcmp($a[1], $b[1]) * -1);
	}
	
	require("footer.php");
?>
