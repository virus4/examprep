<?php
    if(isset($_POST['submit'])){
		include("validate.php");
	if($n==true){
		include("database.php");
		$obj=new database();
    $con=$obj->connect();
	 $result=$obj->saveData($con,$_POST);
	 if ($result)
			echo "Data Saved";
		else {
			echo "Error";
		}
	}}?>
<html>
<head>
<title>registration</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
<body>
<h1>Registration form</h1>
<form action="" method="POST" name="registration" enctype='multipart/form-data'>
<table class="table table-bordered table-hover">
<tr>
<td>Name*</td>
<td><?php
   if(isset($nameerror)) 
	   echo $nameerror;
   ?>
<input type='text' name='name' required='required' placeholder='enter your name'></td>
</tr>
<tr>
<td>Address</td><td><textarea name="address"  placeholder='enter your address'></textarea></td>
</tr>
<tr>
<td>Qualification</td><td><input type='checkbox' name='qua[]' value='BTECH'>B-TECH
<input type='checkbox' name='qua[]' value='MTECH'>M-TECH<input type='checkbox' name='qua[]' value='MBA'>MBA
<input type='checkbox' name='qua[]' value='BCA'>BCA</td>
</tr>
<tr>
<td colspan="3"><input type='submit' name='submit' value='Register' class='btn-warning'></td>
</tr>
</table>
</form>
</body>
</html>