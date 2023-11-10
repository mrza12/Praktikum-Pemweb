// Inisialisasi array untuk menyimpan status sel
var cells = new Array(9);
var flag = 1; // Untuk mengatur giliran pemain (X atau 0)

// Inisialisasi array sel dan tombol
var cells = ["b1", "b2", "b3", "b4", "b5", "b6", "b7", "b8", "b9"];

for (var i = 0; i < 9; i++) {
    cells[i] = "";
}

// Fungsi yang dipanggil ketika pemain mengklik sebuah sel
function makeMove(index) {
    var cell = document.getElementById("b" + (index + 1));
    if (cells[index] === "" && flag === 1) {
        cell.value = "X";
        cells[index] = "X";
        cell.disabled = true;
        flag = 0;
    } else if (cells[index] === "" && flag === 0) {
        cell.value = "0";
        cells[index] = "0";
        cell.disabled = true;
        flag = 1;
    }
    checkWinner();
}

function checkWinner() {
    var winningCombinations = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8], // Menang secara horizontal
        [0, 3, 6], [1, 4, 7], [2, 5, 8], // Menang secara vertikal
        [0, 4, 8], [2, 4, 6] // Menang secara diagonal
    ];

    for (var i = 0; i < winningCombinations.length; i++) {
        var [a, b, c] = winningCombinations[i];
        if (cells[a] !== "" && cells[a] === cells[b] && cells[a] === cells[c]) {
            // Ada pemenang
            highlightWinnerCells(a, b, c);
            if (cells[a] === "X") {
                document.getElementById("print").innerHTML = "Player X won";
            } else if (cells[a] === "0") {
                document.getElementById("print").innerHTML = "Player 0 won";
            }
            disableAllCells();
            return;
        }
    }

    // Jika tidak ada pemenang dan semua sel terisi (seri)
    if (cells.every(cell => cell !== "")) {
        document.getElementById("print").innerHTML = "Match Tie";
        disableAllCells();
    }
}

// Fungsi untuk menonaktifkan semua sel setelah permainan selesai
function disableAllCells() {
    for (var i = 0; i < 9; i++) {
        var cell = document.getElementById("b" + (i + 1));
        cell.disabled = true;
    }
}

// Fungsi untuk menyorot sel-sel yang menang
function highlightWinnerCells(a, b, c) {
    document.getElementById("b" + (a + 1)).style.color = "red";
    document.getElementById("b" + (b + 1)).style.color = "red";
    document.getElementById("b" + (c + 1)).style.color = "red";
}


// Fungsi untuk mereset permainan
function resetGame() {
    // Reset permainan dengan menghapus isi sel dan mengaktifkan sel
    cells.fill("");
    for (var i = 0; i < 9; i++) {
        var cell = document.getElementById("b" + (i + 1));
        cell.value = "";
        cell.disabled = false;
    }
    flag = 1;
    document.getElementById("print").innerHTML = "Player X Turn"; // Mengatur giliran pemain awal
}

// Fungsi untuk mengaktifkan atau menonaktifkan mode gelap
function toggleDarkMode() {
    var body = document.body;
    body.classList.toggle("dark-mode");
}