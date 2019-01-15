<?PHP
	echo "test";
	$dir = "./files/";
	echo getcwd();

//	mkdir("/opt/testinthisout@ihopeitworks.com");
	copy("/opt/apache/htdocs/compsci/search/files/index.php", "/opt/apache/htdocs/compsci/search/files/testinthisout@ihopeitworks.com/index.php");
/*	if (($dh = opendir($dir)) !== false)
	{
		while (($file = readdir($dh)) !== false)
		{
			echo $dir."/".$file."<BR>\n";
			chmod ($dir."/".$file, 0777);
		}
		closedir($dh);
	}
	else
		echo "Permission denied";

*/
?>
