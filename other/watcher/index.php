 <?php
$servername = "192.168.1.120";
$username = "viewer";
$password = "3s(5m4t-?2Q^";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM ips";


$conn = null;

?>
