<?php
$mysqli = new mysqli("127.0.0.1", "root", "", "gegevens");
$_SESSION['mysqli'] = $mysqli;
if ($mysqli -> connect_errno){
    echo "failed to connect to MySQL: (" . $mysqli ->connect_errno . ")" . $mysqli ->connect_error;
}
?>