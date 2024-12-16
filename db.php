<?php
$servername = "localhost";  // Ang hostname sa imong MySQL server, kasagaran "localhost"
$username = "root";  // Ang username para sa database, kasagaran "root" sa lokal nga server
$password = "";  // Ang password para sa imong MySQL user, kung walay password, i-blank lang
$dbname = "todo_app";  // Ang ngalan sa database nga imong gustong gamiton

// Maghimo og koneksyon sa MySQL server
$conn = new mysqli($servername, $username, $password, $dbname);

// Kung magkaproblema sa koneksyon, ipakita ang error ug undangon ang script
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);  // I-display ang error kung magkaproblema sa connection
}
?>
