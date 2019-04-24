<?php
    $FileName = $_POST['module'];


    fwrite($FileName, "test");

    fopen($FileName . '.html' , 'w') or die('Something went wrong');

?>