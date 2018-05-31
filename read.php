<?php

include('db_connect.php');

try {
    $sql = 'SELECT * FROM users WHERE id = :id';
    $statement = $conn->prepare($sql);
    $statement->bindValue(':id', '28');
    $statement->execute();
    
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        echo'<pre>';
            print_r($row);
        echo '</pre>';
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
    
