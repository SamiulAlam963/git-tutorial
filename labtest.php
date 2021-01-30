<! DOCTYPE html>
<html>
<head>
<title>Login page</title>
</head>
<body>
<h2>Login</h2>
<form method="POST" action="insert.php">
<label for="empid"> EMP ID:</lable>
<input type="text" id="emp" name="emp"><br><br>
<label for="name"> Name:</lable>
<input type="text" id="name" name="name"><br><br>
<label for="birthday"> Date Of birthday:</lable>
<input type="date" id="birthday" name="birthday"><br><br>
<label for="address"> Address:</lable>
<input type="text" id="address" name="address"><br><br>
<label for="country">Country:</label>
<select>
<option value="bangladesh">Bangladesh</option>
<option value="India">India</option>
</select>
<br><br>
<label for="atate">State:</label>
<select>
<option value="ee">ee</option>
<option value="dii">Dii</option>
</select>
<br><br>
<label for="City">City:</label>
<select>
<option value="dhaka">Dhaka</option>
<option value="dilli">Dilli</option>
</select>
<br><br>
<label for="date"> Date Of Joining:</lable>
<input type="date" id="date" name="date"><br><br>
<label for="image">Profile Pic:</lable>
<input type="image" id="image" name="image"><br><br>
<input type="submit" value="Submit"> 
</body>
</html>