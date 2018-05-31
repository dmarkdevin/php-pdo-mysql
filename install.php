<?php

include('db_connect.php');

try {
    
    // $sql = "DELETE FROM users WHERE id = :id ";
    // $statement->bindValue(':id', '3');

    $sql = "CREATE TABLE if not exists users2 (id int(255) NOT NULL AUTO_INCREMENT,name varchar(1000) DEFAULT NULL,PRIMARY KEY (id))";
    $statement = $conn->prepare($sql);
    $statement->execute();

    header('location:index.php');
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
