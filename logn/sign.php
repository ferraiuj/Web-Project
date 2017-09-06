<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
	
	<style>
	
	div.container{
	position: relative;
	width:100%;
	height: 100%;
	}
	
	header{
	
	
	}
	.firstName{
	position: fixed;
	top:140px;
	left: 700px;
	resize: none;
	
	}
	.lastName{
	position:fixed;
	top: 140px;
	left: 880px;
	resize: none;
	}
	
	.email{
	position:fixed;
	top: 200px;
	left: 700px;
	resize: none;
	width: 337px;
	}
	
	.password{
	position: fixed;
	top: 260px;
	left: 700px;
	resize: none;
	width: 337px;
	}
	
	.birthdayYear{
	position:fixed;
	top: 320px;
	left: 819px;
	resize: none;
	font-size: 75%;
	
	}
	.birthdayMonth{
	position:fixed;
	top: 320px;
	left: 700px;
	resize: none;
	font-size: 75%;
	
	}
	.birthdayDay{
	position:fixed;
	top: 320px;
	left: 782px;
	resize: none;
	font-size: 75%;
	
	}
	.genderM{
	position:fixed;
	top: 380px;
	left: 700px;
	}
	.genderF{
	position:fixed;
	top: 380px;
	left: 775px;
	}
	
	.createAccount{
	position: fixed;
	top: 480px;
	left: 700px;
	}
	.pM{
	position:fixed;
	top: 380px;
	left: 730px;
	}
	.pF{
	position:fixed;
	top: 380px;
	left: 805px;
	}
	</style> 
    <title>Join!</title>
	


	 <script>
		var d = new Date();
		var y = d.getFullYear();
		var x = 0;
		var b = aa;
		
		function createYear() {
			
		
			while(x < 113){
			var c = document.createElement("option");
			c.text = y;
			y--;
			x++;
			
			document.getElementById("year").options.add(c, x);
			document.getElementById("year").options.value = y;
			
				} 
				document.getElementById("year").selectedIndex = sessionStorage.getItem("someVarName");
				
			}
			
			
		function set(){
			b = document.getElementById("year").selectedIndex;
			var someVarName = b;
			sessionStorage.setItem("someVarName", someVarName);
			
			
				
		}
		
	</script>
  </head>  

 <?php
	
	//error_reporting(0);
//session_start();
$servername = "localhost";
$username = "";
$password = "";
$dbname = "user";
$fname = "";

$lname = "";

$email = "";

$pword = "";

$gender = "";

$year = "";

$month = "";

$day = "";

$bday =  "";

$fnameErr = $lnameErr = $emailErr = $genderErr = $pwordErr = "";
$conn = new mysqli($servername, $username, $password, $dbname);

$validFName = false;
$validLName = false;
$validPassword= false;
$validEmail = false;
$validGender = false;
$validEntry = false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "First name is required *";
  } else {
    $fname = test_input($_POST["fname"]);
	 if (!preg_match("/^[a-zA-Z]*$/",$fname)) {
      $fnameErr = "Only letters allowed"; 
    }else{
		$validFName = true;
	}
  }
  if (empty($_POST["lname"])) {
    $lnameErr = "* Last name is required";
  } else {
    $lname = test_input($_POST["lname"]);
	
	if (!preg_match("/^[a-zA-Z]*$/",$lname)) {
      $lnameErr = "Only letters allowed"; 
    }else{
		$validLName = true;
	}
  }
  if (empty($_POST["pword"])) {
    $pwordErr = "* Password is required";
  } else {
    $pword = test_input($_POST["pword"]);
		if(strlen($pword) < 8){
		 $pwordErr = "* Password must contain at least 8 characters";
		 
		}else{
			$validPassword= true;
		}	 
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required *";
  } else {
    $email = test_input($_POST["email"]);
	 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email *"; 
    }else{
		$validEmail = true;
	}
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required *";
  } else {
    $gender = test_input($_POST["gender"]);
	$validGender = true;
  }
  
	$year = test_input($_POST["year"]);

	$month = test_input($_POST["month"]);

	$day = test_input($_POST["day"]);
	
	$bday =  $year. "-". $month. "-" .$day;
	
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$sqla = "SELECT DISTINCT Email FROM user";
$result = $conn->query($sqla);
 
$dupC = 0;
if ($result->num_rows >= 0) {
	
    while($row = $result->fetch_assoc()) {
		
		if($row["Email"] === $email){
			$dupC = $dupC + 1;	
		}	
    }
} else {
    echo "0 results";
}
if($validFName === true && $validLName === true && $validPassword === true && $validGender === true && $validEmail === true){
	
	$validEntry = true;
}
if($dupC < 1 && $validEntry === true){
	
	$sql = "INSERT INTO user (Fname, Lname, Email, Password, Birthday, Gender)
		VALUES ('$fname', '$lname', '$email', '$pword', '$bday', '$gender')";
		
		$conn->query($sql);
}else if ($dupC >= 1) {
	
	$emailErr = "Email is duplicate *";
}

$conn->close();

