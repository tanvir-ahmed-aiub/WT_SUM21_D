<?php
	$arr = array("sabbir","tanvir","karim");
	$arr2 = array(); //empty array
	$arr3 = []; //empty array
	
	$arr2[0] = 1;
	$arr2[1] = 2;
	$arr2[2] = 3;
	
	$arr3[] = "345"; //0
	$arr3[] = "234"; //1
	$arr3[] = "236"; //2
	
	for($i=0; $i<count($arr3);$i++){
		echo $arr3[$i]."<br>";
	}
	foreach($arr3 as $v){
		echo "$v<br>";
	}
	
	//associative array
	$arr4 = array();
	$arr5 = [];
	$arr6 = array("tanvir"=>34,"sabbir"=>35,"karim"=>22);
	
	$arr4["tanvir"] = 34;
	$arr4["sabbir"] = 35;
	$arr4["karim"] = 22;
	
	
	
	

?>