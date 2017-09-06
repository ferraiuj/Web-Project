<?php
	session_start();
	
	$logOut = "";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$logOut = $_POST["logOut"];
		if($logOut == true){
		session_unset();
		session_destroy(); 
		}
	echo $logOut;
}

    $myObj = new stdClass();
	
	$myObj->rt = $_SESSION["rt"];
	$myObj->user = $_SESSION["sesUser"];
	$myObj->fName = $_SESSION["sesFname"];
	$myObj->lName = $_SESSION["sesLname"];
	$myObj->bDay = $_SESSION["sesBirthday"];
	$myObj->gen = $_SESSION["sesGender"];
	$myObj->id = $_SESSION["sesID"];
	$myObj->nplus = $_SESSION["sesnPlus"];

$myJSON = json_encode($myObj);
echo $myJSON;

?> 