?>  
  <body onload = "createYear()">
  
  <div class = "container"> 
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 
	<input type = "text" class = "firstName" name ="fname" rows="1" value = "<?php echo $fname;?>"><span class="error" style = "position: fixed; left: 540px; top: 140px;"><?php echo $fnameErr;?></span></input>
	
	<input type = "text" class = "lastName" name = "lname" rows="1" value = "<?php echo $lname;?>"><span class="error" style = "position: fixed; left: 1060px; top: 140px;"><?php echo $lnameErr;?></span></input>
	<input type = "text" class = "email" name ="email" rows="1" value = "<?php echo $email;?>"><span class="error" style = "position: fixed; left: 570px; top: 200px;"><?php echo $emailErr;?></span></input>
	<input type = "password" class = "password" name ="pword" rows="1" value = "<?php echo $pword;?>"><span class="error" style = "position: fixed; left: 1060px; top: 260px;"><?php echo $pwordErr;?></span></input>

	<select class = "birthdayDay" name = "day">
		 <option <?php if (isset($day) && $day=="01") echo "selected";?> value ="01">1
		 <option <?php if (isset($day) && $day=="02") echo "selected";?> value="02">2
		 <option <?php if (isset($day) && $day=="03") echo "selected";?> value="03">3
		 <option <?php if (isset($day) && $day=="04") echo "selected";?> value="04">4
		 <option <?php if (isset($day) && $day=="05") echo "selected";?> value="05">5
		 <option <?php if (isset($day) && $day=="06") echo "selected";?> value="06">6
		 <option <?php if (isset($day) && $day=="07") echo "selected";?> value="07">7
		 <option <?php if (isset($day) && $day=="08") echo "selected";?> value="08">8
		 <option <?php if (isset($day) && $day=="09") echo "selected";?> value="09">9
		 <option <?php if (isset($day) && $day=="10") echo "selected";?> value="10">10
		 <option <?php if (isset($day) && $day=="11") echo "selected";?> value="11">11
		 <option <?php if (isset($day) && $day=="12") echo "selected";?> value="12">12
		 <option <?php if (isset($day) && $day=="13") echo "selected";?> value="13">13
		 <option <?php if (isset($day) && $day=="14") echo "selected";?> value="14">14
		 <option <?php if (isset($day) && $day=="15") echo "selected";?> value="15">15
		 <option <?php if (isset($day) && $day=="16") echo "selected";?> value="16">16
		 <option <?php if (isset($day) && $day=="17") echo "selected";?> value="17">17
		 <option <?php if (isset($day) && $day=="18") echo "selected";?> value="18">18
		 <option <?php if (isset($day) && $day=="19") echo "selected";?> value="19">19
		 <option <?php if (isset($day) && $day=="20") echo "selected";?> value="20">20
		 <option <?php if (isset($day) && $day=="21") echo "selected";?> value="21">21
		 <option <?php if (isset($day) && $day=="22") echo "selected";?> value="22">22
		 <option <?php if (isset($day) && $day=="23") echo "selected";?> value="23">23
		 <option <?php if (isset($day) && $day=="24") echo "selected";?> value="24">24
		 <option <?php if (isset($day) && $day=="25") echo "selected";?> value="25">25
		 <option <?php if (isset($day) && $day=="26") echo "selected";?> value="26">26
		 <option <?php if (isset($day) && $day=="27") echo "selected";?> value="27">27
		 <option <?php if (isset($day) && $day=="28") echo "selected";?> value="28">28
		 <option <?php if (isset($day) && $day=="29") echo "selected";?> value="29">29
		 <option <?php if (isset($day) && $day=="30") echo "selected";?> value="30">30
		 <option <?php if (isset($day) && $day=="31") echo "selected";?> value="31">31
		 
	</select>
	<select class = "birthdayMonth" name = "month" value = "<?php echo $month;?>">
	     <option <?php if (isset($month) && $month=="01") echo "selected";?> value="01">January</option>
		 <option <?php if (isset($month) && $month=="02") echo "selected";?> value="02">February</option>
		 <option <?php if (isset($month) && $month=="03") echo "selected";?> value="03">March</option>
		 <option <?php if (isset($month) && $month=="04") echo "selected";?> value="04">April</option>
		 <option <?php if (isset($month) && $month=="05") echo "selected";?> value="05">May</option>
		 <option <?php if (isset($month) && $month=="06") echo "selected";?> value="06">June</option>
		 <option <?php if (isset($month) && $month=="07") echo "selected";?> value="07">July</option>
		 <option <?php if (isset($month) && $month=="08") echo "selected";?> value="08">August</option>
		 <option <?php if (isset($month) && $month=="09") echo "selected";?> value="09">September</option>
		 <option <?php if (isset($month) && $month=="10") echo "selected";?> value="10">October</option>
		 <option <?php if (isset($month) && $month=="11") echo "selected";?> value="11">November</option>
		 <option <?php if (isset($month) && $month=="12") echo "selected";?> value="12">December</option>
	</select>
	<select class = "birthdayYear" id = "year" name = "year">
		
	</select>
	
	<input class = "genderM" type="radio" name="gender"  
	<?php if (isset($gender) && $gender=="M") echo "checked";?> value ="M">
	<input class = "genderF" type="radio" name="gender" 
	<?php if (isset($gender) && $gender=="F") echo "checked";?> value ="F">
	<span class="error" style = "position: fixed; left: 545px; top: 380px;"><?php echo $genderErr;?></span>
	
	
	<div class = "pM">Male</div>
	<div class = "pF">Female</div>
	
	<input class = "createAccount" type="submit" value="Submit" onclick = "set()">
	
 	</form>
	
	
		
  </body>
  
  
</html>