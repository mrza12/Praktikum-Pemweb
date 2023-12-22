<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe</title>
    <link rel="stylesheet" href="resep.css">
</head>
<body>
    <div class="form">
    <form action="">
    <?php
    // deklarasi variabel
    $ingredients = []; 
    $steps = [];

    // ambil input
    $title = $_POST['judul'];
    $category = $_POST['Kategori']; 

    $ingredients = $_POST['bahan'];
    $steps = $_POST['langkah'];

    // tampilkan judul & kategori 
    echo "<h2>Judul Resep: $title</h2>";
    echo "<div>Kategori: $category</div>";

        if(!is_null($ingredients)) {
            echo '<h3>Bahan-bahan</h3>';
            foreach ($ingredients as $ing) {
              echo '- ' . $ing . '<br>';
            }
        } else {
            echo 'Data bahan tidak ada';
        } if(!is_null($steps)) {
            echo '<h3>Langkah-langkah</h3>';
            foreach ($steps as $step) {
              echo '- ' . $step . '<br>';
            }
        } else {
            echo 'Data langkah tidak ada';
        }
    ?>
    <button type="submit"><a href="/resep">Back</a></button>
    </form>
    </div>
</body>
</html>