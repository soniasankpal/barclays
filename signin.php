<?php

	if(isset($_POST['login'])){
		login();
	}
	function login(){
			session_start();
			session_destroy();
			$user = "";
			$pass = "";
			$msg = "";

		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			include 'sql.php';

		$user = $_POST['uname'];
		$pass = $_POST['password'];
			
		//unwanted HTML (scripting attacks)
		$user = htmlspecialchars($user);
		$pass = htmlspecialchars($pass);
		
		$SQL = "SELECT Email,Password FROM customers";
		$result = mysqli_query($conn,$SQL);
		while ($db_field = mysqli_fetch_assoc($result)) {
			$a = $db_field['Email'];
			$b = $db_field['Password'];
	//		$pos = $db_field['position'];
			
			if(($user == $a) AND ($pass == $b)){
				
				
					session_start();
					$_SESSION['username'] = $user;
					$_SESSION['member'] = "log";
					mysqli_close($conn);
					header("Location: customer.php");
					break;
				
			}
		}
		$msg = "Check username and/or password.";
		echo 'Check username and/or password.';
		mysqli_close($conn);

		}
	}

?>


<html>

<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
       
        <meta name="author" content="Sonia Sunil Sankpal">
        <style>
            table, th, td {
              border: 1px solid black;
              border-collapse: collapse;
            }
            th, td {
              padding: 5px;
            }
        </style>
        <script src="fetch.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css"> 
        <link rel="stylesheet" href="css/mystyle.css"> 
      
    
        <title>Books_website</title> 
    </head> 
    <body> 
        <div class="header">
            <a href="#default" class="logo">BookStore</a>
            <div class="header-right">
              <a  href="home">Home</a>
              <a href="signup.html">SignUp</a>
              <a class="active" href="signin.php">SignIn</a>
            </div>
          </div>
          


        <!-- Here a loader is created which  
             loads till response comes -->
        <div class="d-flex justify-content-center">
            <div class="spinner-border" 
                 role="status" id="loading"> 
                <span class="sr-only">Loading...</span> 
            </div> 
        </div> 
    



<form name="myForm" method="post" action="signin.php">
					
                    <div class="form-group">
                    <label for="exampleInputEmail1"><b>Email address</b></label>
                    <input type="email" name="uname" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    </br>
                    
                    <div class="form-group">
                    <label for="exampleInputPassword"><b>Password</b></label>
                    <input type="password" class="form-control" id="exampleInputPassword" name="password" placeholder="Password">
                    </div>
                    
                    <center>
                            <!---input type="submit" value="submit"/--->
                            <button onclick="validateForm()" type="submit" name="login" class="button button-block"><b><h2>Log in</h2></b></button>	
                    </center>
                
                
                </form>

     </body> 
</html>