<?php

?>

<!DOCTYPE HTML>

<html>

<head>
<title>Registration</title>
</head>
<body>
<form method="post" action="./Reg_entry.php">
    
<div align="center">

<h1>Sign Up</h1>
Upload Your Picture.
<p>
<input type="button" name="browse" value="Browse...">
					No file selected.
</p>
Enter your name :
<input type="text" name="name" size=35 maxlength=35 value="">
</br></br>
Enter your Farm name :
<input type="text" name="comp" size=35 maxlength=35 value=""> </br> </br>
<!-- Previous Investments received  and your farm details:
<textarea name="Comments" cols=30 rows=4></textarea> </br> </br> -->
<label for="email">Enter your email:</label>
<input type="email" id="email" name="email">
</p>
<label for="phone">Enter farm/personal phone number:</label>
<input type="number" id="phone" name="phone" >
</br></br>
<label for="pwd">Password:</label>
<input type="password" id="password" name="password">
<label for="pwd">Confirm Password:</label>
<input type="password" id="pwd" name="pwd">
</br></br>
 <button size=4>  Cancel  </button>
 <button type="submit" size=4>  Confirm  </button>
</div>
</form>
</body>
</html>
 

