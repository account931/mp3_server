<!doctype html>
<!--------------------------------Bootstrap  Main variant ------------------------------------------>
  <html lang="en-US">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html">
      <meta name="description" content="Mp3 server" />
      <meta name="keywords" content="Mp3 server">
      <title>Mp3 server</title>
  
      <!--Favicon-->
      <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- fa-fa images library-->
	  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 

      <link rel="stylesheet" type="text/css" media="all" href="css/mp3_server.css">
	  
      <script src="js/mp3_server.js"></script><!--  Core myFacebook JS-->
	  <script src="js/changeStyleTheme.js"></script> <!-- change wallpapers,changeStyleTheme JS-->
	  
	  

	  
	  
	  
	  <meta name="viewport" content="width=device-width" />
	  
	  <!--Favicon-->
      <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

     </head>

     <body>  
	 
	





       <div id="headX" class="jumbotron text-center gradient alert-success my-background head-style" style =' background-color:lavender ;'> <!--#2ba6cb;-->
         <h1 id="h1Text"> <span id="textChange"> Mp3 server on-line</span> <i class='fa fa-music' style='font-size:46px;'></i>  </h1> 
		 
		 <!------------------ MP3 PLAYER ------------------>
		 <p id="playerSongTitle" class=""></p>
		  <audio id="audio" class="styleme" width="320" height="240" controls>
              <source src="mp3/Animal.mp3" type="audio/mp3">
		  </audio>
		  <!------------------ MP3 PLAYER ------------------>
		  
		   
           <!--<p class="header_p">QR Codes on-line processor   <span class="glyphicon glyphicon-duplicate"></span>-->    <!--mp3_server etc-->
           <!--</p>-->
		   <!--<p class="language"><a href="/eng">ENG</a></p>-->
		   
	   </div>



       
         <div class="wrapper grey">
    	     <div class="container">
		         <div class="row row1">
			 
			     
					 
			  
			        	
			        
				 
				 
				 
				      <!-------------- Mp3 files list------------->
				    
				          <div class="col-sm-12 col-xs-12 " id="mp3Result">
						      <?php
							      include '/Classes/autoload.php'; //uses autoload instead of manual includin each class-> Error if it is included in 2 files=only1 is accepted
							      include 'Classes/MpServerList.php';
								  $mpObject = new MpServerList();
								  $mpObject->getMp3List("mp3");
							  ?>      
				          </div>
				          <br><br><br>
				      <!-------------- END  Mp3 files list------------->
				 
				 
				  
				  
				
	 
	 
	 
	 
				   
				   
			      </div>  <!-- END class="row row1"> here, to make sure QR img appears on the same line in desktop-->
				  
				  
				  
				  
				     <!-------------- Mp3 Player(fixed to bottom)------------->
					 <!--
				     <div class="" id="mpPlayer" >   <p>fdgdfgfg</p>
				      <audio class="styleme" width="320" height="240" controls>
                          <source src="mp3/Animal.mp3" type="audio/mp3">
                      </audio>
				     </div>
				      -->
				     <!-------------- Mp3 Player(fixed to bottom)------------->
				
				
				
				
              
	 
	 
    		</div><!-- /.container -->	  		
         </div><!-- /.wrapper -->
        
                
          <br><br><br> <br><br><br>

				
    	          
    	
		
		
		
			      <!-----------------  Button to change Style theme------------------------->
	              <input type="button" class="btn" value=">>" id="changeStyle" style="position:absolute;top:0px;left:0px;" title="click to change theme"/>
	              <!-----------------  Button to change Style theme------------------------->
				  
				  
				  
				  
				  <!------------------- Checkbox REPLAY LOOP,repeat one song, absolute position, top left ------------------->
				  <div style="position:absolute; top:50px; left:1px;" title="Loop">
				   &nbsp;&nbsp;Loop<br>
				  <label class="switch">
                      <input type="checkbox" id="myCheck">
                          <span class="slider round"></span>
                  </label> 
				  <!--<i class="fa fa-rotate-right" style="font-size:30px;margin-left:20px;"></i>-->
				  </div>
                  <!------------------- Checkbox REPLAY LOOP, absolute position, top left ------------------->
				  
				  
				  
				  <!------------------- EQ, absolute position, ------------------->
				  <!--
				  <div style="position:absolute; top:0px; right:1px;" style="width:10%;" title="EQ">
				    <img id="equalizer" src="" alt="eq"/>
				  </div>
				  -->
                  <!------------------- EQ, absolute position, ------------------->
				  
				  
				  
		
		          <!------------- Footer ------------->
				  <div class="footer navbar-fixed-bottom"> <!--navbar-fixed-bottom  fixxes bootom problem-->
				      Contact: <strong>dimmm931@gmail.com</strong><br>
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
      //include("Classes/RecordTxt.php"); using autoload instead of it
      RecordTxt::RecordAnyInput(array(/*$user*/), 'recordText/mp3_server.txt');// Record  to  text;
//End  Record;
?>
