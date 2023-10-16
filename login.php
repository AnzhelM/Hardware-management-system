<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: 2.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}


input[type=text], input[type=password] {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  border: 1px solid #ccc;
  text-align : left;
}


button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;
}

button:hover {
  opacity: 0.8;
}


.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
h2,form {
  text-align: center;
}


.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 10px;
}

span.psw {
  float: center;
  padding-top: 16px;
}
.center1
{
  display: block;
  height: 400px;
  width: 400px;
  margin-left: auto;
  margin-right: auto;
}

</style>
</head>
<body>
	<div id="box">
		<form method="post">
            <h1>Admin Login Portal</h1>
            <img src="Shruthilogoblack.png" alt="logo" class="center1">
                <div class="container">
                    <label for="user_name"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="user_name" value="">
                    <br>
                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" value="">
                    <br>  
                    <button type="submit">Login</button>
					<a href="signup.php">Click to Signup</a><br><br>
                </div>
		</form>
	</div>
</body>
</html>