<?PHP
include("range.php");
	if (isset($_GET["type"]) && ($_GET["type"] == 'T'))
	   $type = 'T';
	else
		$type = 'R';

	session_start();
	if (!isset($_SESSION["id_user"]) || (($_SESSION["level"] != 1) && $_SESSION["level"] != 2))
		header ("location: login.php");
require("header.php");
	if (!isset($_GET["view"]))
		header ("location: viewallV2.php?type=$type");
	switch($_GET["view"])
	{
		case "ss":
			$total = $_SESSION["numss"];
			break;
		case "ese":
			$total = $_SESSION["numese"];
			break;
		case "net":
			$total = $_SESSION["numnet"];
			break;
		case "vg":
			$total = $_SESSION["numvg"];
			break;
		case "ml":
			$total = $_SESSION["numml"];
			break;
		case "oth":
			$total = $_SESSION["numoth"];
			break;
		default:
			$total = 0;
	}
	$pages = ceil($total / 20);
	$page = isset($_GET["page"])?$_GET["page"]:1;
	for ($i = 1; $i <= $pages; $i++)
	{
		if ($i == $page)
			echo "<B>".$page."</B>&nbsp; &nbsp;";
		else
			echo "<A HREF='viewallpp.php?view=".$_GET["view"]."&page=".$i."'>".$i."</A>&nbsp; &nbsp;";
	}
	$first = ($page - 1) * 20;
	
?>
<TABLE border=1>
<TR>
	<TD>Name</TD>
	<TD>Surname</TD>
<!--	<TD><A HREF="viewallV2.php?orderby=email">Email</A></TD> -->
	<TD>Current Affiliation</TD>
	<TD>Files</TD>
	<TD>Recommendations</TD>
	<TD>Field(s)</TD>
</TR>
<?PHP
	$total = 0;
	include("databaseClass.php");
	$db = new database();
	$sql = "SELECT * FROM users WHERE ".$_GET["view"]."=1 AND id_user >=".$start_index." ORDER BY surname LIMIT 20 OFFSET ".$first;
	$res = $db->send_sql($sql);
	while ($row = mysql_fetch_row($res))
	{
		if ($row[7] < 1)
		{
			$total++;
			echo "<TR>";
			echo "<TD>".rawurldecode($row[1])."</TD><TD>".rawurldecode($row[2])."</TD><TD>";
			// $row[4]."</TD><TD>"
			echo $row[14]."</TD><TD>";

// OLD FILE HANDLER
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
				  echo "<A HREF='mailto:".$recom[3]."'>".rawurldecode($recom[1])." ".rawurldecode($recom[2])."</A> (<A HREF='download.php?id=".$recom[0]."'>".rawurldecode($recom[5])." at ".rawurldecode($recom[4])."</A>)<BR/>";
		 		}
		 	}
		 	else
		 		echo "No Recommendations Available";

//OLD RECOMMENDATIONS HANDLER
/*
			if ($row[15] == "")
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
			echo "</TD><TD>";
			if ($row[8] == 1)
				echo "Secure Systems<BR>";
			if ($row[9] == 1)
				echo "Vision/Graphics<BR>";
			if ($row[10] == 1)
				echo "Machine Learning<BR>";
			if ($row[20] == 1)
				echo "Exp. Soft. Engineering<BR>";
			if ($row[21] == 1)
				echo "Networking<BR>";
			if ($row[22] == 1)
				echo "Other<BR>";
			echo "</TD></TR>";
		}
	}
	echo "</TABLE><BR>";
	require("footer.php");
?>
