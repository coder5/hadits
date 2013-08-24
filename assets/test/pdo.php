<?php
date_default_timezone_set('UTC');

try {
	$file_db = new PDO('sqlite:kitab.db');
	$file_db->setAttribute(PDO::ATTR_ERRMODE,
			PDO::ERRMODE_EXCEPTION);

// 	$result = $file_db->query("SELECT * FROM sqlite_master WHERE type='table';");
	$result = $file_db->query("SELECT * FROM kitab_all LIMIT 10");
	
	print_r($result);
	foreach ($result as $m) {
		echo  'nama adalah ='.$m['kitab_indonesia']. "<br/>";
	}

}
catch(PDOException $e) {
	// Print PDOException message
	echo $e->getMessage();
}

?>