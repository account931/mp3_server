$(document).ready(function(){
	
	var trackID;
	
    //Click on play in all song lists
	// **************************************************************************************
    // **************************************************************************************
    //                                                                                     ** 
	$(".control_play").click(function() {   // $(document).on("click", '.circle', function() {   // this  click  is  used  to   react  to  newly generated cicles;	
	  trackID = this.id;  //global
      playTrack(this.id);	  
	});
	
	
	
	
	
	// **************************************************************************************
    // **************************************************************************************
    //                                                                                     ** 
	function playTrack(idX)
	{
       /*var*/ audio = document.getElementById("audio"); //gets player html el ID //make this var global to pass to $("#myCheck").click(function() { 
	   audio.src='mp3/' + idX;   //gets the id of clicked song that is also the path
       audio.load();
       audio.play();
	   
	   //Html the title of song palying and EQ(with animation)
	   $("#playerSongTitle").stop().fadeOut("slow",function(){ $(this).html(  idX + '<img id="eq" src="images/eq.gifj" alt="eq"/>')}).fadeIn(2000);

     }
	 
	// **                                                                                  **
    // **************************************************************************************
    // **************************************************************************************
	
	
	
	
	
	//Checkbox for reloop
	// **************************************************************************************
    // **************************************************************************************
    //                                                                                     ** 
	$("#myCheck").click(function() { 
	    if ($("#myCheck").is(':checked') ){  //if u selected looping
	        audio.loop = true;    
	    } else {
		   audio.loop = false; 
	    }
	});
	
	
	
	
	
	
	
	
	
	// Scroll the page to results  #resultFinal
	// **************************************************************************************
    // **************************************************************************************
    //                                                                                     ** 
	function scrollResults(divName) 
	{
		 
         $('html, body').animate({
            
            scrollTop: $(divName).offset().top
			//scrollTop: $('.footer').offset().top
            //scrollTop: $('.your-class').offset().top
        }, 'slow'); 
		// END Scroll the page to results
	}
	
	// **                                                                                  **
    // **************************************************************************************
    // **************************************************************************************
	
	
	
	
	
	
	 // **************************************************************************************
    // **************************************************************************************
    //                                                                                     ** 
	
	
	function scroll_toTop() 
	{
	    $("html, body").animate({ scrollTop: 0 }, "slow");	
	}
	// **                                                                                  **
    // **************************************************************************************
    // **************************************************************************************

});
// end ready	
	