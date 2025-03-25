<?php
$servername = "20.2.136.249"; 
$username = "FYPG9";
$password = "568450TtTt!";
$dbname = "FYPG9";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connect error: " . $conn->connect_error);
}
$sql = "SELECT * FROM Manager";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);
$conn->close();
?>