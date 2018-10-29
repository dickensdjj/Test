<?php
    $filepath = 'resources/files/CV.pdf';
    // $result = file_exists($filepath);
    // echo $result;
    if(file_exists($filepath)){
        //Define header
        echo "I am in";
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filepath");
        header("Content-Type: application/pdf");
        header("Content-Transfter-Encoding: binary");

        //Read File
        readfile($filepath);
        exit;
    }
    
    header('Location: index.php');
?>