<?php
	
	$pass="";
	$err_pass="";
	$email="";
	$err_email="";	
	$err=false;
	

	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		
		if(empty($_POST["password"])){
			$err_pass="Password Required";
			$err = true;
		}
		else if(strlen($_POST["password"])<8){
			$err_pass="Password should have minimum 8 character";
		}
		
		else{
			$pass = $_POST["password"];
		}
		if(empty($_POST["password"])){
			$err_cpass="Re-Type Password";
			$err = true;
		}
	
		if(!strpos($_POST["email"],"@")){
			if(!strpos($_POST["email"],"."))
			$err_email="Email should contain '@' and '.' sequentially";
			}
		else {
			$email=$_POST["email"];
		}
		
		if(!$err){
			
			echo "Password: ".htmlspecialchars($_POST["password"])."<br>";
			echo "Email: ".htmlspecialchars($_POST["email"])."<br>";
			
		}
	}
?>

<html>
	<head></head>
	<body style="background-color:PapayaWhip;">
	<h1>MakeMyTrip</h1>
		<fieldset>
			<form action="" method="post">
			 <table>
				
				<tr>
					<td align="right">Password: </td>
					<td><input type="password" name="password" value="<?php echo $pass;?>" placeholder="Password"></td>
					<td><span><?php echo $err_pass;?></span></td>
				</tr>
				
					<td align="right">Email: </td>
					<td><input type="text" name="email" value="<?php echo $email;?>" placeholder="Email"></td>
					<td><span><?php echo $err_email;?></span></td>
				</tr>
				
				<tr>
					<td align="center" colspan="2"><input type="submit" name="submit"value="Login"></td>
				</tr>
				<tr>
     <td>
    <p style="text-align:Right;"><a href="http://localhost:7882/WT_MID/new%20project%20updated/Admin%20login/adminview.php">Admin view</a></p> 
	</tr>
	</td>
			</form>	
		</fieldset>		
	</body>
</html>