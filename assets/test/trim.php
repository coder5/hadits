<form action="http://hadits.dev/assets/test/trim.php" method="POST">
	<input type="text" name="search" /> <input type="submit" value="Search">
</form>


<?php
date_default_timezone_set ( 'Asia/Jakarta' );
if ($_POST) {
	$file_db = new PDO ( 'sqlite:../../application/db/hadits1.db' );
	// $post = "hello wor'ld jum'ah";
	$post = $_POST ['search'];
	echo 'from post' . $post . "<br/>";
	$str = $post;
	$arr = explode ( ' ', trim ( $str ) );
	// $str2 = trim ( preg_replace ( '/\s+/', '', $str ) );
	$array = array_filter ( $arr );
	echo 'array_filter' . var_dump ( $array );
	echo "<br/>";
	$arr_val = array_values ( $array ) ;
	echo 'array_values' .var_dump ( $arr_val );
	echo "<br/>";
	$result = $file_db->query ( "SELECT * FROM had_all_fts4 WHERE isi_indonesia MATCH 'table';" );
	print_r ( $result );
	echo "<br/>";
	echo 'from post' . var_dump ( trim ( $str ) );
	echo "<br/>";
	echo 'hasil'. implode(' ', $arr_val);
}
// echo '<br>haidar test please';
// echo 'later ill check this lama juga yaaa lebih cepet web meski all tab';
?>