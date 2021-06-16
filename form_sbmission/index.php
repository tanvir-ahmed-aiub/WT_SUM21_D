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
<html>
	<body>
		<form action="" method="post">
			<table>
				<tr>
					<td align="right">Name</td>
					<td>:<input name="name" value="<?php echo $name;?>" type="text"><br>
					<span><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td align="right">Username</td>
					<td>:<input name="username" type="text" placeholder="Your name.."></td>
					<td><span></span></td>
				</tr>
				<tr>
					<td align="right">Password</td>
					<td>:<input name="password" type="password"></td>
					<td><span></span></td>
				</tr>
				<tr>
					<td align="right">Gender</td>
					<td>:<input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input type="radio" <?php if($gender == "Female") echo "checked";?> value="Female" name="gender"> Female <br>
					<span><?php echo $err_gender;?></span></td>
				</tr>
				<tr>
					<td align="right">Profession</td>
					<td>:<select name="profession">
							<option selected disabled>--Select--</option>
							<?php
								foreach($profs as $p){
									if($p == $profession)
										echo "<option selected>$p</option>";
									else
										echo "<option>$p</option>";
								}
							?>
						</select> <br><span><?php echo $err_profession;?></span>
					</td>
				</tr>
				<tr>
					<td align="right">Hobbies</td>
					<td>:
						<input type="checkbox" value="Music" <?php if(hobbyExist("Music")) echo "checked";?>  name="hobbies[]">Music  
						<input value="Movies" name="hobbies[]" <?php if(hobbyExist("Movies")) echo "checked";?> type="checkbox">Movies
						<br> &nbsp;
						<input value="Sports" name="hobbies[]" <?php if(hobbyExist("Sports")) echo "checked";?>  type="checkbox">Sports  
						<input value="Games" name="hobbies[]" <?php if(hobbyExist("Games")) echo "checked";?>  type="checkbox">Games
					<br>
					<span><?php echo $err_hobbies;?></span></td>
				</tr>
				<tr>
					<td align="right">Bio</td>
					<td>: <textarea name="bio"><?php echo $bio;?></textarea>
						<br><span><?php echo $err_bio;?></span>
					</td>
					
				</tr>
				<tr>
					<td><input type="submit" value="Register"></td>
				</tr>
			</table>
		</form>
	</body>
</html>