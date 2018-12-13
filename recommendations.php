<?PHP
	if (!isset($_GET["donttry"]) || $_GET["donttry"] != "getoff")
		header("Location: http://www.google.com");
	include("./databaseClass.php");
	$db = new database();
	$sql = "SELECT email FROM users WHERE id_user > 538";
	$res = $db->send_sql($sql);
	$dir = "/opt/apache/htdocs/compsci/search/files/recommendations/";
	while ($row = mysql_fetch_row($res))
	{
		$files = "";
		echo $row[0]."=============<BR>";
		$dh = opendir($dir.$row[0]);
		while (($file = readdir($dh)) !== false)
		{
			if ($file != "." && $file != ".." && $file != ".htaccess" && $file != "index.php")
			{
				$files .= $file."|";
			}
		}
		$sql = "UPDATE users SET recommendations='".$files."' WHERE email='".$row[0]."';";
		$db->send_sql($sql);
		echo $files."<BR>\n";
		closedir($dh);
		echo "================<BR><BR>";
	}
?>


