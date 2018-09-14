<?php
session_start();

//if $_SESSION['auth7754321'] is set go to private admin section
if(isset($_SESSION['auth7754321'])){
    header('Location: ../index.php'); //routing to admin section
}
?>






<!doctype html>
<!--------------------------------Bootstrap  Main variant ------------------------------------------>
  <html lang="en-US">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html">
      <meta name="description" content="Mp3 server" />
      <meta name="keywords" content="Mp3 server">
      <title>Auth</title>
  
     

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- fa-fa images library-->
	  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 
	  
	  <meta name="viewport" content="width=device-width" />
	  
	  <!--Favicon-->
      <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">

     </head>

     <body>  
	 








<?php

//users
$usersX = array(
    "admin"=>"admin", 
	"user1"=>"user1"
	);
//users

	

//=================================================	
	echo '<div class="col-sm-12 col-xs-12 ">';
	
//if clicked Auth submit button, check login and pass
if(isset($_POST['btnSubmitX'])){
	
	$statusArr=array(); //creates array for status, used instead echoing status, as in that case can not put status info after the form
	
	
	//if login value exists as a key in array $usersX
	if (in_array($_POST['loginX'], $usersX)){
		//echo "<br>User exists";
		array_push($statusArr, "User exists");
		
		
		//compare if array $userX key value == password input
		if($usersX[$_POST['loginX']]==$_POST['passwordX']){
			//echo "<br>Logged successfully"; //reassigned to $statusArr
			array_push($statusArr, "Logged successfully");
			$_SESSION['auth7754321']= true; // setting Session
			echo "<br><br><a href='../index.php'><input class='btn' type='button' value='Please, click here to proceed further'/></a>";
			//header('Location: ../index.php'); //routing to admin section
			 
		} else { //login is in array $usersX, but password is incorrect
			//echo "<br>Password is not Correct<br>"; //reassigned to $statusArr
			array_push($statusArr, "Password is not Correct");
			//echo "<meta http-equiv='refresh' content='0'>";
		}
		
	
	} else { //login is NOT in array $usersX
		///echo "<br>User does not exist<br>";
		array_push($statusArr, "User does not exist");
	}
}
//END if clicked Auth submit button, check login and pass

echo '</div>';	
//========================================
	
	
	
	
	
	
	
	
	
	
//if u put correct login, password, u are set	$_SESSION['auth7754321']=true, if not show this form
//appears to unlogged only
if(!isset($_SESSION['auth7754321'])){
?>
       <br><br>
       <div class="col-sm-12 col-xs-12 ">	
         <form class="form-inline" action="" id="formN" method="post">
					 
					      <!--Login--> 
                          <div class="form-group">
                              <label for="Login">&nbsp;Login</label>
                              <input type="text" name="loginX" class="form-control" required>
                          </div>
					 
						 
					     <!--Password--> 
                         <div class="form-group">
                              <label for="PAssword">&nbsp;Password</label>
                              <input type="password" name="passwordX" class="form-control" required>
                         </div><br><!-- br is a must to maintain symetri-->
					 	 
						 

						  
					      <br><!-- Subnit button-->
                          <input type="submit" name="btnSubmitX" type="button" class="btn btn-default " style="font-size:20px" value="Auth">
						  <!--<br><br><br>-->
                      </form>
		</div>			  
					  
<?php
} // END if(!isset($_SESSION['auth7754321']))

//END appears to unlogged only







//display status
echo '<div class="col-sm-12 col-xs-12">';
if (!empty($statusArr)) {   //must have check, if it empty, it causes errors display
    foreach($statusArr as $text)
    {
	    echo "<br>" . $text;
    }
}
echo '</div>';










?>



    </body>
</html>
