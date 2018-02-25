 <?php
$servername = "localhost";
$username = "davidjones";
$password = "releasethekraken";
$dbname = "bdasignatura";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO alumno (numero_matricula, nombre) VALUES ('990001', 'legolas')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 