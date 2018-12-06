<?php
	require_once('db.php');
	function db_connect() {
		$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		return $connection;
	}

	function db_disconnect($connection) {
		if(isset($connection)) {
			mysqli_close($connection);
		}
	}

?>
