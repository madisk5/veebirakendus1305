<?php require_once 'config/connection.php';?>
<?php require_once 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <title>Madis K veebileht</title>
</head>
<body style="background-color: #333333; color: white;">

<main class="container">
    <h1 class="text-white">Postitused</h1>

    <div class="row">
        <?php
        $query = "SELECT * FROM madis WHERE (minust IS NULL OR minust = '') AND (kontakt_email IS NULL OR kontakt_email = '') AND (kontakt_telefon IS NULL OR kontakt_telefon = '')";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <div class="col-md-4">
                    <div class="card border border-light bg-dark text-white">
                        <img src="<?php echo $row['pildi_aadress']; ?>" class="card-img-top img-fluid" alt="<?php echo $row['pealkiri']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['pealkiri']; ?></h5>
                            <p class="card-text">Autor: <?php echo $row['autor']; ?></p>
                            <p class="card-text">Aeg: <?php echo $row['aeg']; ?></p>
                            <a href="post.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Vaata rohkem</a>
                            <button class="btn btn-light" onclick="location.href='edit.php?id=<?php echo $row['id']; ?>'">Muuda</button>
                            <button class="btn btn-light" onclick="confirmDelete(<?php echo $row['id']; ?>)">Kustuta</button>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p>Pole postitusi</p>";
        }
        ?>
    </div>
</main>

<script>
    function confirmDelete(postId) {
        if (confirm('Kas olete kindel, et soovite selle postituse kustutada?')) {
            location.href = 'delete.php?id=' + postId;
        }
    }
</script>

<?php include 'footer.php'; ?>
</body>
</html>
