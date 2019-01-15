<?PHP
	session_start();
	include ("databaseClass.php");
	$db = new database();
	if (!isset($_SESSION["id_user"]))
	{
		header("location: login.php");
	}
	else
	{
		$errors = 0;
		if(isset($_GET['id'])) 
		{
			if ($_SESSION["level"] != 1 && $_SESSION["level"] != 2)
			{
			   echo "You are not authorized to download that file!<BR/>";
			   exit;
			}
			else
			{
				$query = "SELECT rfile, rsize, rname, rlname, name, surname FROM recommendations AS r, users AS u WHERE r.id_recom = '".$_GET["id"]."' AND r.hash = u.hash";
				$res = $db->send_sql($query);
				if (mysql_num_rows($res) < 1)
				{
					echo "File not found!";
					exit;
				}
				$row = $db->next_row();
				$name = "recommendation-".$row[5].$row[4]."-by-".$row[3].$row[2].".pdf";
				$size = $row[1];
				$content = $row[0];
			}
		}
		else if (isset($_GET['fid']))
		{
			if ((($_SESSION["level"] != 1) && $_SESSION["level"] != 2))
			{
				$db->send_sql("SELECT id_user FROM files WHERE id_file='".$_GET['fid']."'");
				$row = $db->next_row();
				if ($row == FALSE)
				{
				   echo "No such file.";	
				   exit;
				}
				if ($row[0] != $_SESSION["id_user"])
				{
				   echo "That is not one of your files!";
				   exit;
				}
			}
				$query = "SELECT data, size, f.type, name, surname FROM files AS f, users AS u WHERE f.id_file = '".$_GET["fid"]."' AND u.id_user = f.id_user";
				$res = $db->send_sql($query);
				if (mysql_num_rows($res) < 1)
				{
					echo "File not found!";
					exit;
				}
				$row = $db->next_row();
				$lname = rawurlencode($row[4]);
				$fname = rawurlencode($row[3]);
				str_replace("'", "", $lname);
				str_replace("'", "", $fname);
				$name = $lname.$fname.$row[2].".pdf";
				$size = $row[1];
				$content = $row[0];
		}		
		else
		{
			echo "You didn't tell me what you wanted to download!";
			exit;
		}
		header("Content-length: $size");
		header("Content-type: application/pdf");
		header("Content-Disposition: attachment; filename=$name");
		echo $content;
		exit;
	}
?>