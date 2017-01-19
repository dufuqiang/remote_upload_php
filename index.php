<?php
    header('content-type:text/html;charset=utf8');
    $imgnName = "2.png";
    
    $imgData = fread(fopen($imgnName,"r"),filesize($imgnName));
    $curl = curl_init();
    $data = array('imgName'=>$imgnName,'imgData'=>$imgData,);
    curl_setopt($curl, CURLOPT_URL, "http://test.cc/test/uploadimg.php");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS,$data);
    curl_setopt ($curl, CURLOPT_HEADER, 0 );
    $result = curl_exec($curl);
    curl_close($curl);
    echo $result;
?>
