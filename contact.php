<?php include 'header.php'; ?>
<?php
require_once 'config/connection.php'; 

try {
    
    $id = 11;
    $query = "SELECT kontakt_email, kontakt_telefon FROM madis WHERE id = ?"; 
    $stmt = $conn->prepare($query);
    $stmt->bindParam(1, $id, PDO::PARAM_INT);
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) {
        $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
        echo "Kontaktandmed puuduvad.";
        exit;
    }
} catch (PDOException $e) {
    echo "Andmebaasi viga: " . $e->getMessage();
    exit;
}

?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madis K veebileht</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white d-flex flex-column min-vh-100">
    
    
    <main class="container">
        <h1>Kontakt</h1>
        <p>Telefon: <?php echo htmlspecialchars($contact['kontakt_telefon']); ?></p>
        <p>E-post: <?php echo htmlspecialchars($contact['kontakt_email']); ?></p>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
