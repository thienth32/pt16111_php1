<?php
function readTxtData($filename, $delimiterChar){
    $myfile = fopen($filename, 'r');
    $data = [];
    while(!feof($myfile)) {
        $line = fgets($myfile);
        $data[] = explode($delimiterChar, $line);
    }
    fclose($myfile);

    return $data;
}


?>