<?php
    $servername = "localhost"; // andmebaasi serveri nimi
    $username = "madisk"; // kasutajanimi
    $password = "Parool1"; // parool
    $dbname = "proov"; // andmebaasi nimi

    try {
        // Loob ühenduse PDO abil
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
    } catch(PDOException $e) {
        echo "Ühenduse viga: " . $e->getMessage();
    }
?>
