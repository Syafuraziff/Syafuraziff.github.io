<?php
	require_once("dbConfig.php");
	
	$username = $password = $confirm_password = $userlevel = ""; 
	$username_err = $password_err = $confirm_password_err = ""; 
	
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
        $password = $_POST['password'];
		if(empty(trim($_POST["username"])))
		{
			$username_err="Please enter a username.";
		}
		else 
		{
			$sql = "SELECT id from users WHERE username='$username'";
            $result = mysqli_query($link,$sql); 
			if($result==$username)
			{
				$username_err = "This username is already taken.";
            }
            else
            {
				$username=trim($_POST["username"]);
            }
		}
	
		if(empty(trim($_POST["confirm_password"])))
		{
			$confirm_password_err="Please confirm password."; 
		}
		else 
		{
			$confirm_password=trim($_POST["confirm_password"]); 
			if(empty($password_err) && ($password != $confirm_password))
			{
				$confirm_password_err="Password did not match."; 
			}
		}
		if(empty($username_err)&& empty($password_err) && empty($confirm_password_err))
		{
			$sql = "INSERT INTO users (username, userpassword, userlevel) VALUES (?,?,?)";
			if($stmt = mysqli_prepare($link, $sql))
			{
				mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password, $param_userlevel); 
				$param_username=$username; 
				$param_password=$password;
				$param_userlevel=trim($_POST["userlevel"]);
				
				if(mysqli_stmt_execute($stmt))
				{
					header("location:login.php");
				}
				else 
				{
					echo "Something went wrong. Please try again later"; 
				}
			}
			mysqli_stmt_close($stmt);
		}
		
		mysqli_close($link);
	}
	?>
<!DOCTYPE html> 
<html lang="en"> 
	<head> 
		<meta charset="UTF-8">
		<title>Sign Up</title>
		<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
			<style type="text/css"> 
				body{font: 14px sans-serif;}
				.wrapper{width:35@px; padding: 2@px;}
			</style> 	
	</head> 
	<body> 
		<div class="wrapper"> 
		<h2>Sign Up</h2> 
		<p>Please fill this form to create an account.</p> 
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <br>
			<div class = "form-group <?php echo (!empty($username_err))? 'has-error': ''; ?>">
				<label>Username</label> 
				<input type="text" name="username" class="form-control" value="<?php echo $username;?>">
				<span class="help-block"><?php echo $username_err;?></span> 
			</div>
            <br>
			<div class="form-group <?php echo(!empty($password_err))?'has-error':'';?>">
				<label>Password</label> 
				<input type="password" name="password" class="form-control" value="<?php echo $password;?>">
				<span class="help-block"><?php echo $password_err;?></span> 
			</div> 
			<div class="form-group <?php echo(!empty($confirm_password_err))?'has-error':'';?>">
                <br>
				<label>Confirm Password</label> 
				<input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password;?>">
				<span class="help-block"><?php echo $confirm_password_err;?></span> 
			</div>
            <br>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Submit">
				<input type="reset" class="btn btn-default" value="Reset"> 
			</div>
			<input type="hidden" name="userlevel" value="2"> 
		</form> 
		</div>
	</body>
</html> 		