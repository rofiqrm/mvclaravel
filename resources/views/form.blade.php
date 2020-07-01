<!DOCTYPE html>
<html>
<head>
	<title>SanberBook - Sign Up Form</title>
</head>
<body>
	<h1>Buat Account Baru!</h1>
	<h3>Sign Up Form</h3>
	<form action="/welcome" method="POST">
		@csrf
		<label for="nama_depan">First name:</label>
		<br>
		<input type="text" name="nama_depan" id="nama_depan">

		<br><br>

		<label for="nama_belakang">Last name:</label>
		<br>
		<input type="text" name="nama_belakang" id="nama_belakang">

		<br><br>

		<label for="gender">Gender:</label>
		<br>
		<input type="radio" name="gender" id="gender" value="Laki-Laki"> Male <br>
		<input type="radio" name="gender" id="gender" value="Perempuan"> Female <br>
		<input type="radio" name="gender" id="gender" value="Lainnya"> Other

		<br><br>

		<label for="nationality">Nationality:</label>
		<br>
		<select name="nationality">
			<option value="0">Indonesian</option>
			<option value="1">Singaporean</option>
			<option value="2">Australian</option>
		</select>
		
		<br><br>

		<label for="bahasa">Language Spoken:</label>
		<br>
		<input type="checkbox" name="bahasa"> Bahasa Indonesia <br>
		<input type="checkbox" name="bahasa"> English <br>
		<input type="checkbox" name="bahasa"> Other

		<br><br>

		<label for="bio">Bio:</label>
		<br>
		<textarea name="bio" cols="30" rows="10"></textarea>
		
		<br>

		<input type="submit" name="daftar" value="Sign Up">
	</form>
</body>
</html>