<?php
    @include 'db.php';

     //Create Table
     $sql = "CREATE TABLE users (
        Student_No INT PRIMARY KEY AUTO_INCREMENT,
        Name VARCHAR(50) NOT NULL,
        Birthday DATETIME,
        Course VARCHAR(50) NOT NULL,
        Email VARCHAR(50) NOT NULL
    )";

    if (mysqli_query($conn, $sql)) {
        echo $dbuser. "Connected Successfully <br>";
        echo "Users Table Created Succesfully";
    } else {
        echo "Error Creating Table" . mysqli_error($conn);
    }

?>