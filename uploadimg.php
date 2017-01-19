<?php
    
    if($_POST)
    {
        $imgName = $_POST['imgName'];
        $imgData = $_POST['imgData'];
        
        $res = file_put_contents("./img/{$imgName}",$imgData);
        if($res){
            echo 1;exit;
        }
    }

    echo 0;
?>
