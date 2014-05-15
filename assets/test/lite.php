<?php
date_default_timezone_set ( 'Asia/Jakarta' );
$query = "SELECT * FROM sqlite_master WHERE type='table'";
$db_sqlite = '../../application/db/kitab.db';
class MyDB extends SQLite3 {
	protected $db_sqlite = '../../application/db/kitab.db';
	function __construct() {
		$this->open ( '../../application/db/kitab.db' );
	}
}
$db = new MyDB ();
if (! $db) {
	echo $db->lastErrorMsg ();
} else {
	echo "Opened database successfully\n";
}

$sql = <<<EOF
     $query
EOF;

$ret = $db->exec ( $sql );

if (! $ret) {
	echo $db->lastErrorMsg ();
} else {
	echo "Table created successfully\n";
}
// $db->close ();
// $ret = $db->query($sql);

$db = new MyDB ();
if (! $db) {
	echo $db->lastErrorMsg ();
} else {
	echo "Opened database successfully\n";
	while ( $row = $ret->fetchArray(SQLITE3_ASSOC) ) {
		echo "NAME = " . $row ['kitab_indonesia'] . "\n";
	}
	echo "Operation done successfully\n";
}
?>