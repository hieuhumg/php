<?php
function connectDb()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "khoaphamtraning";

    //connection string with database
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn, 'utf8');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else {
        return $conn;
    }
}
?>

