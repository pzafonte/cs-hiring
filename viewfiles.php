<?PHP
	session_start();
	if (!isset($_SESSION["id_user"]) || !isset($_GET["email"]) || ((($_SESSION["level"] != 1) && ($_SESSION["level"] != 2)) && ($_SESSION["email"] != $_GET["email"])))
		header ("location: viewer.php");
require("header.php");
?>

Under Construction
<?PHP
require("footer.php");
?>
