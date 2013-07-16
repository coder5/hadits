<?php
print_r(SQLite3::version());
$dbhandle = sqlite_open('.../application/haditst_teaser.db', 0666, $error);
if (!$dbhandle) die ($error);
    
$query = "SELECT * FROM Friends LIMIT 2";
$result = sqlite_query($dbhandle, $query);
if (!$result) die("Cannot execute query.");


$rows = sqlite_num_rows($result);
$cols = sqlite_num_fields($result);

echo "The result set has $rows rows and 
      $cols columns";

sqlite_close($dbhandle);
?>