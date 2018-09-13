$(document).ready(function(){
	
	
	
	// onClick adding new fields to Form
	// **************************************************************************************
    // **************************************************************************************
    //                                                                                     **
	
	
	    //e.preventDefault();
		var max_fields      = 7;  //maximum fields to add
        var wrapper         = $("#formN");  // Div id to which append new fields
        var add_button      = $(".add_form_field"); //button to click to trigger adding new fields

        var x = 1;
		
		//Decribe the Field sample to append/add
		var boxN = '<div><div class="form-group upl-field selector-for-scroll">' +
		           '<label for="upload">&nbsp;File&nbsp;</label><input type="file" name="fileToUploadX[]" id="fileToUpload" class="form-control">' + 
				   '</div>' + 
				   '</div><br>';
				  
		//click add button
        $(".add_form_field").click(function(e){ 
            e.preventDefault();
            if(x < max_fields){
                x++;
                //$(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="delete">Delete</a></div>'); //add input box
				//$(wrapper).append(boxN); //adds input field box->WORKKS
				
				//adds input field box with animation, finds the last class='upl-field', i.e last file field
				$(".upl-field:last").stop().fadeOut(/* "slow" */200 ,function(){ $(this).append(boxN)}).fadeIn(400);
				
				if(screen.width <= 640){  //in mobile only
				    //scroll down to last added / appended fields div
				    scrollResults(".selector-for-scroll:last");  
				}

				        
            }
      else
      {
      alert('You Reached the limits')
      }
        });
        
		//delete the field
        $(wrapper).on("click",".delete", function(e){
            e.preventDefault(); 
			
			//$(this).parent().parent('div').remove(); 
			$(this).parents(':eq(1)').remove();  // delete parent div 2 levels up
			x--;
			
			if(screen.width <= 640){  //in mobile only
			    //scroll down to last added / appended fields div
			    scrollResults(".selector-for-scroll:last"); 
			}
        })
	
	// **                                                                                  **
    // **************************************************************************************
    // **************************************************************************************
	
	
	
	
	
	
	
	//======================================================== DONOR ===============================================================
	
	
	
	
	
	
	
	
	// Scroll the page to results  #resultFinal
	// **************************************************************************************
    // **************************************************************************************
    //                                                                                     ** 
	function scrollResults(divName, parent)  //arg(DivID, levels to go up from DivID)
	{   //if 2nd arg is not provided while calling the function with one arg
		if (typeof(parent)==='undefined') {
		
            $('html, body').animate({
                scrollTop: $(divName).offset().top
                //scrollTop: $('.your-class').offset().top
             }, 'slow'); 
		     // END Scroll the page to results
		} else {
			//if 2nd argument is provided
			var stringX = "$(divName)" + parent + "offset().top";  //i.e constructs -> $("#divID").parent().parent().offset().top
			$('html, body').animate({
                scrollTop: eval(stringX)         //eval is must-have, crashes without it
                }, 'slow'); 
		}
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
	