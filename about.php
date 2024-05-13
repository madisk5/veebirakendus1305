<?php include 'header.php'; ?>
<?php
require_once 'config/connection.php';  

try {
    $query = "SELECT Minust FROM madis WHERE id = 10"; 
    $stmt = $conn->prepare($query); 
    $stmt->execute(); // 

    // Kontrolli, kas päring tagastas tulemuse
    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $aboutContent = $row['Minust'];
    } else {
        $aboutContent = "Teavet ei leitud.";
    }
} catch (PDOException $e) {
    $aboutContent = "Viga andmebaasi päringus: " . $e->getMessage();
}

$conn = null; // Sulge ühendus
?>

<!DOCTYPE html>
<html lang="et">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white d-flex flex-column min-vh-100">
    
    <main class="container">
        <h1 class="text-white">Minust</h1>
        <p class="text-white"><?php echo $aboutContent; ?></p>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
