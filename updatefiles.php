<?PHP 
	session_start();
	if (!isset($_SESSION["level"]))
		header("location: login.php");
	else
	{
		require("header.php");
		include("databaseClass.php");
		$db = new database();
		if (isset($_FILES["file"]))
		{
			if ($_FILES["file"]["size"] > 0)
        	 	{
				$size = $_FILES["file"]["size"];
          		      $name = $_FILES["file"]["tmp_name"];
         	 	      $fp = fopen($name, 'r');
         	 	      	$content = fread($fp, $size);
         	 		 $content = addslashes($content);
         	 		 fclose($fp);
        	 	}
			 $id = $_POST["id"];
			  $type = substr($_POST["type"], 0, 2);
			  $fid = substr($_POST["type"], 2);
			if (!empty($type))
			{
				if ($fid)
				{
					$sql = "UPDATE files SET data='$content', size='$size' WHERE id_user='$id' AND id_file='$fid';";
//    echo $sql;
					$db->send_sql($sql);
					echo "File Updated";
				}
				else
				{
					$sql = "INSERT INTO files (id_user, type, data, size) VALUES ('".$id."', '".$type."', '".$content."', '".$size."');";
					$db->send_sql($sql);
					if ($db->insert_id())
				   	echo "File Uploaded";
			   	}
			}
			else
				echo "Please select a type of file";
		}
?>
<SCRIPT LANGUAGE=JavaScript>
function checkForm()
{
        var file = document.form1.file.value;
        if ((file == "") || (file.substr(file.length - 4) != ".pdf"))
        {
          alert ("You must provide the files in pdf format.");
          return false;
        }
        return true;
 }
</SCRIPT>

			<FORM action="updatefiles.php" method="POST" enctype="multipart/form-data" name="form1">
			<input type=hidden name=id value="<?PHP  echo $_SESSION["id_user"];?>">
<?PHP
	if ($_SESSION["usertype"] == 'T')
	{
	   $types = array("CV"=>"Curriculum Vitae", "TS"=>"Teaching Statement");
	   $files = array("CV"=>"", "TS"=>"");
	}	
	else
	{
	   $types = array("CV"=>"Curriculum Vitae", "TS"=>"Teaching Statement", "RS"=>"Research Statement", "CL"=>"Cover Letter");
	   $files = array("CV"=>"", "TS"=>"", "RS"=>"", "CL"=>"");
	}
				$db->send_sql("SELECT id_file, type FROM files WHERE id_user=".$_SESSION["id_user"]);
				while ($row = $db->next_row())
				{
					$files[$row[1]] = $row[0];
				}

?>
			      <BR/>
Select the file you wish to update. Clicking on the type name will download the currently uploaded one.<br/>
<?PHP
	foreach($types as $k=>$e)
	{
		echo "<INPUT type='radio' name='type' value='".$k.$files[$k]."'>";
		if (empty($files[$k][1]))
		   echo $e." (Not uploaded)";
		else
		   echo "<A HREF='download.php?fid=".$files[$k]."'>".$e."</A>";
		echo "<BR>\n";
	}
?>

			      <BR/>
			      <input type="file" name="file"><BR/>
			      <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
			      <input type="submit" name="submit" value="update file" onclick="return checkForm()">
			</FORM>			
			<A HREF="./viewer.php">Back to profile.</A>
<?PHP
		require("footer.php");
	}
?>
