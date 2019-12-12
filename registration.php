<?php

  include ("connection.php");
  error_reporting(0);
  
  
 ?> 
  
  
  
  
  
  <(!DOCTYPE html>
<html>
<head><title>Regestration</title></head>
<body>
<fieldset>
<legend><b>REGESTRATION</b></legend>
<table>
<form action="" method="$_GET">
    ID<input type="number" name="number" value=""/><br></br>
    Password<input type="password" name="pass" value/><br></br>
    Confirm Password<input type="password" name="conpass"/><br><br>
    Name<input type="text" name="name" /><br><br>
    Email<input type="text" name="email" value=""/><br></br> 
	<select id="type"  name="type">
	   <option value="user">User</option>
	   <option value="admin">Admin</option>
	   <input type="submit" name="submit" value="Registerd"/>
	   
<?php	   
	if ($_GEt['submit'])
	{
		$id=$_GET['ID'];
		$pass=$_GET['Password'];
		$conpass=$_GET['Confirm Password'];
		$name=$_GET['Name'];
		$email= $_GET['Email'];
		$type= $_GET['type'];
		if ($id!=""&& $pass!="" && $conpass!="" && $name!="" && $email!="")
		{
			$query=" Insert for Registration('$id','$pass, '$conpass', '$name', '$email');
			$data= mysqli_query($conn, $query);
			
			if($data)
			{	echo "connection okay";}
		     else
			 {echo "connection faild";} 
		}
	}

?>
</form>
</table>
</fieldset>
</body>
</html>