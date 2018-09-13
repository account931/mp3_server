<?php



//==========================================================

$target_dir = "../../mp3/uploadFiles/"; // folder to save
//$target_file = $target_dir . basename($_FILES["fileToUploadX"]["name"]);
$uploadOk = 1; //status OK
//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));




// Count # of uploaded files in array
$total = count($_FILES['fileToUploadX']['name']);
echo "<p> Quantity of files=> " . $total . "<p>";

// Loop through each file
for( $i=0 ; $i < $total ; $i++ ) {
//

    $target_file = $target_dir . basename($_FILES["fileToUploadX"]["name"][$i]); //specifies the path of the file to be uploaded
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));      //file type


    // Check if image file is a actual image or fake image- FOR IMAGES ONLY, deactivate to allow mp3
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUploadX"]["tmp_name"][$i]);
        if($check !== false) {
            echo "<br>File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "<br>File is not an image.";
            $uploadOk = 0;
        }
     }


    // Check if file already exists
    if (file_exists($target_file)) {
        echo "<br>Sorry, file already exists.";
        $uploadOk = 0;
     }
	 
    // Check file size
    if ($_FILES["fileToUploadX"][$i]["size"] > 500000) {
        echo "<br>Sorry, your file is too large.";
        $uploadOk = 0;
    }


    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "mp3" ) {
        echo "<br>Sorry, only JPG, JPEG, PNG & GIF & MP3 files are allowed.";
        $uploadOk = 0;
     }


     // Check if $uploadOk is set to 0 by an error
     if ($uploadOk == 0) {
         echo "<br>Sorry, your file was not uploaded.";
     // if everything is ok, try to upload file
     } else {
        if (move_uploaded_file($_FILES["fileToUploadX"]["tmp_name"][$i], $target_file)) {
            echo "<br>The file ". basename( $_FILES["fileToUploadX"]["name"][$i]). " has been uploaded.";
        } else {
            echo "<br>Sorry, there was an error uploading your file.";
        }
      }


} //end for





echo "<br><br><a href=../> -> back to uploads <- </a>"






//===========================================================



/*
//$files = array_filter($_FILES['fileToUploadX']['name']); //something like that to be used before processing files.

// Count # of uploaded files in array
$total = count($_FILES['fileToUploadX']['name']);

echo $total;

// Loop through each file
for( $i=0 ; $i < $total ; $i++ ) {

  //Get the temp file path
  $tmpFilePath = $_FILES['fileToUploadX']['tmp_name'][$i];

  //Make sure we have a file path
  if ($tmpFilePath != ""){
    //Setup our new file path
    $newFilePath = "../../mp3/uploadFiles/" . $_FILES['fileToUploadX']['name'][$i];

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

      //Handle other code here
	  echo "<p>Files are loaded successfully!!</p>";
	  for( $i=0 ; $i < $total ; $i++ ) {
		  echo "<br>" . $newFilePath . "<br>";
	  }

    }
  }
}

*/









//=============================================================




/*
header('Content-Type: text/plain; charset=utf-8');

try {
    
    // Undefined | Multiple Files | $_FILES Corruption Attack
    // If this request falls under any of them, treat it invalid.
	
    if (
        !isset($_FILES['fileToUploadX']['error']) ||
        is_array($_FILES['fileToUploadX']['error'])
    ) {
        throw new RuntimeException('Invalid parameters.');
    }
    
	
	
	
    // Check $_FILES['fileToUploadX']['error'] value.
    switch ($_FILES['fileToUploadX']['error']) {
        case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_NO_FILE:
            throw new RuntimeException('No file sent.');
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            throw new RuntimeException('Exceeded filesize limit.');
        default:
            throw new RuntimeException('Unknown errors.');
    }

    // You should also check filesize here. 
    if ($_FILES['fileToUploadX']['size'] > 1000000) {
        throw new RuntimeException('Exceeded filesize limit.');
    }

    // DO NOT TRUST $_FILES['upfile']['mime'] VALUE !!
    // Check MIME Type by yourself.
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    if (false === $ext = array_search(
        $finfo->file($_FILES['fileToUploadX']['tmp_name']),
        array(
            'jpg' => 'image/jpeg',
            'png' => 'image/png',
            'gif' => 'image/gif',
        ),
        true
    )) {
        throw new RuntimeException('Invalid file format.');
    }
	
	
	
	
	

    // You should name it uniquely.
    // DO NOT USE $_FILES['upfile']['name'] WITHOUT ANY VALIDATION !!
    // On this example, obtain safe unique name from its binary data.
	
    if (!move_uploaded_file(
        $_FILES['fileToUploadX']['tmp_name'],
        sprintf('./uploads/%s.%s',
            sha1_file($_FILES['fileToUploadX']['tmp_name']),
            $ext
        )
    )) {
        throw new RuntimeException('Failed to move uploaded file.');
    }
	
	
	
	
	
	
	
	//
	// Count # of uploaded files in array
$total = count($_FILES['upload']['name']);

echo $total;

// Loop through each file
for( $i=0 ; $i < $total ; $i++ ) {

  //Get the temp file path
  $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

  //Make sure we have a file path
  if ($tmpFilePath != ""){
    //Setup our new file path
    $newFilePath = "../../mp3/uploadFiles/" . $_FILES['upload']['name'][$i];

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

      //Handle other code here
	  echo "<p>Files are loaded successfully!!</p>";
	  for( $i=0 ; $i < $total ; $i++ ) {
		  echo "<br>" . $newFilePath . "<br>";
	  }

    }
  }
}
	
	//
	
	
	
	
	
	
	
	
	
	

    echo 'File is uploaded successfully.';

} catch (RuntimeException $e) {

    echo $e->getMessage();

}

*/








?>
