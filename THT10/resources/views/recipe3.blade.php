<!-- menggunakan flex -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pemweb</title>
    <link rel="stylesheet" href="flex.css">
    <style>
        body {
    margin: 5px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    background-color:rgb(213, 206, 163);
    color: white;
}

.flex {
    display: flex;
    flex-direction: column;
    height: fit-content;
    gap: 20px;
}

/* mengatur header */
header {
    text-align: center;
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


/* Mengatur content */

.content {
    display: flex;
    flex: 1;
    gap: 20px;
}

aside {
    background-color: rgb(109, 152, 134);
    flex-basis: 200px; /* Lebar aside */
    padding: 10px;
    display: flex;
    flex-direction: column; /* Mengatur elemen aside menjadi tata letak kolom */
    justify-content: center; /* Untuk rata tengah horizontal */
    align-items: center; /* Untuk rata tengah vertikal */
    border-radius:10px 10px 0px 60px;
}

table {
    align-items: center;
    margin-top: 20px; /* Menambahkan margin atas untuk memberi jarak antara figure dan tabel */
    text-align: justify;
}

.main-nav {
    display: flex;
    flex: 1;
    flex-direction: column;
    gap: 20px;
    height: 50%;
}

nav {
    background-color: rgb(109, 152, 134);
    /* flex-basis: 200px; Lebar nav */
    padding: 20px;
    height: 50%;
    justify-content: center; /* Untuk rata tengah horizontal */
    align-items: center; /* Untuk rata tengah vertikal */
    text-align: justify;
    border-radius:10px 10px 0px 0px;
}

main {
    flex-basis: calc(50% - 100px); /* Lebar main, setengah dari main-nav minus setengah dari aside */
    background-color: rgb(109, 152, 134);
    padding: 20px;
    height: 50%;
    justify-content: center; /* Untuk rata tengah horizontal */
    align-items: center; /* Untuk rata tengah vertikal */
    text-align: justify;
    border-radius: 0px 0px 10px 10px;
}

footer {
    background-color: rgb(57, 62, 70);
    color: white;
    text-align: center;
    padding: 10px;
    flex-basis: 200px; /* Lebar footer, sama dengan aside */
    display: flex;
    justify-content: center; /* Untuk rata tengah horizontal */
    align-items: center; /* Untuk rata tengah vertikal */
    border-radius:10px 10px 60px 0px;

}


/* mengatur img */
img{
    width: 280px;
    height: 200px;
    border: 10px solid white;
}

figure{
    background-color: white;
    border: 10px solid white;
}
figcaption{
    background-color: white;
    border: 20px solid white;
    color: black;
    font-family: fantasy;
}
    </style>
</head>
<body>
    <div class="flex">
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
        <div class="content">
            <aside>
                <figure>
                    <img src="https://assets.ayobandung.com/crop/0x0:0x0/750x500/webp/photo/2022/10/13/2729381310.jpeg" alt="Makanan">
                    <center><figcaption>Recipe Toppokki</figcaption></center>
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
            <div class="main-nav">
                <nav>
                    <table>
                        <figcaption>Bahan Toppoki :</figcaption>
                        <br>
                        <tr>
                            <td>300 gram tepung beras</td>
                        </tr>
                        <tr>
                            <td>1 sdm tepung terigu</td>
                        </tr>
                        <tr>
                            <td>3 sdm tepung tapioka</td>
                        </tr>
                        <tr>
                            <td>3 sdt lada</td>
                        </tr>
                        <tr>
                            <td>2 sdt garam</td>
                        </tr>
                        <tr>
                            <td>1/2 sdm margarin</td>
                        </tr>
                        <tr>
                            <td>250 ml air panas mendidih</td>
                        </tr>
                    </table>
                    <br>
                    <table>
                        <figcaption>Bahan Saus:</figcaption>
                        <br>
                        <tr>
                            <td>3 sdm saus sambal</td>
                        </tr>
                        <tr>
                            <td>1 sdm tepung maizena, larutkan dengan air</td>
                        </tr>
                        <tr>
                            <td>1 sdt gula pasir</td>
                        </tr>
                        <tr>
                            <td>1 sdt garam</td>
                        </tr>
                        <tr>
                            <td>1 sdt lada</td>
                        </tr>
                        <tr>
                            <td>1 sdm kornet daging sapi</td>
                        </tr>
                        <tr>
                            <td>2 batang daun bawang</td>
                        </tr>
                        <tr>
                            <td>2 batang daun seledri</td>
                        </tr>
                        <tr>
                            <td>3 siung bawang putih, cincang</td>
                        </tr>
                        <tr>
                            <td>1/2 buah bawang bombay</td>
                        </tr>
                        <tr>
                            <td>1/2 buah tomat merah, haluskan</td>
                        </tr>
                        <tr>
                            <td>wijen secukupnya</td>
                        </tr>
                    </table>
                </nav>
                <main>
                    <table>
                        <figcaption>Langkah-Langkah:</figcaption>
                        <br>
                        <tr>
                            <td>1. Campurkan tepung beras, tepung tapioka, terigu, lada, dan garam.</td>
                        </tr>
                        <tr>
                            <td>2. Aduk rata lalu masukkan air panas perlahan.</td>
                        </tr>
                        <tr>
                            <td>3. Aduk terus sampai adonan jadi kalis dan diamkan selama 5-10 menit.</td>
                        </tr>
                        <tr>
                            <td>4. Cincang bawang putih, seledri, dan daun bawang. Sisihkan.</td>
                        </tr>
                        <tr>
                            <td>5. Ambil segenggam adonan dan bentuk silinder kecil. Potong-potong sekitar 5 cm.</td>
                        </tr>
                        <tr>
                            <td>6. Rebus air sampai mendidih. Masukkan adonan toppoki dan masak sampai mengapung dan pastikan bagian dalamnya sudah matang. Tiriskan.</td>
                        </tr>
                        <tr>
                            <td>7. Panaskan margarin, tumis bawang bombay dan bawang putih sampai harum. Masukkan saus sambal, tomat, maizena cair, garam, ladam, gula, dan kornet.</td>
                        </tr>
                        <tr>
                            <td>8. Aduk sampai rata dan tambahkan seledri.</td>
                        </tr>
                        <tr>
                            <td>3 siung bawang putih, cincang</td>
                        </tr>
                        <tr>
                            <td>9. Aduk lagi sampai semua bahan tercampur rata.</td>
                        </tr>
                        <tr>
                            <td>10. Masukkan toppoki yang sudah ditiriskan sebelumnya dan aduk sampai rata di atas api kecil.</td>
                        </tr>
                        <tr>
                            <td>11. Tambahkan daun bawang dan wijen, aduk lagi.</td>
                        </tr>
                        <tr>
                            <td>12. Siapkan wadah dan sajikan toppoki.</td>
                        </tr>
                    </table>
                </main>
            </div>
            <footer>
                <p>&copy; <b><i>Masak Simple No Ribet! - Pemograman Web</i></b></p>
            </footer>
        </div>
    </div>
</body>
</html>
