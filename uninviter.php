<?PHP
	session_start();
	if (!isset($_SESSION["id_user"]) || ($_SESSION["level"] != 2))
	{
		echo "You are not authorized to uninvite people!";
	}
	else
	{
//		include("databaseClass.php");
//		$db = new database();
//		$sql = "UPDATE users SET level=0 WHERE level = 3";
//		$res = $db->send_sql($sql);
//		$db->printout();
	}

?>