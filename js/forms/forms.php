<?php require 'validations.php';?>
<html>
	<script>
		var hasError=false;
		function get(id){
			return document.getElementById(id);
		}
		
		function validateHobb(){
			var hb = document.getElementsByName("hobbies[]");
			for(var i=0;i<hb.length;i++){
				if(hb[i].checked){
					return true;
				}
			}
			return false;
		}
		function validateGen(){
			var gn = document.getElementsByName("gender");
			for(var i=0;i<gn.length;i++){
				if(gn[i].checked){
					return true;
				}
			}
			return false;
		}
		function validateGender(){
			var gn = document.querySelector('input[name="gender"]:checked');
			if(gn == null){
				return false;
			}
			return true;
		}
		function validateHobbies(){
			var hb = document.querySelector('input[name="hobbies[]"]:checked');
			if(hb == null){
				return false;
			}
			return true;
		}
		function validate(){
			refresh();
			if(get("name").value == ""){
				hasError = true;
				get("err_name").innerHTML = "*Name Req";
			}
			else if(get("name").value.length <=2){
				hasError = true;
				get("err_name").innerHTML = "*Name must be > 2 characters";
			}
			if(get("uname").value==""){
				hasError = true;
				get("err_uname").innerHTML = "*Username Req";
			}
			if(get("prof").selectedIndex == 0){
				hasError = true;
				get("err_prof").innerHTML = "*Profession Req";
			}
			if(!validateGen()){
				hasError = true;
				get("err_gender").innerHTML = "*Gender Req";
			}
			if(!validateHobb()){
				hasError = true;
				get("err_hobbies").innerHTML = "*Hobbies Req";
			}
			/*if(!get("male").checked && !get("female").checked){
				hasError = true;
				get("err_gender").innerHTML = "*Gender Req";
			}
			if(!get("movies").checked && !get("music").checked && !get("sports").checked && !get("games").checked){
				hasError = true;
				get("err_hobbies").innerHTML = "*Hobbies Req";
			}*/
			return !hasError;
		}
		function refresh(){
			hasError = false;
			get("err_name").innerHTML ="";
			get("err_uname").innerHTML ="";
			get("err_prof").innerHTML ="";
			get("err_gender").innerHTML="";
			get("err_hobbies").innerHTML = "";
		}
	</script>
	<body>
		<form action="" onsubmit="return validate()" method="post">
			<table>
				<tr>
					<td align="right">Name</td>
					<td>:<input id="name" name="name" value="<?php echo $name;?>" type="text"><br>
					<span id="err_name"><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td align="right">Username</td>
					<td>:<input id="uname" name="username" type="text" placeholder="Your name.."><br>
					<span id="err_uname"></span></td>
				</tr>
				<tr>
					<td align="right">Password</td>
					<td>:<input name="password" type="password"></td>
					<td><span></span></td>
				</tr>
				<tr>
					<td align="right">Gender</td>
					<td>:<input id="male" type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input id="female" type="radio" <?php if($gender == "Female") echo "checked";?> value="Female" name="gender"> Female <br>
					<span id="err_gender"><?php echo $err_gender;?></span></td>
				</tr>
				<tr>
					<td align="right">Profession</td>
					<td>:<select id="prof" name="profession">
							<option selected disabled>--Select--</option>
							<?php
								foreach($profs as $p){
									if($p == $profession)
										echo "<option selected>$p</option>";
									else
										echo "<option>$p</option>";
								}
							?>
						</select> <br><span id="err_prof"><?php echo $err_profession;?></span>
					</td>
				</tr>
				<tr>
					<td align="right">Hobbies</td>
					<td>:
						<input type="checkbox" id="music" value="Music" <?php if(hobbyExist("Music")) echo "checked";?>  name="hobbies[]">Music  
						<input value="Movies" id="movies" name="hobbies[]" <?php if(hobbyExist("Movies")) echo "checked";?> type="checkbox">Movies
						<br> &nbsp;
						<input value="Sports" id="sports" name="hobbies[]" <?php if(hobbyExist("Sports")) echo "checked";?>  type="checkbox">Sports  
						<input value="Games" id="games" name="hobbies[]" <?php if(hobbyExist("Games")) echo "checked";?>  type="checkbox">Games
					<br>
					<span id="err_hobbies"><?php echo $err_hobbies;?></span></td>
				</tr>
				<tr>
					<td align="right">Bio</td>
					<td>: <textarea id="bio" name="bio"><?php echo $bio;?></textarea>
						<br><span id="err_bio"><?php echo $err_bio;?></span>
					</td>
					
				</tr>
				<tr>
					<td><input type="submit" value="Register"></td>
				</tr>
			</table>
		</form>
	</body>
</html>