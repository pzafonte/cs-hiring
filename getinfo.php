<?PHP
include("range.php");
	session_start();
	if (!isset($_SESSION["id_user"]) || (($_SESSION["level"] != 1) && ($_SESSION["level"] != 2)))
		header ("location: login.php");
	echo "<response>\n";
	if (!isset($_GET["id"]))
	{
	   echo "ERROR";
	   //exit();
	}
	else
	{
		$id = $_GET["id"];
	       include("databaseClass.php");
		$db = new database();
	    $sql = "SELECT u.name, u.surname, u.phone, u.email, u.address, u.ss, u.vg, u.ml, u.level, u.type FROM users as u WHERE id_user='".$id."'";
	     $db->send_sql($sql);
		if ($db->num_rows() > 0)
	   	{
			$row = $db->next_row();
			$addr = rawurldecode($row[4]);
			echo "<name>".$row[0]."</name>\n";
			echo "<sname>".$row[1]."</sname>\n";
			echo "<phone>".$row[2]."</phone>\n";
			echo "<email>".$row[3]."</email>\n";
			echo "<address>".$addr."</address>\n";
		}
		else
			echo "ERROR";
	}
?>
</response>