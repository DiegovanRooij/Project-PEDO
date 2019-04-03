<?php
    $FileName = $_POST['module'];

    fopen($FileName . '.html' , 'w') or die('Something went wrong');;

?>