<?php

$sname= "localhost";

$unmae= "torada";

$password = "010101";

$db_name = "sqli";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}
// else {
//     echo "Connection succesful!";
// }