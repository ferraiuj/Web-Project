<?php
session_start();
		$servername = "localhost";
		$username = "";
		$password = "";
		$dbname = "user";	
		$array = array();
		$senderID = $_SESSION["sesID"];
		
		$dupC = 0;
		$conn = new mysqli($servername, $username, $password, $dbname);

		$sq = "SELECT * FROM friend_request 
		WHERE Accept = '1' AND ID = '$senderID' LIMIT 20 ";
		$result = $conn->query($sq);
			if ($result->num_rows >= 0) {
	
			while($row = $result->fetch_assoc()) {
				 $array[] = $row;

			//echo $sql;	
			}		
		
		}
		$_SESSION['Friends'] = $array;
		
		print_r($_SESSION['Friends'][0]['Sender']);
?> 