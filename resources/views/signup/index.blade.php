<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<form method="post" enctype="multipart/form-data">
    <title>Sign Up</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	<table>
		@csrf
		<tr>
			<td>Full Name</td>
			<td><input type="text" name="fullname"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email"></td>
		</tr>


		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
			<tr>
			<td>Confirm Password</td>
			<td><input type="password" name="Confirmpassword"></td>
		</tr>
<tr>
			<td>Address</td>
			<td><input type="text" name="address"></td>
		</tr>
<tr>
			<td>City</td>
			<td><input type="text" name="city"></td>
		</tr>
		<tr>
			<td>Country</td>
			<td><input type="text" name="country"></td>
		</tr>

		<tr>
			<td>Company Name</td>
			<td><input type="text" name="companyname"></td>
		</tr>
		
		<tr>
			<td>Phone</td>
			<td><input type="number" name="phone"></td>
		</tr>
		

		
		
		<tr>
			<td></td>
			<td><input type="submit" name="Submit" value="Sign Up"></td>
		</tr>
	  </table>
	 </form>

</body>
</html>