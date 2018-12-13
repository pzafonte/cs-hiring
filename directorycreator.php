<?PHP
	include("./databaseClass.php");
	$db = new database();
	$sql = "SELECT email FROM users WHERE id_user >= 538";
	$res = $db->send_sql($sql);
	$dir = "/opt/apache/htdocs/compsci/search/files/recommendations/";
	while ($row = mysql_fetch_row($res))
	{
		if (!file_exists($dir.$row[0]))
		{
				mkdir($dir.$row[0]);
					copy("/opt/apache/htdocs/compsci/search/files/index.php", "/opt/apache/htdocs/compsci/search/files/recommendations/".$row[0]."/index.php");
							copy("/opt/apache/htdocs/compsci/search/files/.htaccess", "/opt/apache/htdocs/compsci/search/files/recommendations/".$row[0]."/index.php");

		}
//		chmod($dir.$row[0], 0777);
//		chown($dir.$row[0], "bewchy");
//		chgrp($dir.$row[0], "professor");
	}
?>


