<?php
	require_once 'models/db_config.php';
	$err_db="";
	//validation variables
	if(isset($_POST["add_category"])){
		//do validations
		//if no error
		$rs = insertCategory($_POST["name"]);
		if($rs === true){
			header("Location: allcategories.php");
		}
		$err_db = $rs;
		
	}
	else if (isset($_POST["edit_category"])){
		//do validations
		//if no error
		$rs = updateCategory($_POST["name"],$_POST["id"]);
		if($rs === true){
			header("Location: allcategories.php");
		}
		$err_db = $rs;
	}
	
	function insertCategory($name){
		$query="insert into categories values (NULL,'$name')";
		return execute($query);
	}
	
	function getAllCategories(){
		$query = "select * from categories";
		$rs = get($query);
		return $rs;
	}
	function getCategory($id){
		$query = "select * from categories where id = $id";
		$rs = get($query);
		return $rs[0];	
	}
	function updateCategory($name,$id)
	{
		$query = "update categories set name='$name' where id = $id";
		return execute($query);
	}

?>