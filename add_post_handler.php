<?php require_once 'config/connection.php';?>
<?php
try {
    

    // Võtab vormist saadud andmed
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];
    $image = $_POST['image'];

    // Kontrollib, kas kõik vajalikud väljad on täidetud
    if (empty($title) || empty($content) || empty($author)) {
        echo "Kõik väljad peavad olema täidetud! <a href='add_post.php'>Tagasi</a> vormi juurde.";
        exit;
    }

    // Valmistab ette SQL päringu
    $stmt = $conn->prepare("INSERT INTO madis (pealkiri, tekst, autor, aeg, pildi_aadress) VALUES (?, ?, ?, NOW(), ?)");
    $stmt->bindParam(1, $title);
    $stmt->bindParam(2, $content);
    $stmt->bindParam(3, $author);
    $stmt->bindParam(4, $image);

    // Käivitab päringu
    $stmt->execute();

    // Suunab kasutaja tagasi avalehele
    header("Location: index.php");
    exit;
} catch (PDOException $e) {
    echo "Viga andmebaasiga ühendamisel: " . $e->getMessage();
    exit;
}


$stmt = null;
$conn = null;
?>
