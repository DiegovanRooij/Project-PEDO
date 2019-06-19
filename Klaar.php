<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_pedagogisch_medewerker";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Module (GebruikersID, Gebruikersnaam, Klaar)
VALUES (1, 'TestLeerling', 'ja')";

if ($conn->query($sql) === TRUE) {
    echo "Klaar";
    header("Refresh: 1; url=module_1_1_Theorie.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>