<?php
$target_dir="uploads/";
$target_file=$target_dir.basename($_FILES["FileUploading"]["name"]);
$uploadOk=1;
$imageFileType=strtoLower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])){
    if(file_exists($target_file)){
        echo "sorry file already exists";
        $uploadOk=0;
    }
    //check file size
    if($_FILES["FileUploading"]["size"]>50000000){
        echo "Sorry,your file  is too large";
        $uploadOk=0;
    }
    //Allow certain file formats
    if($imageFileType!="jpg"&& $imageFileType!="png" && $imageFileType!="jpeg"&&$imageFileType!="gif"){
        echo "Sorry,only JPG,JPEG,PNG and GIF files are allowed";
        $uploadOk=0;
    }
    //check if $uploadOk is set to 0 by an error
    if($uploadOk==0){
        echo"Sorry,your file was not uploaded";
        //if everything is ok,try to upload file
    }else{
        if(move_uploaded_file($_FILES["FileUploading"]["tmp_name"],$target_file)){
            echo "success";
        }else{
            echo "Sorry,there was an error uploading your file.";
        }
    }
}