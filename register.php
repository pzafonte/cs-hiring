<?PHP 
	ini_set('display_errors', 1);

	if (!isset($_POST["name"]))
		header("location: index.php");
	else
	{
		$cv = ""; $ts = ""; $rs = "";
		$errors = 0;
		include ("databaseClass.php");
//		include("header.php");
		$type = (isset($_POST["type"]) && $_POST["type"] == T)?'T':'R';
		$ss = (isset($_POST["ss"]))?'1':'0';
		$vg = (isset($_POST["vg"]))?'1':'0';
		$ml = (isset($_POST["ml"]))?'1':'0';
		$ese = (isset($_POST["ese"]))?'1':'0';
		$net = (isset($_POST["net"]))?'1':'0';
		$oth = (isset($_POST["oth"]))?'1':'0';
		$name =  rawurlencode(strip_tags(trim($_POST["name"])));
		if (empty($name))
		{
			$errors++;
			echo "You must provide a name to register.<BR>";
		}
		$surname =  rawurlencode(strip_tags(trim($_POST["surname"])));
		if (empty($surname))
		{
			$errors++;
			echo "You must provide a last name to register.<BR>";
		}
		$email =  strip_tags(trim($_POST["email"]));
		if (empty($email))
		{
			$errors++;
			echo "You must provide an email address to register.<BR>";
		}
		$address =  strip_tags($_POST["address"]);
		$pass =  $_POST["pass"];
		$phone = rawurlencode(strip_tags($_POST["tel"]));
		$hash = sha1($name.$surname.$email);
		if (!isset($_POST["eth"]))
			$eth = 'U';
		else
			$eth = $_POST["eth"];
		if (!isset($_POST["gender"]))
			$gen = 'U';
		else
			$gen = $_POST["gender"];
		if ($_FILES["cv"]["size"] > 0)
		{
			$cvs = $_FILES["cv"]["size"];
			$cvtmp = $_FILES["cv"]["tmp_name"];
			$cv = addslashes($_FILES["cv"]["name"]);
			if (strpos(strtolower($cv), ".pdf") === FALSE)
			{
				$errors++;
				echo "We only accept files in PDF format. Sorry for the inconvenience.<BR>";
			}
			$fp = fopen($cvtmp, 'r');
			$cvc = fread($fp, $cvs);
			$cvc = addslashes($cvc);
			fclose($fp);
		}
		if ($_FILES["ts"]["size"] > 0)
		{
			$tss = $_FILES["ts"]["size"];
			$tstmp = $_FILES["ts"]["tmp_name"];
			$ts = addslashes($_FILES["ts"]["name"]);
			if (strpos(strtolower($ts), ".pdf") === FALSE)
			{
				$errors++;
				echo "We only accept files in PDF format. Sorry for the inconvenience.<BR>";
			}
			$fp = fopen($tstmp, 'r');
			$tsc = fread($fp, $tss);
			$tsc = addslashes($tsc);
			fclose($fp);
		}
		if ($_FILES["cl"]["size"] > 0)
		{
			$cls = $_FILES["cl"]["size"];
			$cltmp = $_FILES["cl"]["tmp_name"];
			$cl = addslashes($_FILES["cl"]["name"]);
			if (strpos(strtolower($cl), ".pdf") === FALSE)
			{
				$errors++;
				echo "We only accept files in PDF format. Sorry for the inconvenience.<BR>";
			}
			$fp = fopen($cltmp, 'r');
			$clc = fread($fp, $cls);
			$clc = addslashes($clc);
			fclose($fp);
		}
		if ($type != 'T' && $_FILES["rs"]["size"] > 0)
		{	
			$rss = $_FILES["rs"]["size"];
			$rstmp = $_FILES["rs"]["tmp_name"];
			$rs = addslashes($_FILES["ts"]["name"]);
			if (strpos(strtolower($rs), ".pdf") === FALSE)
			{
				$errors++;
				echo "We only accept files in PDF format. Sorry for the inconvenience.<BR>";
			}
			$fp = fopen($rstmp, 'r');
			$rsc = fread($fp, $rss);
			$rsc = addslashes($rsc);
			fclose($fp);
		}
		else
			$rs = "";
	if ($errors == 0)
	{
		$db = new database();
		$sql = "INSERT INTO users (name, surname, phone, email, pass, address, ss, vg, ml, cv, ts, rs, ese, net, oth, gender, ethnicity, hash, type, cl) VALUES ('".$name."', '".$surname."', '".$phone."', '".$email."', '".sha1($pass)."', '".rawurlencode($address)."', '".$ss."', '".$vg."', '".$ml."', '".$cv."', '".$ts."', '".$rs."', '".$ese."', '".$net."', '".$oth."', '".$gen."', '".$eth."', '".$hash."', '".$type."', '".$cl."');";
// 		echo $sql;
		$res = $db->send_sql($sql);
		if ($res === FALSE)
		   echo "<p>Application was not successfully submited. You might have already submitted an application with that email address.</P><BR>";
		else
		{
			$id = $db->insert_id();
			if (!empty($cv))
			     $db->send_sql("INSERT INTO files (id_user, type, data, size) VALUES ('".$id."','CV','".$cvc."','".$cvs."');");
			if (!empty($ts))
			     $db->send_sql("INSERT INTO files (id_user, type, data, size) VALUES ('".$id."','TS','".$tsc."','".$tss."');");
			if (!empty($cl))
			     $db->send_sql("INSERT INTO files (id_user, type, data, size) VALUES ('".$id."','CL','".$clc."','".$cls."');");
			if ($type != 'T' && !empty($rs))
			     $db->send_sql("INSERT INTO files (id_user, type, data, size) VALUES ('".$id."','RS','".$rsc."','".$rss."');");

		$message = "Thank you for submitting your application for a Faculty Position at the Stevens Institute of Technology. In order for you to update your contact information, go to www.stevens.edu/compsci/search/login.php using your login credentials. In order to have recommendations submitted on your behalf, have your recommenders follow the following link and fill in the form.\n\n";
		$message .= "https://www.stevens.edu/compsci/search/recommend.php?hash=".$hash."\n\n";
		$message .= "\nThank you for your interest.\n\n";
		echo nl2br($message);
		echo "<p>If you are experiencing any issues, please <A HREF=\"mailto:pzafonte@stevens.edu\">email the webmaster</A>.</p>";
		$message .= "Please do NOT reply to this email as it was automatically generated. In case of questions please email the Webmaster pzafonte@stevens.edu\n\n";
		mail ($email, "Stevens Institute of Technology - CS Faculty Application", $message);

//		mail ("faculty-search@cs.stevens.edu", "New Application Submitted", $message);
		}
	}
	else
		echo "Application not submitted.<BR>";

//	include("footer.php");
}




