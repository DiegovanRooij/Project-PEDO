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

$username = $_POST[""];
$wachtwoord = $_POST[""];

$sql = "INSERT INTO gebruikers (GebruikersID, Gebruikersnaam, Wachtwoord, Rights)
VALUES ( ,'$username', '$wachtwoord', 1)";

if (mysqli_query($conn, $sql)) {
    echo "Nieuwe student toegevoegd";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>