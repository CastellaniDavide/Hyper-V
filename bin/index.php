<html>
 	<head>
  	    <title>webservice</title>
 	</head>
 	<body>
 	    	<?php
					include "conn.php";

					$conn = open_connection();
            		
					echo '<h1>webservice</h1>';

					// Get fields
					$sql = "DESCRIBE authors";
					$result = $conn->query($sql);
					$fields = array();

					while($row = $result->fetch_assoc()) {
						$fields[] = $row["Field"];
					}

					// Get elementt
					$sql = "SELECT * FROM authors";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						// Init table
						echo "<table style='border: 1px solid black;'>";

						// Add intestation
						echo "<tr>";
						foreach($fields as $field)
							echo "<th style='border: 1px solid black;'>" . $field . "</th>";
						echo "</tr>";

						while($row = $result->fetch_assoc()) {
							echo "<tr>";
							foreach($fields as $field)
								echo "<td style='border: 1px solid black;'>" . $row[$field] . "</td>";
							echo "</tr>";
						}

						// End table
						echo "</table>";
					} else {
						echo "no authors";
					}

					close_connection($conn);
        	?>
	</body>
</html>
