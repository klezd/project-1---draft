<?php
	try
	{
	 $dsn = "mysql:host=localhost;dbname=asian_aroma";
	 $db = new PDO ($dsn, "user", "test");
	 $db->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e)
	{
	 print ("Cannot connect to server\n");
	 print ("Error code: " . $e->getCode () . "\n");
	 print ("Error message: " . $e->getMessage () . "\n");
	}
	?>
