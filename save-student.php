<?php
    $name = $_REQUEST["name"];
    $gender = $_REQUEST["gender"];
    $stratum = $_REQUEST["stratum"];
    
    //1. Connect to Database
    $host = "localhost";
    $dbname = "universidad";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    //2. Build SQL sentence
    $sql = "INSERT INTO estudiantes (id, name, gender, stratum) VALUES(NULL, '$name', '$gender', '$stratum')";

    //3. Prepare SQL sentence
    $q = $cnx->prepare($sql);

    //4. Execute SQL sentence
    $result = $q->execute();   

    if($result){
        echo "Student saved successfully";
    }
    else{
        echo "Error to create student";
    }

?>