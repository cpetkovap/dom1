<html>
	<head>
		<title> Domashno1 </title>
		
		<style>
		 p{color:red;}
		 h1{color:blue;}
		 h2{color:black}
		 </style>
	</head>
	<body>
	
		<form  method="get">
				Number:  <input type="text" name="number" /><br />
		</form>
		<?php
			if($_GET){
			if ((ctype_digit($_GET["number"]) == false))
				 echo "<p>the parameter is not a number</p>"; 
			if ((ctype_digit($_GET["number"])==true)){
			if(($_GET["number"]<0) || ($_GET["number"]>19999)){
				 echo "<p>the paramete is not within the rangr [0,19999]</p>" ; }
				$maxDivider = (int)sqrt($_GET["number"])	;
				$prime = true;
				$divider = 2;
			while ($prime && ($divider <= $maxDivider)) {
				if ($_GET["number"] % $divider == 0) {
					$prime = false;
					}
				$divider++;
				//endwhile;
            }
				if ($prime == true){
					echo "<h2>the number $_GET[number] is prime</h>";
				} else{
					echo "<h1>the number $_GET[number] is not prime</h1>";
				}
				}
				}
		
		
		
		?>
	</body>
</html>