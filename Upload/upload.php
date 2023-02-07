<?php
if(isset($_FILES['file'])) {

    $file = $_FILES['file'];
    $name = $file['name'];
    $tmp_name = $file['tmp_name'];
    $error = $file['error'];
    $size = $file['size'];


    $file_ext = explode('.', $name);
   var_dump($_FILES['image']['error']);die;

    if ($_FILES['image']['error']!==UPLOAD_ERR_OK) {

        switch ($file) {

            case UPLOAD_ERR_INI_SIZE:

              echo  $message = "The uploaded file exceeds the upload_max_filesize directive in php.ini";

                break;

            case UPLOAD_ERR_FORM_SIZE:

                echo  $message = "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form";

                break;

            case UPLOAD_ERR_PARTIAL:

                echo   $message = "The uploaded file was only partially uploaded";

                break;

            case UPLOAD_ERR_NO_FILE:

                echo    $message = "No file was uploaded";

                break;

            case UPLOAD_ERR_NO_TMP_DIR:

                echo    $message = "Missing a temporary folder";

                break;

            case UPLOAD_ERR_CANT_WRITE:

                echo  $message = "Failed to write file to disk";

                break;

            case UPLOAD_ERR_EXTENSION:

                echo     $message = "File upload stopped by extension";

                break;


            default:

                echo   $message = "Unknown upload error";

                break;

        }


    }


}