<?php
	session_start();
	
		$servername = "localhost";
		$username = "";
		$password = "";
		$dbname = "user";	
		$sent = false;
		$senderID = $_SESSION["sesID"];
		$recipientID = $_SESSION["returnID"];
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sq = "SELECT ID, Sender FROM friend_request WHERE Sender = '$senderID' AND ID = '$recipientID' OR Sender = '$recipientID' AND ID = '$senderID' ";
		$result = $conn->query($sq);
		
		if ($result->num_rows >= 0) {
	
			while($row = $result->fetch_assoc()) {
				
				if($row["ID"] === $recipientID && $row["Sender"] === $senderID || $row["ID"] === $senderID && $row["Sender"] === $recipientID ){
					$sent = true;
				}
			}
		} 

if (!isset($myObj)) {
    $myObj = new stdClass();
	
	$myObj->sent = $sent;
	
	
}
$myJSON = json_encode($myObj);
echo $myJSON;	
//var_dump($_POST);
?> 