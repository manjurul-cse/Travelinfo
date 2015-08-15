<?php
$folder = "/upload";
if (is_uploaded_file($HTTP_POST_FILES['filename']['tmp_name']))  {   
    if (move_uploaded_file($HTTP_POST_FILES['filename']['tmp_name'], $folder.$HTTP_POST_FILES['filename']['name'])) {
         Echo "File uploaded";
    } else {
         Echo "File not moved to destination folder. Check permissions";
    };
} else {
     Echo "File is not uploaded.";
}; 
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
File: <input type="file" name="filename" />
<input type="submit" value="Upload" />
</form>