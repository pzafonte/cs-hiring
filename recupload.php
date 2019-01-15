<?PHP 
	session_start();
	$_SESSION["level"] = 0;
	if ((!isset($_POST["name"])) || (!isset($_SESSION["verify"])) || ($_SESSION["verify"] != $_POST["hash"]))
	{
		echo "You are trying to submit a recommendation without the proper form!";
	}
	else
	{
		include ("databaseClass.php");
		include("header.php");
		$name =  rawurlencode(strip_tags($_POST["name"]));
		$surname =  rawurlencode(strip_tags($_POST["surname"]));
		$email =  addslashes(strip_tags($_POST["email"]));
		$aff =  rawurlencode(strip_tags($_POST["aff"]));
		$job = rawurlencode(strip_tags($_POST["pos"]));
		$hash = $_SESSION["verify"];
		$errors = 0;		
		$db = new database();
		$db->send_sql("SELECT id_recom FROM recommendations WHERE hash='".$hash."' AND remail='".$email."'");
		if ($db->num_rows() > 0)
		{
			echo "You already submitted a recommendation for that person";
			echo "<p>If you are experiencing any issues, please <A HREF=\"mailto:pzafonte@stevens.edu\">email the webmaster</A>.</p>";
			include("footer.php");
			exit;
		}
		if ($_FILES["rec"]["size"] > 0)
		{
			$recs = $_FILES["rec"]["size"];
			$rec = $_FILES["rec"]["tmp_name"];
			$fp = fopen($rec, 'r');
			$recc = fread($fp, $recs);
			$recc = addslashes($recc);
			fclose($fp);
		}
		else
		{
			$errors++;
			echo "There was a problem uploading your recommendation letter, please try to register again<BR>";
		}
		if ($errors == 0)
		{	
			$db->send_sql("INSERT INTO recommendations (rname, rlname, remail, rjob, rpos, hash, rfile, rsize) VALUES ('".$name."', '".$surname."', '".$email."', '".$aff."', '".$job."', '".$hash."', '".$recc."', '".$recs."');");
			echo "<p>Recommendation succesfully submited.</p>";
			echo "<p>Thank you.</p>";
			echo "<BR>";

			echo "<p>If you are experiencing any issues, please <A HREF=\"mailto:pzafonte@stevens.edu\">email the webmaster</A>.</p>";
			include("footer.php");
		}
	}
?>
