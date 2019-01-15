<?PHP 
	session_start();
	if (!isset($_POST["name"]))
		header("location: login.php");
	else
	{
		include("databaseClass.php");
		$db = new database();
		$ss = (isset($_POST["ss"]))?'1':'0';
		$vg = (isset($_POST["vg"]))?'1':'0';
		$ml = (isset($_POST["ml"]))?'1':'0';
		$name =  strip_tags($_POST["name"]);
		$surname =  strip_tags($_POST["surname"]);
		$affil =  strip_tags($_POST["affil"]);
		$email =  strip_tags($_POST["email"]);
		$address =  strip_tags($_POST["address"]);
		$phone = strip_tags($_POST["tel"]);
		$schedule = strip_tags($_POST["schedule"]);
		$date = strip_tags($_POST["date"]);
		$link = strip_tags($_POST["link"]);
		$level = $_POST["level"];
		$status = $_POST["status"];
		$id = $_POST["id"];
		$db->send_sql("UPDATE users SET name='".$name."', surname='".$surname."', phone='".$phone."', email='".$email."', address='".rawurlencode($address)."', level='".$level."', ss='".$ss."', vg='".$vg."', ml='".$ml."', affil='".$affil."', schedule='".rawurlencode($schedule)."', date='".$date."', link='".$link."', status='".$status."'  WHERE id_user='".$id."';");
		header("location: viewer.php");
	}
?>
