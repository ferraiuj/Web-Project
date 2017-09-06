<?php
session_start();
$servername = "localhost";
		$username = "";
		$password = "";
		$dbname = "user";	
		$accept = null;
		$senderID = $_SESSION["sesID"];
		$index = "";
		$dupC = 0;
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$index = $_POST["index"];
			$accept = $_POST["accept"];
			echo $index;
			echo $accept;
		}
		if($accept == true){
			$ind = $_SESSION['Sender'][$index]['Sender'];
			echo $ind;
			$sq = "UPDATE friend_request 
		SET Accept = $accept
		WHERE Sender = '$ind' AND ID = $senderID ";
		$conn->query($sq);
		}else if($accept == false){
			$ind = $_SESSION['Sender'][$index]['Sender'];
			echo $ind;
			$sqq = "UPDATE friend_request 
		SET Accept = $accept
		WHERE Sender = '$ind' AND ID = $senderID ";
		$conn->query($sqq);
		}
	
		
?> 