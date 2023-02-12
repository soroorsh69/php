<?php
if(isset($_FILES['file'])) {

    $name = $_FILES['file']['name'];
 $tmp_name = $_FILES['file']['tmp_name'];
      $error = $_FILES['file']['error'];
        $size = $_FILES['file']['size'];

 $folder="Upload/Image".$tmp_name;


    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = 'root';
    $db_db = 'Soroor_db';

    $mysqli = @new mysqli(
        $db_host,
        $db_user,
        $db_password,
        $db_db
    );

    if ($mysqli->connect_error) {
        echo 'Errno: ' . $mysqli->connect_errno;
        echo '<br>';
        echo 'Error: ' . $mysqli->connect_error;
        exit();
    }

    $sql="INSERT INTO `project_tb`(`project-name`,`image`) VALUES ('$tmp_name','$folder')";
    $result=mysqli_query( $mysqli, $sql);

    if (move_uploaded_file($tmp_name, $folder)) {

        $msg = "Image uploaded successfully";

    }else{

        $msg = "Failed to upload image";

    }


//   switch ($error) {
//
//            case UPLOAD_ERR_INI_SIZE:
//
//              echo  $message = "The uploaded file exceeds the upload_max_filesize directive in php.ini";
//
//                break;
//
//            case UPLOAD_ERR_FORM_SIZE:
//
//                echo  $message = "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form";
//
//                break;
//
//            case UPLOAD_ERR_PARTIAL:
//
//                echo   $message = "The uploaded file was only partially uploaded";
//
//                break;
//
//            case UPLOAD_ERR_NO_FILE:
//
//                echo    $message = "No file was uploaded";
//
//                break;
//
//            case UPLOAD_ERR_NO_TMP_DIR:
//
//                echo    $message = "Missing a temporary folder";
//
//                break;
//
//            case UPLOAD_ERR_CANT_WRITE:
//
//                echo  $message = "Failed to write file to disk";
//
//                break;
//
//            case UPLOAD_ERR_EXTENSION:
//
//                echo     $message = "File upload stopped by extension";
//
//                break;
//
//
//            default:
//
//                echo   $message = "Unknown upload error";
//
//                break;
//
//        }



}
?>