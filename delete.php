<?php

include('db_connect.php');

try {
    
    $sql = "DELETE FROM users WHERE id = :id ";
    $statement = $conn->prepare($sql);
    $statement->bindValue(':id', '27');

    // $sql = "DELETE FROM users";
    // $statement = $conn->prepare($sql);
    $statement->execute();

    header('location:index.php');
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
    

