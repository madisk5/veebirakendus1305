<?php include 'header.php'; ?>
<?php require_once 'config/connection.php';?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Madis K veebileht</title>
</head>
<body class="bg-dark text-white d-flex flex-column min-vh-100">
    
    <div class="container mt-3 flex-grow-1">
        <?php 
    

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $stmt = $conn->prepare("SELECT * FROM madis WHERE id = ?");
                $stmt->bindParam(1, $id, PDO::PARAM_INT);
                $stmt->execute();

                if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<h2>" . htmlspecialchars($row["pealkiri"]) . "</h2>";
                        echo "<p>" . htmlspecialchars($row["tekst"]) . "</p>";
                        if (!empty($row["pildi_aadress"])) {
                            echo "<img src='" . htmlspecialchars($row["pildi_aadress"]) . "' alt='Pilt' class='img-fluid'>";
                        }
                    }
                } else {
                    echo "Andmeid ei leitud.";
                }
            } else {
                echo "Postituse ID puudub.";
            }
        } catch (PDOException $e) {
            die("Ühenduse viga: " . $e->getMessage());
        }
        ?>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
