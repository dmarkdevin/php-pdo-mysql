<?php

include('db_connect.php');

try {
    $sql = "INSERT INTO users (name) VALUES (:name)";
    $statement = $conn->prepare($sql);
    $statement->bindValue(':name', rand(1000,1000000));
    $statement->execute();
    header('location:index.php');
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
    