//////////// OLD MESSAGE
		/*		echo "<p>Application successfully submited.</p>";
				echo "<p>If you created a password, you may <A HREF=\"login.php\">review your application</A> using ".$email." as your login name.</p>";
						echo "<BR>";
		*/

////////////// OLD FILE COPIES
/*
			mkdir("/opt/apache/htdocs/compsci/search/files/".$email);
//	chmod("/home/pzafonte/tmp/do/not/get/here/".$email, 0777);
                        move_uploaded_file($_FILES["cv"]["tmp_name"], "/opt/apache/htdocs/compsci/search/files/".$email."/".$_FILES["cv"]["name"]);
			move_uploaded_file($_FILES["ts"]["tmp_name"], "/opt/apache/htdocs/compsci/search/files/".$email."/".$_FILES["ts"]["name"]);
			move_uploaded_file($_FILES["rs"]["tmp_name"], "/opt/apache/htdocs/compsci/search/files/".$email."/".$_FILES["rs"]["name"]);

			copy("/opt/apache/htdocs/compsci/search/files/.htaccess", "/opt/apache/htdocs/compsci/search/files/".$email."/.htaccess");
			copy("/opt/apache/htdocs/compsci/search/files/index.php", "/opt/apache/htdocs/compsci/search/files/".$email."/index.php");
		$message = "New application received on ".date('l dS \of F Y h:i:s A')."\nName: ".$name." ".$surname;
		$message .= "\nEmail: ".$email."\nAreas: ";
		$message .= ($ss==1)?"Secure Systems. ":"";
		$message .= ($vg==1)?"Comp System Biology. ":"";
		$message .= ($ml==1)?"Machine Learning.":"";
		$message .= ($ese==1)?"Experimental Computer Systems.":"";
		$message .= ($net==1)?"Networking.":"";
		$message .= ($oth==1)?"Other.":"";
		$message .= "\n";
*/

?>
