<?php

// connect to the database
$conn = mysqli_connect('127.0.0.1', 'test_user', 'test123456', 'test');

// check connection
if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
}

return $conn

?>
