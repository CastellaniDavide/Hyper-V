<?php
function open_connection() {
	$username = "service";
	$password = "admin";
	$servername = "localhost";
	$dbname = "service";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname)
				or die ("Connection failed: %s\n" . mysqli_connect_error());

	return $conn;
}

function close_connection($conn) {
	$conn->close();
}

?>
