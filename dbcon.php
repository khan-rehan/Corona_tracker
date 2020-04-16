<?php 

$server = 'localhost';
$user = 'root';
$password = '';
$db = 'coronadb';

$con = mysqli_connect($server, $user, $password, $db);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

?>