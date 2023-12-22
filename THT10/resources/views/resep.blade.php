<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Recipe</title>
    <link rel="stylesheet" href="resep.css">
    <style>
      * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: rgb(213, 206, 163);
}

.container {
    width: 100%;
    display: flex;
    max-width: 500px;
    background: rgb(109, 152, 134);
    border-radius: 15px;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
}

.form{
    width: 100%;
    max-width: 500px;
    background: rgb(109, 152, 134);
    border-radius: 15px;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
}

.login {
    width: 400px;
}

form {
    width: 250px;
    margin: 60px auto;
}

h1 {
    margin: 20px;
    text-align: center;
    font-weight: bolder;
    text-transform: uppercase;
}

p {
    text-align: center;
    margin: 10px;
}
a {
    text-decoration: none;
    color: white;
}

form label {
    display: block;
    font-size: 16px;
    font-weight: 600;
    padding: 2px;
}

input {
    width: 100%;
    margin: 2px;
    border: none;
    outline: none;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid gray;
}

button {
    border: none;
    outline: none;
    padding: 8px;
    width: 252px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
    border-radius: 5px;
    background: #ffa12c;
}

button:hover {
    background: rgba(214, 86, 64, 1);
}


@media (max-width: 880px) {
    .container {
        width: 80%;
        max-width: 750px;
        margin-left: 20px;
        margin-right: 20px;
    }

    form {
        width: 300px;
        margin: 20px auto;
    }

    .login {
        width: 400px;
        padding: 20px;
    }

    button {
        width: 100%;
    }

    .right img {
        width: 100%;
        height: 100%;
    }
}
    </style>
</head>
<body>
    <div class="container">
        <form action="resephasil.php" method="post">
        <h2 style="text-align: center;">Upload Your Recipe</h2>
        <br>
            <label for="Recipe Title"> Recipe Title</label>
            <br>
            <input type="text" name="judul" required><br>

            <label for="Recipe Category">Recipe Category</label>
            <br>
            <select name="Kategori" id="Kategori"> 
                <option value="Foods">Makanan</option>
                <option value="Drinks">Minuman</option>
                <option value="Dessert">Dessert</option>
            </select>
            <br>

            <label for="bahan">Inggredients</label>
            <br>
            <textarea name="bahan[]" id="bahan"></textarea>
            <br>            
            <label for="langkah">Steps</label>
            <br>
            <textarea name="langkah[]" id="langkah"></textarea>
            <br>
            <button type="submit">Submit</button>
            <button type="submit"><a href="/">Back</a></button>
        </form>
    </div>
    <script>
        // Fungsi validasi input
function validateInput() {
  //ambil nilai inputan
  const title = document.querySelector('#title').value;
  const ingredients = document.querySelectorAll('input[name="ingredients[]"]');
  
  //validasi, harus diisi
  if(!title) {
    alert("Judul harus diisi!");
    return false;  
  }

  // cek bahan kosong
  if(ingredients.length < 2) {
    alert("Minimal 2 bahan harus diisi!");
    return false;
  }

  return true;
}
    </script>
</body>
</html>