<?php 
    header("Access-Control-Allow-Origin: *"); 
    header("Content-Type: application/json; charset=UTF-8"); 
    header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE"); 
    header("Access-Control-Max-Age: 3600"); 
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With"); 
    
    require "./../.env";

    $requestMethod = $_SERVER["REQUEST_METHOD"];
    
    
    $servername = "localhost";
    $username = "root";
    $password = getenv("PASSWORD"); // reads from the .env file (if imported in index.php)

    try {
        $conn = new PDO("mysql:host=$servername;dbname=pipper", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        if ($requestMethod == "GET") {
            $statement = $conn->query("select * from pips");
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            echo json_encode($result);    
        } else {
            echo "You sent a POST request, so you get no data, hahaha!";
        }
        
        
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    
    // echo "Hello world"; 
?> 