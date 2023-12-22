<!-- Menggunakan float-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pemweb</title>
    <link rel="stylesheet" href="float.css">
    <style>
        body {
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    background-color: rgb(213, 206, 163);
    color: white;
}

/* Header */
header {
    align-items: center;
    background-color: rgb(57, 62, 70);
    padding: 20px;
    color: white;
    border-radius: 60px 60px 10px 10px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

ul{
    display: flex;
    list-style: none;
}

a {
    text-decoration: none;
    color: black;
    margin-left: 10px;
    margin-right: 30px;
}

/* Aside (Float Left) */
aside {
    float: left;
    width: 27%; /* Mengurangi lebar aside menjadi 20% agar berdampingan dengan footer */
    height: 680px;
    background-color: rgb(109, 152, 134);
    padding: 20px;
    margin-top: 20px;
    margin-right: 10px;
    margin-bottom: 20px;
    margin-left: 4px;
}

/* Nav (Float Left) */
nav {
    float: left;
    width: 30%;
    height: 680px;
    background-color: rgb(109, 152, 134);
    padding: 20px;
    margin-top: 20px;
    margin-right: 10px;
    margin-left: 10px;
}

/* Main (Float Left) */
main {
    float: left;
    width: 30%;
    height: 680px;
    background-color: rgb(109, 152, 134);
    padding: 20px;
    margin-left: 10px;
    margin-top: 20px;
}

/* Footer (Clear Float) */
footer {
    clear: both;
    background-color: rgb(57, 62, 70);
    padding: 20px;
    border-radius: 10px 10px 60px 60px;
    text-align: center;
}

/* Mengatur img */
img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 0 auto;
}

figure {
    background-color: white;
    border: 10px solid white;
    margin: 0;
    padding: 10px;
}

figcaption {
    background-color: white;
    border: 20px solid white;
    color: black;
    font-family: fantasy;
    text-align: center;
}
    </style>
</head>
<body>
    <div class="grid">
        <header>
            <center><h1>Masak Simple No Ribet</h1></center>
            <ul>
                <li>
                    <a href="/" style="color: white;">Home</a>
                </li>
                <li>
                    <a href="/resep" style="color: white;">Upload Recipe</a>
                </li>
                <li>
                    <form action="">
                        <div class="search-container">
                            <form action="">
                              <input type="text" placeholder="Search Recipe.." name="search">
                              <input type="submit" value="Search">
                            </form>
                        </div>
                    </form>
                </li>
            </ul>
        </header>
        <aside>
            <figure>
                <img src="https://imgx.parapuan.co/crop/0x0:0x0/x/photo/2023/03/03/tips-memasak-cepat-es-pisang-ijo-20230303093451.jpg" alt="Drinks">
                <center><figcaption>Es Pisang Ijo</figcaption></center>
            </figure>
            <table>
                <form action="">
                    <tr>
                        <td>
                            <label for="">Seberapa enak dan simple resep makanan ini, boleh di isi yaa!</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="Tasted" value="xl" id="xl">
                            <label for="xl"> 1. Enak Banget </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="Tasted" value="l" id="l">
                            <label for="l"> 2. Enak</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="Tasted" value="m" id="m">
                            <label for="m"> 3. Lumayan</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="Tasted" value="s" id="s">
                            <label for="other"> 4. Biasa</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="Tasted" value="xs" id="xs">
                            <label for="xs"> 5. Kurang</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                                <button type="submit">Submit</button><br>
                        </td>
                    </tr>
                </form>
            </table>
        </aside>
        <nav>
            <table>
                <figcaption>Bahan Pisang Ijo :</figcaption>
                <br>
                <tr>
                    <td>200 g tepung beras</td>
                </tr>
                <tr>
                    <td>50 g gula pasir</td>
                </tr>
                <tr>
                    <td>2 sdm air daun suji pandan</td>
                </tr>
                <tr>
                    <td>6 buah pisang kepok/tanduk/raja sereh, kupas</td>
                </tr>
                <tr>
                    <td>daun pisang/plastik tebal</td>
                </tr>
            </table>
            <br>
            <table>
                <figcaption>Pelengkap:</figcaption>
                <br>
                <tr>
                    <td>100 g tepung beras</td>
                </tr>
                <tr>
                    <td>750 ml santan segar yang sedang kentalnya</td>
                </tr>
                <tr>
                    <td>1 lembar daun pandan</td>
                </tr>
                <tr>
                    <td>1/2 sdt garam</td>
                </tr>
            </table>
            <br>
            <table>
                <figcaption>Bahan Bubur:</figcaption>
                <br>
                <tr>
                    <td>Santan yang sudah direbus</td>
                </tr>
                <tr>
                    <td>Sirop Merah Pisang Ambon</td>
                </tr>
                <tr>
                    <td>Es Batu</td>
                </tr>
            </table>
        </nav>
        <main>
            <table>
                <figcaption>Langkah-Langkah:</figcaption>
                <br>
                <tr>
                    <td>1. Pisang Ijo: Taruh dalam wadah, tepung beras, tepung kanji, gula, air daun suji dan santan. Aduk hingga larut dan licin.</td>
                </tr>
                <tr>
                    <td>2. Masak di atas api kecil sambil aduk-aduk hingga kental dan matang.</td>
                </tr>
                <tr>
                    <td>3. Angkat dan dinginkan.</td>
                </tr>
                <tr>
                    <td>4. Ambil 2-3 sdm adonan, ratakan di atas selembar daun pisang atau plastik tebal.</td>
                </tr>
                <tr>
                    <td>5. Beri sepotong pisang di tengahnya. Balut seluruh pisang hingga bentuknya mirip pisang.</td>
                </tr>
                <tr>
                    <td>6. Taruh di atas kukusan yang sudah dialasi daun, Kukus selama 30 menit hingga matang.</td>
                </tr>
                <tr>
                    <td>7. Angkat dan dinginkan.</td>
                </tr>
                <tr>
                    <td>8. Bubur: Taruh tepung beras, santan, akstrak pandan dan garam dalam panci, aduk hingga larut.</td>
                </tr>
                <tr>
                    <td>9. Masak di atas api sedang, aduk-aduk hingga kental dan matang.</td>
                </tr>
                <tr>
                    <td>10. Angkat dan dinginkan.</td>
                </tr>
                <tr>
                    <td>11. Penyajian : Potong-potong pisang ijo melintang, taruh di mangkuk saji.</td>
                </tr>
                <tr>
                    <td>12. Beri bubur, santan, sirop merah dan es batu. Sajikan dingin.</td>
                </tr>
            </table>
        </main>
        <footer>
            <p>&copy; <b><i>Masak Simple No Ribet! - Pemograman Web</i></b></p>
        </footer>
    </div>
</body>
</html>