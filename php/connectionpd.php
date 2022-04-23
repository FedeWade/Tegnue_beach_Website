<?php
class DBConnection
{
	const host = 'localhost';
	const user = 'fballari';
	const pwd = 'Eep3sheideiHui4p';
	const db = 'fballari';

	public $connectionOpen = false;
	public $failedConnection = false;
	public $connection;

	public function openConnection()
	{
		if ($this->failedConnection)
		return false;
		$this->connection = @mysqli_connect(static::host, static::user, static::pwd, static::db);
		mysqli_query($this->connection,"SET NAMES 'utf8'");
		if (!$this->connection) 
		{
		$this->failedConnection = true;
		return false;
		}
    $this->connectionOpen = true;
    return true;
	}
  
	private function getAllQuery($query)
	{
		$result = mysqli_query($this->connection, $query);
		return mysqli_fetch_all($result, MYSQLI_ASSOC);
	}

	public function getelements($group)
	{
		return $this->getAllQuery("SELECT ElementoMenu.Nome AS nomepiatto, ElementoMenu.Prezzo AS prezzopiatto, Gruppo.Nome AS nomegruppo 
								   FROM ElementoMenu JOIN Gruppo ON ElementoMenu.Gruppo=Gruppo.CodiceGruppo 
								   WHERE Gruppo.Nome='$group' ");
	}
	
	public function closeConnection()
	{
		if ($this->connectionOpen)
			mysqli_close($this->connection);
		$this->connectionOpen = false;
	}
}
?>