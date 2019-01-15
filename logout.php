<?PHP
	session_start();
	unset($_SESSION["name"]);
	unset($_SESSION["surname"]);
	unset($_SESSION["phone"]);
	unset($_SESSION["email"]);
	unset($_SESSION["pass"]);
	unset($_SESSION["address"]);
	unset($_SESSION["level"]);
	unset($_SESSION["id_user"]);
	session_destroy();
	header("location: login.php");
?>