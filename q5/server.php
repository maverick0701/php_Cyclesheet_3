<?php
//folder where to upload
$targetFolder="DATA/";

//setting the file name
$targetFile=$targetFolder . basename($_FILES['file']['name']);

//printing file path
echo "File Path<br>";
echo $targetFile;

//Printing File type
echo "<br>File Type<br>";
$fileType =$_FILES['file']['type'];

echo $fileType;

$uploadOk=1;

if (file_exists($targetFile)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

echo "<br>File Size<br>";
echo $_FILES["file"]["size"]." Kb<br>";

if ($_FILES["file"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

if ($fileType=="application/pdf"  && $uploadOk==1)
{
    
    $upload=move_uploaded_file($_FILES['file']['tmp_name'], $targetFile);
    if($upload)
    {
        echo "<br>Uploaded ";
    }
} 


?>