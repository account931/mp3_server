<?php
//generates all mp3 songs list
class MpServerList {







//
// **************************************************************************************
// **************************************************************************************
// **                                                                                  **
// **                                                                                  **

public  function getMp3List($fileFolder){
     date_default_timezone_set("Europe/Kiev");
     $date=date("d.m.y.H:i");  //get date  and  User Agent and browser;
	 //echo $date;
	 
	 
	 //
	 $dir = $fileFolder;  /*'images/test/'; */
     //$cols = 5; //
	 
	 
     $filesX = scandir($dir);   //scan folder files
	 
	 //Fix not to include to scandir results inner folder "mp3/uploadFiles"
	 $folders = array('..', '.', 'uploadFiles');  //array that contains which folders not to scandir()
     $files = array_diff(/*scandir($dir)*/$filesX, $folders);
	 //Fix not to include to scandir results inner folder "mp3/uploadFiles"
  
     //$k = 0; 
	 
	 //creates array with all songs
	 $allSongs_php_Arr=array();
	 
     for ($i = 0; $i < count($files); $i++) { 
         if (($files[$i] != ".") && ($files[$i] != "..")) { 
		     echo "<div class='single-song myShadow'>";
			 echo "<p style='text-decoration:underline'> Song " . $files[$i] . "</p>";  //song name
			 
			 //Play button
			 //<!-- class="control-play-pause-EQ" is common for player and all songList to trigger changing Play/Pause Icon and hide/show EQ-->
			 echo "<button  class='btn myShadow songCount' title='Play'><i class='fa fa-play control_play control-play-pause-EQ' id='" . $files[$i] . "' style='font-size:36px; margin-left:5px;'></i></button>&nbsp;&nbsp;&nbsp;";  
             
			 
			 
			 //	Icon to Download file 	
             $mp3Path = dirname(__DIR__) . "/mp3/" .	$files[$i];  // relative path to mp3 file
             //echo "<br>" . $mp3Path . "<br>";		 
			 //echo "<a title='Download' href='Classes/downloadmp3.php?file=/mp3/" . $files[$i] .  "'><button  class='btn myShadow' ><i class='fa fa-cloud-download' style='font-size:36px;margin:1px;'></i></button></a>";
			 echo "<a title='Download' href='Classes/downloadmp3.php?file=" . $mp3Path .  "'><button  class='btn myShadow' ><i class='fa fa-cloud-download' style='font-size:36px;margin:1px;'></i></button></a>";
			 echo "</div>";
    
             //if ((($k + 1) % $cols == 0) || (($i + 1) == count($files))) echo "</tr>";
             //$k++; 
			 
			
        }
  }
 
	 //
	  
     
}


// **                                                                                  **
// **                                                                                  **
// **************************************************************************************
// **************************************************************************************




} // end  Class
























?>
