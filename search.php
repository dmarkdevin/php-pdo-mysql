<?php

include('db_connect.php');

try {
    $statement = $conn->prepare("SELECT * FROM users WHERE name LIKE ?"); 
    $statement->bindValue(1, "%".rand(1,9)."%");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);      
        echo 'array data format<br>';
            foreach($results as $result):
                print_r($result);
            endforeach;
        echo '<br><br>json data format<br>';
            echo json_encode($results); 
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
     