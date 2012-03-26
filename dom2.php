<html>
	<head>
		<title> Domashno2 </title>
		
		<style>
		 p{color:red;}
		 h1{color:blue;}
		 
		</style>
	</head>
	<body>
		<?php
			$arr =  range ( 20 ,  1000 ,  37  );
			function find_3_prime($arr){	
				$primeS = 0;					
				foreach($arr as $number){
				$prime = true;
				$divider = 2;
				$maxDivider = (int) sqrt($number)	;
				while ($prime && ($divider <= $maxDivider)) {
					if ($number % $divider == 0) {
						$prime = false;
						}
				$divider++;
				}
				if($prime == true)
					$primeS++;
				if($primeS == 3){
					echo"Third prime is $number</br>";
					$primeS = 0;}
				}
			}
				
			
			
			function check_exist($arr){
				$a = 146;
				$b = 284;
				$c = 871;
				if(in_array($a, $arr)){
						echo"the number $a exist in the array </br>";
						}
					else{
						echo"the number $a not exist in the array </br>";
					}
				if(in_array($b, $arr)){
						echo"the number $b exist in the array </br>";
						}
					else{
						echo"the number $b not exist in the array </br>";
					}
				if(in_array($c, $arr)){
						echo"the number $c exist in the array </br>";
						}		
					else{
						echo"the number $c not exist in the array </br>";
					}
			}
			
			
		find_3_prime($arr);
		check_exist($arr);
		
		?>
	</body>
</html>