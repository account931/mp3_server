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
		//var count = 2;
		
		//Decribe the Field sample to append/add
		var boxN = '<div><div class="form-group upl-field selector-for-scroll">' +  //class= 'upl-field' for appending
		           '<label for="upload">&nbsp;File&nbsp;</label>' + 
				   '<span class="error_req"> * </span> <span class="sp"  id =""> </span></br>' +                      //fileToUploadErr
				   '<input type="file" name="fileToUploadX[]" id="fileToUpload" class="form-control fileCheck">' +   //fileToUpload1
				   '</div>' + 
				   '</div><br>';
				  
		//click add button
        $(".add_form_field").click(function(e){ 
            e.preventDefault();
            if(x < max_fields){
                x++;
				//count++; alert(count);
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
	
	
	
	
	
	
	//Front-end checking uploaded files===================================
	var RegExp_File = /^[a-zA-Z0-9_-]{1,16}\.(gif|jpg|mp3)$/;   //only english letter or ints,(-_) name length (1-16), ends in(.(gif|jpg|mp3)   //was  /^[a-zA-Z]{1,16}$/;
	
// **************************************************************************************
// **************************************************************************************
//                                                                                     ** 

//OnChange-----------
$(document).on("change", '.fileCheck', function(e) {  //must have {e} to detect event //newly generated
//$( ".fileCheck" ).on('input', function(e) {   
    myValidate($(this), this.id, RegExp_File, '   only English letters,  from 3 up  to  16  chars, no spaces', e);   //{e} new must have arg, otherwise not visible
});
 
//End  OnChange-------
// **                                                                                  **
// **************************************************************************************
// **************************************************************************************








//Function that Validate  inputs  on change (confirm delete 2nd arg (id)?????)
// **************************************************************************************
// **************************************************************************************
//                                                                                     ** 
function myValidate(thisX, id, regExp, message, e){   //{e} -. it is change event from {$(document).on("change", '.fileCheck', function(e) { }


     if (e.target.files[0].name !=='')
    //if ($("#" +id).val()!=='')
    {
		
		
		var fileName = e.target.files[0].name;  //gets the input file name
		//alert(fileName);
		
        //alert(id);
       // var idm = $("#" +id).val();   //alert('val is-> '+idm);    //$('input[type=file]').val()

        //if  REgEXp  match
        if (fileName.match(regExp))
        {
                      thisX.prevAll(".sp:first").html('Correct');// erase  error  message //$("#" +id).prevAll(".sp:first").html('Correct');// erase  error  message
                      $(':input[type="submit"]').prop('disabled', false); //enable  button  //$(':input[type="button"]').prop('disabled', false);
                      $('#btnSubmit').val('Submit');
                      
     }
    //if RegExp not  match
    else
    {       
            thisX.prevAll(".sp:first").html(message); //$("#" +id).prevAll(".sp:first").html(message);   //finds the 1st prev span
            $(':input[type="submit"]').prop('disabled', true);
            $('#btnSubmit').val('disabled');
     }

 }//  end if ($("#" +id).val()!==''){
 else  //WILL NEVER FIRE?????
 {    alert('fffff');
     //if  empty  set  gain no  error
     thisX.prevAll(".sp:first").html('');
     $('#btnSubmit').val('Submit');
     
 } 
}
  
// **                                                                                  **
// **************************************************************************************
// **************************************************************************************
//



// **************************************************************************************
// **************************************************************************************
//                                                                                     ** 
//Button  click----------
    $("#btnSubmit").click(function(){

          
        if(ValidateAll()===false)  //  if  on button Click all  fields  are NOT validate
          {alert('Fill in all  the  fields')}
        else{SendAjaxRequest();}
    });
//END Button  click----------
// **                                                                                  **
// **************************************************************************************
// **************************************************************************************




// **************************************************************************************
// **************************************************************************************
//                                                                                     ** 

function ValidateAll(){
 //alert("The b was clicked.");
 ResetAllInputs();
    var status  = [];

  if( !$('#name').val().match(RegExp_Name) )
  {
     $('#nameErr').html('must contain letters  only ,  from 3 up  to  16  chars');
     status.push('name');
  }

  if( !$('#email').val().match(RegExp_Email) )
  {
     $('#emailErr').html('must contain valid  e-mail  address');
     status.push('email');
  }

  if( !$('#phone').val().match(RegExp_Phone) )
  {
     $('#phoneErr').html('must contain valid  phone  number  i.e +380(****)****** ');
     status.push('phone');
  }
     alert(status.length+ " inputs  contain mistakes");
  if (status.length > 0){return false;}

}
// **                                                                                  **
// **************************************************************************************
// **************************************************************************************
//
	
	
	
	
	
	
	
	
	
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
	