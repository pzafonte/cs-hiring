<?PHP
	session_start();
	if (!isset($_SESSION["id_user"]) || (($_SESSION["level"] != 1) && ($_SESSION["level"] != 2)))
		header ("location: login.php");
	require("header.php");
	if (!isset($_GET["id"]))
		echo "You must specify a user id!!!";
	else
	{
		include("databaseClass.php");
		$db = new database();
		if (isset($_POST["c"]))
		{
			$sql = "INSERT INTO comments (from_id, to_id, comment_time, comment) VALUES ('".$_SESSION["id_user"]."', '".$_GET["id"]."', now(), '".rawurlencode(strip_tags($_POST["c"]))."')";
			$db->send_sql($sql);
		}
		$sql = "SELECT name, surname FROM users WHERE id_user='".$_GET["id"]."'";
		$db->send_sql($sql);
		$name = $db->next_row();
		echo "<H3>Comments for ".$name[0]." ".$name[1]."</H3><BR><br>";
		$sql = "SELECT name, surname, comment FROM users AS u, comments AS c WHERE c.to_id='".$_GET["id"]."' AND c.from_id = u.id_user ORDER BY c.id_comment DESC";
		$db->send_sql($sql);
		if ($db->num_rows() == 0)
			echo "No comments have been posted yet<BR><br>";
		else
		{
			while ($row = $db->next_row())
			{
				echo "From <B>".$row[0]." ".$row[1]."</B>";
				echo "<BLOCKQUOTE><P>".nl2br(rawurldecode($row[2]))."</p></blockquote><HR width=75% size=1><BR>";				
			}
		}
		?>
		Post a new Comment:<BR>
		<FORM action='comments.php?id=<?PHP echo $_GET["id"]; ?>' METHOD=POST>
			<TEXTAREA name="c" rows=10 cols=60></textarea><BR>
			<INPUT type=submit value="Post">
		</form>
	<?PHP
	}
	require("footer.php");
?>