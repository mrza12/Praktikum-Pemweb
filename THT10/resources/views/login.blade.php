<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
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
    <div class="form">
    <form id="loginForm">
        <h1>Login</h1>

        <input type="text" id="username" placeholder="Username">
        <input type="password" id="password" placeholder="Password">

        <button type="submit">Submit</button>
        <button type="submit"><a href="/">Back</a></button>
    </form>
    </div>
<script>
    const loginForm = document.getElementById("loginForm");
    loginForm.addEventListener("submit", (e) => {
        e.preventDefault();

        // Dapatkan nilai input
        const username = document.getElementById("username").value; 
        const password = document.getElementById("password").value;

        if(username.length === 0 || password.length === 0) {
        alert("Pastikan username dan password diisi");
        return;
        }
        window.location.href = "/"; 
    });
  </script>
</body>
</html>