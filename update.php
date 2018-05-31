<?php

include('db_connect.php');

try {
    $sql = "UPDATE users SET name = :name WHERE id = :id ";
    $statement = $conn->prepare($sql);
    $statement->bindValue(':id', '24');
    $statement->bindValue(':name', '1234');
    $statement->execute();
    header('Location: index.php');
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
    
