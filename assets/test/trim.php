<form action="http://hadits.coder5.dev/assets/test/trim.php"
	method="POST">
	<input type="text" name="search" /> <input type="submit" value="Search">
</form>
<?php
date_default_timezone_set ( 'Asia/Jakarta' );

function escp($post) {
	$arr = explode ( ' ', trim ( $post ) );
	$array = array_filter ( $arr );
	$arr_val = array_values ( $array );
	// $final_keyword = implode(' ', $arr_val);
	return $arr_val;
}
function escp_db($post) {
	$arr_val = escp ( $post );
	$sum = '';
	foreach ( $arr_val as $var ) {
		if (DBUSE == 'sqlite') {
			$sum .= $var . '*';
		} else {
			$sum .= ' +' . $var . '*';
		}
	}
	return $sum;
}

if ($_POST) {
	$file_db = new PDO ( 'sqlite:../../application/db/hadits1.db' );
	$file_db->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	// $post = "hello wor'ld jum'ah";
	$post = $_POST ['search'];
	echo 'from post' . $post . "<br/>";
	$str = $post;
	$arr = explode ( ' ', trim ( $str ) );
	// $str2 = trim ( preg_replace ( '/\s+/', '', $str ) );
	$array = array_filter ( $arr );
	echo 'array_filter' . var_dump ( $array );
	echo "<br/>";
	$arr_val = array_values ( $array );
	echo 'array_values' . var_dump ( $arr_val );
	echo "<br/>";
	$final_keyword = implode ( ' ', $arr_val );
	var_dump(escp($post));
	echo "<br/>";
	try {
		$sql = "SELECT * FROM had_all_fts4 WHERE isi_indonesia MATCH ':keyword';";
		$sql_check = $file_db->prepare ( $sql );
		$sql_check->bindParam ( ':keyword', $final_keyword );
		$sql_check->execute ();
	} catch ( Exception $e ) {
		$e . " - " . basename ( __FILE__ );
	}
	if (! empty ( $sql_check )) {
		$_loader = true;
		$fetch = $sql_check->fetch ( PDO::FETCH_ASSOC );
		$name = $fetch ['isi_indonesia'];
	}
	
	print_r($name);
	echo 'Query ' . $sql . '<br/>';
	$result = $file_db->query ( $sql );
	foreach ( $result as $row ) {
		'isi ' . $row ['isi_indonesia'];
	}
	// print_r ( $result );
	echo "<br/>";
	echo 'from post' . var_dump ( trim ( $str ) );
	echo "<br/>";
	echo 'hasil ' . $final_keyword;
}
// echo '<br>haidar test please';
// echo 'later ill check this lama juga yaaa lebih cepet web meski all tab';
?>