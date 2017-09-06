<?php
session_start();
error_reporting(0);
		//$addFriend = $_POST["value"];
		$accept = true;
		$servername = "localhost";
		$username = "";
		$password = "";
		$dbname = "user";	
		$dupC = 0;
		$senderID = $_SESSION["sesID"];
		$recipientID = $_SESSION["returnID"];
		$errMsg = "";
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sq = "SELECT ID, Sender FROM friend_request WHERE Sender = '$senderID'";
		$result = $conn->query($sq);
		if ($result->num_rows >= 0) {
	
			while($row = $result->fetch_assoc()) {
				
				if($row["ID"] === $recipientID){
					
					$dupC = $dupC + 1;
		
					
				}
			}	
		
		}
	if($dupC < 1 && $senderID !== $recipientID && $senderID !== null ){
					$sqla = "UPDATE user SET nPlus = nPlus+1 WHERE ID = '$recipientID' ";
					$conn->query($sqla);
					
			$sql = "INSERT INTO friend_request (ID, Sender, Accept)
					VALUES ('$recipientID', '$senderID', '$accept')";
					$conn->query($sql);
					$errMsg = "Friend request sent!";
	}else if($senderID === $recipientID){
		$errMsg = "You can't friend request yourself";
	}else if($senderID === null){
		$errMsg = "Log In or create an account to make friends";
	}

if (!isset($myObj)) {
    $myObj = new stdClass();

	$myObj->friendERM = $errMsg;
	
}
$myJSON = json_encode($myObj);
echo $myJSON;	


//var_dump($_POST);
?> 