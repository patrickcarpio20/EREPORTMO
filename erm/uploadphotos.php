<?php
function UploadPhotos($files,$reporttype, $reportid, $conn){
$error=array();
$extension=array("jpeg","jpg","png","gif");
foreach($files["tmp_name"] as $key=>$tmp_name) {
    $file_name=$files["name"][$key];
    $file_tmp=$files["tmp_name"][$key];
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);

    if(in_array($ext,$extension)) {
        if(!file_exists("../public/evidences/".$file_name)) {
            $newFileName=$file_name;
            move_uploaded_file($file_tmp=$files["tmp_name"][$key],"../public/evidences/".$file_name);
        }
        else {
            $filename=basename($file_name,$ext);
            $newFileName=$filename.time().".".$ext;
            move_uploaded_file($file_tmp=$files["tmp_name"][$key],"../public/evidences/".$newFileName);
        }
        $query = mysqli_query($conn, "INSERT INTO tbl_evidences(reporttype,reportid,evidence) VALUES('$reporttype', '$reportid', '$newFileName')");
    }
    else {
        array_push($error,"$file_name, ");
    }
}
}

?>