<?PHP

	/*************************************************
	**												**
    **  Class database written by Peter Zafonte     **
	** 												**
	*************************************************/

	class database
	{
		private $link;
		private $res;

		//Closes the connection to the DB
		public function disconnect()
		{
			if (isset($this->link))
				pg_close($this->link);
			unset($this->link);
		}
	

		// connects to the DB or disconnects/reconnects if a connection already existed
		public function connect()
		{
			if (isset($this->link))
				$this->disconnect();
			else
			{
				try {
					//Server no longer exists -- change credentials if using PostGres
					if (!$this->link=pg_connect("host=heineken.cs.stevens-tech.edu user=www-cs-search password=xoot5The dbname=www-cs-searchDB"))
						throw new Exception("Cannot Connect to ".$this->host);
				} catch (Exception $e)
				{
					echo $e->getMessage();
					exit;
				}
			}
		}

		public function send_sql($sql) {
			if (!isset($this->link))
				$this->connect();
			try {
				if (! $this->res = pg_query($this->link, $sql))
					throw new Exception("Could not send query");
			} catch (Exception $e)
			{
				echo $e->getMessage()."<BR>";
				echo pg_last_error($this->link);
				exit;
			}
			return $this->res;
		}

		// returns an array with the next row
		public function next_row()
		{
			if (isset($this->res))
				return pg_fetch_row($this->res);
			echo "You need to make a query first!!!";
			return false;
		}
		public function num_rows()
		{
			if (isset($this->res))
				return pg_num_rows($this->res);
			echo "You need to make a query first!!!";
			return false;
		}
}


?>
