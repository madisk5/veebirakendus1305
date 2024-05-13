<?php
include 'config/connection.php'; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        // Kustutage postitus
        $query = "DELETE FROM madis WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();

        // Suunab tagasi
        header('Location: index.php');
        exit;
    } catch (PDOException $e) {
        die("Andmebaasi viga: " . $e->getMessage());
    }
} else {
    // Kui ID-d pole antud, suunab tagasi
    header('Location: index.php');
    exit;
}
?>
