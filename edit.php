<?php
require_once 'header.php';
include 'config/connection.php'; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $stmt = $conn->prepare("SELECT * FROM madis WHERE id = ?");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $post = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$post) {
            echo "Ei leitud ühtegi postitust.";
            exit;
        }
    } catch (PDOException $e) {
        echo "Andmebaasi viga: " . $e->getMessage();
        exit;
    }
} else {
    echo "Postituse ID puudub.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pealkiri'], $_POST['tekst'], $_POST['pildi_aadress'])) {
    $pealkiri = $_POST['pealkiri'];
    $tekst = $_POST['tekst'];
    $pildi_aadress = $_POST['pildi_aadress'];

    try {
        $update_stmt = $conn->prepare("UPDATE madis SET pealkiri = ?, tekst = ?, pildi_aadress = ? WHERE id = ?");
        $update_stmt->bindParam(1, $pealkiri);
        $update_stmt->bindParam(2, $tekst);
        $update_stmt->bindParam(3, $pildi_aadress);
        $update_stmt->bindParam(4, $id, PDO::PARAM_INT);

        if ($update_stmt->execute()) {
            header("Location: post.php?id=$id");
            exit;
        }
    } catch (PDOException $e) {
        echo "Päring andmebaasi uuendamiseks ebaõnnestus: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muuda Postitust</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function validateForm() {
            let pealkiri = document.getElementById('pealkiri').value;
            let tekst = document.getElementById('tekst').value;
            let pildi_aadress = document.getElementById('pildi_aadress').value;
            let valid = true;

            if (pealkiri === '') {
                document.getElementById('pealkiriError').innerText = 'Pealkiri on nõutud';
                valid = false;
            } else {
                document.getElementById('pealkiriError').innerText = '';
            }

            if (tekst === '') {
                document.getElementById('tekstError').innerText = 'Sisu on nõutud';
                valid = false;
            } else {
                document.getElementById('tekstError').innerText = '';
            }

            if (pildi_aadress === '') {
                document.getElementById('pildi_aadressError').innerText = 'Pildi aadress on nõutud';
                valid = false;
            } else {
                document.getElementById('pildi_aadressError').innerText = '';
            }

            return valid;
        }
    </script>
</head>
<body class="bg-dark text-white">
    <div class="container mt-3">
        <h1>Muuda Postitust</h1>
        <form method="post" onsubmit="return validateForm()">
            <div class="mb-3 text-white">
                <label for="pealkiri" class="form-label">Pealkiri:</label>
                <input type="text" class="form-control text-white bg-dark" id="pealkiri" name="pealkiri" value="<?php echo htmlspecialchars($post['pealkiri']); ?>" required>
                <div id="pealkiriError" class="text-danger"></div>
            </div>
            <div class="mb-3 text-white">
                <label for="tekst" class="form-label">Sisu:</label>
                <textarea class="form-control text-white bg-dark" id="tekst" name="tekst" rows="10" required><?php echo htmlspecialchars($post['tekst']); ?></textarea>
                <div id="tekstError" class="text-danger"></div>
            </div>
            <div class="mb-3 text-white">
                <label for="pildi_aadress" class="form-label">Pildi aadress:</label>
                <input type="text" class="form-control text-white bg-dark" id="pildi_aadress" name="pildi_aadress" value="<?php echo htmlspecialchars($post['pildi_aadress']); ?>" required>
                <div id="pildi_aadressError" class="text-danger"></div>
            </div>
            <button type="submit" class="btn btn-primary">Salvesta muudatused</button>
        </form>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
