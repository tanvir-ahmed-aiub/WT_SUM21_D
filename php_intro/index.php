<?php
	$x = 10;
	$y = 12;
	$z = $x + $y;

	function print_hello(){
		echo "<b><i>Hello Php</i></b>";
	}
	function  sum($x, $y){
		return $x + $y;
	}
	echo "Hello World<br>";
	echo 'Hello World<br>';
	echo '<h1>Hello World</h1>';
	
	echo "The addition is $z<br>";
	echo "The addition is " .$z. "<br>";
	
	$name = "Tanvir Tanvir";
	echo "The lenght of $name is " .strlen($name);
	
	$pos = strpos($name,"i");
	echo "<br> Position of i is in $pos" ;
	
	$pos2 = strpos($name,"i",$pos+1);
	echo "<br> Position of i is in $pos2" ;
	
	$c = 10;
	$d = "10";
	if($c === $d){
		echo "<br>same";
	}
	else{
		echo "<br>not same";
	}
	
?>
<html>
	<head></head>
	<body>
		<h1>This is from <?php echo "plain";?> html</h1>
		<h1><?php echo "This is from php<br>";?></h1>
		<h1><?php print_hello();?></h1>
		<h1><?php echo sum(10,25);?></h1>
	</body>
</html>
