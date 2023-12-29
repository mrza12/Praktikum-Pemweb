<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pemweb</title>
    <link rel="stylesheet" href="home.css">
    <style>
        body{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    background-color: rgb(213, 206, 163);
    color: white;
}

/* Mengatur Grid Tampilan Home */
.grid{
    display: grid;
    grid-template-areas: "header header"
                         "nav nav"
                         "main aside"
                         "main aside"
                         "footer footer";
    grid-template-columns: 0.5fr 0.5fr;
    grid-template-rows: 0.2fr 0.5fr 1fr auto;
}

header{
    align-items: center;
    grid-area: header;
    background-color: rgb(57, 62, 70);
    padding: 20px;
    color: white;
    margin-bottom: 10px;
    border-radius: 60px 60px 10px 10px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

nav{
    display: flex;
    justify-content: space-between;
    align-items: center;
    grid-area: nav;
    background-color: rgb(109, 152, 134);
    padding: 20px;
    margin-top: 10px;
    border-radius: 20px 20px 0px 0px;
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


main{
    display: flex;
    align-items: center;
    align-content: center;
    grid-area: main;
    background-color: rgb(57, 62, 70);
    padding-left: 80px;
    color: white;
    margin-bottom: 10px;
    border-radius: 0px 0px 0px 20px;
}

aside{
    display: flex;
    justify-content: space-between;
    align-items: center;
    grid-area: aside;
    background-color: rgb(57, 62, 70);
    padding: 20px;
    margin-bottom: 10px;
    border-radius: 0px 0px 20px 0px;
}

footer{
    display: flex;
    flex-flow: column;
    justify-content: space-between;
    align-items: center;
    grid-area: footer;
    background-color: rgb(109, 152, 134);
    padding: 20px;
    margin-top: 10px;
    border-radius: 10px 10px 60px 60px;
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
    <div class="grid">
        <header>
            <center><h1><i>Masak Simple No Ribet!</i></h1></center>
            <ul>
                <li>
                    <a href="/users" style="color: white;">User</a>
                </li>
                <li>
                    <a href="/home" style="color: white;">Home</a>
                </li>
                <li>
                    <a href="" style="color: white;">Upload Recipe</a>
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
        <nav>
            <h4 style="color: whitesmoke;"> <b><i>Choose The Recipe - click the photos</i></b></h4>
            <ul>
                <li>
                    <a href="/recipe3">
                        <figure>
                            <img src="https://assets.ayobandung.com/crop/0x0:0x0/750x500/webp/photo/2022/10/13/2729381310.jpeg" alt="Makanan">
                            <center><figcaption>Toppokki</figcaption></center>
                        </figure> 
                    </a>
                </li>
                <li>
                    <a href="/recipe1">
                        <figure>
                            <img src="https://assets.ayobandung.com/crop/0x0:0x0/750x500/webp/photo/2022/12/09/616984090.jpeg" alt="Dessert">
                            <center><figcaption>Manggo Sago</figcaption></center>
                        </figure> 
                    </a>
                </li>
                <li>
                    <a href="/recipe2">
                        <figure>
                            <img src="https://imgx.parapuan.co/crop/0x0:0x0/x/photo/2023/03/03/tips-memasak-cepat-es-pisang-ijo-20230303093451.jpg" alt="Drinks">
                            <center><figcaption>Es Pisang Ijo</figcaption></center>
                        </figure>
                    </a>
                </li>
            </ul>
        </nav>
        <main>
            <blockquote>
            <center><h3><i>Masak Simple No Ribet!</i></h3></center>
                <p>"Good Food Is The Foundation Of Genuine Happiness"</p>
            </blockquote>
        </main>
        <aside>
            <figure>
                <img src="https://www.ulrikaekblom.se/assets/C30A8139-1024x683.jpg" alt="home" style="width: 500px; height: 300px;">
                <center><figcaption><i>Masak Simple No Ribet!</i></figcaption></center>
            </figure>   
        </aside>
        <footer>
                <p>&copy; <b><i>Masak Simple No Ribet! - Pemograman Web</i></b></p>
        </footer>
    </div>
</body>
</html>