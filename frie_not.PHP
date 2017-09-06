<?php
session_start();
error_reporting(0);
		
		
		$servername = "localhost";
		$username = "";
		$password = "";
		$dbname = "user";	
		$dupC = 0;
		$senderID = $_SESSION["sesID"];
		$recipientID = $_SESSION["returnID"];
		$array = array();
		$arrayOne = array();
		$conn = new mysqli($servername, $username, $password, $dbname);
		//CONSIDER OPTIMIZATION -- THIS FILE CAN PERFORM MAXIMUM 20 QUERIES IN ONE RUN
		//QUERY THAT JOINS USER TO FRIEND_REQUEST AND FILTERS TO JUST USER ID THEN STORES SENDER COLUMN IN ARRAY
		$sq = "SELECT * FROM friend_request 
		LEFT JOIN user 
		ON friend_request.ID = user.ID
		
		WHERE friend_request.ID = '$senderID' LIMIT 10 ";
		$result = $conn->query($sq);
		
		if ($result->num_rows >= 0) {
	
			while($row = $result->fetch_assoc()) {
				 $array[] = $row;

			//echo $sql;	
			}		
		
		}
		//QUERY ITERATION THAT FILTERS USER IDs TO SENDER ONLY 
		for ($i = 0; $i < count($array); $i++) {			
		
		$hold = $array[$i]['Sender'];
			
			$sql = "SELECT * FROM user 
		LEFT JOIN friend_request 
		ON user.ID = friend_request.ID
		
		WHERE user.ID = '$hold' LIMIT 10 ";

		//echo $hold;
		$result = $conn->query($sql);
		if ($result->num_rows >= 0) {
			
			while($row = $result->fetch_assoc()) {
				$name = $row["Fname"] . $row["Lname"] ;
				$arrayOne[] = $row;
				$_SESSION['Sender'] = $array;
			}		
		
		}
}

//EACH SPOT SHOULD BE STORED AS A SESSION VARIABLE AND DENOTES A NOTIFICATION WHICH IS NOT SPECIFIC TO FRIEND_REQUEST AND CAN BE REPLACED BY OTHER NOTIFICATIONS
if (!isset($myObj)) {
    $myObj = new stdClass();
	$myObj->spotZero = $arrayOne[0]['Fname'] . ' ' . $arrayOne[0]['Lname'];
	$myObj->spotOne = $arrayOne[1]['Fname'] . ' ' . $arrayOne[1]['Lname'];
	$myObj->spotTwo = $arrayOne[2]["Fname"] . ' ' . $arrayOne[2]['Lname'];
	$myObj->spotThree = $arrayOne[3]["Fname"] . ' ' . $arrayOne[3]['Lname'];
	$myObj->spotFour = $arrayOne[4]["Fname"] . ' ' . $arrayOne[4]['Lname'];
	$myObj->spotFive = $arrayOne[5]["Fname"] . ' ' . $arrayOne[5]['Lname'];
	$myObj->spotSix = $arrayOne[6]["Fname"] . ' ' . $arrayOne[6]['Lname'];
	$myObj->spotSeven = $arrayOne[7]["Fname"] . ' ' . $arrayOne[7]['Lname'];
	$myObj->spotEight = $arrayOne[8]["Fname"] . ' ' . $arrayOne[8]['Lname'];
	$myObj->spotNine = $arrayOne[9]["Fname"] . ' ' . $arrayOne[9]['Lname'];
}
$myJSON = json_encode($myObj);
echo $myJSON;
//print_r($array);
//print_r($_SESSION['Sender'][0]['Sender']);

//var_dump($_POST);
?> 