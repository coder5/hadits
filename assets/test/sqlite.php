<?php
$query = "SELECT * FROM sqlite_master WHERE type='table'";
$db_sqlite = '../../application/db/hadits1.db';
class MyDB extends SQLite3 {
	protected $db_sqlite = '../../application/db/hadits1.db';
	function __construct() {
		$this->open ( '../../application/db/hadits1.db' );
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
		echo "NAME = " . $row ['name'] . "\n";
	}
	echo "Operation done successfully\n";
}
// print_r(SQLite3::version());
// $sqlite3 = extension_loaded('sqlite3');
// // $dbhandle = sqlite_open('../../application/db/hadits1.db', 0755, $error);
// // if (!$dbhandle) die ($error);
// // $dbh = new PDO('sqlite:'.$db_sqlite); // success
// // foreach ($dbh->query('SELECT * FROM sqlite_master WHERE type=\'table\';') as $row) {
// // echo $row['name'];
// // }
// $dbhandle = sqlite_open($db_sqlite);
// $result = sqlite_query($dbhandle, $query, $error);
// var_dump(sqlite_fetch_array($result));
// foreach ($result as $entry) {
// echo 'Name: ' . $entry['name'] ;
// }
// if ($db = new SQLiteDatabase($db_sqlite, 0666, $sqliteerror)) {
// foreach($db->query($query) as $row) {
// echo $row['name'];
// }
// }
// $db = new SQLite3($db_sqlite);

// $results = $db->query($query);
// while ($row = $results->fetchArray()) {
// var_dump($row);
// }
// $result = sqlite_query($dbhandle, $query);
// if (!$result) die("Cannot execute query.");

// $rows = sqlite_num_rows($result);
// $cols = sqlite_num_fields($result);

// echo "The result set has $rows rows and
// $cols columns";

// sqlite_close($dbhandle);

?>