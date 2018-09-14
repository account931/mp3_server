<?php
session_start();
if(!isset($_SESSION['auth7754321'])){
	die("Access forbidden");
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
      <title>Admin server</title>
  
   

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- fa-fa images library-->
	  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 

      <link rel="stylesheet" type="text/css" media="all" href="css/admin_upload.css">
	  
      <script src="js/admin_upload.js"></script><!--  Core myFacebook JS-->
	  <script src="js/changeStyleTheme.js"></script> <!-- change wallpapers,changeStyleTheme JS-->
	    
	  
	  
	  <meta name="viewport" content="width=device-width" />
	  
	  <!--Favicon-->
      <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">

     </head>

     <body>  
	 
	





       <div id="headX" class="jumbotron text-center gradient alert-success my-background head-style" style =' background-color:lavender ;'> <!--#2ba6cb;-->
         <h1 id="h1Text"> <span id="textChange"> Admin server</span> <i class='fa fa-music' style='font-size:46px;'></i>  </h1> 
	   </div>



       
         <div class="wrapper grey">
    	     <div class="container">
		         <div class="row row1">
			 
			     
					 
			  
			        	
			        
				 
				 
				 
				      <!----------------------  FORM to Upload mp3 --------------------------->
				    
				          <div class="col-sm-12 col-xs-12 " id="mp3Result">		  
						  
						  
				              <form class="form-inline" id="formN"  action="Classes/upload.php" method="post" enctype="multipart/form-data">
							  
							      <!-- Input file field-->
                                  <div class="form-group upl-field"> <!-- class= 'upl-field' for appending in JS-->
                                      <label for="sum">&nbsp;File</label> <span class="error_req"> * </span> <span class="sp"  id ="fileToUploadErr"> </span></br>
								      <input type="file" name="fileToUploadX[]"  id="fileToUpload" class="form-control fileCheck" required>
                                  </div><!-- br is a must to maintain symetri-->
					 	 
						          <!-- button to add fields, inputs--> 
								  <div class="form-group">
								  <label for="sum">&nbsp;Add</label>
					              <button class="add_form_field">Add New File &nbsp; <span style="font-size:16px; font-weight:bold;"> + </span></button>
						          </div>
								  
					              <br> <br> <br> <br> <br>
								  
								  <!-- Submit button-->
								  <div class="form-group">
						              <input type="submit" value="Upload Image" id="btnSubmit" name="submit">
                                      <!--<input id ="getFormSerialize" type="button" class="btn btn-default " style="font-size:20px" value="Send">-->
						              <!--<br><br><br>-->
								 </div>
								 
                             </form>
					  
					         <!-- button to add fields, inputs--> 
					         <!--<button class="add_form_field">Add New Field &nbsp; <span style="font-size:16px; font-weight:bold;">+ </span></button>-->
					         <br><br><br>				
						  
					  				      
				          </div>
				          <br><br><br>
				      <!----------------------  END FORM to Upload mp3 --------------------------->
				 
				 
				  
				  
				

	 
				   
				   
			      </div>  <!-- END class="row row1"> here, to make sure QR img appears on the same line in desktop-->
				  
				  
				  
				  
				  
				
				
				
				
              
	 
	 
    		</div><!-- /.container -->	  		
         </div><!-- /.wrapper -->
        
                
          <br><br><br> <br><br><br>

				
    	          
    	
		
		
		
			      <!-----------------  Button to change Style theme------------------------->
	              <input type="button" class="btn" value=">>" id="changeStyle" style="position:absolute;top:0px;left:0px;" title="click to change theme"/>
	              <!-----------------  Button to change Style theme------------------------->
				  
				  
				  
				  
				  
				 
				 
				 
				 <!---------------------------------- Link to upload mp3--------------------------->
				 <p class="upload">
				 <a class="" href="Classes/logout.php">Log out</a><br> <!-- Log out-->
				 <a class="" href="../">Back to mp3</a>     <!-- Link to upload-->
				 </p>
				  
				  
		
		          <!------------- Footer ------------->
				  <div class="footer "> <!--navbar-fixed-bottom  fixxes bootom problem-->
				      Contact: <strong>@gmail.com</strong><br>
					  <?php  echo date("Y"); ?>
				  </div>
		          <!------------ END Footer ----------->  
		
		
		
		
		<!-- ##### -- Advertise -- #### -->
		<!--
		   <div class="ads ">
		        <a target="_blank" href="https://www.facebook.com/events/165143454205556/" id="link">
				    <img src="images/ads/sub_od.jpg" alt="Submerged"/>  
				</a>	
			</div>
			-->
		<!-- ##### -- END Advertise -- #### -->
		
		
		
		
    
    </body>
</html>





<?php

// Record (with CLASS) all the  input  to  txt;  //;
      //include("Classes/RecordTxt.php"); //using autoload instead of it
      //RecordTxt::RecordAnyInput(array(/*$user*/), 'recordText/mp3_server.txt');// Record  to  text;
//End  Record;
?>
