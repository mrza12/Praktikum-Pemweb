<!-- Menggunakan grid-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pemweb</title>
    <link rel="stylesheet" href="grid.css">
    <style>
        body{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    background-color: rgb(213, 206, 163);
    color: white;
}

/* Mengatur Grid Tampilan Home */
.grid{
    display: grid;
    grid-template-areas: "header header header"
                         "aside main nav "
                         "aside footer footer";
    grid-template-columns: 0.3fr 1fr auto;
    grid-template-rows: 0.2fr 1fr 0.5fr;
    gap: 20px;
}
/* Mengatur Header */
header {
    align-items: center;
    grid-area: header;
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


/* Mengatur Aside */

aside{
    display: grid; /* Menggunakan CSS Grid untuk elemen aside */
    grid-template-rows: auto auto; /* Menentukan dua baris, masing-masing mengikuti konten (auto) */
    grid-area: aside;
    background-color: rgb(109, 152, 134);
    padding: 20px;
    border-radius: 10px 0px 0px 60px;
}


/* Mengatur nav dan main */
main{
    align-items: center;
    grid-area: main;
    background-color: rgb(109, 152, 134);
    padding: 20px;
}

nav{
    align-items: center;
    grid-area: nav;
    background-color: rgb(109, 152, 134);
    padding: 20px;
    border-radius: 0px 10px 0px 0px; 
}

/* Mengatur Footer */
footer{
    grid-area: footer;
    background-color: rgb(57, 62, 70);
    padding: 50px;
    border-radius: 0px 0px 60px 0px; 
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

#kotak-komentar{
    float: inline-end;
    margin-left: 50px;
    padding: 10px;
}

.form{
    float: inline-start;
    margin-right: 100px;
}

.cc{
    clear: both;
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
                <img src="https://assets.ayobandung.com/crop/0x0:0x0/750x500/webp/photo/2022/12/09/616984090.jpeg" alt="Dessert">
                <center><figcaption>Manggo Sago</figcaption></center>
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
                <figcaption>Bahan Manggo-Sago :</figcaption>
                <br>
                <tr>
                    <td>2 buah mangga arum manis matang</td>
                </tr>
                <tr>
                    <td>Sagu mutiara 100 gr</td>
                </tr>
                <tr>
                    <td>Susu cair evaporasi 1 kaleng</td>
                </tr>
                <tr>
                    <td>25 gram kental manis (atau sesuai selera)</td>
                </tr>
                <tr>
                    <td>Puding Mangga</td>
                </tr>
            </table>
            <br>
        </nav>
        <main>
            <table>
                <figcaption>Langkah-Langkah:</figcaption>
                <br>
                <tr>
                    <td>1. Siapkan semua bahan yang dibutuhkan, kemudian masak sagu mutiara dan puding.</td>
                </tr>
                <tr>
                    <td>2. kemudian, satu buah mangga di jus halus dan satu buah mangga lagi di potong dadu.</td>
                </tr>
                <tr>
                    <td>3. Puding yang telah jadi tidak lupa juga di pototng dadu.</td>
                </tr>
                <tr>
                    <td>4. selanjutnya, Siapkan wadah besar untuk membuat manggo sago.</td>
                </tr>
                <tr>
                    <td>5. Masukkan semua bahan yang telah disiapkan kecuali jus mangga.</td>
                </tr>
                <tr>
                    <td>6. Aduk adonan tersebut.</td>
                </tr>
                <tr>
                    <td>7. kemudian siapkan wadh yang lebih kecil dan taungkan jus mangganya.</td>
                </tr>
                <tr>
                    <td>8. Terakhir tinggal masukkan adonan manggo sago ke wadah kecil yang berisi jus dan simpan ke dalam kulkas.</td>
                </tr>
                <tr>
                    <td>9. Manggo Sago siap di hidangkan</td>
                </tr>
            </table>
        </main>
        <footer>
            <div class="form">
            </table>
            <form onsubmit="hasilKomentar(); return false;">
                <tr>
                <td>
                <label for="email">Email : </label>
                <input type="text" id="email" placeholder="email@example.com">  
                </td>     
                
                <td>
                <label for="komentar">Komentar:</label>
                <textarea id="komentar"></textarea>        
                </td>  
                <br>   
                <button type="submit">Kirim</button>
                 </tr>
                 
                </form>
                </table>
            </div>

       <script>
            var comments = [];

            function hasilKomentar() {

            var email = document.getElementById("email").value;
            var comment = document.getElementById("komentar").value;
            
            var comment = {
                email: email,
                text: comment
            };

            comments.push(comment);

            displayComments();

            document.getElementById("email").value = "";
            document.getElementById("komentar").value = "";

            }

            function displayComments() {

            document.getElementById("kotak-komentar").innerHTML = "";

            for(var i = 0; i < comments.length; i++) {

                var div = document.createElement("div");
                var emailElem = document.createElement("p");
                var textElem = document.createElement("p");

                emailElem.innerHTML = "<b>" + comments[i].email + "</b>";
                textElem.innerHTML = comments[i].text;

                div.appendChild(emailElem);
                div.appendChild(textElem);
                document.getElementById("kotak-komentar").appendChild(div);
            }
        }
        </script>

        <div id="kotak-komentar"></div>

        <div class="cc">
        <p>&copy; <b><i>Masak Simple No Ribet! - Pemograman Web</i></b></p>
        </div>
        </footer>
    </div>
</body>
</html>