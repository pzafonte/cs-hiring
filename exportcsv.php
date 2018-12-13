<?PHP
include("range.php");
	session_start();
	if (!isset($_SESSION["id_user"]) || (($_SESSION["level"] != 1) && ($_SESSION["level"] != 2)))
		header ("location: login.php");

	include("databaseClass.php");
	$db = new database();
	$sql = "SELECT * FROM users WHERE id_user >= ".$start_index." AND id_user < ".$end_index;
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
	echo "Surname,Name,Email,Affiliation,Research Interest,Invited?\n";
	while ($row = mysql_fetch_row($res))
	{
		if (($row[7] == 0) || ($row[7] == 3))
		{
			$total++;
			echo rawurldecode($row[1]).",".rawurldecode($row[2]).",".$row[4].",";
			echo $row[14].",";
			if ($row[10] == 1)
			{
				echo "Machine Learning ";
				$numml++;
			}
			if ($row[8] == 1)
			{	echo "Secure Systems ";
				$numss++;
			}
			if ($row[9] == 1)
			{
				echo "Vision Graphics ";
				$numvg++;
			}
			if ($row[20] == 1)
			{	echo "Exp. Soft. Engineering ";
				$numese++;
			}
			if ($row[21] == 1)
			{	echo "Networking ";
				$numnet++;
			}
			if ($row[22] == 1)
			{	echo "Other ";
				$numot++;
			}
			if ($row[7] == 3)
			   echo ", INVITED!\n";
			else
		           echo ", ---\n";
		}
	}

?>
