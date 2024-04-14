<?php
echo "List of Tables on exampledb runing on db service <br> <br>";

$host = 'db'; // docker service name
$db = 'exampledb';
$user = 'exampleuser';
$pass = 'examplepass';
$charset = 'utf8mb4';

echo "Connecting to the database...<br>";

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

echo "Connected successfully.<br>";

echo "Executing SHOW TABLES query...<br>";

$result = $mysqli->query('SHOW TABLES');

if (!$result) {
    die("Query failed: " . $mysqli->error);
}

echo "Query executed successfully. Here are the tables:<br>";

while ($row = $result->fetch_array(MYSQLI_NUM)) {
    echo $row[0] . "<br>";
}

$mysqli->close();

echo "<br><br>Connection closed.<br>";
