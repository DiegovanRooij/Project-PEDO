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

$PSnummer = $_POST['txtUsername'];
$WachtWoord = $_POST['txtPassword'];

#Check of de gebruiker een leerling is of een leraar!
$Leerling_Leraar = "SELECT Rights from gebruikers where Gebruikersnaam = '$PSnummer' ";
#Checks if you have the rights or not
$NotAdmin = 0;

if ($Check = mysqli_query($conn, $Leerling_Leraar)) {
    while ($Checks = mysqli_fetch_row($Check)) {
        $NotAdmin = $Checks[0];
    }
}

#Check of de PSnummer in de dbs staat
$Sql = "SELECT * FROM gebruikers WHERE Gebruikersnaam = '$PSnummer' AND Wachtwoord = '$WachtWoord' ";
$Result = mysqli_query($conn, $Sql);

if ($Admin == 0) {
    if (mysqli_num_rows($Result) > 0) {
        while ($Row = mysqli_fetch_array($Result,  MYSQLI_NUM)) {
            header("Refresh: 0; url=../Home/index.html");
        }
    } else {
        echo "Jouw login en/of wachtwoord klopt niet";
    }
}
else{
    header("refresh:0;url=../Home/index.html");
}
