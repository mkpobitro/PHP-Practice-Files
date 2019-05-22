<?php
$target_directory = "filelocation/";
$target_file = $target_directory . basename($_FILES["fileUpload"]["name"]);
$fileuploadDone = 1;
$fileExtension = pathinfo($target_file,PATHINFO_EXTENSION);
// ইমেজ ফাইলটি আসল না ফেক  চেক করে
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
   if($check !== false) {
        echo	"ফাইলটি ইমেজ - " . $check["mime"] . ".";
        $fileuploadDone = 1;
    } else {
       	echo "ফাইলটি ইমেজ নয়।";
       	$fileuploadDone = 0;
    }hello world
}
?>
