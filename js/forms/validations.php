<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$gender="";
	$err_gender="";
	$profession="";
	$err_profession="";
	$hobbies=[];
	$err_hobbies="";
	$bio="";
	$err_bio="";
	
	$hasError=false;
	
	$profs = array("Service","Business","Teaching");
	
	function hobbyExist($h){
		global $hobbies;
		foreach($hobbies as $hobby){
			if ($h == $hobby) return true;
		}
		return false;
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$hasError=true;
			$err_name="Name Required";
		}
		elseif (strlen($_POST["name"]) <=2){
			$hasError = true;
			$err_name = "Name must be greater than 2 characters";
		}
		else
		{
			$name = $_POST["name"];
		}
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender = "Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["profession"])){
			$hasError = true;
			$err_profession= "Profession Required";
		}
		else{
			$profession = $_POST["profession"];
		}
		if(!isset($_POST["hobbies"])){
			$hasError = true;
			$err_hobbies = "Hobbies Required";
		}else{
			$hobbies = $_POST["hobbies"];
		}
		if(empty($_POST["bio"])){
			$hasError = true;
			$err_bio = "Bio Required";
		}
		else{
			$bio = $_POST["bio"];
		}
		
		if(!$hasError){
			echo $_POST["name"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["profession"]."<br>";
			echo $_POST["bio"]."<br>";
			$arr = $_POST["hobbies"];
			
			foreach($arr as $e){
				echo "$e<br>";
			}
		}
		
	}
	
?>