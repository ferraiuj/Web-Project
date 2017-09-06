<?php

	$id = "";
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
				
				if($row["Email"] === $email){
					$dupC = $dupC + 1;	
					$id = $row["ID"];
					if($row["Password"] === $pword){
						session_start();
						
						$_SESSION["sesUser"] = $row["Email"];
						$_SESSION["sesFname"] = $row["Fname"];
						$_SESSION["sesLname"] = $row["Lname"];
						$_SESSION["sesBirthday"] = $row["Birthday"];
						$_SESSION["sesGender"] = $row["Gender"];
						$_SESSION["sesID"] = $row["ID"];
						
						$retrieve = true;
					}	
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
	$myObj->user = $_SESSION["sesUser"];
	$myObj->fName = $_SESSION["sesFname"];
	$myObj->lName = $_SESSION["sesLname"];
	$myObj->bDay = $_SESSION["sesBirthday"];
	$myObj->gen = $_SESSION["sesGender"];
}
$myJSON = json_encode($myObj);
echo $myJSON;
//var_dump($_POST);
?> 
