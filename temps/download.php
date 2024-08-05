<!--not working check later-->
<?php
if(!empty($_GET['file']))
{
    $filename = basename($_GET['file']);
    $filepath = 'Reports/' . $filename;
    if(!empty($filename) && file_exists($filepath)){

//Define Headers
        header("Cache-Control: public");
        header("Content-Description: FIle Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/zip");
        header("Content-Transfer-Emcoding: binary");

        readfile($filepath);
        exit;

    }
    else{
        echo "This File Does not exist.";
    }
}
?>