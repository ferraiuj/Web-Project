<?php
		$searchName = $_POST["value"];
		$retrieve = false;
		$servername = "localhost";
		$username = "";
		$password = "";
		$dbname = "user";	
		$dupC = 0;
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sqla = "SELECT DISTINCT Email, Password, Birthday, Gender, Lname, Fname, ID FROM user";
		$result = $conn->query($sqla);
		if ($result->num_rows >= 0) {
	
			while($row = $result->fetch_assoc()) {
				
				if($row["Email"] === $searchName || $row["Fname"] . " " . $row["Lname"] === $searchName ){
					session_start();
					$returnName = $row["Fname"] . " " . $row["Lname"] ;
					//$returnID = $row["ID"];
					$retrieve = true;
					$sesUser = $row["Email"];
					$sesFname = $row["Fname"];
					$sesLname = $row["Lname"];
					$sesBirthday = $row["Birthday"];
					$sesGender = $row["Gender"];
					$_SESSION["returnID"] = $row["ID"];
					
				}
			}
		}
		if ($dupC < 1) {
			$email = "No such Email";
		}else if($dupC == 1){
			$email = "Email Found!";
		}

if (!isset($myObj)) {
    $myObj = new stdClass();
	
	$myObj->rt = $retrieve;
	$myObj->user = $returnName;
	$myObj->id = $_SESSION["returnID"];
	$myObj->tfname = $sesFname;
	$myObj->tlname = $sesLname;
	$myObj->tbDay = $sesBirthday;
	$myObj->tGen = $sesGender;
	$myObj->tEmail = $sesUser;
	
}
$myJSON = json_encode($myObj);
echo $myJSON;
//var_dump($_POST);
?> 
