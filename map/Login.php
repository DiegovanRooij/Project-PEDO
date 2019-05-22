<?php
    session_start();
    
    //Inlog Check!
   // Connectie maken met DBS
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "project_pedagogisch_medewerker";
   
   // Create connection
   $conn = mysqli_connect($servername, $username, $password, $dbname);
   // Check connection
   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
   }

   
?>