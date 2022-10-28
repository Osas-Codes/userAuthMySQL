<?php

// $sql = "CREATE TABLE Students (
// 	    id INT AUTO_INCREMENT PRIMARY KEY,
//         full_names VARCHAR(120) NOT NULL,
//         country VARCHAR(32) NOT NULL,
//         email VARCHAR(60),
//         gender VARCHAR(10),
//         password VARCHAR(100) NOT NULL,
//         dob TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if (msqli_queri($conn, $sql)) {
//     echo "Table Students created successfully";
// }else {
//     echo "Error creating table:" . mysqli_error($conn);
// }
    

function db() {
    //set your configs here
    $host = "127.0.0.1";
    $user = "root";
    $db = "zuriphp";
    $password = "";
    $conn = mysqli_connect($host, $user, $password, $db);
    if(!$conn){
        echo "<script> alert('Error connecting to the database') </script>";
    }
    return $conn;

}