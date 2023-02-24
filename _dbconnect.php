<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "9868users";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Sorry" . mysqli_connect_error());
}
//  else {
//     echo "Success";
// }

?>