<?

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "root";
$dBName = "mahs_lhouston";

$conn = mysquli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}