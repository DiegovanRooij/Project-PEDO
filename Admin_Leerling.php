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

$usernames = $_POST["Leerling_add"];
$ww = $_POST["leerling_add_wachtwoord"];

echo $usernames. $ww;

$sql = "INSERT INTO gebruikers (Gebruikersnaam, Wachtwoord, Rights)
VALUES ('$usernames', '$ww', 1)";

if (mysqli_query($conn, $sql)) {
    echo "Leerling toegevoegd";
    header("Refresh: 1; url=Admin.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>