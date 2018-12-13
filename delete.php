<?PHP 
	session_start();
	if (!isset($_POST["id"]) || !isset($_SESSION["level"]) || ($_SESSION["level"] != 1 && $_SESSION["level"] != 2))
		header("location: login.php");
	else
	{
		include("databaseClass.php");
		$db = new database();
		$id = $_POST["id"];
		$db->send_sql("SELECT hash FROM users WHERE id_user='".$id."'");
		$row = $db->next_row();
		$hash = $row[0];
		$db->send_sql("DELETE FROM users WHERE id_user='".$id."'");
		$db->send_sql("DELETE FROM files WHERE id_user='".$id."'");
		$db->send_sql("DELETE FROM recommendations WHERE hash='".$hash."'");
		header("location: viewer.php");
	}
?>
