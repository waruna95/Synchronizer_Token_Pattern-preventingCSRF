<!--
IT15060822
W.M.W.G.Wijesundara
-->

<?php

if(isset($_POST['request']) && isset($_POST['token'])){

    $tokenfile = fopen("token.txt", "r") or die("Unable to open file!");
    list($token,$session_id) = explode(",",chop(fgets($tokenfile)),2); 

    fclose($tokenfile);

    if($token == $_POST['token']){
        if($session_id == $_COOKIE['ssd_sid']){
            header("location: ../views/home.php?er=Request successfull!");
        }
        else {
            header("location: ../views/error.php?er= Request validation failed!");
        }
    }
    else {
        header("location: ../views/error.php?er= Request validation failed!");
    }
}
else {
    header("location: ../views/error.php?er=something wrong ! :  Invalid change state request!");
}
?>