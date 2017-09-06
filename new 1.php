<!DOCTYPE html>
<html>
	<head>
		<style id = "wow">

		
			#headerLink1{
				position: fixed;
				top:25px;
				left: 190px;
				width: 28px;
			}
			#headerLink2{
				position: fixed;
				top:25px;
				left: 225px;
				width: 55px;
			}
			#headerLink3{
				position: fixed;
				top:25px;
				left: 290px;
				width: 115px;
			}
			#headerLink4{
				position: fixed;
				top:25px;
				left: 415px;
				width: 105px;
			}
			#headerLink5{
				position: fixed;
				top:25px;
				left: 190px;
				width: 28px;
			}
			#link1{
				position: fixed;
				top: 50px;	
			}
			#link3{
				position: fixed;
				top: 100px;	
			}
			
			#signInEmail{
				position: fixed;
				left 400px;
			
			}
			
			#signInPassword{
				position: fixed;
				left 500px;
			}
			
			.signIn{
				position: fixed;
				top: 25px;
				left: 875px;
			}
			
			:link {
				
				position: fixed;
				background-color: black;
				border: none;
				font-size: 20px;
				color: #FFFFFF;
				margin-left: 0px;
   
				text-align: left;
				text-decoration: none;
				overflow: hidden;
				cursor: pointer;
				left:0px;
				width: 141px;
			}

			a:visited {
				color: green;
			}


			a:hover {
				border: none;
				background-color: white;
				color: hotpink;
			}

			a:active {
				color: blue;
			}
	
			
			#grad1 {

				background: red; /* For browsers that do not support gradients */
				background: -webkit-linear-gradient(red, yellow); /* For Safari 5.1 to 6.0 */
				background: -o-linear-gradient(red, yellow); /* For Opera 11.1 to 12.0 */
				background: -moz-linear-gradient(red, yellow); /* For Firefox 3.6 to 15 */
				background: linear-gradient(red, yellow); /* Standard syntax (must be last) */
			}

			
			.leftButtonAnim{
				position: fixed;
				width: 30px;
				height:100px;
				top:155px;
				left: 176px;
			
			}
			.rightButtonAnim{
				position: fixed;
				right: 0px;
				width: 30px;
				height:100px;
				top:155px;
			}
			#dem{

				cursor: pointer;
				width: 100px;
				height: 100px;
				background: red;
				position: fixed;

				-webkit-animation: mymove 30s infinite;  
				-webkit-animation-fill-mode: forwards;
				-webkit-animation-timing-function: linear; 

				animation: mymove 30s infinite;
				animation-fill-mode: forwards;
				animation-timing-function: linear;
				border-radius: 25px 25px 25px 25px;
				z-index = -2;

			}

			#dem1 {
				cursor: pointer;
				width: 100px;
				height: 100px;
				background: blue;
				position: fixed;
				-webkit-animation: mymove 30s infinite;  /* Safari 4.0 - 8.0 */
				-webkit-animation-fill-mode: both;
				-webkit-animation-delay: 3s;/* Safari 4.0 - 8.0 */
				-webkit-animation-timing-function: linear; /* Safari 4.0 - 8.0 */

				animation: mymove 30s infinite;
				animation-fill-mode: both;
				animation-delay:3s;
				animation-timing-function: linear;
				border-radius: 25px 25px 25px 25px;

			}
			#dem2 {
				cursor: pointer;
				width: 100px;
				height: 100px;
				background: blue;
				position: fixed;
				-webkit-animation: mymove 30s infinite;  /* Safari 4.0 - 8.0 */
				-webkit-animation-fill-mode: backwards;
				-webkit-animation-delay: 4s;/* Safari 4.0 - 8.0 */
				-webkit-animation-timing-function: linear; /* Safari 4.0 - 8.0 */

				animation: mymove 30s infinite;
				animation-fill-mode: backwards;
				animation-delay:6s;
				animation-timing-function: linear;
				border-radius: 25px 25px 25px 25px;

			}
			#dem3 {
				cursor: pointer;
				width: 100px;
				height: 100px;
				background: blue;
				position: fixed;
				-webkit-animation: mymove 30s infinite;  /* Safari 4.0 - 8.0 */
				-webkit-animation-fill-mode: backwards;
				-webkit-animation-delay: 6s;/* Safari 4.0 - 8.0 */
				-webkit-animation-timing-function: linear; /* Safari 4.0 - 8.0 */

				animation: mymove 30s infinite;
				animation-fill-mode: backwards;
				animation-delay:9s;
				animation-timing-function: linear;
				border-radius: 25px 25px 25px 25px;

			}
			#dem4{
				cursor: pointer;
				width: 100px;
				height: 100px;
				background: blue;
				position: fixed;
				-webkit-animation: mymove 30s infinite;  /* Safari 4.0 - 8.0 */
				-webkit-animation-fill-mode: backwards;
				-webkit-animation-delay: 12s;/* Safari 4.0 - 8.0 */
				-webkit-animation-timing-function: linear; /* Safari 4.0 - 8.0 */

				animation: mymove 30s infinite;
				animation-fill-mode: backwards;
				animation-delay:12s;
				animation-timing-function: linear;
				border-radius: 25px 25px 25px 25px;

			}
			#dem5{
				cursor: pointer;
				width: 100px;
				height: 100px;
				background: blue;
				position: fixed;
				-webkit-animation: mymove 30s infinite;  /* Safari 4.0 - 8.0 */
				-webkit-animation-fill-mode: backwards;
				-webkit-animation-delay: 15s;/* Safari 4.0 - 8.0 */
				-webkit-animation-timing-function: linear; /* Safari 4.0 - 8.0 */

				animation: mymove 30s infinite;
				animation-fill-mode: backwards;
				animation-delay:15s;
				animation-timing-function: linear;
				border-radius: 25px 25px 25px 25px;

			}
			#dem6 {
				cursor: pointer;
				width: 100px;
				height: 100px;
				background: blue;
				position: fixed;
				-webkit-animation: mymove 30s infinite;  /* Safari 4.0 - 8.0 */
				-webkit-animation-fill-mode: backwards;
				-webkit-animation-delay: 18s;/* Safari 4.0 - 8.0 */
				-webkit-animation-timing-function: linear; /* Safari 4.0 - 8.0 */

				animation: mymove 30s infinite;
				animation-fill-mode: backwards;
				animation-delay:18s;
				animation-timing-function: linear;
				border-radius: 25px 25px 25px 25px;
	
			}
			#dem7
			{
				cursor: pointer;
				width: 100px;
				height: 100px;
				background: blue;
				position: fixed;
				-webkit-animation: mymove 30s infinite;  /* Safari 4.0 - 8.0 */
				-webkit-animation-fill-mode: backwards;
				-webkit-animation-delay: 21s;/* Safari 4.0 - 8.0 */
				-webkit-animation-timing-function: linear; /* Safari 4.0 - 8.0 */
	
				animation: mymove 30s infinite;
				animation-fill-mode: backwards;
				animation-delay:21s;
				animation-timing-function: linear;
				border-radius: 25px 25px 25px 25px;

			}
			#dem8{
				cursor: pointer;
				width: 100px;
				height: 100px;
				background: black;
				position: fixed;
				-webkit-animation: mymove 30s infinite;  /* Safari 4.0 - 8.0 */
				-webkit-animation-fill-mode: backwards;
				-webkit-animation-delay: 24s;/* Safari 4.0 - 8.0 */
				-webkit-animation-timing-function: linear; /* Safari 4.0 - 8.0 */

				animation: mymove 30s infinite;
				animation-fill-mode: backwards;
				animation-delay:24s;
				animation-timing-function: linear;
				border-radius: 25px 25px 25px 25px;

			}
			#dem9 {
				cursor: pointer;
				width: 100px;
				height: 100px;
				background: blue;
				position: fixed;
				-webkit-animation: mymove 30s infinite;  /* Safari 4.0 - 8.0 */
				-webkit-animation-fill-mode: backwards;
				-webkit-animation-delay: 27s;/* Safari 4.0 - 8.0 */
				-webkit-animation-timing-function: linear; /* Safari 4.0 - 8.0 */

				animation: mymove 30s infinite;
				animation-fill-mode: backwards;
				animation-delay:27s;
				animation-timing-function: linear;
				border-radius: 25px 25px 25px 25px;

			}
			@-webkit-keyframes mymove {

				from{left: 0px;}
				to {left: 1350px;}
				from{top: 50px;}
				to {top: 50px;}

			}

			@-webkit-keyframes mymove2 {

			}
			
			header {
				top: -12px;
				left: 1px;

				position: relative;
				color: white;
				background-color: black;
				text-align: center;
				height: 50px;

			}

			footer{
				position: relative;
				padding: 1em;
				color: white;
				background-color: gray;
				clear: left;
				text-align: center;
				height:100px;
				bottom: 70px;
				z-index: 1;

			}
			nav {
				border-radius: 25px 25px 25px 0px;
				position: relative;
				background-color: black;

				left: -18px;
				height: 500px;
				overflow: hidden;
				max-width: 160px;
				padding-top: 75px;
				z-index: 2;
			}

			nav ul {
				list-style-type: none;
				padding: 0;

			}
			nav ul a {
				text-decoration: none;
			}

			.sanserif	{
				font-family: Impact, Helvetica, sans-serif;

			}
			
			article {

				position: fixed;
				top: -8px;
				left: -1px;
				width: 100%;
				height: 680px;
				overflow: hidden;
				background-color:gray;
				z-index: -10;	
			}
		
			section{

				top: -59px;
				left: 0px;
				height: 600px;
				border-radius: 25px 25px 25px 0px;
				position: relative;
				background-color: red;

				max-width: 160px;
				padding: 1em;
				margin-left: 0px;
				padding-left: 0;
				padding-top: 0;
				overflow: hidden;
				z-index: 1;
			}
			
			
			

		</style>

	
		<title>ImHome 
		</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		
		
		<article> 

			<header id = "dead" > 

				<div class = "one" onclick="myFunction(this)" id = "dem"></div>
				<div class = "one" style ="height: 100px; width: 100px" onclick="myFunction(this)" id ="dem1"></div>
				<div class ="one" style ="height: 100px; width: 100px" onclick="myFunction(this)" id ="dem2"></div>
				<div class= "one" style ="height: 100px; width: 100px" onclick="myFunction(this)" id ="dem3"></div>
				<div class= "one" style ="height: 100px; width: 100px" onclick="myFunction(this)" id ="dem4"></div> 
				<div class= "one" style ="height: 100px; width: 100px" onclick="myFunction(this)" id ="dem5"></div>
				<div class= "one" style ="height: 100px; width: 100px" onclick="myFunction(this)" id ="dem6"></div> 
				<div class= "one" style ="height: 100px; width: 100px" onclick="myFunction(this)" id ="dem7"></div>
				<div class= "one" style ="height: 100px; width: 100px" onclick="myFunction(this)" id ="dem8"></div> 
				<div class= "one" style ="height: 100px; width: 100px" onclick="myFunction(this)" id ="dem9"></div>

				<button class = "leftButtonAnim" onclick = "moveLeft()" > <i class="fa fa-chevron-left"></i> </button>
				<button class = "rightButtonAnim" onclick = "moveRight()" > <i class="fa fa-chevron-right"></i></button>
				
				<h1 class = "sanserif" >ImHome 
				</h1>
				

				<section id="grad1">
				
				<a id = "headerLink1" href="#">Me</a>	
				<a id = "headerLink2" href="http://localhost/AY/logn/sign.php">Log In</a>	
				<a id = "headerLink3" href="#">Group Invites</a>	
				<a id = "headerLink4" href="#">Find Groups</a>	
				
				<textarea style = "position: fixed; top: 25px; left: 1045px; resize: none; width: 250px;" placeholder = "search" rows="1" cols="50"></textarea>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
						<input type = "text" class = "signInEmail" name ="email" rows="1" style = "position: fixed; left: 525px; top:25px" placeholder = "email"></input>
						<input type = "text" class = "signInPassword" name ="password" rows="1" style = "position: fixed; left: 700px; top:25px" placeholder = "password"></input>
						<input class = "signIn" type="submit" value="Submit">
				</form>
				
				<i class="material-icons" style = "position: fixed; top: 25px; left: 1015px">search</i>
					<nav>
						<a id = "link1" href="file:///C:/xampp/htdocs/AY/fight/f12.html">Current Discussion</a>
						
						<a id = "link3" href="#">Interactions</a>
					</nav>

				</section>
				
				<footer> </footer>

			</header>



		</article>
		<?php
		$servername = "localhost";
		$username = "";
		$password = "";
		$dbname = "user";
		
		$email = "";
		$pword = "";
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sqla = "SELECT DISTINCT Email FROM user";
		$result = $conn->query($sqla);
		
		$dupC = 0;
		if ($result->num_rows >= 0) {
	
			while($row = $result->fetch_assoc()) {
		
				if($row["Email"] === $email){
					$dupC = $dupC + 1;
					$email = "";
				}	
			}
		} else {
			echo "No such Email";
		}
		
		?>

		<script>

			var huh = 0;
			var left = 0;
			var left2 = 0;
			var xxx = 0;
			var i = 0;

			var posy = 0;

			var b = 0;
            var topp = 0;

			var list = document.getElementsByTagName("div");
			function myFunction(obj) {

			var createdStyleTag = document.createElement("style");
			var createdStyleTa = document.createElement("style");

			

			var rect = obj.getBoundingClientRect();	
			
			left = rect.left;
			topp = rect.top;


			var y = document.getElementById(obj.id);
			
			if(obj.id == "dem"){
			i = 0;
			b = i + 1;
			}
			else if(obj.id == "dem1"){
			i = 1;
			b = i + 1;
			}
			else if(obj.id == "dem2"){
			i = 2;
			b = i + 1;
			}
			else if(obj.id == "dem3"){
			i = 3;
			b = i + 1;
			}
			else if(obj.id == "dem4"){
			i = 4;
			b = i + 1;
			}
			else if(obj.id == "dem5"){
			i = 5; 
			b = i + 1;
			}
			else if(obj.id == "dem6"){
			i = 6;
			b = i + 1;
			}
			else if(obj.id == "dem7"){
			i = 7;
			b = i + 1;
			}
			else if(obj.id == "dem8"){
			i = 8;
			b = i + 1;
			}
			else if(obj.id == "dem9"){
			i = 9;
			b = 0;
			
			}

			var rect2 = list[b].getBoundingClientRect();

			if(topp <= 50 && posy == 0){
				
					list[i].style.left = left + 'px';
					list[i].style.top = topp + 'px';
			
					posy = 1;
					
					obj.style.animation = "mymove1 1s forwards";

					createdStyleTag.textContent = "@-webkit-keyframes mymove1{"+
					"from { left:; width: 100px;}"+
					"to { left: 600px; width: 300px;}"+
					"from { top: list[i].style.top; height: 100px;}"+
					"to{top: 200px; height: 300px;}"+ 
					"}";

					
					document.head.appendChild(createdStyleTag);

			}else if(topp >= 51 && posy == 1){
				posy = 0;
				left2 = rect2.left + 135;
					if(left2 > 1350){
						left2 = (rect2.left + 135) - 1350;
					}
					var hold = (1350 - left2) / 45;
					var n = hold + "s";
	
					createdStyleTa.textContent = "@-webkit-keyframes mymove2{"+
					"from { left:; width: 100px;}"+
					"to { left: 1350px; width: 100px;}"+	
					"from { top: 50px; height: 100px;}"+
					"to{top: 50px; height: 100px;}"+
					"}";
					
					document.head.appendChild(createdStyleTa);
					
					obj.addEventListener("webkitAnimationIteration", myRepeatFunction);
					
					list[i].style.left = left2 + 'px';
					
					obj.style.animation = "mymove2 30s infinite linear"; 
					
					document.getElementById(obj.id).style.WebkitAnimationDuration = n;
					
					}
				}
				
				function myRepeatFunction() {
					
					this.style.animation = "mymove 30s infinite linear";
					
				}

				function moveLeft(){
					
					var ii = 0;
					
					//var list = document.getElementsByTagName("div");
					
						
					
					var oneL = list[0].getBoundingClientRect();
					var twoL = list[1].getBoundingClientRect();
					var threeL = list[2].getBoundingClientRect();
					var fourL = list[3].getBoundingClientRect();
					var fiveL = list[4].getBoundingClientRect();
					var sixL = list[5].getBoundingClientRect();
					var sevenL = list[6].getBoundingClientRect();
					var eightL = list[7].getBoundingClientRect();
					var nineL = list[8].getBoundingClientRect();
					var tenL = list[9].getBoundingClientRect();
					var l = [oneL.left - 50, twoL.left - 50, threeL.left - 50, fourL.left - 50, fiveL.left - 50, sixL.left - 50, sevenL.left - 50, eightL.left - 50, nineL.left - 50, tenL.left - 50];
				
					
					list[0].style.left = l[0] + 'px';
					list[1].style.left = l[1] + 'px';
					list[2].style.left = l[2] + 'px';
					list[3].style.left = l[3] + 'px';
					list[4].style.left = l[4] + 'px';
					list[5].style.left = l[5] + 'px';
					list[6].style.left = l[6] + 'px';
					list[7].style.left = l[7] + 'px';
					list[8].style.left = l[8] + 'px';
					list[9].style.left = l[9] + 'px';
					
					for(ii = 0; ii < list.length; ii++){
						list[ii].style.top = 50 + 'px';
						list[ii].style.left = l[ii] + 'px';
						
						list[ii].style.animation = "paused";
					}
					
				}
				function moveRight(){
						
					
					var oneL = list[0].getBoundingClientRect();
					var twoL = list[1].getBoundingClientRect();
					var threeL = list[2].getBoundingClientRect();
					var fourL = list[3].getBoundingClientRect();
					var fiveL = list[4].getBoundingClientRect();
					var sixL = list[5].getBoundingClientRect();
					var sevenL = list[6].getBoundingClientRect();
					var eightL = list[7].getBoundingClientRect();
					var nineL = list[8].getBoundingClientRect();
					var tenL = list[9].getBoundingClientRect();
					var l = [oneL.left + 5, twoL.left + 5, threeL.left + 5, fourL.left + 5, fiveL.left + 5, sixL.left + 5, sevenL.left + 5, eightL.left + 5, nineL.left + 5, tenL.left + 5];
				
					
					list[0].style.left = l[0] + 'px';
					list[1].style.left = l[1] + 'px';
					list[2].style.left = l[2] + 'px';
					list[3].style.left = l[3] + 'px';
					list[4].style.left = l[4] + 'px';
					list[5].style.left = l[5] + 'px';
					list[6].style.left = l[6] + 'px';
					list[7].style.left = l[7] + 'px';
					list[8].style.left = l[8] + 'px';
					list[9].style.left = l[9] + 'px';
					
					for(ii = 0; ii < list.length; ii++){
					
						if(l[ii] <= 1400){
						list[ii].style.top = 50 + 'px';
						list[ii].style.left = l[ii] + 'px';
						list[ii].style.background = "yellow";
						list[ii].style.animation = "paused";
						}
						else if(l[ii] > 1400){
						l[ii] = 0;
						list[ii].style.left = l[ii] + 'px';
						//list[ii].style.background = "pink";
						//list[ii].style.animation = "paused";
						
						}
					}
					
				}
				</script>
			</body>	
		</html>
		