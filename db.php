<?php
$dbHostname = 'localhost';
    $dbDatabase = 'gabriel_gonzalez2';
    $dbUsername = 'ga.gonzalez2';
    $dbPassword = '2937';

$db = new PDO("mysql:host=$dbHostname;dbname=$dbDatabase;charset=utf8", $dbUsername, $dbPassword);

function getResultFromSQL($sql, $values = []) {
    global $db;
    
    $stmt = $db->prepare($sql);
    $stmt->execute($values);
    
    return $stmt->fetchAll();
}

function insertUser($sql){
    global $db;
    
    $stmt = $db->prepare($sql); 
    $stmt->execute(); 
    
    
        
    
    
}
?>