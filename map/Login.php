<?php
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

$var1 = $_POST['txtUsername'];
$var2 = $_POST['txtPassword'];

$sql = "SELECT Gebruikersnaam FROM gebruikers WHERE Gebruikersnaam = '$var1' ";

$Result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($Result) > 0) {
        while($row = mysqli_fetch_array($Result, MYSQLI_NUM))
        {
            echo "Ingelogd";
            header("refresh:1;url=./Home/index.html");
        }
    } 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        header("refresh:1;url=index.html");
    }

mysqli_close($conn);
?> 