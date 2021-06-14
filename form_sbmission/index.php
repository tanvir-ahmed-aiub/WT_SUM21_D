<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
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
	
?>
<html>
	<body>
		<form action="" method="post">
			<table>
				<tr>
					<td align="right">Name</td>
					<td>:<input name="name" type="text"></td>
				</tr>
				<tr>
					<td align="right">Username</td>
					<td>:<input name="username" type="text" placeholder="Your name.."></td>
				</tr>
				<tr>
					<td align="right">Password</td>
					<td>:<input name="password" type="password"></td>
				</tr>
				<tr>
					<td align="right">Gender</td>
					<td>:<input type="radio" value="Male" name="gender"> Male <input type="radio" value="Female" name="gender"> Female </td>
				</tr>
				<tr>
					<td align="right">Profession</td>
					<td>:<select name="profession">
							<option>Service</option>
							<option>Business</option>
							<option>Teacher</option>
						</select>
					</td>
				</tr>
				<tr>
					<td align="right">Hobbies</td>
					<td>:
						<input type="checkbox" value="Music" name="hobbies[]">Music  <input value="Movies" name="hobbies[]" type="checkbox">Movies
						<br> &nbsp;<input value="Sports" name="hobbies[]" type="checkbox">Sports  <input value="Games" name="hobbies[]" type="checkbox">Games
					</td>
				</tr>
				<tr>
					<td align="right">Bio</td>
					<td>: <textarea name="bio"></textarea></td>
					
				</tr>
				<tr>
					<td><input type="submit" value="Register"></td>
				</tr>
			</table>
		</form>
	</body>
</html>