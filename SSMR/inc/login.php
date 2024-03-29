<?php 

	require_once("dbConfig.php");
	$username = $password = ""; 
	
	if($_SERVER["REQUEST_METHOD"]=='POST')
	{
		session_start();
		$username = trim($_POST["username"]);
		$password = trim($_POST["password"]); 
		
		$sql = "SELECT userlevel FROM users WHERE username = '$username' and userpassword = '$password'"; 
		
			$result = mysqli_query($link,$sql); 
			if(!$result){
				die("Database access failed: " . mysqli_error); 
            }
			$rows = mysqli_num_rows($result);
			if($rows)
			{
				$row = mysqli_fetch_array($result);
				$_SESSION['loggedin']=true;
				$_SESSION['userlevel']=$row['userlevel'];
				header("location: index.php"); 
			}
			else 
			{
				echo '<script>alert("Oops! Wrong Username & Password");</script>';
			}
			mysqli_close($link);
				
	}
?>
<!DOCTYPE html> 
	<html lang="en">
		<head> 
			<meta charset = "UTF-8">
			<title>Sign In</title> 
			<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
			<style type="text/css"> 
				body{font: 14px sans-serif;}
				.wrapper{width:35@px; padding: 2@px;}
			</style> 	
		</head>
		<body> 
			<?php 
				$confirm_password = ""; 
				$confirm_password_err=""; 
				$username_err="";
				$password_err="";
				$username="";
			?>
			<div class="wrapper">
			<h2>Login Page</h2> 
			<p>Please fill this form to create an account.</p> 
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
				<div class = "form-group <?php echo (!empty($username_err))? 'has-error': ''; ?>">
					<label>Username</label> 
					<input type="text"name="username"class="form-control" value="<?php echo $username;?>">
				</div>
                <br>
				<div class="form-group <?php echo(!empty($password_err))?'has-error':'';?>">
					<label>Password</label>
                    <input type="password" name="password" class="form-control" value="<?php echo $password;?>">
				</div>
                <br>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Submit"> 
					<input type="reset" class="btn btn-primary" value ="Reset">
				</div> 
			</form>
			<p>Don't have an account? <a href="register.php">Register Here</a></p> 
			</div> 
		</body> 
	</html> 	